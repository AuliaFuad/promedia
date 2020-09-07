<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;

/**
 * @var yii\web\View $this
 * @var backend\models\User $model
 * @var yii\widgets\ActiveForm $form
 */

?>

<div class="box box-info">
    <div class="box-body">
        <?php $form = ActiveForm::begin([
                'id' => 'User',
                'layout' => 'horizontal',
                'enableClientValidation' => false,
                'errorSummaryCssClass' => 'error-summary alert alert-error'
            ]
        );
        ?>
        <?= $form->field($model, 'type', ['options' =>
            ['id' => 'type_u',
                'class' => 'form-group field-user-type']
        ])->dropDownList(\yii\helpers\ArrayHelper::map(backend\models\MasterType::find()->all(), 'id', 'nama_type'), ['prompt' => 'Pilih Type User']) ?>
        <?= $form->field($model, 'username',['options' => ['id' => 'username','class' =>'form-group field-username']])->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'password_hash')->passwordInput(['maxlength' => true])->label('Password') ?>
        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'status')->hiddenInput(['value' => 10])->label(false) ?>
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