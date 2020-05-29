<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Psikolog */

$this->title = 'Create Psikolog';
$this->params['breadcrumbs'][] = ['label' => 'Psikologs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="psikolog-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
