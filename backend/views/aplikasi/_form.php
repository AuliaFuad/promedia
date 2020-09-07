<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;

/**
 * @var yii\web\View $this
 * @var backend\models\Aplikasi $model
 * @var yii\widgets\ActiveForm $form
 */

?>

<div class="box box-info">
    <div class="box-body">
        <?php $form = ActiveForm::begin([
                'id' => 'Aplikasi',
                'layout' => 'horizontal',
                'enableClientValidation' => true,
                'errorSummaryCssClass' => 'error-summary alert alert-error'
            ]
        );
        ?>

        <?= $form->field($model, 'nama_app')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'link_fb')->widget(\yii\widgets\MaskedInput::className(), [
            'name' => 'input-35',
            'clientOptions' => [
                'alias' => 'url',
            ],
        ]) ?>
        <?= $form->field($model, 'link_twitter')->widget(\yii\widgets\MaskedInput::className(), [
            'name' => 'input-35',
            'clientOptions' => [
                'alias' => 'url',
            ],
        ]) ?>
        <?= $form->field($model, 'link_linkedin')->widget(\yii\widgets\MaskedInput::className(), [
            'name' => 'input-35',
            'clientOptions' => [
                'alias' => 'url',
            ],
        ]) ?>
        <?= $form->field($model, 'link_instagram')->widget(\yii\widgets\MaskedInput::className(), [
            'name' => 'input-35',
            'clientOptions' => [
                'alias' => 'url',
            ],
        ]) ?>
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