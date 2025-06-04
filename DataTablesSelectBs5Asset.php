<?php

namespace nightycrawl\datatables;

use yii\web\AssetBundle;

/**
 * Asset for the DataTables Select Bs4 plugin
 */
class DataTablesSelectBs5Asset extends AssetBundle
{
    public $sourcePath = '@npm/datatables.net-select-bs5';

    public $js = [
        "js/select.bootstrap5.min.js",
    ];

    public $css = [
        "css/select.bootstrap5.min.css",
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'nightycrawl\datatables\DataTablesAsset',
        'nightycrawl\datatables\DataTablesSelectAsset',
    ];
}