<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\PerusahaanSatu $model
 */

$this->title = 'Perusahaan : ' . $model->nama_perusahaan . ', ' . Yii::t('cruds', 'Edit');
$this->params['breadcrumbs'][] = ['label' => 'Perusahaan Satu', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->nama_perusahaan, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('cruds', 'Edit');
?>

<p>
    <?= Html::a('<i class="fa fa-eye-open"></i> Lihat', ['view', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
</p>

<?php echo $this->render('_form', [
    'model' => $model,
]); ?>
