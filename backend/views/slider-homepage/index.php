<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var backend\models\SliderHomepageSearch $searchModel
 */

$this->title = Yii::t('cruds', 'Slider Homepage');
$this->params['breadcrumbs'][] = $this->title;
?>

<p>
    <?= Html::a('<i class="fa fa-plus"></i> Tambah Baru', ['create'], ['class' => 'btn btn-success']) ?>
</p>


<?php \yii\widgets\Pjax::begin(['id' => 'pjax-main', 'enableReplaceState' => false, 'linkSelector' => '#pjax-main ul.pagination a, th a', 'clientOptions' => ['pjax:success' => 'function(){alert("yo")}']]) ?>

<div class="box box-info">
    <div class="box-body">
        <div class="table-responsive">
            <?= GridView::widget([
                'layout' => '{summary}{pager}{items}{pager}',
                'dataProvider' => $dataProvider,
                'pager' => [
                    'class' => yii\widgets\LinkPager::className(),
                    'firstPageLabel' => Yii::t('cruds', 'First'),
                    'lastPageLabel' => Yii::t('cruds', 'Last')],
                'filterModel' => $searchModel,
                'tableOptions' => ['class' => 'table table-striped table-bordered table-hover'],
                'headerRowOptions' => ['class' => 'x'],
                'columns' => [

                    \app\components\ActionButton::getButtons(),

//			'background',
//			'gambar',
                    'judul',
                    [
                        'attribute' => 'background',
                        'filter' => false,
                        'value' => function ($model) {
                            return '<img src="' . Yii::$app->urlManagerSlider->baseUrl . "/" . $model->background . '" width="150px">';
                        },
                        'format' => 'raw',
                    ],
                    //'kalimat',
                ],
            ]); ?>
        </div>
    </div>
</div>

<?php \yii\widgets\Pjax::end() ?>

