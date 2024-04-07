#!/usr/bin/env php

<?php
require 'vendor/autoload.php';

use \GuzzleHttp\Client;
use Pedro\BuscadorDeCursos\Buscador;
use Symfony\Component\DomCrawler\Crawler;



$client = new Client(['base_uri' => 'https://www.alura.com.br', 'verify' => false]);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');

foreach ($cursos as $curso) {
   exibeMenssagem($curso);
}