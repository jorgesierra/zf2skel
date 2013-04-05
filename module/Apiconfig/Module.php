<?php
namespace Apiconfig;

use Apiconfig\Model\ConfigTable;
use Apiconfig\Model\Config;

use Zend\Db\ResultSet\ResultSet;
use Zend\Db\tableGateway\tableGateway;


class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'ConfigTableGateway' => function($sm){
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Config());
                    return new TableGateway('client_configs', $dbAdapter, null, $resultSetPrototype);
                },
            'Apiconfig\Model\ConfigTable' => function($sm){
                    $tableGateway = $sm->get('ConfigTableGateway');
                    $table = new ConfigTable($tableGateway);
                    return $table;
                }
            ),
        );
    }
}