<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Pembayaran;
use frontend\models\PembayaranSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\VarDumper;


/**
 * PembayaranController implements the CRUD actions for Pembayaran model.
 */
class PembayaranController extends Controller
{
    /**
     * @inheritdoc
     */
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

    /**
     * Lists all Pembayaran models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PembayaranSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pembayaran model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Pembayaran model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Pembayaran();

        if ($model->load(Yii::$app->request->post()))
         {
        $model->tanggal=Date(Y-m-d);
         $model->save();
            return $this->redirect(['view', 'id' => $model->idpembayaran]);
        } else {

        return $this->render('create', [
            'model' => $model,
        ]);
    }
}

    /**
     * Updates an existing Pembayaran model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
      public function actionUpdate($id)
    {
        $model = $this->findModel($id);

         if ($model->load(Yii::$app->request->post())){
          $imageName = $model->idpembayaran;
          $gambar = UploadedFile::getInstance($model, 'bukti_pembayaran');
          if($model->validate()){
             $model->save();
             if (!empty($gambar)) {
                 $gambar->saveAs(Yii::getAlias('@backend/web/uploads/BuktiPembayaran' ) . $imageName.'.' . $gambar->extension);
                 $model->bukti_pembayaran = 'BuktiPembayaran'.$imageName.'.'.$gambar->extension;
                $model->save(FALSE);
                  //arDumper::dump($gambar,20,true);
           

                  #var_dump($gambar);
              #exit();
             }
         }
        
            $model->save();
           
            return $this->redirect(['view', 'id' => $model->idpembayaran]);
        } else {
            return $this->render('update', [
                'model' => $model,

            ]);
        }
    }


    /**
     * Deletes an existing Pembayaran model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pembayaran model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Pembayaran the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pembayaran::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionViewGambar($idpembayaran){
              $file = Yii::getAlias('@backend/web/uploads/BuktiPembayaran' . $idpembayaran);
              //var_dump($file);
              //exit();
              return Yii::$app->response->sendFile($file, NULL, ['inline' => TRUE]);

            }

}
