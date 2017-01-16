<?php
use humhub\compat\CActiveForm;
use humhub\compat\CHtml;
use humhub\models\Setting;
use humhub\modules\discordapp\controllers\AdminController;
?>
<div class="panel panel-default">
	<div class="panel-heading"><?=Yii::t('DiscordappModule.base', '<strong>Discordapp</strong>'); ?></div>
	<div class="panel-body">
	<?php $form = CActiveForm::begin(['id' => 'discordapp-settings-form']); ?>
			<?=$form->errorSummary($model); ?>
			<p class="help-block"><?=Yii::t('DiscordappModule.base', 'eg:  "99999999"'); ?></p>
			<div class="form-group">
				<?=$form->labelEx($model, 'sort'); ?>
				<?=$form->textField($model, 'sort', ['class' => 'form-control', 'readonly' => Setting::IsFixed('sort', 'discordapp')]); ?>
			</div>
			<p class="help-block"><?=Yii::t('DiscordappModule.base', 'Widget positioning.'); ?></p>
			<?= CHtml::submitButton(Yii::t('DiscordappModule.base', 'save'), ['class' => 'btn btn-primary']); ?>
			<?=\humhub\widgets\DataSaved::widget(); ?>
	<?php CActiveForm::end(); ?>
	</div>
</div>
