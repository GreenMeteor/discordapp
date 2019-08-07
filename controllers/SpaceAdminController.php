
<?php

namespace humhub\modules\discordapp\controllers;

use Yii;
use humhub\modules\space\controllers\SpaceController;
use humhub\modules\discordapp\models\ConfigureForm;

class SpaceAdminController extends SpaceController
{

    public function actionIndex()
    {
        $model = new ConfigureForm();
        $model->loadSettings();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $this->view->saved();
        }

        return $this->render('index', ['model' => $model]);
    }

}
