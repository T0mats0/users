<?php
/**
 * Copyright 2010 - 2013, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2013, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

class AllTagsPluginTest extends PHPUnit_Framework_TestSuite {

/**
 * Suite define the tests for this suite
 *
 * @return void
 */
	public static function suite() {
		$Suite = new CakeTestSuite('All Comments Plugin tests');

		$basePath = CakePlugin::path('Users') . DS . 'Test' . DS . 'Case' . DS;
		$Suite->addTestDirectory($basePath . DS . 'Controller');
		$Suite->addTestDirectory($basePath . DS . 'Controller' . DS . 'Component');
		$Suite->addTestDirectory($basePath . DS . 'Controller' . DS . 'Component' . DS . 'Auth');
		$Suite->addTestDirectory($basePath . DS . 'Model');
		return $Suite;
	}

}