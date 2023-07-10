<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;

class PerfilController
{
    public function homepage(){
        return new Response('Olas, eu sou a resposta');
    }
}
