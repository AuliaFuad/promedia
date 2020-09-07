<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\Aplikasi $model
 */

$this->title = 'Aplikasi ';
?>

<p></p>

<?php echo $this->render('_form', [
    'model' => $model,
]); ?>
