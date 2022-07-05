<?php
$jsOptions = [
	[
		'options' => [
			'position' =>  'POS_END',
		],
		'js'	=>[
			'js/jquery-3.0.0.min.js',
			'js/jquery.lazyload.min.js',
			'js/owl.carousel.min.js',
			'js/js.js',
		],
	],
];

$cssOptions = [
	[
		'css'	=>[
			'css/owl.carousel.css',
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
</head>
<body>
<?= Yii::$service->page->widget->render('base/beforeContent',$this); ?>
<?php $this->beginBody() ?>
	<!-- Header -->
	<div class="h-32 bg-black">
		<!-- Menu,Logo,Languages,account,shopping-cart-->
		<div class="h-16 text-white flex justify-between">
			<div class="p-2">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-11 w-11" viewBox="0 0 20 20" fill="currentColor">
					<path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
				</svg>
			</div>
			<div class="px-2">
				<div class="bg-zinc-700 h-16 pt-1 px-2 transform -skew-x-12">
					<img class="transform skew-x-12" src="https://www.digikey.cn/-/media/Images/Header/logo_dk.png" alt="logo">
					<div class="text-center text-xs italic font-bold transform skew-x-12">德州电子</div>
				</div>
			</div>
			<div class="w-full py-4 pl-4">
				<img class="w-8" src="https://www.digikey.com/-/media/Images/Global/Flags/Square/CN.png" alt="languages">
			</div>
			<!-- account -->
			<div class="p-2">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-11 w-11" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					<path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
				</svg>
			</div>
			<!-- shopping-cart -->
			<div class="p-2">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-11 w-11" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					<path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
				</svg>
			</div>
		</div>
		<!-- Search -->
		<div class="h-16 bg-zinc-500">
			<div class="flex justify-start py-2 mx-4">
				<input 
					type="search" 
					class="w-full h-11 border-0 focus:ring-0 appearance-none"
				>
				<button class="bg-white border-0">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-11 text-red-500" viewBox="0 0 20 20" fill="currentColor">
						<path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
					</svg>
				</button>
			</div>
		</div>
	</div>



	<!-- Main -->
	<div class="bg-gray-50 p-5">
		<!-- categories,carousel,cards -->
		<div>
			<!-- categories -->
			<div class="bg-white rounded-md border-solid border-2 shadow-md">
				<ul class="font-bold p-5">
					<div class="mb-2">
						<span class="text-lg">产品</span>
						<span class="text-xs text-blue-600 pl-2"><a href="">查看全部</a></span>
					</div>
					<li class="text-sm leading-loose"><a href="">自动化和控制</a></li>
					<li class="text-sm leading-loose"><a href="">盒子，外壳，机架</a></li>
					<li class="text-sm leading-loose"><a href="">电缆组件</a></li>
					<li class="text-sm leading-loose"><a href="">电缆，电线</a></li>
					<li class="text-sm leading-loose"><a href="">连接器，互连器件</a></li>
					<li class="text-sm leading-loose"><a href="">机电元件</a></li>
					<li class="text-sm leading-loose"><a href="">五金件，紧固件，配件</a></li>
					<li class="text-sm leading-loose"><a href="">网络解决方案</a></li>
					<li class="text-sm leading-loose"><a href="">无源元件</a></li>
					<li class="text-sm leading-loose"><a href="">电源，电路保护</a></li>
					<li class="text-sm leading-loose"><a href="">半导体</a></li>
					<li class="text-sm leading-loose"><a href="">测试产品</a></li>
					<li class="text-sm leading-loose"><a href="">工具</a></li>
					<li class="text-sm leading-loose"><a href="">变压器</a></li>
				</ul>
			</div>
			<!-- carousel -->
			<div class="my-3">
				



				<div id="default-carousel" class="relative">
					<!-- Carousel wrapper -->
					<div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
							<!-- Item 1 -->
						<div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20">
							<img src="https://img.japanabc.com/appfront/images/en_1.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="carousel">
						</div>
						<!-- Item 2 -->
						<div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full z-10">
							<img src="https://img.japanabc.com/appfront/images/en_2.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="carousel">
						</div>
						<!-- Item 3 -->
						<div class="duration-700 ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10">
							<img src="https://img.japanabc.com/appfront/images/en_3.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="carousel">
						</div>
					</div>
					<!-- Slider indicators -->
					<div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
						<button class="w-3 h-3 rounded-full bg-red-500"></button>
						<button class="w-3 h-3 rounded-full bg-white/50"></button>
						<button class="w-3 h-3 rounded-full bg-white/50"></button>
					</div>
				</div>
			</div>
			<!-- cards -->
			<div class="grid grid-cols-3 gap-3 text-white">
				<div class="bg-[url('https://www.digikey.cn/-/media/Images/2021%20Homepage%20Images/Small/Boxes.jpg')]">
					<div class="bg-gradient-to-r from-gray-900 py-4 px-5">
						<div class="text-lg font-bold">配送信息</div>
						<p class="text-sm">您对订单状态或者什么时候安排交付有疑问吗？</p>
					</div>
				</div>
				<div class="bg-[url('https://www.digikey.cn/-/media/Images/2021%20Homepage%20Images/Small/Boxes.jpg')]">
					<div class="bg-gradient-to-r from-gray-900 py-4 px-5">
						<div class="text-lg font-bold">配送信息</div>
						<p class="text-sm sm:hidden">您对订单状态或者什么时候安排交付有疑问吗？</p>
					</div>
				</div>
				<div class="bg-[url('https://www.digikey.cn/-/media/Images/2021%20Homepage%20Images/Small/Boxes.jpg')]">
					<div class="bg-gradient-to-r from-gray-900 py-4 px-5">
						<div class="text-lg font-bold">配送信息</div>
						<p class="text-sm sm:hidden">您对订单状态或者什么时候安排交付有疑问吗？</p>
					</div>
				</div>
			</div>
		</div>

		<!-- tools cards -->
		<div class="my-3 grid grid-rows-3 gap-3">
			<div class="flex justify-between font-bold p-5 bg-white rounded-md border-solid border-2 shadow-md">
				<ul>
					<h2 class="text-lg mb-2">工具</h2>
					<li class="text-sm leading-loose"><a href="">在线换算器</a></li>
					<li class="text-sm leading-loose"><a href="">Scheme-it</a></li>
					<li class="text-sm leading-loose"><a href="">参考设计库</a></li>
					<li class="text-sm leading-loose"><a href="">EDA 和设计工具</a></li>
				</ul>
				<img class="w-48" src="https://www.digikey.cn/-/media/Images/2021%20Homepage%20Images/Resource%20List/Tools.png" alt="tools">
			</div>
			<div class="flex justify-between font-bold p-5 bg-white rounded-md border-solid border-2 shadow-md">
				<ul>
					<h2 class="text-lg mb-2">工具</h2>
					<li class="text-sm leading-loose"><a href="">在线换算器</a></li>
					<li class="text-sm leading-loose"><a href="">Scheme-it</a></li>
					<li class="text-sm leading-loose"><a href="">参考设计库</a></li>
					<li class="text-sm leading-loose"><a href="">EDA 和设计工具</a></li>
				</ul>
				<img class="w-48" src="https://www.digikey.cn/-/media/Images/2021%20Homepage%20Images/Resource%20List/Tools.png" alt="tools">
			</div>
			<div class="flex justify-between font-bold p-5 bg-white rounded-md border-solid border-2 shadow-md">
				<ul>
					<h2 class="text-lg mb-2">工具</h2>
					<li class="text-sm leading-loose"><a href="">在线换算器</a></li>
					<li class="text-sm leading-loose"><a href="">Scheme-it</a></li>
					<li class="text-sm leading-loose"><a href="">参考设计库</a></li>
					<li class="text-sm leading-loose"><a href="">EDA 和设计工具</a></li>
				</ul>
				<img class="w-48" src="https://www.digikey.cn/-/media/Images/2021%20Homepage%20Images/Resource%20List/Tools.png" alt="tools">
			</div>
		</div>
		
		<!-- special products -->
		<div class="my-3">
			<h2 class="text-lg mb-2 font-bold">特色产品</h2>
			<div class="bg-white rounded-md border-solid border-2 shadow-md p-5">
				<a href="">
					<img class="w-32" src="https://www.digikey.cn/-/media/Images/Vendors/P/web-panduit.png" alt="brand-logo">
					<h3 class="font-bold text-xs my-2">Panduit 的 PXE 系列移动打印机</h3>
					<img class="mx-auto my-2" src="https://www.digikey.cn/-/media/Images/Product%20Highlights/P/Panduit%20Corp/MP100%20and%20MP300%20Portable%20Label%20Printers/panduit_MP75-MP200-printers_image.jpg" alt="cover">
					<p class="text-xs">购买一定数量的标签色带，即可免费获赠 MP75、MP100、MP200 或 MP300 PXE 系列移动打印机一台。查看兑换表了解详情。</p>
				</a>
			</div>
		</div>

		<!-- special makers -->
		<div>
			<h2 class="text-lg mb-2 font-bold">特色制造商<span class="text-xs text-blue-600 pl-2"><a href="">查看全部</a></span></h2>
			<div class="grid grid-cols-3 gap-3">
				<div class="bg-white rounded-md border-solid border-2 shadow-md p-5">
					<a href="">
						<img src="https://www.digikey.cn/-/media/Images/Vendors/L/web-littelfuse.png" alt="brand-logo">
					</a>
				</div>
				<div class="bg-white rounded-md border-solid border-2 shadow-md p-5">
					<a href="">
						<img src="https://www.digikey.cn/-/media/Images/Vendors/L/web-littelfuse.png" alt="brand-logo">
					</a>
				</div>
				<div class="bg-white rounded-md border-solid border-2 shadow-md p-5">
					<a href="">
						<img src="https://www.digikey.cn/-/media/Images/Vendors/L/web-littelfuse.png" alt="brand-logo">
					</a>
				</div>
			</div>
		</div>
	</div>



	<!-- Footer -->
	<div class="bg-black text-gray-300">
		<div class="bg-zinc-500">
			保持联系
		</div>
		<div>
			<div>
				1
			</div>
			<div>
				1
			</div>
			<div>
				1
			</div>
			<div>
				1
			</div>
		</div>
		<div>
			隐私声明等
		</div>
	</div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

