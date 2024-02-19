<?php

namespace app\controllers;

use app\models\Fuelstation;
use app\models\FuelstationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FuelstationController implements the CRUD actions for Fuelstation model.
 */
class FuelstationController extends Controller
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
     * Lists all Fuelstation models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new FuelstationSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Fuelstation model.
     * @param int $Fs_id Fs ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Fs_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($Fs_id),
        ]);
    }

    /**
     * Creates a new Fuelstation model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Fuelstation();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Fs_id' => $model->Fs_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Fuelstation model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Fs_id Fs ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Fs_id)
    {
        $model = $this->findModel($Fs_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Fs_id' => $model->Fs_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Fuelstation model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Fs_id Fs ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Fs_id)
    {
        $this->findModel($Fs_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Fuelstation model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Fs_id Fs ID
     * @return Fuelstation the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Fs_id)
    {
        if (($model = Fuelstation::findOne(['Fs_id' => $Fs_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
