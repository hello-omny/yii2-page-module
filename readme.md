Yii2 page module
===================

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist omny/yii2-page-module "*"
```

or add

```
"omny/yii2-page-module": "*"
```

for actual code and fixes:

```
"omny/yii2-page-module": "dev-master"
```

to the require section of your `composer.json` file.

Migrate
---

The last thing you need to do is updating your database schema by applying the migrations. Make sure that you have properly configured db application component and run the following command:

```
$ php yii migrate/up --migrationPath=@vendor/omny/yii2-page-module/src/migrations
```

Using
---

Create controller and extend it from backend or frontend one:

```
use omny\yii2\page\module\controllers\BackendController; 

class PageController extends BackendController
{

}
```

or using by actions:

```
<?php

namespace app\controllers\backend;

use omny\yii2\page\module\actions\CreateAction;
use omny\yii2\page\module\actions\ManageAction;
use omny\yii2\page\module\actions\UpdateAction;

/**
 * Class PageController
 * @package app\controllers\backend
 */
class PageController extends AbstractController
{
    /**
     * @return array
     */
    public function actions()
    {
        return [
            'create' => [
                'class' => CreateAction::class
            ],
            'manage' => [
                'class' => ManageAction::class,
            ],
            'update' => [
                'class' => UpdateAction::class,
            ]
        ];
    }
}
```
