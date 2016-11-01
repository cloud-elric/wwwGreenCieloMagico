<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\EntUsuarios;

class SiteController extends Controller {
	/**
	 * @inheritdoc
	 */
	public function behaviors() {
		return [ 
				'access' => [ 
						'class' => AccessControl::className (),
						'only' => [ 
								'logout' 
						],
						'rules' => [ 
								[ 
										'actions' => [ 
												'logout' 
										],
										'allow' => true,
										'roles' => [ 
												'@' 
										] 
								] 
						] 
				],
				'verbs' => [ 
						'class' => VerbFilter::className (),
						'actions' => [ 
								'logout' => [ 
										'post' 
								] 
						] 
				] 
		];
	}
	
	/**
	 * @inheritdoc
	 */
	public function actions() {
		return [ 
				'error' => [ 
						'class' => 'yii\web\ErrorAction' 
				],
				'captcha' => [ 
						'class' => 'yii\captcha\CaptchaAction',
						'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null 
				] 
		];
	}
	
	/**
	 * Displays pagina inicial.
	 *
	 * @return string
	 */
	public function actionIndex() {
		return $this->render ( 'index' );
	}
	
	/**
	 * Vista con los 3 globos
	 */
	public function actionConcursar() {
		return $this->render ( 'concursar' );
	}
	
	/**
	 * Action para registrar al usuario
	 */
	public function actionRegistro() {
		$usuario = new EntUsuarios ();
		
		if ($usuario->load ( Yii::$app->request->post () )) {
			
		}
		
		return $this->render ( 'registro', [ 
				'usuario' => $usuario 
		] );
	}
	
	/**
	 * Action para ver el premio y codigo
	 */
	public function actionPremio() {
		return $this->render ( 'premio' );
	}
}
