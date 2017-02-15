<?php

use yii\helpers\Url;
use humhub\models\Setting;

?>
<div class="panel">
  <div class="panel-heading">
    <?php echo Yii::t('DiscordappModule.base', '<strong>Discord</strong> App'); ?>
  </div>
  <div class="panel-body">
      
<iframe src="<?php echo Url::to(['https://discordapp.com/widget?id=', 'id' => Url::to($this->context->route)]); ?>">
    <?php $this->render($view); ?>
</iframe>
    
</div>
</div>
