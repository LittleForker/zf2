<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Controller
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2011 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */

/**
 * @namespace
 */
namespace ZendTest\Controller\Request;
use Zend\Controller\Request;

/**
 * Test class for Zend_Controller_Request_Simple.
 *
 * @category   Zend
 * @package    Zend_Controller
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2011 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @group      Zend_Controller
 * @group      Zend_Controller_Request
 */
class SimpleTest extends \PHPUnit_Framework_TestCase
{
    public function testSimpleRequestIsOfAbstractRequestType()
    {
        $request = new Request\Simple();
        $this->assertTrue($request instanceof Request\AbstractRequest);
    }

    public function testSimpleReqestRetainsValuesPassedFromConstructor()
    {
        $request = new Request\Simple('test1', 'test2', 'test3', array('test4' => 'test5'));
        $this->assertEquals($request->getActionName(), 'test1');
        $this->assertEquals($request->getControllerName(), 'test2');
        $this->assertEquals($request->getModuleName(), 'test3');
        $this->assertEquals($request->getParam('test4'), 'test5');
    }

}
