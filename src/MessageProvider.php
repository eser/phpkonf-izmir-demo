<?php

namespace PHPKonf;

class MessageProvider {
    public function validate($message)
    {
        return strtoupper($message);
    }
}
