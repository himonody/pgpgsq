<?php
//products模型用来操作products表
class ProductsModel extends Model{
	//获取products表的数据
	public function getList() {
		return $this->mypdo->fetchAll('select * from products');
	}
}
