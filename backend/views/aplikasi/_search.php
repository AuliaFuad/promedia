<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var backend\models\AplikasiSearch $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="aplikasi-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

    		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'nama_app') ?>

		<?= $form->field($model, 'link_fb') ?>

		<?= $form->field($model, 'link_twitter') ?>

		<?= $form->field($model, 'link_linkedin') ?>

		<?php // echo $form->field($model, 'link_instagram') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('cruds', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('cruds', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
