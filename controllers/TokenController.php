<?php

namespace app\controllers;

use app\models\Token;
use app\models\TokenSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TokenController implements the CRUD actions for Token model.
 */
class TokenController extends Controller
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
     * Lists all Token models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TokenSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Token model.
     * @param int $T_id T ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($T_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($T_id),
        ]);
    }

    /**
     * Creates a new Token model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Token();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'T_id' => $model->T_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Token model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $T_id T ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($T_id)
    {
        $model = $this->findModel($T_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'T_id' => $model->T_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Token model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $T_id T ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($T_id)
    {
        $this->findModel($T_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Token model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $T_id T ID
     * @return Token the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($T_id)
    {
        if (($model = Token::findOne(['T_id' => $T_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
