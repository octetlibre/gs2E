<?php


class Application_Model_Mappers_ClientsFormules {

    protected $_dbTable;
    protected $logger;
    private $suffix;

    public function __construct($_n = 1) {
        $this->n = $_n;
        $this->suffix = '_n_' . $this->n;
    }

    public function setDbTable($dbTable) {
        if (is_string($dbTable)) {
            $dbTable = new $dbTable();
        }
        if (!$dbTable instanceof Zend_Db_Table_Abstract) {
            throw new Exception('Invalid table data gateway provided');
        }
        $this->_dbTable = $dbTable;
        return $this;
    }

    /**
     * @return Application_Model_DbTable_Action
     */
    public function getDbTable() {
        if (null === $this->_dbTable) {
            $this->setDbTable('Application_Model_Entities_ClientsFormules');
        }
        return $this->_dbTable;
    }
    
    
    public function findAll() {
        
        $table = $this->getDbTable();
        
        $select = $table->select();
        $select->setIntegrityCheck(false)
                ->from(array('cf'=>'clients_formules'), array('cf.*'))
                ->join(array('c' => 'clients'),'cf.id_client =  c.id',array('c.client'))
                ->join(array('f' => 'formules'),'cf.id_formule =  f.id',array('f.formule','f.montant'))
                ->order("cf.date_creation desc");
        
        return $this->getDbTable()->fetchAll($select);
    }
    

}

