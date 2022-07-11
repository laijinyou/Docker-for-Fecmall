<style>
  /* since nested groupes are not supported we have to use 
      regular css for the nested dropdowns
  */
  li > ul {
    transform: translatex(100%) scale(0);
  }
  li:hover > ul {
    transform: translatex(100%) scale(1);
  }
  li:hover > button svg {
    color: rgb(220 38 38);
  }
</style>

<div class="bg-black text-white">
  <!-- 上部分 -->
  <div class="h-16 text-white flex justify-between relative max-w-screen-xl mx-auto">
    <!-- menu -->
    <div class="p-2 lg:hidden" id="mobile-menu-opened">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
      </svg>
    </div>
    <!-- logo -->
    <div class="px-2">
      <div class="bg-zinc-700 h-16 pt-1 px-2 transform -skew-x-12 w-20 lg:w-40 lg:h-32">
        <img class="transform skew-x-12" src="https://www.digikey.cn/-/media/Images/Header/logo_dk.png" alt="logo">
        <div class="text-center text-xs italic font-bold transform skew-x-12 lg:text-lg">德州电子</div>
      </div>
    </div>
    <!-- search -->
    <div class="h-16 bg-zinc-500 absolute top-16 w-full sm:static sm:bg-black lg:w-96 lg:ml-16 lg:mt-4">
      <div class="flex justify-start py-2 mx-4 lg:w-96">
        <input type="search" class="w-full h-11 border-0 focus:ring-0 appearance-none">
        <button class="bg-white border-0">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-11 text-red-500" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
          </svg>
        </button>
      </div>
    </div>
    <!-- languages -->
    <div class="w-full py-3 pl-4 sm:w-14 sm:pl-0 lg:w-full lg:pl-8 lg:mt-4">
      <img class="w-10" src="https://www.digikey.com/-/media/Images/Global/Flags/Square/CN.png" alt="languages">
    </div>
    <!-- account -->
    <div class="p-2">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
      </svg>
    </div>
    <!-- shopping-cart -->
    <div class="p-2">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
      </svg>
    </div>
  </div>

  <!-- Menu -->
  <div class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full h-full bg-opacity-60 bg-black hidden lg:static lg:h-16 lg:block" id="menu-main">
    <div class="relative w-3/4 h-full bg-white lg:static lg:bg-black lg:max-w-screen-xl lg:mx-auto">
      <!-- Left Sider Logo -->
      <div class="h-16 bg-black flex justify-between p-2.5 lg:hidden">
        <img class="h-11" src="https://www.digikey.cn/-/media/Images/Header/logo_dk.png" alt="logo">
        <div id="moblie-menu-closed">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-11 w-11" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </div>
      </div>

      <!-- 产品、制造商、资源 -->
      <div class="text-black lg:pl-64 lg:pt-8">
        <!-- 产品 -->
        <div class="group">
          <button aria-haspopup="true" aria-controls="menu" class="text-white outline-none focus:outline-none px-3 py-1 min-w-32 group-hover:bg-gray-700">
            <a href="javascript:void(0);" class="flex items-center">
              <span class="pr-1 font-bold flex-1">製品</span>
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </span>
            </a>
          </button>
          <ul id="menu" aria-hidden="true" class="z-50 text-xs bg-white border scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out origin-top w-60 h-96 py-4">
            <li class="p-2 hover:bg-gray-100 hover:border-l-2 hover:border-red-600 relative">RF/IFおよびRFID</li>
            <li class="p-2 hover:bg-gray-100 hover:border-l-2 hover:border-red-600">はんだ付け、はんだ吸取、リワーク製品</li>
            <li class="p-2 hover:bg-gray-100 hover:border-l-2 hover:border-red-600">アイソレータ</li>
            <li class="p-2 hover:bg-gray-100 hover:border-l-2 hover:border-red-600">インダクタ、コイル、チョーク</li>
            <li class="p-2 hover:bg-gray-100 hover:border-l-2 hover:border-red-600">オプトエレクトロニクス</li>
            <li class="p-2 hover:bg-gray-100 hover:border-l-2 hover:border-red-600">
              <button aria-haspopup="true" aria-controls="menu-lang" class="w-full text-left outline-none focus:outline-none">
                <a href="javascript:void(0);" class="flex items-center">
                  <span class="pr-1 flex-1">オーディオ製品</span>
                  <span class="mr-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                  </span>
                </a>
              </button>
              <ul id="menu-lang" aria-hidden="true" class="bg-white border absolute top-0 right-0 transition duration-150 ease-in-out origin-top-left w-60 h-96 py-4">
                <li class="p-2 hover:bg-gray-100 hover:border-l-2 hover:border-red-600">HeNeレーザーシステム</li>
                <li class="p-2 hover:bg-gray-100 hover:border-l-2 hover:border-red-600">
                  <button aria-haspopup="true" aria-controls="menu-lang-python" class="w-full text-left outline-none focus:outline-none">
                    <a href="javascript:void(0);" class="flex items-center">
                      <span class="pr-1 flex-1">ディスプレ</span>
                      <span class="mr-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                      </span>
                    </a>
                  </button>
                  <ul id="menu-lang-python" aria-hidden="true" class="bg-white border absolute top-0 right-0 transition duration-150 ease-in-out origin-top-left w-60 h-96 py-4">
                    <li class="p-2 hover:bg-gray-100 hover:border-l-2 hover:border-red-600">キセノン照明</li>
                    <li class="p-2 hover:bg-gray-100 hover:border-l-2 hover:border-red-600">キセノン照明キセノン照明</li>
                  </ul>
                </li>
                <li class="p-2 hover:bg-gray-100 hover:border-l-2 hover:border-red-600">キセノンキセノンキセノン</li>
                <li class="p-2 hover:bg-gray-100 hover:border-l-2 hover:border-red-600">Rustキセノンキセノンキセノン</li>
              </ul>
            </li>
            <li class="p-2 hover:bg-gray-100 hover:border-l-2 hover:border-red-600">ケーブル、ワイヤ - 管理</li>
          </ul>
        </div>


        <!-- 制造商 -->
        <!-- 资源 -->


      </div>
    </div>
  </div>
