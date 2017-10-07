<?php

namespace humhub\modules\discordapp\controllers;

use Yii;
use yii\helpers\Url;
use humhub\models\Setting;
use humhub\modules\admin\components\Controller;
use humhub\modules\discordapp\models\ConfigureForm;

class AdminController extends Controller
{
    /**
     * Configuration Action for Super Admins
     */
    public function actionIndex()
    {
        $form = new ConfigureForm();
        if ($form->load(Yii::$app->request->post()) && $form->validate() && $form->save()) {
            return $this->redirect(Url::to(['/discordapp/admin/index']));
        }
        
        return $this->render('index', ['model' => $form]);
    }
}
?>