<?php

use dmstr\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use dmstr\bootstrap\Tabs;

/**
 * @var yii\web\View $this
 * @var backend\models\Bisnis $model
 */

$this->title = 'Bisnis ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Bisnis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('cruds', 'View');
?>
<div class="giiant-crud bisnis-view">

    <!-- menu buttons -->
    <p class='pull-left'>
        <?= Html::a('<span class="glyphicon glyphicon-pencil"></span> ' . Yii::t('cruds', 'Edit'), ['update', 'id' => $model->id], ['class' => 'btn btn-info']) ?>
        <?= Html::a('<span class="glyphicon glyphicon-plus"></span> ' . Yii::t('cruds', 'Tambah Baru'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <p class="pull-right">
        <?= Html::a('<span class="glyphicon glyphicon-list"></span> ' . Yii::t('cruds', 'Daftar Bisnis'), ['index'], ['class' => 'btn btn-default']) ?>
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
            <?php $this->beginBlock('backend\models\Bisnis'); ?>

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'nama_tahapan_bisnis',
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



            <?php $this->beginBlock('PerusahaanSatuses'); ?>
            <div style='position: relative'>
                <div style='position:absolute; right: 0px; top 0px;'>
                    <?= Html::a(
                        '<span class="glyphicon glyphicon-list"></span> ' . Yii::t('cruds', 'List All') . ' Perusahaan Satuses',
                        ['perusahaan-satu/index'],
                        ['class' => 'btn text-muted btn-xs']
                    ) ?>
                    <?= Html::a(
                        '<span class="glyphicon glyphicon-plus"></span> ' . Yii::t('cruds', 'Tambah Baru') . ' Perusahaan Satus',
                        ['perusahaan-satu/create', 'PerusahaanSatus' => ['id_bisnis' => $model->id]],
                        ['class' => 'btn btn-success btn-xs']
                    ); ?>
                </div>
            </div><?php Pjax::begin(['id' => 'pjax-PerusahaanSatuses', 'enableReplaceState' => false, 'linkSelector' => '#pjax-PerusahaanSatuses ul.pagination a, th a', 'clientOptions' => ['pjax:success' => 'function(){alert("yo")}']]) ?>
            <?= '<div class="table-responsive">'
            . \yii\grid\GridView::widget([
                'layout' => '{summary}{pager}<br/>{items}{pager}',
                'dataProvider' => new \yii\data\ActiveDataProvider([
                    'query' => $model->getPerusahaanSatuses(),
                    'pagination' => [
                        'pageSize' => 20,
                        'pageParam' => 'page-perusahaansatuses',
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
                            $params[0] = 'perusahaan-satu' . '/' . $action;
                            $params['PerusahaanSatu'] = ['id_bisnis' => $model->primaryKey()[0]];
                            return $params;
                        },
                        'buttons' => [

                        ],
                        'controller' => 'perusahaan-satu'
                    ],
                    'id',
// generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::columnFormat
                    [
                        'class' => yii\grid\DataColumn::className(),
                        'attribute' => 'id_usaha',
                        'value' => function ($model) {
                            if ($rel = $model->getIdUsaha()->one()) {
                                return Html::a($rel->id, ['usaha/view', 'id' => $rel->id,], ['data-pjax' => 0]);
                            } else {
                                return '';
                            }
                        },
                        'format' => 'raw',
                    ],
                    'logo_perusahaan',
                    'tahun_berdiri',
                    'alamat_perusahaan',
                    'no_telp_kantor',
                    'email_kantor:email',
                    'deskripsi_singkat:ntext',
                    'deskripsi_panjang:ntext',
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
                        'content' => $this->blocks['backend\models\Bisnis'],
                        'active' => true,
                    ], [
                        'content' => $this->blocks['PerusahaanSatuses'],
                        'label' => '<small>Perusahaan Satuses <span class="badge badge-default">' . count($model->getPerusahaanSatuses()->asArray()->all()) . '</span></small>',
                        'active' => false,
                    ],
                    ]
                ]
            );
            ?>
        </div>
    </div>
</div>
