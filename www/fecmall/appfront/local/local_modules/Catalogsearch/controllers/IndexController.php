<?php

namespace appfront\local\local_modules\Catalogsearch\controllers;

use fecshop\app\appfront\modules\AppfrontController;
use Yii;
use yii\web\Response;

class IndexController extends AppfrontController
{

    public function init()
    {
        parent::init();
        //Yii::$service->page->theme->layoutFile = 'category_view.php';
    }
    
    public function actionIndex(){
       // echo 2;exit; 
        $data = $this->getBlock()->getLastData();
        return $this->render($this->action->id, $data);
    }
    
    
}