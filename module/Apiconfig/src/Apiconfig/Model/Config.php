<?php

namespace Apiconfig\Model;

class Config
{
    public $id;
    public $client_name;
    public $client_location;
    public $values;

    public function exchangeArray($data)
    {
        $this->id = (isset($data['id'])) ? $data['id'] : null;
        $this->client_name = (isset($data['client_name'])) ? $data['client_name'] : null;
        $this->client_location = (isset($data['client_location'])) ? $data['client_location'] : null;
        $this->values = (isset($data['values'])) ? $data['values'] : null;

    }
}

