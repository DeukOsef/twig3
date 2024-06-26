<?php

require_once __DIR__ . '/../config/twig.php';

$name = "wilders";
echo $twig->render('details.html.twig');
