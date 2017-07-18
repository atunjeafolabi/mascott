<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = 'Products';
$subtitle = 'Create New Product';
//$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-create x-create-padding">

      <p>
        <h1>
            <?= Html::a(Html::encode($this->title), ['index'], ['class' => '']); ?> <small>(<?= $subtitle; ?>)</small>
        </h1>
    </p>

    <?= $this->render('_form', [
        'model' => $model,
        'hcrMap' => $hcrMap,
        'countryMap' => $countryMap,
        'providerMap' => $providerMap,
        'ptMap' => $ptMap,
    ]) ?>

</div>
