<?php
namespace Core;
class Model {
	private $table;
	public function __construct($table='') {
		if($table!='')		//直接给基础模型传递表名
			$this->table=$table;
		else {				//实例化子类模型
			$this->table=substr(basename(get_class($this)),0,-5);
		}

		echo $this->table,'<br>';
	}
}

namespace Model;
class ProductsModel extends \Core\Model{
	
}
namespace Controller\Admin;

new \Core\Model('news');			//news
new \Model\ProductsModel();			//Products


