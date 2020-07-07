<?php

header("Content-type: text/html; charset=UTF-8", true);//iso-8859-1

require_once "../conexao.php";

try{
      //echo (phpInfo());
      //die();
            
      $sql = ' ';
      $sql .= 'SELECT ID_ENTIDADES, NOME, RAZAOSOCIAL, CNPJCPF FROM ENTIDADES';
      $sql .= " WHERE ATIVO = 1 AND CLIENTE_FORNECEDOR = 0 AND PENDENCIA = 0";
      //$sql .= " AND ID_ENTIDADES = 1391";

      $Conexao = new Conexao();   
      $clientes = $Conexao->query($sql);
?>
   <!--Bootstrap-->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

   <!--skeleton-->
   <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css"/>-->

	<table class="table table-condensed table-bordered table-striped table-hover" id="table-clientes" name="table-clientes">
		<thead>
			<tr>
				<th align="center">Nome</th>
				<th align="center">Razão Social</th>
            <th align="center">CNPJ</th>
			</tr>
		</thead>
		<tbody>
   
<?php     
      $i = 0;
      while($row = sqlsrv_fetch_object($clientes)){         
			?>
				<tr id="linha<?=$i?>">									
					<td align="left" valign="center" ><?= $row->NOME ?></td>
					<td align="left" valign="center" ><?= $row->RAZAOSOCIAL ?></td>
               <td align="left" valign="left" ><?= $row->CNPJCPF ?></td>
         <?php         
         $i ++;
      }
      
}catch(Exception $e){ 
    
      echo $e->getMessage();

    exit; 
 }    

?>