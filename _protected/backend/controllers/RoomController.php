<?php

namespace backend\controllers;

use Yii;
use common\models\Room;
use common\models\RoomSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RoomController implements the CRUD actions for Room model.
 */
class RoomController extends BackendController
{
    /**
     * {@inheritdoc}
     */
//    public function behaviors()
//    {
//        return [
//            'verbs' => [
//                'class' => VerbFilter::class,
//                'actions' => [
//                    'delete' => ['GET'],
//                ],
//            ],
//        ];
//    }

    /**
     * Lists all Room models.
     * @return mixed
     */
    public function actionIndex()
    {
        $user = \common\models\User::findOne(['id'=> Yii::$app->user->id]);


        if ($user->role_id == "theCreator"){
            $room = \common\models\Room::find()
                ->all();
            return $this->render('index', [
                'room' => $room,
            ]);
        }elseif ( $user->role_id == "Admin"){
            $room = \common\models\Room::find()
                ->where(['uni_id'=>$user->uni_id])
                ->all();
            return $this->render('index', [
                'room' => $room,
            ]);
        }
        else{
            return $this->render('../site/error');
        }
    }
    /**
     * Displays a single Room model.
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
     * Creates a new Room model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Room();

        $user=\common\models\User::find()
            ->where(['=', 'user.id', Yii::$app->user->id])
            ->one();
        if ($model->load(Yii::$app->request->post()) ) {
            $model->uni_id = $user->uni_id;
            $model->save();
            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Room model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Room model.
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
     * Finds the Room model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Room the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Room::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
