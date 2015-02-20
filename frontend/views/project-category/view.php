<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProjectCategory */

$this->title = $model->ProjectCategoryName;
$this->params['breadcrumbs'][] = ['label' => 'Project Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-category-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ProjectCategoryId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ProjectCategoryId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ProjectCategoryId',
            'ProjectCategoryName',
        ],
    ]) ?>

</div>
