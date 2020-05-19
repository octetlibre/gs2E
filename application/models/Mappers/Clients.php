<?php


class Application_Model_Mappers_Clients {

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
            $this->setDbTable('Application_Model_Entities_Clients');
        }
        return $this->_dbTable;
    }
    
    
    public function findAll() {
        
        $table = $this->getDbTable();
        
        $select = $table->select();
        $select->setIntegrityCheck(false)
                ->from(array('c'=>'clients'), array('c.*'))
                //->join(array('v' => 'villages'),'c.id_village =  v.id',array('v.village'))
                ->order("c.client asc");
        
        return $this->getDbTable()->fetchAll($select);
    }
    
    public function crypt($d) {
        
        $table = $this->getDbTable();
        
        $select = $table->select();
        $select->setIntegrityCheck(false)
                ->from(array('c'=>'clients'), array('c.*'))
                ->where("c.url_crypt = ?",$d['url']);
        
         return $this->getDbTable()->fetchAll($select)->current();
    }

    public function find($id) {
        
        $table = $this->getDbTable();
        
        $select = $table->select();
        $select->setIntegrityCheck(false)
                ->from(array('c'=>'clients'), array('c.*'))
                ->where("c.id = ?",$id);
        
         return $this->getDbTable()->fetchAll($select)->current();
    }
    

}

