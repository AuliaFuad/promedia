<?php

use dmstr\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use dmstr\bootstrap\Tabs;

/**
 * @var yii\web\View $this
 * @var backend\models\SliderHomepage $model
 */

$this->title = 'Slider Homepage ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Slider Homepage', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('cruds', 'View');
?>
<div class="giiant-crud slider-homepage-view">

    <!-- menu buttons -->
    <p class='pull-left'>
        <?= Html::a('<span class="glyphicon glyphicon-pencil"></span> ' . Yii::t('cruds', 'Edit'), ['update', 'id' => $model->id], ['class' => 'btn btn-info']) ?>
        <?= Html::a('<span class="glyphicon glyphicon-plus"></span> ' . Yii::t('cruds', 'Tambah Baru'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <p class="pull-right">
        <?= Html::a('<span class="glyphicon glyphicon-list"></span> ' . Yii::t('cruds', 'Daftar Slider Homepage'), ['index'], ['class' => 'btn btn-default']) ?>
    </p>

    <div class="clearfix"></div>

    <!-- flash message -->
    <?php if (\Yii::$app->session->getFlash('deleteError') !== null) : ?>
        <span class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <?= \Yii::$app->session->getFlash('deleteError') ?>
        </span>
    <?php endif; ?>

    <div class="box box-info">
        <div class="box-body">
            <?php $this->beginBlock('backend\models\SliderHomepage'); ?>

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'judul',
                    'kalimat',
                    [
                        'format' => 'html',
                        'attribute' => 'background',
                        'value' => '<img width="500px" height="150px" src="'.Yii::$app->urlManagerSlider->baseUrl."/".'' . $model->background . '"></span>'

                    ],

                ],
            ]); ?>

            <hr/>

            <?= Html::a('<span class="glyphicon glyphicon-trash"></span> ' . Yii::t('cruds', 'Delete'), ['delete', 'id' => $model->id],
                [
                    'class' => 'btn btn-danger',
                    'data-confirm' => '' . Yii::t('cruds', 'Are you sure to delete this item?') . '',
                    'data-method' => 'post',
                ]); ?>
            <?php $this->endBlock(); ?>



            <?= Tabs::widget(
                [
                    'id' => 'relation-tabs',
                    'encodeLabels' => false,
                    'items' => [[
                        'label' => '<b class=""># ' . $model->id . '</b>',
                        'content' => $this->blocks['backend\models\SliderHomepage'],
                        'active' => true,
                    ],]
                ]
            );
            ?>
        </div>
    </div>
</div>
