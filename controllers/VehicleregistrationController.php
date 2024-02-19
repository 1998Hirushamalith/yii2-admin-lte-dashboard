<?php

namespace app\controllers;

use app\models\Vehicleregistration;
use app\models\VehicleregistrationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * VehicleregistrationController implements the CRUD actions for Vehicleregistration model.
 */
class VehicleregistrationController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Vehicleregistration models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new VehicleregistrationSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Vehicleregistration model.
     * @param int $Vr_id Vr ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Vr_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($Vr_id),
        ]);
    }

    /**
     * Creates a new Vehicleregistration model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Vehicleregistration();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Vr_id' => $model->Vr_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Vehicleregistration model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Vr_id Vr ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Vr_id)
    {
        $model = $this->findModel($Vr_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Vr_id' => $model->Vr_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Vehicleregistration model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Vr_id Vr ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Vr_id)
    {
        $this->findModel($Vr_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Vehicleregistration model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Vr_id Vr ID
     * @return Vehicleregistration the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Vr_id)
    {
        if (($model = Vehicleregistration::findOne(['Vr_id' => $Vr_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
