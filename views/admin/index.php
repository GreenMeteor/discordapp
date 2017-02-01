<?php

use humhub\compat\CActiveForm;
use humhub\compat\CHtml;
use humhub\models\Setting;
use humhub\modules\discord\controllers\AdminController;

?>

<div class="panel panel-default">
	<div class="panel-heading"><?=Yii::t('DiscordModule.base', '<strong>Discord</strong>'); ?></div>
	<div class="panel-body">
		<?php $form = CActiveForm::begin(['id' => 'discord-settings-form']); ?>
			<?=$form->errorSummary($model); ?>
			<p class="help-block"><?=Yii::t('DiscordModule.base', 'Server ID:  "000000000000000000"'); ?></p>
			<div class="form-group">
			        <?=$form->labelEx($model, 'sort'); ?>
				<?=$form->textField($model, 'sort', ['class' => 'form-control', 'readonly' => Setting::IsFixed('sort', 'discord')]); ?>
			</div>
			<p class="help-block"><?=Yii::t('DiscordModule.base', 'Server ID.'); ?></p>
			<?= CHtml::submitButton(Yii::t('DiscordModule.base', 'save'), ['class' => 'btn btn-primary']); ?>
			<?=\humhub\widgets\DataSaved::widget(); ?>
		<?php CActiveForm::end(); ?>
	</div>
</div>
