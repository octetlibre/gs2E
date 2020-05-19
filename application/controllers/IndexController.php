<?php

class IndexController extends Zend_Controller_Action {

    public function init() {
        parent::init();
    }

    public function indexAction() {
        
        $this->_redirect("client");

        $this->_helper->layout()->setLayout('layout');
    }

}
