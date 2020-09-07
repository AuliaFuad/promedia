<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var backend\models\BeritaSearch $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="berita-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

    		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'id_kategori') ?>

		<?= $form->field($model, 'judul') ?>

		<?= $form->field($model, 'isi_berita') ?>

		<?= $form->field($model, 'tanggal') ?>

		<?php // echo $form->field($model, 'foto') ?>

		<?php // echo $form->field($model, 'id_user') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('cruds', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('cruds', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
