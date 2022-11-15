<?php
    namespace App\Model;

    require_once __DIR__ . "/model/Pergunta.php";

    $pergunta = new Pergunta("teste", "done");

    echo($pergunta->getPergunta());