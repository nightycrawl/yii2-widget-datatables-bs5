<?php
/**
 * @copyright Federico Nicolás Motta
 * @author Federico Nicolás Motta <fedemotta@gmail.com>
 * @license http://opensource.org/licenses/mit-license.php The MIT License (MIT)
 * @package yii2-widget-datatables
 */

namespace nightycrawl\datatables;

use yii\web\AssetBundle;

/**
 * Asset for the DataTables Bootstrap JQuery plugin
 * @author Federico Nicolás Motta <fedemotta@gmail.com>
 */
class DataTablesBootstrapAsset extends AssetBundle
{
    public $sourcePath = '@npm/datatables.net-bs5';

    public $css = [
        "css/dataTables.bootstrap5.min.css",
    ];

    public $js = [
        "js/dataTables.bootstrap5.min.js",
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'nightycrawl\datatables\DataTablesAsset'
    ];
}