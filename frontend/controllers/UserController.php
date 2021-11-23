<?php

namespace frontend\controllers;

use yii\filters\AccessControl;
use yii\filters\VerbFilter;

use Yii;

use yii\web\Controller;
use frontend\models\UploadForm;
use yii\web\UploadedFile;
class UserController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionUpload()
    {
        $model = new UploadForm();

        if (Yii::$app->request->isPost) {
            $model->avatar = UploadedFile::getInstance($model, 'avatar');
            if ($model->upload()) {
                // file is uploaded successfully
                $this->goBack();
            }
        }

        return $this->render('upload', ['model' => $model]);
    }

    public function actionCropper(){
        $model = new UploadForm();
        return $this->render('cropper',['model'=>$model]);
    }

}
