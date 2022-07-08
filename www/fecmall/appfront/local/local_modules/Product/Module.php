<?php

namespace appfront\local\local_modules\Product;

use fecshop\app\appfront\modules\AppfrontModule;
use Yii;

class Module extends AppfrontModule
{
    public $blockNamespace;

    public function init()
    {
        //echo 1;exit;
        // 以下代码必须指定
        $nameSpace = __NAMESPACE__;
        // web controller
        if (Yii::$app instanceof \yii\web\Application) {
            $this->controllerNamespace = $nameSpace . '\\controllers';
            $this->blockNamespace = $nameSpace . '\\block';
        }
        Yii::$service->page->theme->layoutFile = 'home.php';
        parent::init();
    }
}