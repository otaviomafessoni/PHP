<?php

require ('../routes.php');

header("Content-type: text/html; charset=iso-8859-1", true);

class Conexao
{
    private $conexao;

    public function __construct(){    
        //Lê o arquivo INI dentro da pasta "Config"
        $db = parse_ini_file(CONFIG.DS.'sqlserver.ini');

        //Cria a string de conexão com os parametros do INI
        $info = array('Database' => $db['DB_NAME'], 'UID' => $db['DB_USER'], 'PWD' =>  $db['DB_PASS']);  

        //Faz a conexão
        return $this->conexao = sqlsrv_connect($db['DB_HOST'], $info);
    }
    
    public function query($sql) {      
       //Executa o comando SQL enviado pelo paramentro

       $result = sqlsrv_query($this->conexao,$sql);       
       return $result;

    } 
}