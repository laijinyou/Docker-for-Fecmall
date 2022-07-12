<?php
/**
 * 品牌菜单widget
 */

namespace appfront\local\local_modules\BrandsMenu\block\index;

use Yii;
use yii\base\InvalidValueException;


class Index
{
    public function getLastData()
    {
        $brandsMenuArr = Yii::$service->product->brand->getAllBrandIdAndNames();
       
        return [
            'brandsMenuArr' => $brandsMenuArr,
        ];
    }
}