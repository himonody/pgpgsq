<?php
namespace Core;
//基础模型
class Model {
	protected $mypdo;
	public function __construct() {
		$this->initMyPDO();
	}
	//连接数据库
	private function initMyPDO() {
            $this->mypdo= MyPDO::getInstance($GLOBALS['config']['database']);
	}
}
