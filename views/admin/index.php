<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>

<div class="panel panel-default">

    <div class="panel-heading"><?= Yii::t('DiscordappModule.base', '<strong>Discordapp</strong> module configuration'); ?></div>

    <div class="panel-body">

        <?php $form = ActiveForm::begin(['id' => 'configure-form']); ?>
        <div class="form-group">
            <?= $form->field($model, 'serverUrl'); ?>
        </div>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-primary', 'data-ui-loader' => '']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
