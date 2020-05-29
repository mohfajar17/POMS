<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Psikolog */

$this->title = 'Update Psikolog: ' . $model->id_psikolog;
$this->params['breadcrumbs'][] = ['label' => 'Psikologs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_psikolog, 'url' => ['view', 'id' => $model->id_psikolog]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="psikolog-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
