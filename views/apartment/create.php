<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Apartment */

$this->title = Yii::t('apartment', 'Добавление квартиры');
$this->params['breadcrumbs'][] = ['label' => Yii::t('apartment', 'Квартиры'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apartment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
