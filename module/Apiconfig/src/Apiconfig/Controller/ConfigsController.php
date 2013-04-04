<?php
namespace Apiconfig\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ConfigsController extends AbstractActionController
{

    protected $configTable = null;

    public function getConfigTable()
    {
        if($this->configTable == null){
            $sm = $this->getServiceLocator();
            $this->configTable = $sm->get('Apiconfig\Model\ConfigTable');
        }

        return $this->configTable;
    }

    public function indexAction()
    {
        return new ViewModel(array(
            'configs' => $this->getConfigTable()->fetchAll()
            )
        );
    }

    public function addAction()
    {

    }

    public function editAction()
    {

    }

    public function deleteAction()
    {

    }
}