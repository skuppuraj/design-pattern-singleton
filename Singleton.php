<?php
/**
 * Creates a single instance of an object. It is helpful to avoid duplicate the object 
 */

abstract class Singleton {

	/**
	 * @access private
	 * @var null
	 */
	protected static $instance = array();

	/**
	 * Singleton constructor. Do not define the construct
	 *
	 * @access private
	 */
	private function __construct() {}

	/**
	 * Returns the class instantiated instance.
	 *
	 * @access public
	 * @return null|static
	 */
	final public static function instance() {
		$class = (string) get_called_class();

		if (!array_key_exists($class, self::$instance)) {
			self::$instance[$class] = new static(...func_get_args());
		}

		return self::$instance[ $class ];
	}
}
