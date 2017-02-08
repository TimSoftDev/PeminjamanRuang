<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use app\models\Pesanan;
use app\models\PesananSearch;

class UserController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
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

    public function actionIndex()
    {
        $searchModel = new PesananSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionTambahPesanan()
    {
        $model = new Pesanan();

        if ($model->load(Yii::$app->request->post())) {
            // $model->nim = Yii::$app->user->identity->nim;
            $model->status = 'Menunggu';
            $model->tanggal_pesan = date('Y-m-d h:m:s');
            $model->tanggal_verifikasi = '0';
            $model->save();
            return $this->redirect(['index', 'id' => $model->id]);
        } else {
            return $this->render('tambah', [
                'model' => $model,
            ]);
        }
    }
}
