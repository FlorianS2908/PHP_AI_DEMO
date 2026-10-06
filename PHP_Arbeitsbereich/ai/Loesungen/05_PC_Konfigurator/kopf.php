<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($seitentitel) ?> · PHP</title>
<link rel="stylesheet" href="style.css">
</head>
<body class="<?= e($app['theme']) ?>">
<div class="topbar"><span>PHP · Formularlabor</span><span>Aufgabe <?= e($app['nummer']) ?> · Musterlösung</span></div>
<main>
<header class="hero"><p class="eyebrow"><?= e($app['short']) ?></p>
<h1><?= icon($app['icon']) ?><?= e($app['title']) ?></h1>
<p><?= e($app['intro']) ?></p></header>
