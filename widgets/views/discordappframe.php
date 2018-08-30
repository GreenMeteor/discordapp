<?php

use humhub\libs\Html;
use humhub\widgets\PanelMenu;

\humhub\modules\discordapp\assets\Assets::register($this);
?>

<div class="panel panel-default panel-discordapp" id="panel-discordapp">
    <?= PanelMenu::widget(['id' => 'panel-discordapp']); ?>
  <div class="panel-heading">
    <?= Yii::t('DiscordappModule.base', '<strong>Discord</strong> Chat'); ?>
  </div>
  <div class="panel-body">

<?= Html::beginTag('div') ?>
<iframe src="<?= $discordappUrl; ?>" id="discordAPPFrame" width="100%" height="500" allowtransparency="true" frameborder="0" name="iframeContainer"></iframe>
<?= Html::endTag('div'); ?>
</div>
</div>
