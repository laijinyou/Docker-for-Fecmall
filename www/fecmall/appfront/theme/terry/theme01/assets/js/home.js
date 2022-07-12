$(document).ready(function(){  
	// 显示H5菜单
  $("#show-menu").click(function() {
      // 先隐藏PC菜单
      $("#pc-menu").addClass("hidden");
      // 后显示菜单主体(菜单主体包含PC菜单和H5菜单)
      $("#main-menu").removeClass("hidden");
      // 再显示H5菜单
      $("#h5-menu").removeClass("hidden");


    });

  // 隐藏H5菜单
  $("#hide-menu").click(function() {
    // 先隐藏菜单主体(菜单主体包含PC菜单和H5菜单)
    $("#main-menu").addClass("hidden");
    // 后隐藏H5菜单
    $("#h5-menu").addClass("hidden");
    // 再显示PC菜单
    $("#pc-menu").removeClass("hidden");
    // 初始化H5菜单的hidden
    $("#products-menu").removeClass("hidden");
    $("#products-menu-l1").addClass("hidden");
  });

  // 显示产品一级菜单
  $("#products-menu").click(function() {
    // 先隐藏产品菜单
    $("#products-menu").addClass("hidden");
    // 再显示产品一级菜单
    $("#products-menu-l1").removeClass("hidden");
  });
});

// 显示产品层级菜单
function showProductsLevelMenu(level, clickId) {
  // 获取当前层级点击id
  const id = "#products-menu-l" + level + " #" + clickId
  // 隐藏当前层级的所有同胞元素
  $(id).siblings().addClass("hidden");
  // 隐藏当前层级的后代a标签
  $(id).children("a").addClass("hidden");
  // 显示当前层级的后代div标签
  $(id).children("div").removeClass("hidden");
}