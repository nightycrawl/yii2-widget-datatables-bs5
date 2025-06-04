<?php

namespace nightycrawl\datatables;

use yii\web\AssetBundle;

/**
 * Asset for the DataTables Buttons Bs4 plugin
 */
class DataTablesJsZipAsset extends AssetBundle
{
    public $sourcePath = '@bower/jszip';

    public $js = [
        "dist/jszip.min.js",
    ];


    public $depends = [
        'yii\web\JqueryAsset',
        'nightycrawl\datatables\DataTablesAsset',
    ];
}