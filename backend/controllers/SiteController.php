<?php
namespace backend\controllers;

use Yii;
use backend\controllers\RbacValidationController;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\LoginForm;

/**
 * Site controller
 */
class SiteController extends RbacValidationController
{
    /**
     * @inheritdoc
     */
    public function behaviors() {
            $this->setRole(get_class(),Yii::$app->user->id);
            $additionalBehavior =  [
                'access' => [
                    'class' => AccessControl::className(),
                    'rules' => [
                        [
                            'actions' => ['login', 'error'],
                            'allow' => true
                        ],
                        [
                            'actions' => ['logout', 'index', 'change-password'],
                            'allow' => true,
                            'roles' => ['@']
                        ]
                    ]
                ]
            ];
            $this->setAdditional($additionalBehavior);
            return parent::behaviors();
        }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
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
        $this->layout = 'main_1';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
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

    public function actionChangePassword()
        {
            $id = Yii::$app->user->id;
            $model = Yii::$app->user->identity;
            $data = Yii::$app->request->post();
            $newPass = new \common\models\ChangePasswordForm;
            if ($newPass->load(Yii::$app->request->post()) && $newPass->changePassword($model)) {
                $model->password_hash = Yii::$app
                        ->security
                        ->generatePasswordHash($newPass->password);
                $model->save();
                Yii::$app->session->setFlash('success', 'Tu contraseña fue cambiada');
                return $this->redirect(Yii::$app->request->referrer);
            } else {
                return $this->render('changePassword', [
                    'model' => $model,
                    'newPass' => $newPass
                ]);
            }
        }
}
