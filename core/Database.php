<?php


namespace Core;

use Zend\Db\Adapter\Driver\ResultInterface;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\Sql\Sql;

class Database
{
    protected $sql;

    protected $adapter;

    private $config;

    /**
     * Connection constructor.
     */
    public function __construct()
    {
        $this->config = require __DIR__ . '/../app/Config/database.php';
        $this->adapter = new \Zend\Db\Adapter\Adapter($this->config);
        $this->sql = new Sql($this->adapter);
    }

    /**
     * @param string|null $table
     * @return \Zend\Db\Sql\Select
     */
    public function select(string $table = null)
    {
        return $this->sql->select($table);
    }

    /**
     * @param $select
     * @return bool|ResultSet
     */
    public function execute($select)
    {
        $results = $this->sql->prepareStatementForSqlObject($select)->execute();
        $resultSet = false;

        if ($results instanceof ResultInterface && $results->isQueryResult()) {
            $resultSet = new ResultSet;
            $resultSet->initialize($results);
        }

        return $resultSet;
    }
}
