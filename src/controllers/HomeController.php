<?php

namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index() {
        $nome = 'Jão';
        $idade = '94';
        $profissao = 'Engenheiro de Software';

        $posts = [
            ['Titulo' => 'Titulo de Teste 1', 'Corpo' => 'Corpo de Teste 1'],
            ['Titulo' => 'Titulo de Teste 2', 'Corpo' => 'Corpo de Teste 2'],
            ['Titulo' => 'Titulo de Teste 3', 'Corpo' => 'Corpo de Teste 3'],
            ['Titulo' => 'Titulo de Teste 4', 'Corpo' => 'Corpo de Teste 4'],
            ['Titulo' => 'Titulo de Teste 5', 'Corpo' => 'Corpo de Teste 5'],
        ];

        $this->render('home', [
            'nome'  => $nome,
            'idade' => $idade,
            'profissao' => $profissao,
            'posts' => $posts
        ]);
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

    public function fotos() {
        $this->render('fotos');
    }

    public function foto($param) {
        echo 'Acessando a foto ' . $param['id'] . ' aqui!';
    }
}
