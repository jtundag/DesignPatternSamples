<?php

namespace App\Builder\Connections;
use App\Builder\Connections\Connection;

class MysqlConnection extends Connection {
	
	public function createPDO(){
		$this->pdo = (new \PDO($this->connectionData['connection'] . ':host=' . $this->connectionData['host'] . ';dbname=' . $this->connectionData['dbname'], $this->connectionData['username'], $this->connectionData['password']));
	}

}