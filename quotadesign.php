
<?php //Ejemplo aprenderaprogramar.com
$lbResultadoo = $_POST['lbResultadoo'];
$lbResultado = $_POST['lbResultado'];

$ulListadoaas = $_POST['ulListadoaas'];


?>


<img width="50%" height="5%" src="icons/<?php echo $ulListadoaas ; ?>/<?php echo $lbResultadoo ; ?>tiless.png">
<img width="50%" height="70%"  src="/MosaicMixer/captura.png" class="responsive">


<?php //Ejemplo aprenderaprogramar.com



$color111 = $_POST['numcolor1'];
$color222 = $_POST['numcolor2'];
$color333 = $_POST['numcolor3'];


$total = ((int)$color111 + (int)$color222 + (int)$color333);


$color111p = ((int)$color111*100)/$total;
$color222p =((int)$color222*100)/$total;
$color333p = ((int)$color333*100)/$total;

include_once 'bd/conexion.php';


$objeto = new Conexion();
$conexion = $objeto->Conectar();

$lbResultadoo = $_POST['lbResultadoo'];
$lbResultado = $_POST['lbResultado'];
$ulListado = $_POST['ulListado'];
$ulListadoa = $_POST['ulListadoa'];

$consulta = "SELECT idprice, models.namemodel, colors.Color, price FROM price, models,colors where models.clavemodel='$lbResultadoo'  and colors.color='$lbResultado' and models.idmodel = price.idmodel and colors.idcolor = price.idcolor ";


//$consulta = "SELECT id, stone, mosaic, price FROM $lbResultadoo  WHERE stone='$lbResultado' ";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

echo "<br/> &nbsp; DATOS DEL MOSAICO";
?>
<br>

         <?php             
         echo "<br/> &nbsp; COLOR 1: ". $lbResultado. "   -----------------    Price:  ";               
         foreach($data as $dat) {                                                        
         ?>
         <tr>
         
             <td><?php echo $dat['price']  ?></td>    
   
         </tr>
         <?php
        }
        echo " &nbsp; percentage ". $color111p. "% ";

        $totalc1 = ($dat['price'] * $color111p)/ 100;;


        echo "   &nbsp;    Total: $".  $totalc1 . " ";
        
        /////////////////////////////////////////////////////////////////////////////////////////////////////////

        $consulta = "SELECT price.price from price, models,colors where models.clavemodel='$lbResultadoo'  and colors.color='$ulListado' and models.idmodel = price.idmodel and colors.idcolor = price.idcolor ";

        //$consulta = "SELECT price FROM  $lbResultadoo WHERE stone='$ulListado'  ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <br>
        <?php                
         echo "<br/> &nbsp; COLOR 2: ". $ulListado. "   -----------------    Price:  ";             
        foreach($data as $dat) {                                                        
         ?>
        <tr>
                                    
      <td><?php echo $dat['price'] ?></td>    
                              
       </tr>
    <?php
   }
   echo " &nbsp; percentage ". $color222p. "% ";
                                $totalc2 = ($dat['price'] * $color222p)/ 100;;


                                echo "   &nbsp;    Total: $".  $totalc2 . " ";

 $consulta = "SELECT price.price from price, models,colors where models.clavemodel='$lbResultadoo'  and colors.color='$ulListadoa' and models.idmodel = price.idmodel and colors.idcolor = price.idcolor ";

//$consulta = "SELECT price FROM  $lbResultadoo WHERE stone='$ulListadoa'  ";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>
<br>
                                        
<?php                
echo "<br/> &nbsp; COLOR 3: ". $ulListadoa. "   -----------------    Price:  ";             
foreach($data as $dat) {                                                        
?>
<tr>

<td><?php echo $dat['price'] ?></td>    

</tr>
<?php
}

echo " &nbsp; percentage ". $color333p. "% ";
$totalc3 = ($dat['price'] * $color333p)/ 100;;


echo "   &nbsp;    Total: $".  $totalc3 . " ";
?>
<br>
<br>
<?php 
$totalfinal = ($totalc1+$totalc2+$totalc3);
echo "   &nbsp;    TotalFinal: $"  .round($totalfinal,2) . " ";