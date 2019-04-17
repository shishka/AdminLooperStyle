<?php
namespace igor162\adminlte\assets;

use Yii;

/**
 * AdminLte AssetBundle
 * @since 0.1
 */
class AdminLooperAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/igor162/AdminLooperStyle/assets';

    public $css = [
        'vendor/open-iconic/css/open-iconic-bootstrap.min.css',
        'vendor/fontawesome/css/all.css',
        'stylesheets/theme.min.css',
//        'stylesheets/theme-dark.min.css',
    ];
    public $js = [
//        'vendor/jquery/jquery.min.js',
        'vendor/bootstrap/js/popper.min.js',
        'vendor/bootstrap/js/bootstrap.min.js',
        'vendor/pace/pace.min.js',
        'vendor/stacked-menu/stacked-menu.min.js',
        'vendor/perfect-scrollbar/perfect-scrollbar.min.js',
        'vendor/sortablejs/Sortable.min.js',
        'vendor/tributejs/tribute.min.js',
        'vendor/simplemde/simplemde.min.js',
        'javascript/theme.min.js',
//        'javascript/pages/board-demo.js',
    ];
    public $depends = [
        'rmrevin\yii\fontawesome\AssetBundle',
        'yii\web\YiiAsset',
    ];
}
