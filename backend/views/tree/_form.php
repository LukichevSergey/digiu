<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Tree */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tree-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_partner_id')->textInput() ?>
<!--    --><?//= $form->field($model, 'parent')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\Tree::find()->all(), 'id', 'user_partner_id')) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
