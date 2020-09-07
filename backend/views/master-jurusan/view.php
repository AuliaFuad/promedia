<?php

use dmstr\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use dmstr\bootstrap\Tabs;

/**
 * @var yii\web\View $this
 * @var backend\models\MasterJurusan $model
 */

$this->title = 'Master Jurusan ' . $model->nama_jurusan;
$this->params['breadcrumbs'][] = ['label' => 'Master Jurusan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->nama_jurusan, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('cruds', 'View');
?>
<div class="giiant-crud master-jurusan-view">

    <!-- menu buttons -->
    <p class='pull-left'>
        <?= Html::a('<span class="glyphicon glyphicon-pencil"></span> ' . Yii::t('cruds', 'Edit'), ['update', 'id' => $model->id], ['class' => 'btn btn-info']) ?>
        <?= Html::a('<span class="glyphicon glyphicon-plus"></span> ' . Yii::t('cruds', 'Tambah Baru'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <p class="pull-right">
        <?= Html::a('<span class="glyphicon glyphicon-list"></span> ' . Yii::t('cruds', 'Daftar Master Jurusan'), ['index'], ['class' => 'btn btn-default']) ?>
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
            <?php $this->beginBlock('backend\models\MasterJurusan'); ?>

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                 //   'id',
                    'nama_jurusan',
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



            <?php $this->beginBlock('Akademik'); ?>
            <div style='position: relative'>
                <div style='position:absolute; right: 0px; top 0px;'>
                    <?= Html::a(
                        '<span class="glyphicon glyphicon-list"></span> ' . Yii::t('cruds', 'List All') . ' Akademiks',
                        ['akademik/index'],
                        ['class' => 'btn text-muted btn-xs']
                    ) ?>
                    <?= Html::a(
                        '<span class="glyphicon glyphicon-plus"></span> ' . Yii::t('cruds', 'Tambah Baru') . ' Akademik',
                        ['akademik/create', 'Akademik' => ['jurusan' => $model->id]],
                        ['class' => 'btn btn-success btn-xs']
                    ); ?>
                </div>
            </div><?php Pjax::begin(['id' => 'pjax-Akademiks', 'enableReplaceState' => false, 'linkSelector' => '#pjax-Akademiks ul.pagination a, th a', 'clientOptions' => ['pjax:success' => 'function(){alert("yo")}']]) ?>
            <?= '<div class="table-responsive">'
            . \yii\grid\GridView::widget([
                'layout' => '{summary}{pager}<br/>{items}{pager}',
                'dataProvider' => new \yii\data\ActiveDataProvider([
                    'query' => $model->getAkademiks(),
                    'pagination' => [
                        'pageSize' => 20,
                        'pageParam' => 'page-akademiks',
                    ]
                ]),
                'pager' => [
                    'class' => yii\widgets\LinkPager::className(),
                    'firstPageLabel' => Yii::t('cruds', 'First'),
                    'lastPageLabel' => Yii::t('cruds', 'Last')
                ],
                'columns' => [
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'template' => '{view} {update}',
                        'contentOptions' => ['nowrap' => 'nowrap'],
                        'urlCreator' => function ($action, $model, $key, $index) {
                            // using the column name as key, not mapping to 'id' like the standard generator
                            $params = is_array($key) ? $key : [$model->primaryKey()[0] => (string)$key];
                            $params[0] = 'akademik' . '/' . $action;
                            $params['Akademik'] = ['jurusan' => $model->primaryKey()[0]];
                            return $params;
                        },
                        'buttons' => [

                        ],
                        'controller' => 'akademik'
                    ],
                    'nim',
                    'batch',
                ]
            ])
            . '</div>' ?>
            <?php Pjax::end() ?>
            <?php $this->endBlock() ?>


            <?= Tabs::widget(
                [
                    'id' => 'relation-tabs',
                    'encodeLabels' => false,
                    'items' => [[
                        'label' => '<b class=""># ' . $model->id . '</b>',
                        'content' => $this->blocks['backend\models\MasterJurusan'],
                        'active' => true,
                    ], [
                        'content' => $this->blocks['Akademik'],
                        'label' => '<small>Akademik <span class="badge badge-default">' . count($model->getAkademiks()->asArray()->all()) . '</span></small>',
                        'active' => false,
                    ],]
                ]
            );
            ?>
        </div>
    </div>
</div>
