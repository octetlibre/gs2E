<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap {

    /*
    protected function _initLog() {
        $options = $this->getOption('resources');
        $logOptions = $options['log'];
        $logger = Zend_Log::factory($logOptions);
        Zend_Registry::set('logger', $logger);
    }
     * 
     */

    protected function _initSession() {
        // On initialise la session
        Zend_Session::start();
        //$session = new Zend_Session_Namespace('Licence', true);
        //return $session;
    }

    protected function _initView() {
        $view = new Zend_View();
        $viewRenderer = new Zend_Controller_Action_Helper_ViewRenderer();
        $viewRenderer->setView($view);
        Zend_Controller_Action_HelperBroker::addHelper($viewRenderer);
        return $view;
    }

    protected function _initConfig() {
        $config = new Zend_Config($this->getOptions());
        Zend_Registry::set('config', $config);
        return $config;
    }

    protected function _initEncoding() {
        //mb_internal_encoding("UTF-8");
        mb_internal_encoding("UTF-8");
    }

    protected function _initDoctype() {
        $this->bootstrap('view');
        $view = $this->getResource('view');
        $view->doctype('XHTML1_STRICT');
    }

    
    protected function _initHelpers() {
        //Zend_Controller_Action_HelperBroker::addPrefix('Html2Pdf');
    }

    protected function _initfFooter() {
        $this->bootstrap('view');
        $view = $this->getResource('view');
        $view->placeholder('footer')
                ->setPrefix("<div id=\"footbox\"><div id=\"foot\">")
                ->setPostfix("</div></div>");
    }

    /*protected function _initSetupBaseUrl() {
        $this->bootstrap('frontcontroller');
        $controller = Zend_Controller_Front::getInstance();
        $controller->setBaseUrl("/");
     }*/

}

