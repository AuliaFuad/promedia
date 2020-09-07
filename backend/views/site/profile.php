<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;

/**
 * @var yii\web\View $this
 * @var common\models\User $model
 * @var backend\models\DataDiri $modelDiri
 */

$this->title = 'Profile';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud">
    <div class="row">

        <div class="col-md-12">
            <div class="box box-primary">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2> Edit Profile </h2>
                    </div>

                    <div class="panel-body">

                        <div class="user-form">

                            <?php $form = ActiveForm::begin([
                                    'id' => 'Data-Diri',
                                    'layout' => 'horizontal',
                                    'enableClientValidation' => false,
                                    'errorSummaryCssClass' => 'error-summary alert alert-error',
                                    'options' => ['enctype' => 'multipart/form-data'],
                                ]
                            );
                            ?>

                            <div class="">
                                <?php $this->beginBlock('main'); ?>

                                <p>
                                    <input type="tel" hidden/> <!-- disable chrome autofill -->
                                    <?= $form->field($model, 'username')->textInput(['readOnly'=>true,'maxlength' => true]) ?>
                                    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'password_hash')->passwordInput(['maxlength' => true, 'autocomplete' => "off"]) ?>


                                </p>
                                <?php $this->endBlock(); ?>

                                <?=
                                Tabs::widget(
                                    [
                                        'encodeLabels' => false,
                                        'items' => [[
                                            'label' => 'User',
                                            'content' => $this->blocks['main'],
                                            'active' => true,
                                        ],]
                                    ]
                                );
                                ?>
                                <hr/>
                                <?php echo $form->errorSummary($model); ?>
                                <?= Html::submitButton(
                                    '<span class="glyphicon glyphicon-check"></span> ' .
                                    ($model->isNewRecord ? 'Create' : 'Save'),
                                    [
                                        'id' => 'save-' . $model->formName(),
                                        'class' => 'btn btn-success'
                                    ]
                                );
                                ?>

                                <?php ActiveForm::end(); ?>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>