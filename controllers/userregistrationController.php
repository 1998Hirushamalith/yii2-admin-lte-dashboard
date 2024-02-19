<?php

namespace app\controllers;

use app\models\Userregistration;
use app\models\UserregistrationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UserregistrationController implements the CRUD actions for Userregistration model.
 */
class UserregistrationController extends Controller
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
     * Lists all Userregistration models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new UserregistrationSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Userregistration model.
     * @param int $U_id U ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($U_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($U_id),
        ]);
    }

    /**
     * Creates a new Userregistration model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Userregistration();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'U_id' => $model->U_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Userregistration model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $U_id U ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($U_id)
    {
        $model = $this->findModel($U_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'U_id' => $model->U_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Userregistration model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $U_id U ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($U_id)
    {
        $this->findModel($U_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Userregistration model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $U_id U ID
     * @return Userregistration the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($U_id)
    {
        if (($model = Userregistration::findOne(['U_id' => $U_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
