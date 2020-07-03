<?php
define('DB_HOST'        , "PRG-OTAVIO");
define('DB_USER'        , "sa");
define('DB_PASSWORD'    , "XPT2000");
define('DB_NAME'        , "CONXPERT");
//define('DB_DRIVER'      , "sqlsrv");
 
require_once "../conexao.php";
try{

	$Conexao = new Conexao();
    
    $sql = ' ';
    $sql .= 'SELECT NOME, RAZAOSOCIAL FROM ENTIDADES';
    $sql .= " WHERE ATIVO = 1 AND CLIENTE_FORNECEDOR = 0 AND PENDENCIA = 0";
    $sql .= " AND ID_ENTIDADES = 1391";

    $que = mssql_query($sql);

    //$query    = $Conexao->query($sql);
    //$clientes = $query->fetchAll();
 
 }catch(Exception $e){
 
    echo $e->getMessage();
    exit; 
 }

?>
<!DOCTYPE html>
<html>
<head>
  <title>Conexão PDO SQL Server</title>
</head>
<body>
  <form> 
        <table border=1>
            <tr>
               <td>Nome</td>
               <td>RAZAOSOCIAL</td>            
            </tr>
            <?php
               foreach($clientes as $cliente) {
            ?>
            <tr>
                <td><?php echo $cliente['nome']; ?></td>
                <td><?php echo $cliente['razaosocial']; ?></td>        
            </tr>
            <?php
               }
            ?>
        </table>
    </form>
</body>
</html>