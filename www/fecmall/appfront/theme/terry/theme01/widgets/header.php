<style>
  /* since nested groupes are not supported,
     we have to use regular css for the nested dropdowns.
  */
  li > ul {
    transform: translatex(100%) scale(0);
  }
  li:hover > ul {
    transform: translatex(100%) scale(1);
  }
  li:hover > div svg {
    color: rgb(220 38 38);
  }
</style>

<div class="bg-black text-white">
  <!-- 上部分 -->
  <div class="h-16 text-white flex justify-between relative max-w-screen-xl mx-auto">
    <!-- menu -->
    <div class="p-2 lg:hidden" id="menu-h5-opened">
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
        <div id="menu-h5-closed">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-11 w-11" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </div>
      </div>

      <!-- 产品、制造商、资源 -->
      <div class="text-black lg:pl-64 lg:pt-8">

        <!-- 产品菜单 -->
        <?= Yii::$service->page->widget->render('base/menu',$this); ?>


        <!-- 制造商 -->
        <!-- 资源 -->


      </div>
    </div>
  </div>
</div>





<script>
  <?php $this->beginBlock('menu_h5_and_pc') ?>
  $(document).ready(function() {
    // 打开H5菜单
    $("#menu-h5-opened").click(function() {
      // 初始化所有hidden的值
      $("#menu-main").removeClass("hidden");
      $("div#menu-pc").addClass("hidden");
      $("div#menu-h5").removeClass("hidden");

      $("#products-level1").removeClass("hidden");
      $("#products-level2").addClass("hidden");
      $("#products-level3").addClass("hidden");
      $("#products-level4").addClass("hidden");
    });

    // 关闭H5菜单
    $("#menu-h5-closed").click(function() {
      // 初始化所有hidden的值
      $("#menu-main").addClass("hidden");
      $("div#menu-pc").removeClass("hidden");
      $("div#menu-h5").addClass("hidden");
    });

    // 点击产品products-level1
    $("#products-level1").click(function() {
      $("#products-level2").removeClass("hidden");
      $("#products-level1").addClass("hidden");
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
<?php $this->registerJs($this->blocks['menu_h5_and_pc'], \yii\web\View::POS_END); ?>