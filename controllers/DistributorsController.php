<?php

namespace app\controllers;

use app\models\Distributors;
use app\models\DistributorsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DistributorsController implements the CRUD actions for Distributors model.
 */
class DistributorsController extends Controller
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
     * Lists all Distributors models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DistributorsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Distributors model.
     * @param int $D_id
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($D_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($D_id),
        ]);
    }

    /**
     * Creates a new Distributors model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Distributors();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'D_id' => $model->D_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Distributors model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $D_id
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($D_id)
    {
        $model = $this->findModel($D_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'D_id' => $model->D_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Distributors model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $D_id
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($D_id)
    {
        $this->findModel($D_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Distributors model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $D_id
     * @return Distributors the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($D_id)
    {
        if (($model = Distributors::findOne(['D_id' => $D_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
