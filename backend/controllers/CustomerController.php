<?php

namespace backend\controllers;

use Yii;
use backend\models\Customer;
use backend\models\CustomerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use backend\models\Account;

/**
 * CustomerController implements the CRUD actions for Customer model.
 */
class CustomerController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Customer models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CustomerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Customer model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
         $model1 = new Account();
        return $this->render('view', [
            'model' => $this->findModel($id),'model1'=>$model1
        ]);
    }

    /**
     * Creates a new Customer model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Customer();
           $model->record_stat='O';
           $model->auth_stat='U';
           $model->maker_id=Yii::$app->user->identity->username;
           $model->maker_dt_stamp=date('Y-m-d:h:i');
           $model->mod_no=1;
           $model->photo='test';

          // $model->customer_photo = UploadedFile::getInstances($model, 'customer_photo');
           //if ($model->customer_photo && $model->validate()) {
         
                   // $customer_photo->saveAs('uploads/' . $customer_photo->baseName . '.' . $customer_photo->extension);
              
           // }
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->customer_no]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Customer model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->auth_stat='U';
        $model->mod_no=($model->mod_no)+1;
        $model->maker_id=Yii::$app->user->identity->username;
        $model->maker_dt_stamp=date('Y-m-d:h:i');
       
       $model->photo = UploadedFile::getInstance($model, 'customer_photo');
          if ($model->photo && $model->validate()) {

                 $model->photo->saveAs('uploads/' .  $model->photo->baseName . '.' .  $model->photo->extension);
                   
          }
           // $model->photo='test1';
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->customer_no]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Customer model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Customer model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Customer the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Customer::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
