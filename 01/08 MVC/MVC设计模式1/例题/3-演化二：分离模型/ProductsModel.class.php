<?php
//products模型用来操作products表
class ProductsModel {
	//获取products表的数据
	public function getList() {
		//连接数据库
		$param=array(
			'user'	=>	'root',
			'pwd'	=>	'root'
		);
		$mypdo= MyPDO::getInstance($param);
		//获取商品数据
		return $mypdo->fetchAll('select * from products');
	}
}
