<?php

namespace app\controllers;

use app\models\Leaders;
use Yii;
use app\models\Enterprises;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EnterprisesController implements the CRUD actions for Enterprises model.
 */



class EnterprisesController extends Controller
{



    public function actionEnterprises()
    {
        $model = new Enterprises();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                return;
            }
        }

        return $this->render('enterprises', [
            'model' => $model,
        ]);
    }

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
     * Lists all Enterprises models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Enterprises::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Enterprises model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        /*$dataProvider = new ActiveDataProvider(['query' => Leaders::find()->where(['CODE'=>$code])]);
        $dataProvider->key = 'LCODE';*/
        $leaders = Leaders::find()->where(['CODE' => $id])->all();

        return $this->render('view', [
            'model' => $this->findModel($id),
            'leaders' => $leaders,
        ]);
    }

    /**
     * Creates a new Enterprises model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Enterprises();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->CODE]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Enterprises model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->CODE]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Enterprises model.
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
     * Finds the Enterprises model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Enterprises the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Enterprises::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public static function getLeaders($code)
    {
        $dataProvider = new ActiveDataProvider(['query' => Leaders::find()->where(['CODE'=>$code])]);
        $dataProvider->key = 'LCODE';
        return $dataProvider;
    }
}
