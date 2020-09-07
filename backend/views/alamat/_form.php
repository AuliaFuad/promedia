<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;

/**
 * @var yii\web\View $this
 * @var backend\models\Alamat $model
 * @var yii\widgets\ActiveForm $form
 */

?>

<div class="box box-info">
    <div class="box-body">
        <?php $form = ActiveForm::begin([
                'id' => 'Alamat',
                'layout' => 'horizontal',
                'enableClientValidation' => true,
                'errorSummaryCssClass' => 'error-summary alert alert-error'
            ]
        );
        ?>
        <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'no_kantor')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'email')->widget(\yii\widgets\MaskedInput::className(),[
            'name' => 'input-36',
            'clientOptions' => [
                'alias' =>  'email'
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