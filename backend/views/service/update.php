<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var backend\models\Service $model
*/

$this->title = 'Service ' . $model->id . ', ' . Yii::t('cruds', 'Edit');
$this->params['breadcrumbs'][] = ['label' => 'Service', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('cruds', 'Edit');
?>

<p>
    <?= Html::a('<i class="fa fa-eye-open"></i> Lihat', ['view', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
</p>

<?php echo $this->render('_form', [
'model' => $model,
]); ?>
