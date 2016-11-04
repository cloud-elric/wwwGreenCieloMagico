<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\EntUsuarios;
use app\models\Utils;
use app\models\ViewTotalPremios;
use app\models\RelUsuariosPremio;
use app\models\EntPremios;

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
		
		
		return $this->render ( 'index');
	}
	
	/**
	 * Vista con los 3 globos
	 */
	public function actionConcursar() {
		$premios = ViewTotalPremios::find ()->where ( 'num_premios_sobrantes > 0' )->orderBy ( 'rand()' )->limit ( 3 )->all();
		$premioSeleccionado = new EntPremios();
		
		if($premioSeleccionado->load ( Yii::$app->request->post () )&& ($premio = $this->getPremioByToken($premioSeleccionado->txt_token))){
			
			$usuario = new EntUsuarios ();
			
			if($usuario->load ( Yii::$app->request->post () )){
				$usuario->txt_token = Utils::generateToken ( 'usr_' );
				$usuario->fch_creacion = Utils::getFechaActual ();
				if ($usuario->save ()) {
						
					$premioUsuario = new RelUsuariosPremio();
					$premioUsuario->id_premio = $premio->id_premio;
					$premioUsuario->id_usuario = $usuario->id_usuario;
					$premioUsuario->txt_codigo = substr ( md5 ( microtime () ), 1, 10 );
					
					if($premioUsuario->save()){
						return $this->redirect ( 'premio' );
					}
					
					$message = urlencode ( 'Felicidades haz ganado: '.$premio->txt_nombre.". Tu codigo de ganador es:" .$premioUsuario->txt_codigo);
					$url = 'http://sms-tecnomovil.com/SvtSendSms?username=PIXERED&password=Pakabululu01&message=' . $message . '&numbers=' . $usuario->tel_numero_celular;
						
					$sms = file_get_contents ( $url );
						
					
				}
			}
			
			return $this->render ( 'registro', [
					'usuario' => $usuario,
					'premio' =>$premio
			] );
		}
		
		return $this->render ( 'concursar', [ 
				'premios' => $premios,
				'premioSeleccionado'=>$premioSeleccionado
		]  );
	}
	
	/**
	 * Action para registrar al usuario
	 */
	public function actionRegistro() {
		$usuario = new EntUsuarios ();
		$premio = new EntPremios();
		
		if($premio->load ( Yii::$app->request->post () )){
			echo $premio->txt_token;
			if ($usuario->load ( Yii::$app->request->post () )) {
					
				$usuario->txt_token = Utils::generateToken ( 'usr_' );
				$usuario->fch_creacion = Utils::getFechaActual ();
				if ($usuario->save ()) {
			
			
			
					return $this->redirect ( 'premio' );
				}
			}
			
			return $this->render ( 'registro', [
					'usuario' => $usuario,
					'premio' =>$premio
			] );
		}
		
		return $this->redirect('concursar');
	}
	
	/**
	 * Busca el premio por el token
	 * @param unknown $token
	 * @throws NotFoundHttpException
	 * @return unknown
	 */
	private function getPremioByToken($token) {
		if (($premio = EntPremios::find()->where(['txt_token'=>$token])->one())) {
			return $premio;
		} 
// 		else {
// 			throw new NotFoundHttpException ( 'The requested page does not exist.h' );
// 		}
	}
	
	/**
	 * Action para ver el premio y codigo
	 */
	public function actionPremio() {
		return $this->render ( 'premio' );
	}
	public function actionToken($pre = 'prem') {
		echo Utils::generateToken ( $pre );
	}

	/**
	 * Action para registrar al usuario
	 */
	public function actionSinPremios() {
		
		return $this->render ('sinPremios');
	}

}
