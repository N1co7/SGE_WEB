<?php

namespace app\controllers; 

use Yii;
use app\models\Emergencia;
use app\models\EmergenciaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EmergenciaController implements the CRUD actions for Emergencia model.
 */
class EmergenciaController extends Controller
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
     * Lists all Emergencia models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EmergenciaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Emergencia model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Emergencia model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Emergencia();

        if ($model->load(Yii::$app->request->post())) {
            $model->nro_emergencia=0;
            if($model->save()){
                return $this->redirect(['view', 'id' => $model->id_emergencia]);    
            }else{
                return $this->render('create', [
                'model' => $model,
            ]);
            }
            
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
    public function actionError(){
        if(isset($_REQUEST['mensaje'])){

            Yii::$app->mailer->compose("@app/mail/layouts/html",
                ["content"=> 'inconsistencia en el marcaje del usuario'.Yii::$app->user->nombre.' debido a  <br> "'.$_REQUEST['mensaje'].'" <br>'])
            ->setFrom('tesismarcaje@gmail.com')
            ->setTo('felixpe1994@gmail.com')
            ->setSubject('inconsistencia en el marcaje del usuario : '.Yii::$app->user->nombre)
            ->send();

            /*Yii::$app->mail->compose()
             ->setFrom(['tesismarcaje@gmail.com' => 'My Example Site'])
             ->setTo('fcantill@alumnos.ubiobio.cl')
             ->setSubject('caca')
             ->setTextBody($_REQUEST['mensaje'])
             ->send();*/

            $session=Yii::$app->session;
            $session['enviado']='correcto';
            $this->redirect(['marcar']);
        }
        $this->redirect(['marcar']);
    }

    /**
     * Updates an existing Emergencia model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_emergencia]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Emergencia model.
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
     * Finds the Emergencia model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Emergencia the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Emergencia::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
