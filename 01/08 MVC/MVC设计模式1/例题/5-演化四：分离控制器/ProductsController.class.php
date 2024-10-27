<?php
//商品模块
class ProductsController {
	//获取商品列表
	public function listAction() {
		//实例化模型
		$model=new ProductsModel();
		$list=$model->getList();
		//加载视图
		require './products_list.html';
	}
}

