<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var backend\models\PerusahaanSatuSearch $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="perusahaan-satu-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

    		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'id_usaha') ?>

		<?= $form->field($model, 'id_bisnis') ?>

		<?= $form->field($model, 'nama_perusahaan') ?>

		<?php // echo $form->field($model, 'tahun_berdiri') ?>

		<?php // echo $form->field($model, 'alamat_perusahaan') ?>

		<?php // echo $form->field($model, 'no_telp_kantor') ?>

		<?php // echo $form->field($model, 'email_kantor') ?>

		<?php // echo $form->field($model, 'deskripsi_singkat') ?>

		<?php // echo $form->field($model, 'deskripsi_panjang') ?>

		<?php // echo $form->field($model, 'portofolio_perusahaan') ?>

		<?php // echo $form->field($model, 'foto_dokumentasi') ?>

		<?php // echo $form->field($model, 'upload_company_profile') ?>

		<?php // echo $form->field($model, 'id_user') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('cruds', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('cruds', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
