<?php

namespace nightycrawl\datatables;

use yii\web\AssetBundle;

/**
 * Asset for the DataTables Buttons Bs4 plugin
 */
class DataTablesButtonsBs5Asset extends AssetBundle
{
    public $sourcePath = '@npm/datatables.net-buttons-bs5';

    public $js = [
        "js/buttons.bootstrap5.min.js",
    ];

    public $css = [
        "css/buttons.bootstrap5.min.css",
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'nightycrawl\datatables\DataTablesAsset',
        'nightycrawl\datatables\DataTablesButtonsAsset'
    ];
}