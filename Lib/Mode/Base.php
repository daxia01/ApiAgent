<?php
namespace Yurun\ApiAgent\Mode;

/**
 * 模式基类
 */
abstract class Base
{
	/**
	 * 模式配置
	 * @var array
	 */
	public $config;

	public function __construct()
	{
		$className = get_called_class();
		if ($pos = strrpos($className, '\\'))
		{
			$className = substr($className, $pos + 1);
		}
		else
		{
			$className =  $pos;
		}
		// 加载模式配置
		$this->config = include ROOT_PATH . 'Config/' . strtolower($className) . '.php';
	}

	/**
	 * 运行
	 */
	public abstract function run();
}