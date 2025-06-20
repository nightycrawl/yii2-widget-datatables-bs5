<?php

namespace nightycrawl\datatables;

use yii\web\AssetBundle;

/**
 * Asset for the DataTables Buttons Bs4 plugin
 */
class DataTablesPdfMakerAsset extends AssetBundle
{
    public $sourcePath = '@bower/pdfmake';

    public $js = [
        "build/pdfmake.min.js",
        "build/vfs_fonts.js",
    ];


    public $depends = [
        'yii\web\JqueryAsset',
        'nightycrawl\datatables\DataTablesAsset',
    ];
}