<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Alamat $model
 */

$this->title = 'Alamat ';
$this->params['breadcrumbs'][] = ['label' => 'Alamat', 'url' => ['index']];
?>

<p>
</p>

<?php echo $this->render('_form', [
    'model' => $model,
]); ?>
