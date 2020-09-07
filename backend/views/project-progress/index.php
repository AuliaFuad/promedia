<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/**
* @var yii\web\View $this
* @var yii\data\ActiveDataProvider $dataProvider
* @var backend\models\ProjectProgressSearch $searchModel
*/

$this->title = Yii::t('cruds', 'Project Progress');
$this->params['breadcrumbs'][] = $this->title;
?>

<p>
    <?= Html::a('<i class="fa fa-plus"></i> Tambah Baru', ['create'], ['class' => 'btn btn-success']) ?>
</p>


    <?php \yii\widgets\Pjax::begin(['id'=>'pjax-main', 'enableReplaceState'=> false, 'linkSelector'=>'#pjax-main ul.pagination a, th a', 'clientOptions' => ['pjax:success'=>'function(){alert("yo")}']]) ?>

    <div class="box box-info">
        <div class="box-body">
            <div class="table-responsive">
                <?= GridView::widget([
                'layout' => '{summary}{pager}{items}{pager}',
                'dataProvider' => $dataProvider,
                'pager'        => [
                'class'          => yii\widgets\LinkPager::className(),
                'firstPageLabel' => Yii::t('cruds', 'First'),
                'lastPageLabel'  => Yii::t('cruds', 'Last')                ],
                'filterModel' => $searchModel,
                'tableOptions' => ['class' => 'table table-striped table-bordered table-hover'],
                'headerRowOptions' => ['class'=>'x'],
                'columns' => [

                \app\components\ActionButton::getButtons(),

			// generated by schmunk42\giiant\generators\crud\providers\core\RelationProvider::columnFormat
[
    'class' => yii\grid\DataColumn::className(),
    'attribute' => 'id_project',
    'value' => function ($model) {
        if ($rel = $model->getIdProject()->one()) {
            return Html::a($rel->judul, ['project/view', 'id' => $rel->id,], ['data-pjax' => 0]);
        } else {
            return '';
        }
    },
    'format' => 'raw',
],
			 [
                        'attribute' => 'gambar',
                        'filter' => false,
                        'value' => function ($model) {
                            return '<img src="' . Yii::$app->urlManagerProject->baseUrl . "/" . $model->gambar . '" width="150px">';
                        },
                        'format' => 'raw',
                    ],
                ],
                ]); ?>
            </div>
        </div>
    </div>

    <?php \yii\widgets\Pjax::end() ?>

