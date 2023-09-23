<style>
.responsive {
  width: 100%;
  max-width: 1100px;
  height: auto;
  margin-left:-300px;
}
</style>
<!--INICIO del cont principal-->
<div class="container">



<?php //Ejemplo aprenderaprogramar.com

$lbResultadoo = $_POST['lbResultadoo'];

$ulListadoaas = $_POST['ulListadoaas'];



?>
<img width="50%" height="5%" src="icons/<?php echo $ulListadoaas ; ?>/<?php echo $lbResultadoo ; ?>tiless.png">


<img width="50%" height="60%"  src="/MosaicMixer/captura.png" class="responsive">



<?php //Ejemplo aprenderaprogramar.com






?>





<?php //Ejemplo aprenderaprogramar.com


$lbResultado = $_POST['lbResultado'];

$lbResultados = $_POST['lbResultados'];

$lbResultadoss = $_POST['lbResultadoss'];


echo "<br/> &nbsp; DATOS DEL MOSAICO";






?>  
  </br> 

<?php
include_once 'bd/conexion.php';

$color111 = $_POST['color111'];
$color222 = $_POST['color222'];
$color333 = $_POST['color333'];


$total = ((int)$color111 + (int)$color222 + (int)$color333);


$color111p = ((int)$color111*100)/$total;
$color222p =((int)$color222*100)/$total;
$color333p = ((int)$color333*100)/$total;


$lbResultadoo = $_POST['lbResultadoo'];
$lbResultado = $_POST['lbResultado'];
$lbResultados = $_POST['lbResultados'];
$lbResultadoss = $_POST['lbResultadoss'];

$objeto = new Conexion();
$conexion = $objeto->Conectar();


$consulta = "SELECT idprice, models.namemodel, colors.Color, price FROM price, models,colors where models.clavemodel='$lbResultadoo'  and colors.color='$lbResultado' and models.idmodel = price.idmodel and colors.idcolor = price.idcolor ";


$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>


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


//$consulta = "SELECT price FROM  $lbResultadoo WHERE stone='$lbResultados'  ";

$consulta = "SELECT price.price from price, models,colors where models.clavemodel='$lbResultadoo'  and colors.color='$lbResultados' and models.idmodel = price.idmodel and colors.idcolor = price.idcolor ";


$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>
<br>

                            <?php                
                            echo "<br/> &nbsp; COLOR 2: ". $lbResultados. "   -----------------    Price:  ";             
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

  $consulta = "SELECT price.price from price, models,colors where models.clavemodel='$lbResultadoo'  and colors.color='$lbResultadoss' and models.idmodel = price.idmodel and colors.idcolor = price.idcolor ";

//$consulta = "SELECT price FROM  $lbResultadoo WHERE stone='$lbResultadoss'  ";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>
<br>

                            <?php            
                                  echo "<br/> &nbsp; COLOR 3: ". $lbResultadoss. "   -----------------    Price:  ";                     
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