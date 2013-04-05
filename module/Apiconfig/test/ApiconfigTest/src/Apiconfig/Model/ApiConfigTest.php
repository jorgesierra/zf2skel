<?php

//require_once '../module/Apiconfig/src/Apiconfig/Model/Config.php';

use Apiconfig\Model\Config;

/**
 * Config test case.
 */
class ApiConfigTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var Config
     */
    private $Config;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp ()
    {
        parent::setUp();
        
        // TODO Auto-generated ApiConfigTest::setUp()
        
        $this->Config = new Config(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown ()
    {
        // TODO Auto-generated ApiConfigTest::tearDown()
        $this->Config = null;
        
        parent::tearDown();
    }

    /**
     * Constructs the test case.
     */
    public function __construct ()
    {
        // TODO Auto-generated constructor
    }

    /**
     * Tests Config->exchangeArray()
     */
    public function testExchangeArray ()
    {
        // TODO Auto-generated ApiConfigTest->testExchangeArray()
        $this->markTestIncomplete("exchangeArray test not implemented");
        
        $this->Config->exchangeArray(/* parameters */);
    }
}

