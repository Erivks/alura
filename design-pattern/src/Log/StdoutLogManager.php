<?php

namespace Src\Log;

class StdoutLogManager extends LogManager {
    public function criarLogWritter(): LogWritter {
        return new StdoutLog();
    }
}