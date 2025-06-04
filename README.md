DataTables widget for Yii2
===========================
This extension provides the [DataTables](https://github.com/DataTables/DataTables) integration for the Yii2 framework.

[![Latest Stable Version](http://poser.pugx.org/nightycrawl/yii2-widget-datatables-bs5/v)](https://packagist.org/packages/nightycrawl/yii2-widget-datatables-bs5) [![Total Downloads](http://poser.pugx.org/nightycrawl/yii2-widget-datatables-bs5/downloads)](https://packagist.org/packages/nightycrawl/yii2-widget-datatables-bs5) [![License](http://poser.pugx.org/nightycrawl/yii2-widget-datatables-bs5/license)](https://packagist.org/packages/nightycrawl/yii2-widget-datatables-bs5)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
composer require --prefer-dist nightycrawl/yii2-widget-datatables-bs5 "^1.0"
```

or add

```
"nightycrawl/yii2-widget-datatables-bs5": "^1.0"
```

to the require section of your `composer.json` file.

Usage
-----
Use DataTables as any other other Yii2 widget.

```php
# In controller, prepare data that will be passed to the view:

    public function actionIndex()
    {
        $searchModel = new ModelSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, $this->_pageSize);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

# In view:

<?php
use reine\datatables\DataTables;
?>
    <div class="row">
        <div class="col-12">

        <?= DataTables::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            // Optional (only if you want to override the defaults)
            'tableOptions' => [
                'class' => 'table card-table table-vcenter text-nowrap datatable',
            ],
            // Optional (only if you want to override the defaults)
            'clientOptions' => [
                "lengthMenu" => [[10,20,50,-1], [10,20,50,Yii::t('app',"All")]],
                "info" => true,
                "responsive" => true, 
                "dom" => 'lBfTrtip',
                "tableTools" => [],
                'buttons' => [
                    [
                        'extend' => 'copy',
                        'text'   => 'Copy to Clipboard'
                    ],
                    'excel',
                    'pdf'
                ],
            ],
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                //columns

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]);?>

        </div>
    </div>
```
This extension uses the Bootstrap 4 integration plugin to provide a Yii2 style by default.

The TableTools plugin is also available. Specify the DOM and the tableTools settings in the clientOptions array as the following example.

```php
...
'clientOptions' => [
    "lengthMenu"=> [[20,-1], [20,Yii::t('app',"All")]],
    "info"=>false,
    "responsive"=>true, 
    "dom"=> 'lfTrtip',
    "tableTools"=>[
        //empty for load button assets
    ],
    'buttons'   => ['copy', 'excel', 'pdf'],
],
...
```

You can also use DataTables in the JavaScript layer of your application. To achieve this, you need to include DataTables as a dependency of your Asset file. In this case, you could use `yii\grid\GridView` or using the datatables options `retrieve => true` to avoid errors. In both case all options must be in the Javascript object.

```php
public $depends = [
...
'nightycrawl\datatables\DataTablesAsset',
...
];
```
