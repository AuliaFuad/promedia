<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var backend\models\DataDiriSearch $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="data-diri-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

    		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'id_user') ?>

		<?= $form->field($model, 'nama_lengkap') ?>

		<?= $form->field($model, 'nama_panggilan') ?>

		<?= $form->field($model, 'foto') ?>

		<?php // echo $form->field($model, 'tempat_lahir') ?>

		<?php // echo $form->field($model, 'alamat_tinggal') ?>

		<?php // echo $form->field($model, 'no_hp') ?>

		<?php // echo $form->field($model, 'email') ?>

		<?php // echo $form->field($model, 'akun_fb') ?>

		<?php // echo $form->field($model, 'akun_ig') ?>

		<?php // echo $form->field($model, 'akun_li') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('cruds', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('cruds', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
