<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 *
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */
return [
    'page' => [
        'childService' => [
            'widget' => [
                'widgetConfig' => [
                    'base' => [
                        'brandsMenu' => [
                            // 动态数据提供部分
                            'class' => 'appfront\local\local_modules\BrandsMenu\block\index\Index',
                            // 根据多模板的优先级，依次去模板找查找该文件，直到找到这个文件。
                            'view'  => 'widgets/brandsMenu.php',
                            // 缓存
                            'cache' => [
                                // 'timeout'    => 4500,
                            ],
                        ],
                    ],
                ],
            ],
            //'widget' => [
            //],
            'asset' => [
                // 'class' => 'fecshop\services\page\Asset',
                // 在js后面加一个v参数，修改js后，更改v参数，否则，浏览器会使用缓存。
                // /assets/dbdba3fa/js/js.js?v=2
                'jsVersion'        => 2,
                'cssVersion'       => 2,
                /**
                 * @var string the root directory string the published asset files.
                 * 设置: js和css的发布路径
                 * 譬如设置为：'@appimage/assets'，也可以将 @appimage 换成绝对路径
                 */
                'basePath' => '@webroot/assets',
                /**
                 * @var string the base URL through which the published asset files can be accessed.
                 * 设置: js和css的URL路径
                 * 可以将 @web 换成域名 ， 譬如  `http:://www/fecshop.com/assets`
                 * 这样就可以将js和css文件使用独立的域名了【把域名对应的地址对应到$basePath】。
                 */
                'baseUrl' => '@web/assets',
                
                // js and css config example:
                /**
                 * 'jsOptions'	=> [
                 *     # js config 1
                 *     [
                 *         'options' => [
                 *             'position' =>  'POS_END',
                 *         //	'condition'=> 'lt IE 9',
                 *         ],
                 *         'js'	=>[
                 *             'js/my.js',
                 *         ],
                 *     ],
                 *     # js config 2
                 *     //[
                 *     //    'options' => [
                 *     //        'condition'=> 'lt IE 9',
                 *     //    ],
                 *     //    'js'	=>[
                 *     //        'js/ie9js.js'
                 *     //    ],
                 *     //],
                 * ],
                 * # css config
                 * 'cssOptions'	=> [
                 *     # css config 1.
                 *     [
                 *         'css'	=>[
                 *             'css/my.css',
                 *         ],
                 *     ],
                 * 
                 *     # css config 2.
                 *     //[
                 *     //    'options' => [
                 *     //        'condition'=> 'lt IE 9',
                 *     //    ],
                 *     //    'css'	=>[
                 *     //        'css/ltie9.css',
                 *     //    ],
                 *     //],
                 * ],
                 **/
            ],

            'menu' => [
                'displayHome' => [
                    'enable' => false,        // 是否在菜单中显示home
                    'display'=> 'Home',        // 显示对应的字符。
                ],
                /*
                 *	在菜单前面部分（产品分类菜单的前面部分）的自定义菜单。参考behindCustomMenu里面的格式
                 */

                'frontCustomMenu' => [

                ],

                /*
                 *	在菜单后面部分（产品分类菜单的前面部分）的自定义菜单
                 */
                'behindCustomMenu' => [
                    /*
                    [
                        'name'        => 'custom menu',            // 菜单名字
                        'urlPath'     => '/my-custom-menu.html',    // 菜单对应的url
                        'childMenu'   => [                        // 子菜单
                            [
                                'name'        => 'my custom menu 2',
                                'urlPath'     => '/my-custom-menu-2.html',
                            ],
                            [
                                'name'        => 'my custom menu 3',
                                'urlPath'     => '/my-custom-menu-2.html',
                                'childMenu'   => [
                                    [
                                        'name'        => 'my custom menu 3',
                                        'urlPath'     => '/my-custom-menu-2.html',
                                    ],
                                    [
                                        'name'        => 'my custom menu 3',
                                        'urlPath'     => '/my-custom-menu-2.html',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    */
                ],
            ],
        ],
    ],
];
