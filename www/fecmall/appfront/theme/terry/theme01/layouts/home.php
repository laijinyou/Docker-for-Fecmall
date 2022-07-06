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
			<div class="bg-white rounded-md border-solid border-2 shadow-md font-bold p-5">
				<div class="mb-2">
					<span class="text-lg">产品</span>
					<span class="text-xs text-blue-600 pl-2"><a href="">查看全部</a></span>
				</div>
				<div class="grid gap-2 sm:grid-rows-7 sm:grid-flow-col lg:grid-rows-none lg:grid-flow-row">
					<div class="text-sm"><a href="">自动化和控制</a></div>
					<div class="text-sm"><a href="">盒子，外壳，机架</a></div>
					<div class="text-sm"><a href="">电缆组件</a></div>
					<div class="text-sm"><a href="">电缆，电线</a></div>
					<div class="text-sm"><a href="">连接器，互连器件</a></div>
					<div class="text-sm"><a href="">机电元件</a></div>
					<div class="text-sm"><a href="">五金件，紧固件，配件</a></div>
					<div class="text-sm"><a href="">网络解决方案</a></div>
					<div class="text-sm"><a href="">无源元件</a></div>
					<div class="text-sm"><a href="">电源，电路保护</a></div>
					<div class="text-sm"><a href="">半导体</a></div>
					<div class="text-sm"><a href="">测试产品</a></div>
					<div class="text-sm"><a href="">工具</a></div>
					<div class="text-sm"><a href="">变压器</a></div>
				</div>
			</div>
			<!-- carousel -->
			<div class="my-3">
				<div id="fecshop-home-big-img">    
					<div class="w-full">          
						<div class="row">            
							<div class="span12">              
								<div id="owl-fecshop" class="owl-carousel">                
									<div class="item">
										<a href="http://appfront.fecmall.test/">
											<img class="lazyOwl" data-src="https://img.japanabc.com/appfront/images/en_1.jpg" alt="" />
										</a>
									</div>                
									<div class="item">
										<a href="http://appfront.fecmall.test/">
											<img class="lazyOwl" data-src="https://img.japanabc.com/appfront/images/en_2.jpg" alt="" />
										</a>
									</div>                
									<div class="item">
										<a href="http://appfront.fecmall.test/">
											<img class="lazyOwl" data-src="https://img.japanabc.com/appfront/images/en_3.jpg" alt="" />
										</a>
									</div>              
								</div>            
							</div>          
						</div>        
					</div>    
				</div>
			</div>
			<!-- cards -->
			<div class="text-white hidden md:flex md:justify-between md:gap-2 lg:block lg:w-52">
				<div class="bg-[url('https://www.digikey.cn/-/media/Images/2021%20Homepage%20Images/Small/Boxes.jpg')]">
					<div class="bg-gradient-to-r from-gray-900 py-4 px-5">
						<div class="text-lg font-bold">配送信息</div>
						<p class="text-sm">您对订单状态或者什么时候安排交付有疑问吗？</p>
					</div>
				</div>
				<div class="bg-[url('https://www.digikey.cn/-/media/Images/2021%20Homepage%20Images/Small/Boxes.jpg')] lg:my-2">
					<div class="bg-gradient-to-r from-gray-900 py-4 px-5">
						<div class="text-lg font-bold">配送信息</div>
						<p class="text-sm">您对订单状态或者什么时候安排交付有疑问吗？</p>
					</div>
				</div>
				<div class="bg-[url('https://www.digikey.cn/-/media/Images/2021%20Homepage%20Images/Small/Boxes.jpg')]">
					<div class="bg-gradient-to-r from-gray-900 py-4 px-5">
						<div class="text-lg font-bold">配送信息</div>
						<p class="text-sm">您对订单状态或者什么时候安排交付有疑问吗？</p>
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
	<footer class="text-center bg-gray-900 text-white">
  <div class="container px-6 pt-6">
    <div class="flex justify-center mb-6">
      <a href="#!" type="button" class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
        <svg aria-hidden="true"
        focusable="false"
        data-prefix="fab"
        data-icon="facebook-f"
        class="w-2 h-full mx-auto"
        role="img"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 320 512"
      >
        <path
          fill="currentColor"
          d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
        ></path>
        </svg>
      </a>

      <a href="#!" type="button" class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
        <svg aria-hidden="true"
        focusable="false"
        data-prefix="fab"
          data-icon="twitter"
          class="w-3 h-full mx-auto"
          role="img"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 512 512"
        >
          <path
            fill="currentColor"
            d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
          ></path>
        </svg>
      </a>

      <a href="#!" type="button" class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
        <svg aria-hidden="true"
        focusable="false"
        data-prefix="fab"
          data-icon="google"
          class="w-3 h-full mx-auto"
          role="img"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 488 512"
        >
          <path
            fill="currentColor"
            d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"
          ></path>
        </svg>
      </a>

      <a href="#!" type="button" class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
        <svg aria-hidden="true"
        focusable="false"
        data-prefix="fab"
        data-icon="instagram"
          class="w-3 h-full mx-auto"
          role="img"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 448 512"
        >
          <path
            fill="currentColor"
            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
          ></path>
        </svg>
      </a>

      <a href="#!" type="button" class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
        <svg aria-hidden="true"
        focusable="false"
        data-prefix="fab"
        data-icon="linkedin-in"
          class="w-3 h-full mx-auto"
          role="img"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 448 512"
        >
          <path
            fill="currentColor"
            d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"
          ></path>
        </svg>
      </a>

      <a href="#!" type="button" class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
        <svg aria-hidden="true"
        focusable="false"
        data-prefix="fab"
        data-icon="github"
          class="w-3 h-full mx-auto"
          role="img"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 496 512"
        >
          <path
            fill="currentColor"
            d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"
          ></path>
        </svg>
      </a>
    </div>

    <div>
      <form action="">
        <div class="grid md:grid-cols-3 gird-cols-1 gap-4 flex justify-center items-center">
          <div class="md:ml-auto md:mb-6">
            <p class="">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>

          <div class="md:mb-6">
            <input
              type="text"
              class="
                form-control
                block
                w-full
                px-3
                py-1.5
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
              "
              id="exampleFormControlInput1"
              placeholder="Email address"/>
          </div>

          <div class="md:mr-auto mb-6">
            <button type="submit" class="inline-block px-6 py-2 border-2 border-white text-white font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
              Subscribe
            </button>
          </div>
        </div>
      </form>
    </div>

    <div class="grid lg:grid-cols-4 md:grid-cols-2">
      <div class="mb-6">
        <h5 class="uppercase font-bold mb-2.5">Links</h5>

        <ul class="list-none mb-0">
          <li>
            <a href="#!" class="text-white">Link 1</a>
          </li>
          <li>
            <a href="#!" class="text-white">Link 2</a>
          </li>
          <li>
            <a href="#!" class="text-white">Link 3</a>
          </li>
          <li>
            <a href="#!" class="text-white">Link 4</a>
          </li>
        </ul>
      </div>

      <div class="mb-6">
        <h5 class="uppercase font-bold mb-2.5">Links</h5>

        <ul class="list-none mb-0">
          <li>
            <a href="#!" class="text-white">Link 1</a>
          </li>
          <li>
            <a href="#!" class="text-white">Link 2</a>
          </li>
          <li>
            <a href="#!" class="text-white">Link 3</a>
          </li>
          <li>
            <a href="#!" class="text-white">Link 4</a>
          </li>
        </ul>
      </div>

      <div class="mb-6">
        <h5 class="uppercase font-bold mb-2.5">Links</h5>

        <ul class="list-none mb-0">
          <li>
            <a href="#!" class="text-white">Link 1</a>
          </li>
          <li>
            <a href="#!" class="text-white">Link 2</a>
          </li>
          <li>
            <a href="#!" class="text-white">Link 3</a>
          </li>
          <li>
            <a href="#!" class="text-white">Link 4</a>
          </li>
        </ul>
      </div>

      <div class="mb-6">
        <h5 class="uppercase font-bold mb-2.5">Links</h5>

        <ul class="list-none mb-0">
          <li>
            <a href="#!" class="text-white">Link 1</a>
          </li>
          <li>
            <a href="#!" class="text-white">Link 2</a>
          </li>
          <li>
            <a href="#!" class="text-white">Link 3</a>
          </li>
          <li>
            <a href="#!" class="text-white">Link 4</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-white" href="https://tailwind-elements.com/">Tailwind Elements</a>
  </div>
</footer>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

