<?php
//基础模型
class Model {
	protected $mypdo;
	public function __construct() {
		$this->initMyPDO();
	}
	//连接数据库
	private function initMyPDO() {
		$param=array(
			'user'	=>	'root',
			'pwd'	=>	'root'
		);
		$this->mypdo= MyPDO::getInstance($param);
	}
}