</div>










<script>
  <?php $this->beginBlock('mobile_sider_menu') ?>
  $(document).ready(function() {
    // 打开移动端菜单
    $("#mobile-menu-opened").click(function() {
      // 每次打开都需要初始化所有hidden的值
      $("#menu-main").removeClass("hidden");
      $("#menu1-level1, #menu2-level1, #menu3-level1").removeClass("hidden");
      $("#menu1-level2, #menu2-level2, #menu3-level2").addClass("hidden");
      $("#menu1-level3, #menu2-level3, #menu3-level3").addClass("hidden");
    });

    // 关闭移动端菜单
    $("#moblie-menu-closed").click(function() {
      // 每次关闭都需要初始化所有hidden的值
      $("#menu-main").removeClass("hidden");
      $("#menu1-level1, #menu2-level1, #menu3-level1").removeClass("hidden");
      $("#menu1-level2, #menu2-level2, #menu3-level2").addClass("hidden");
      $("#menu1-level3, #menu2-level3, #menu3-level3").addClass("hidden");
    });

    // 点击menu1-level1
    $("#menu1-level1").click(function() {
      $("#menu1-level1, #menu2-level1, #menu3-level1").addClass("hidden");
      $("#menu1-level2").removeClass("hidden");
    });

    // 点击二级菜单后退
    $("#menu-level2-back").click(function() {
      $("li#menu-level1").removeClass("hidden");
      $("#menu-level2").addClass("hidden");
    });

    // 点击二级菜单
    $("#product-menu-2").click(function() {
      $("#menu-level2").addClass("hidden");
      $("#menu-level3").removeClass("hidden");
    });

    // 点击三级菜单后退
    $("#menu-level3-back").click(function() {
      $("#menu-level3").addClass("hidden");
      $("#menu-level2").removeClass("hidden");
    });
  });
  <?php $this->endBlock(); ?>
</script>
<?php $this->registerJs($this->blocks['mobile_sider_menu'], \yii\web\View::POS_END); ?>