<?php

namespace app\controllers;

use app\models\ZakazForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use \app\models\Regions;
use \app\models\Technics;
use \app\models\Masters;
use yii\web\UploadedFile;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    /*
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
    */

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionOrders() {
        if (!Yii::$app->user->isGuest)
            return $this->render('orders');
        else
            $this->redirect(array('user/login'));
    }

    public function actionMasters($region = 'none', $tech = 'none') {
        $reg = new Regions();
        $tec = new Technics();
        
        $reg_items = $reg->getRegions();
        $tec_items = $tec->getTechnics();
        
        $masters = Masters::getListOfMasters($region, $tech);
        
        $model = compact('reg_items', 'tec_items', 'masters');
        return $this->render('masters', ['model' => $model]);
    }

    public function actionZakaz() {
        $success = false;
        $model = new ZakazForm();
        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($model->upload()) {
                $success = true;
            }

            if ($model->saveRecord(\Yii::$app->request->post('ZakazForm')))
                $success = true;
        }

        if (!Yii::$app->user->isGuest)
            return $this->render('zakaz', ['model' => $model, 'success' => $success]);
        else
            $this->redirect(array('user/login'));
    }

    public function actionFaq() {
        return $this->render('faq');
    }

    public function actionSupport() {
        return $this->render('support');
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionTest() {
        return $this->render('about');
    }

}
