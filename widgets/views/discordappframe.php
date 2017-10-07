<?php

use yii\helpers\Url;
use humhub\libs\Html;
use humhub\models\Setting;

\humhub\modules\discordapp\Assets::register($this);
?>

<div class="panel">
  <div class="panel-heading">
    <?=Yii::t('DiscordappModule.base', '<strong>Discord</strong> Chat'); ?>
  </div>
  <div class="panel-body">

<?= Html::beginTag('div', $options) ?>
<iframe src="<?= $discordappUrl; ?>" id="discordAPPFrame" width="350" height="500" allowtransparency="true" frameborder="0" name="iframeContainer"></iframe>
<?= Html::endTag('div'); ?>
</div>
</div>
