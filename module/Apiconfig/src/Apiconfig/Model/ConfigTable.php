<?php

namespace Apiconfig\Model;

use Zend\Db\TableGateway\TableGateway;

class ConfigTable
{
    /**
     *
     * @var Zend\Db\TableGateway\TableGateway
     */
    protected $tableGateway;

    public function __construct(TableGateway $tableGateway)
    {
        $this->_tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        $resultSet = $this->_tableGateway->select();
        return $resultSet;
    }
}