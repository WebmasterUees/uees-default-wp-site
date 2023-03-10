<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit52642f55db3d786d0497624deacbe17e
{
	private static $loader;

	public static function loadClassLoader($class)
	{
		if ('Composer\AutoloadTablePress\ClassLoader' === $class) {
			require __DIR__ . '/ClassLoader.php';
		}
	}

	/**
	 * @return \Composer\AutoloadTablePress\ClassLoader
	 */
	public static function getLoader()
	{
		if (null !== self::$loader) {
			return self::$loader;
		}

		require __DIR__ . '/platform_check.php';

		spl_autoload_register(array('ComposerAutoloaderInit52642f55db3d786d0497624deacbe17e', 'loadClassLoader'), true, true);
		self::$loader = $loader = new \Composer\AutoloadTablePress\ClassLoader(\dirname(__DIR__));
		spl_autoload_unregister(array('ComposerAutoloaderInit52642f55db3d786d0497624deacbe17e', 'loadClassLoader'));

		require __DIR__ . '/autoload_static.php';
		call_user_func(\Composer\Autoload\ComposerStaticInit52642f55db3d786d0497624deacbe17e::getInitializer($loader));

		$loader->setClassMapAuthoritative(true);
		$loader->register(true);

		return $loader;
	}
}
