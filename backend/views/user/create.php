<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var backend\models\User $model
*/

$this->title = Yii::t('cruds', 'Tambah Baru');
$this->params['breadcrumbs'][] = ['label' => 'User', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<p>
    <?= Html::a(Yii::t('cruds', 'Kembali'), \yii\helpers\Url::previous(), ['class' => 'btn btn-default']) ?>
</p>

<?= $this->render('_form', [
'model' => $model,
]); ?>
