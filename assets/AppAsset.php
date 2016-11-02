<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
   public $basePath = '@webroot';
	public $baseUrl = '@web';
	public $css = [
			'plugins/ladda-bootstrap/dist/ladda-themeless.min.css',
			'css/flexboxgrid.min.css',
			'css/ionicons.min.css',
			'css/animate.css',
			'webAssets/css/cieloMagico.css',
			'css/animacionGlobos.css'
	];
	public $js = [
			
			'plugins/ladda-bootstrap/dist/spin.min.js',
			'plugins/ladda-bootstrap/dist/ladda.min.js',
			'js/site.js',
			'webAssets/js/cieloMagico.js'
	]
	;
	public $depends = [
			'yii\web\YiiAsset'
	];
}