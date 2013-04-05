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
    
    public function save(Config $Config)
    {
        $data = array(
            'client_id'    => $Config->client_id,
            'client_name'  => $Config->client_name,
            'client_location' => $Config->client_location,
            'values' => $Config->values
        );
        
       $id = (int) $Config->id;
       if($id == 0){
           $this->tableGateway->insert($data);
       } else {
           
       }
    }
}