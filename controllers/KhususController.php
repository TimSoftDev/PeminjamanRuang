<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\SignupForm;

use app\models\Pesanan;
use app\models\PesananSearch;
use yii\web\NotFoundHttpException;

use yii\helpers\Json;

use \DateTime;

class KhususController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    
    public function actionIndex()
    {
        $searchModel = new PesananSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionDaftar()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('daftar', [
            'model' => $model,
        ]);
    }

    public function actionAgen($start=NULL,$end=NULL,$_=NULL){

        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $times = Pesanan::find()->all();

        $events = array();

        foreach ($times AS $time){
            //Testing
            $Event = new \yii2fullcalendar\models\Event();
            $Event->id = $time->id;
            $Event->title = $time->id_ruang;
            $Event->start = $time->tanggal_mulai;
            $Event->end = $time->tanggal_selesai;
            $events[] = $Event;
        }

        return $events;
      }

    public function actionTambah()
    {
        $model = new Pesanan();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['lihat', 'id' => $model->id]);
        } else {
            return $this->render('tambah', [
                'model' => $model,
            ]);
        }
    }

    public function actionLihat($id)
    {
        return $this->render('lihat', [
            'model' => $this->findModel($id),
        ]);
    }

    protected function findModel($id)
    {
        if (($model = Pesanan::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
