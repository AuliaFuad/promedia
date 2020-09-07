<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Alamat $model
 */

$this->title = 'Tentang Kami ';
$this->params['breadcrumbs'][] = ['label' => 'Tentang Kami', 'url' => ['index']];
?>

<p>
</p>

<?php echo $this->render('_form', [
    'model' => $model,
]); ?>
