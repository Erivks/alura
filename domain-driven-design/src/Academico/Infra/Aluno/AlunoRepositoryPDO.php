<?php

namespace Src\Academico\Infra\Aluno;

use Src\Academico\Dominio\Aluno\Aluno;
use Src\Academico\Dominio\Aluno\AlunoRepository;
use Src\Shared\Dominio\CPF;

class AlunoRepositoryPDO implements AlunoRepository {
    
    private \PDO $conexao;
    
    public function __construct(\PDO $conexao)
    {   
        $this->conexao = $conexao;
    }

    public function addAluno(Aluno $aluno): void
    {
        $sql    = "INSERT INTO alunos VALUES (:cpf, :nome, :email)";
        $stmt   = $this->conexao->prepare($sql);
        $stmt->bindValue("cpf", $aluno->getCpf());    
        $stmt->bindValue("nome", $aluno->getNome());    
        $stmt->bindValue("email", $aluno->getEmail());
        $stmt->execute();

        $sql    = "INSERT INTO telefones VALUES (:ddd, :numero, :cpf_aluno)";
        $stmt   = $this->conexao->prepare($sql);
        $stmt->bindValue("cpf_aluno", $aluno->getCpf());

        /** @var Telefone $telefone */
        foreach ($aluno->getTelefone() as $telefone) {
            $stmt->bindValue("ddd", $telefone->getDdd());    
            $stmt->bindValue("numero", $telefone->getNumero());    
            $stmt->execute();
        }
    }

    public function getByCpf(Cpf $cpf): Aluno
    {
        $sql = '
            SELECT cpf, nome, email, ddd, numero as numero_telefone
              FROM alunos
         LEFT JOIN telefones ON telefones.cpf_aluno = alunos.cpf
            WHERE alunos.cpf = ?;
        ';
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, (string) $cpf);
        $stmt->execute();

        $dadosAluno = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        if (count($dadosAluno) === 0) {
            throw new \Exception($cpf);
        }

        return $this->mapearAluno($dadosAluno);
    }

    private function mapearAluno(array $dadosAluno): Aluno
    {
        $primeiraLinha = $dadosAluno[0];
        $aluno = Aluno::comCpfEmailENome($primeiraLinha['cpf'], $primeiraLinha['email'], $primeiraLinha['nome']);
        $telefones = array_filter($dadosAluno, fn ($linha) => $linha['ddd'] !== null && $linha['numero_telefone'] !== null);
        foreach ($telefones as $linha) {
            $aluno->addTelefone($linha['ddd'], $linha['numero_telefone']);
        }

        return $aluno;
    }

    public function getAll(): array
    {
        $sql = "SELECT cpf, nome, email, ddd, numero as numero_telefone
              FROM alunos
              LEFT JOIN telefones ON telefones.cpf_aluno = alunos.cpf;";
        $stmt = $this->conexao->query($sql);

        $listaDadosAlunos = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        $alunos = [];

        foreach ($listaDadosAlunos as $dadosAluno) {
            if (!array_key_exists($dadosAluno['cpf'], $alunos)) {
                $alunos[$dadosAluno['cpf']] = Aluno::comCpfEmailENome(
                    $dadosAluno['cpf'],
                    $dadosAluno['email'],
                    $dadosAluno['nome'],
                );
            }

            ($alunos[$dadosAluno['cpf']])->addTelefone($dadosAluno['ddd'], $dadosAluno['numero_telefone']);
        }

        return array_values($alunos);
    }
}