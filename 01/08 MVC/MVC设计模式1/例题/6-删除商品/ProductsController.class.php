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
	//删除商品
	public function delAction() {
		$id=(int)$_GET['proid'];	//如果参数明确是整数，要强制转成整形
		$model=new ProductsModel();
		if($model->del($id))
			header('location:index.php?c=Products&a=list');
		else {
			echo '删除失败';
			exit;
		}
	}
}

