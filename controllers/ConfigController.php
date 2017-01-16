<?php
namespace humhub\modules\discord\controllers;
use Yii;
use humhub\modules\notes\models\ConfigureForm;
use humhub\models\Setting;
class ConfigController extends \humhub\modules\admin\components\Controller
{
    public function actionIndex()
    {
        $form = new ConfigureForm();
        $form->baseUrl = Setting::Get('baseUrl', 'discord');
        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            $form->baseUrl = Setting::Set('baseUrl', $form->baseUrl, 'discord');
            return $this->redirect(['/discord/config']);
        }
        return $this->render('index', array('model' => $form));
    }
}
?>
