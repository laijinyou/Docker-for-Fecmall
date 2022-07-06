<?php
$jsOptions = [
	[
		'options' => [
			'position' =>  'POS_END',
		],
		'js'	=>[
			'js/jquery-3.6.0.min.js',
			'OwlCarousel2/owl.carousel.min.js',
		],
	],
];

$cssOptions = [
	[
		'css'	=>[
      'css/home.css',
			'OwlCarousel2/owl.theme.default.min.css',
      'OwlCarousel2/owl.carousel.min.css',
		],
	],
];
\Yii::$service->page->asset->jsOptions 	= \yii\helpers\ArrayHelper::merge($jsOptions, \Yii::$service->page->asset->jsOptions);
\Yii::$service->page->asset->cssOptions = \yii\helpers\ArrayHelper::merge($cssOptions, \Yii::$service->page->asset->cssOptions);				
\Yii::$service->page->asset->register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?= $currentLangCode = Yii::$service->store->currentLangCode; ?>" lang="<?= $currentLangCode ?>">
<head>
<?= Yii::$service->page->widget->render('base/head',$this); ?>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<script>
    tailwind.config = {
      theme: {
        extend: {
			gridTemplateRows: {
				'7': 'repeat(7, minmax(0, 1fr))',
          }
        }
      }
    }
  </script>
</head>
<body>
<?= Yii::$service->page->widget->render('base/beforeContent',$this); ?>
<?php $this->beginBody() ?>
	<!-- Header -->
	<?= Yii::$service->page->widget->render('base/header',$this); ?>



	<!-- Main -->
	<?= $content; ?>


	<!-- Footer -->
	<?= Yii::$service->page->widget->render('base/footer',$this); ?>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

