<?php

namespace App\Model;

class Pergunta
{
    private $pergunta;
    private $status;

    function __construct($pergunta = null, $status = null)
    {
        $this->setPergunta($pergunta);
        $this->setStatus($status);
    }

    public function getPergunta()
    {
        return $this->pergunta;
    }

    public function setPergunta($pergunta)
    {
        $this->pergunta = $pergunta;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }
}
