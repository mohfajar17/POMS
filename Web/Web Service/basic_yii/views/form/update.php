<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Form */

$this->title = 'Update Form: ' . $model->id_form;
$this->params['breadcrumbs'][] = ['label' => 'Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_form, 'url' => ['view', 'id' => $model->id_form]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="form-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
