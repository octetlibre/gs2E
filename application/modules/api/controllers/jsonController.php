<?php


class Api_JsonController extends Zend_Controller_Action {
    
    public function init() {
        parent::init();  
         
    }

    public function listClientAction() { 

        $this->_helper->layout()->disableLayout();
        $this->view->classClient = "active";
        
        $mClient = new Application_Model_Mappers_Clients();
        $this->view->clients = array('client'=>array());
        foreach($mClient->findAll() as $c):
            array_push($this->view->clients['client'],$c['client']);
        endforeach;
        
        $this->_helper->layout()->disableLayout();
    }


    public function listClientReglementAction() { 

        $this->_helper->layout()->disableLayout();
        $this->view->classClient = "active";
        
        $mClientFormule = new Application_Model_Mappers_ClientsFormules();
        $this->view->formules = array('client'=>array());
        foreach($mClientFormule->findAll() as $c):
            array_push($this->view->formules['client'],$c['client']);
        endforeach;
        
        $this->_helper->layout()->disableLayout();
    }


    
   
  
   

}

