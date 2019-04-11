<?php
namespace igor162\adminlte\assets;

use Yii;

/**
 * AdminLte AssetBundle
 * @since 0.1
 */
class AdminLooperAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@igor162/AdminLooperStyle/assets';

    public $css = [
        'stylesheets/theme.min.css',
//        'stylesheets/theme-dark.min.css',
    ];
    public $js = [
        'vendor/pace/pace.min.js',
        'vendor/stacked-menu/stacked-menu.min.js',
        'vendor/perfect-scrollbar/perfect-scrollbar.min.js',
        'vendor/sortablejs/Sortable.min.js',
        'vendor/tributejs/tribute.min.js',
        'vendor/simplemde/simplemde.min.js',
        'javascript/theme.min.js',
        'javascript/pages/board-demo.js',
    ];
    public $depends = [
        'rmrevin\yii\fontawesome\AssetBundle',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
