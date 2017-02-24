<?php

use Yii;
use yii\helpers\Url;
use humhub\models\Setting;

\humhub\modules\discordapp\Assets::register($this);

?>
<div class="panel">
  <div class="panel-heading">
    <?=Yii::t('DiscordappModule.base', '<strong>Discord</strong> App'); ?>
  </div>
  <div class="panel-body">
      
<iframe src="<?php Url::to(['https://discordapp.com/widget?id=', 'id' => Url::to($this->context->route)]); ?>">
    <?php $this->render($view); ?>
</iframe>
    
</div>
</div>

<script type="text/javascript">

    $(document).ready(function () {

        $('#privacyboxModal').modal({
            backdrop: 'static',
            keyboard: false,
            show: true
        });

    });

    $('#privacybox-accept').on('click', function() {
        $.ajax({
            url: '<?php echo Url::to(['/discord/index/accept']) ?>',
            success: function() {
                $('#privacyboxModal').modal('hide');
            }
        });
    });

</script>
