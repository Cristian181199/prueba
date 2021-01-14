<?php

use yii\bootstrap4\Html;
use yii\helpers\Url;

?>

<?= Html::beginForm(['libros/create']); ?>

    <?= Html::label('Titulo', 'titulo'); ?>
    <?= Html::textInput('titulo', null, ['id' => 'titulo']); ?>

    <?= Html::label('Autor', 'autor'); ?>
    <?= Html::textInput('autor', null, ['id' => 'autor']); ?>

<?= Html::endForm(); ?>