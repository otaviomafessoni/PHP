<?php

//require ('../routes.php');
class Conexao
{
    private $connection;
    private $result;    
	
    public function __construct(){

        $this->getConnection();
    }

    public function getConnection() {    

        $info = array('Database' => DB_NAME, 'UID' => DB_USER, 'PWD' =>  DB_PASSWORD);        
        $this->connection = @sqlsrv_connect($hostname, $info);
     }

    public function query($sql) {        
        return $this->result = mssql_query($sql) or die('DETALHES DO ERRO: '.mssql_get_last_message());
    }
	
	public function getConexao(){
		return $this->connection;
	}    
}