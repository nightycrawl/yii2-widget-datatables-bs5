<?php

namespace reine\datatables;

use yii\web\AssetBundle;

/**
 * Asset for the DataTables Select plugin
 */
class DataTablesSelectAsset extends AssetBundle
{
    public $sourcePath = '@bower/datatables.net-select';

    public $js = [
        "js/dataTables.select.min.js",
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'reine\datatables\DataTablesAsset',
    ];
}