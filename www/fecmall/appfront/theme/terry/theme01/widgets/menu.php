<!-- 产品菜单 PC -->
<div class="group" id="menu-pc">
	<div id="menu1-level1" class="w-16 h-8 px-2 py-1 group-hover:bg-gray-700 text-white">
		<a href="javascript:void(0);" class="flex items-center">
			<div class="font-bold">製品</div>
			<div>
				<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
					<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
				</svg>
			</div>
		</a>
	</div>
	<?php if(is_array($categoryArr) && !empty($categoryArr)): ?>
		<ul id="menu2" class="z-50 text-xs bg-white border scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out origin-top w-60 h-96 py-4">
			<?php foreach($categoryArr as $category1): ?>
				<?php $childMenu1 = isset($category1['childMenu']) ? $category1['childMenu'] : null;   ?>
				<?php if (is_array($childMenu1) && !empty($childMenu1)) : ?>
					<li class="h-8 leading-4 p-2 hover:bg-gray-100 hover:border-l-2 hover:border-red-600">
						<div>
							<a href="<?= $category1['url'] ?>" class="flex items-center">
								<div class="pr-1 flex-1"><?= $category1['name'] ?></div>
								<div class="mr-auto">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
									</svg>
								</div>
							</a>
						</div>
						<ul id="menu3" class="bg-white border absolute top-0 right-0 transition duration-150 ease-in-out origin-top-left w-60 h-96 py-4">
							<?php foreach ($childMenu1 as $category2) : ?>
								<?php $childMenu2 = isset($category2['childMenu']) ? $category2['childMenu'] : null;   ?>
								<?php if (is_array($childMenu2) && !empty($childMenu2)) : ?>
									<li class="h-8 leading-4 p-2 hover:bg-gray-100 hover:border-l-2 hover:border-red-600">
										<div>
											<a href="<?= $category2['url'] ?>" class="flex items-center">
												<div class="pr-1 flex-1"><?= $category2['name'] ?></div>
												<div class="mr-auto">
												<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
													<path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
												</svg>
												</div>
											</a>
										</div>
										<ul id="menu4" class="bg-white border absolute top-0 right-0 transition duration-150 ease-in-out origin-top-left w-60 h-96 py-4">
											<?php foreach ($childMenu2 as $category3) : ?>
												<li class="h-8 leading-4 p-2 hover:bg-gray-100 hover:border-l-2 hover:border-red-600"><a href="<?= $category3['url'] ?>"><?= $category3['name'] ?></a></li>
											<?php endforeach; ?>	
										</ul>
									</li>
								<?php else: ?>
									<li class="h-8 leading-4 p-2 hover:bg-gray-100 hover:border-l-2 hover:border-red-600"><a href="<?= $category2['url'] ?>"><?= $category2['name'] ?></a></li>
								<?php endif; ?>
							<?php endforeach; ?>
							<div class="mt-3"><a href=""><div class="p-2 text-blue-800 font-bold">阅读全部</div></a></div>
						</ul>
					</li>
				<?php else: ?>
					<li class="h-8 leading-4 p-2 hover:bg-gray-100 hover:border-l-2 hover:border-red-600"><a href="<?= $category1['url'] ?>"><?= $category1['name'] ?></a></li>
				<?php endif; ?>
			<?php endforeach; ?>
			<div class="mt-3"><a href=""><div class="p-2 text-blue-800 font-bold">阅读全部</div></a></div>
		</ul>
	<?php endif; ?>
</div>

<!-- 产品菜单 H5 -->
<div class="hidden" id="menu-h5">
	<div id="products-level1">
		<a href="javascript:void(0);">
			<div class="px-4 py-2 flex justify-between border-b-2">
			<div class="font-normal py-1">製品</div>
			<div>
				<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 my-2" viewBox="0 0 20 20" fill="currentColor">
					<path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
				</svg>
			</div>
			</div>
		</a>
	</div>
	<?php if (is_array($categoryArr) && !empty($categoryArr)) : ?>
		<div id="products-level2" class="text-sm hidden">
			<div class="flex items-center py-3 px-2 mb-4 border-b-2">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 font-bold" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					<path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
				</svg>
				<div class="text-xs w-full">后退</div>
			</div>
			<?php foreach ($categoryArr as $category1) : ?>
				<?php $childMenu1 = isset($category1['childMenu']) ? $category1['childMenu'] : null;   ?>
				<?php if (is_array($childMenu1) && !empty($childMenu1)) : ?>
					<div>
						<a href="javascript:void(0);">
							<div class="px-4 py-2 flex justify-between">
								<div class=""><?= $category1['name'] ?></div>
								<div class="">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 my-0.5" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
									</svg>
								</div>
							</div>
						</a>
						<div id="menu-h5-level3" class="hidden">
							<?php foreach ($childMenu1 as $category2) : ?>
								<?php $childMenu2 = isset($category2['childMenu']) ? $category2['childMenu'] : null;   ?>
								<?php if (is_array($childMenu2) && !empty($childMenu2)) : ?>
									<div>
										<a href="javascript:void(0);">
											<div class="px-4 py-2 flex justify-between">
												<div class=""><?= $category2['name'] ?></div>
												<div class="">
													<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 my-0.5" viewBox="0 0 20 20" fill="currentColor">
														<path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
													</svg>
												</div>
											</div>
										</a>
										<div id="menu-h5-level4" class="hidden">
											<?php foreach ($childMenu2 as $category3) : ?>
												<div><a href="javascript:void(0);" class=""><div class="px-4 py-2"><?= $category3['name'] ?></div></a></div>
											<?php endforeach; ?>	
										</div>
									</div>
								<?php else: ?>
									<div><a href="javascript:void(0);" class=""><div class="px-4 py-2"><?= $category2['name'] ?></div></a></div>
								<?php endif; ?>
							<?php endforeach; ?>
						</div>
					</div>
				<?php else: ?>
					<div><a href="javascript:void(0);" class=""><div class="px-4 py-2"><?= $category1['name'] ?></div></a></div>	
				<?php endif; ?>
			<?php endforeach; ?>
			<div class="border-t-2 mt-4"><a href=""><div class="text-center p-6 text-blue-800 text-xs font-bold">阅读全部</div></a></div>
		</div>
	<?php endif; ?>
</div>