<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;

/**
 * @var yii\web\View $this
 * @var backend\models\SliderHomepage $model
 * @var yii\widgets\ActiveForm $form
 */

?>

<div class="box box-info">
    <div class="box-body">
        <?php $form = ActiveForm::begin([
                'id' => 'SliderHomepage',
                'layout' => 'horizontal',
                'enableClientValidation' => false,
                'errorSummaryCssClass' => 'error-summary alert alert-error',
                'options' => ['enctype' => 'multipart/form-data'],
            ]
        );
        ?>
        <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'kalimat')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'background')->widget(\kartik\file\FileInput::className(), [
            'options' => ['accept' => 'image/*'],
            'pluginOptions' => [
                'allowedFileExtensions' => ['jpg', 'png', 'jpeg', 'gif', 'bmp'],
                'maxFileSize' => 1500,
            ],
        ]) ?>
        <?php
        if ($model->background != null){
            ?>
            <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3">
                    <img width="500px" height="150px" src="<?= Yii::$app->urlManagerSlider->baseUrl.'/'.$model->background?>">
                </div>
            </div>
        <?php } ?>

        <hr/>
        <?php echo $form->errorSummary($model); ?>
        <div class="row">
            <div class="col-md-offset-3 col-md-10">
                <?= Html::submitButton('<i class="fa fa-save"></i> Simpan', ['class' => 'btn btn-success']); ?>
                <?= Html::a('<i class="fa fa-chevron-left"></i> Kembali', ['index'], ['class' => 'btn btn-default']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>