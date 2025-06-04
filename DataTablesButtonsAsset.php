<?php

namespace nightycrawl\datatables;

use yii\web\AssetBundle;

/**
 * Asset for the DataTables Buttons plugin
 */
class DataTablesButtonsAsset extends AssetBundle
{
    public $sourcePath = '@npm/datatables.net-buttons';

    public $js = [
        "js/dataTables.buttons.min.js",
        "js/buttons.flash.min.js",
        "js/buttons.print.min.js",
        "js/buttons.html5.min.js",
        "js/buttons.colVis.min.js",
        
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'nightycrawl\datatables\DataTablesAsset',
        'nightycrawl\datatables\DataTablesPdfMakerAsset',
        'nightycrawl\datatables\DataTablesJsZipAsset'
    ];
}