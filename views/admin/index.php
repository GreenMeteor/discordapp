<?php

use humhub\compat\Html;
use humhub\compat\ActiveForm;
use humhub\models\Setting;
use humhub\modules\discordapp\controllers\AdminController;

?>

<div class="panel panel-default">
	<div class="panel-heading"><?php echo Yii::t('DiscordappModule.base', '<strong>Discord</strong>'); ?></div>
	<div class="panel-body">
		<?php $form = ActiveForm::begin(['id' => 'discord-settings-form']); ?>
			<?= $form->errorSummary($model); ?>
			<p class="help-block"><?php echo Yii::t('DiscordappModule.base', 'Server ID:  "000000000000000000"'); ?></p>
			<div class="form-group">
			        <?php echo $form->labelEx($model, 'number'); ?>
				<?php echo $form->textField($model, 'number', ['class' => 'form-control', 'readonly' => Setting::IsFixed('number', 'discordapp')]); ?>
			</div>
			<?php echo Html::submitButton(Yii::t('DiscordappModule.base', 'save'), ['class' => 'btn btn-primary']); ?>
			<?php echo \humhub\widgets\DataSaved::widget(); ?>
		<?php ActiveForm::end(); ?>
	</div>
</div>
