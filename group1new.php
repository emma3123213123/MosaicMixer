<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">

   
    <script type="module"
        src="https://cdn.jsdelivr.net/npm/@google/model-viewer@1.9.1/dist/model-viewer-umd.min.js">
       
    </script>
<model-viewer id="helmet"  src="" shadow-intensity="1"     disable-tap  alt="A 3D model carousel" >
  
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mosaic Mixer</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>

 <!-- Navbar -->
 <nav class="navbar d-block position-sticky navbar-expand-lg navbar-light bg-light">
    <div class="container">
        
        <a class="navbar-brand d-none d-sm-block me-4" href="https://www.explorematerial.com/">
            <img src="icons/CSAA.PNG" alt="logo" width="75%">
        </a>
        <a href="https://www.explorematerial.com/" class="navbar-brand d-sm-none me-2">
            <img src="icons/CSAA.PNG" alt="logo" width="45%" height="50px">
        </a>
        <div class="navbar-toolbar d-flex align-items-center order-lg-3">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-tool d-none d-lg-flex text-secondary me-2" href="javascript:void(0)" data-bs-toggle="collapse" data-toggle="tooltip" title="Search" data-bs-target="#searchBox" role="button" aria-expanded="true" aria-controls="searchBox">
                <div class="navbar-tool-icon-box" >
                    <i class="navbar-tool-icon fas fa-search"></i>
                </div>
            </a>
           
        </div>
        <div class="collapse navbar-collapse me-auto" id="navbarCollapse">
            <!-- Search mobile -->
            <div class="d-lg-none py-3">
                <div class="input-group">
                    <i class="fas fa-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                    <input class="form-control rounded-start" type="text" placeholder="What do you need">
                </div>
            </div>
           
            <ul class="navbar-nav border-lg-start mb-1 mb-lg-0">
                <li class="nav-item dropdown me-1">
                    <a class="nav-link dropdown-toggle" href="" data-bs-toggle="dropdown">Mosaics Catalogs</a>
                    <div class="dropdown-menu px-2 ps-0 pb-4">
                        <div class="d-flex">
                            <div class="mega-dropdown-column pt-4 px-3" style="width: 7rem;">
                                <div class="widget mb-3">
                                    <a class="d-block text-decoration-none text-dark" href="/MosaicMixer/ExamplesGroup1.html">
                                        <img class="d-block mx-auto mb-3" src="https://d1pxiqzik421wm.cloudfront.net/uploads/99035-450x450.jpg" alt="Burgers and fries" width="60">
                                        <h6 class="fs-base text-center">Group 1</h6>
                                    </a>
                                </div>
                            </div>
                            <div class="mega-dropdown-column pt-4 px-3" style="width: 7rem;">
                                <div class="widget mb-3">
                                    <a class="d-block text-decoration-none text-dark" href="/MosaicMixer/ExamplesGroup2.html">
                                        <img class="d-block mx-auto mb-3" src="https://www.nemotile.com/media/catalog/product/cache/57024c4cfcac96f84c6204901be41652/t/h/thassos_ladygreydot_basketweave_mosaic_01_ml.jpg" alt="Noodles" width="60">
                                        <h6 class="fs-base text-center">Group 2</h6>
                                    </a>
                                </div>
                            </div>
                            <div class="mega-dropdown-column pt-4 px-3" style="width: 7rem;">
                                <div class="widget mb-3">
                                    <a class="d-block text-decoration-none text-dark" href="/MosaicMixer/ExamplesGroup3.html">
                                        <img class="d-block mx-auto mb-3" src="https://texastravertine.com/wp-content/uploads/2021/02/shell-stone-split-face-limstone-mosaic-1x2-1-600x600-1.jpg" alt="Pizza and pasta" width="60">
                                        <h6 class="fs-base text-center">Group 3</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="mega-dropdown-column pt-4 px-3" style="width: 7rem;">
                                <div class="widget mb-3">
                                    <a class="d-block text-decoration-none text-dark" href="/MosaicMixer/Examplesmcgaha.html">
                                        <img class="d-block mx-auto mb-3" src="icons/Mcgaha/McGaha_Bravada.jpg" alt="Grill and steaks" width="60">
                                        <h6 class="fs-base text-center">Mcgaha</h6>
                                    </a>
                                </div>
                            </div>
                            <div class="mega-dropdown-column pt-4 px-3" style="width: 7rem;">
                                <div class="widget mb-3">
                                    <a class="d-block text-decoration-none text-dark" href="/MosaicMixer/Examplesparquet.html">
                                        <img class="d-block mx-auto mb-3" src="icons/Parquet/PARQ.JPG" alt="Fish and seafood" width="60">
                                        <h6 class="fs-base text-center">Parquet</h6>
                                    </a>
                                </div>
                            </div>
                            <div class="mega-dropdown-column pt-4 px-3" style="width: 7rem;">
                                <div class="widget mb-3">
                                    <a class="d-block text-decoration-none text-dark" href="/MosaicMixer/Examplespebbles.html">
                                        <img class="d-block mx-auto mb-3" src="icons/Pebbles/12.PNG" alt="Healthy food" width="60">
                                        <h6 class="fs-base text-center">Pebbles</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="mega-dropdown-column pt-4 px-3" style="width: 7rem;">
                                <div class="widget mb-3">
                                    <a class="d-block text-decoration-none text-dark" href="/MosaicMixer/Examplesspecialty.html">
                                        <img class="d-block mx-auto mb-3" src="icons/specialty/ca.png" alt="Haute cuisine" width="60">
                                        <h6 class="fs-base text-center">Specialty</h6>
                                    </a>
                                </div>
                            </div>
                            <div class="mega-dropdown-column pt-4 px-3" style="width: 7rem;">
                                <div class="widget mb-3">
                                    <a class="d-block text-decoration-none text-dark" href="/MosaicMixer/ExamplesArtiasan.html">
                                        <img class="d-block mx-auto mb-3" src="icons/artisan/Sigma.webp" alt="Fish and seafood" width="60">
                                        <h6 class="fs-base text-center">Artisan Collection</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </li>
                <li class="nav-item me-1">
                    <a class="nav-link" href="/MosaicMixer/index.html">Home</a>
                </li>
                <li class="nav-item me-1">
                    <a style="color: #4285f4;" class="nav-link" href="/MosaicMixer/group1newdesign.php">DesignMosaic</a>
                </li>
                  <li class="nav-item me-1">
                      <a class="nav-link" href="/MosaicMixer/group2new.php">Group2</a>
                  </li>
                  <li class="nav-item me-1">
                      <a class="nav-link" href="/MosaicMixer/group3new.php">Group3</a>
                  </li>
                  <li class="nav-item me-1">
                      <a class="nav-link" href="/MosaicMixer/mcgahanuevo.php">Mcgaha</a>
                  </li>
                  <li class="nav-item me-1">
                    <a class="nav-link" href="/MosaicMixer/artisan.php">Artisan_Collection</a>
                </li>
                  <li class="nav-item me-1">
                    <a class="nav-link" href="/MosaicMixer/parquetnew.php">Parquet</a>
                </li>
                  <li class="nav-item me-1">
                      <a class="nav-link" href="/MosaicMixer/pebblesnew.php">Pebbles</a>
                  </li>
                  <li class="nav-item me-1">
                    <a class="nav-link" href="/MosaicMixer/specialtynew.php">Specialty</a>
                </li>
                <li class="nav-item me-1">
                  <a class="nav-link" href="/MosaicMixer/index.html#reviews">Colors</a>
              </li>
            </ul>
        </div>
        <!-- Search collapse -->
        <div class="search-box collapse" id="searchBox">
            <div class="container py-2">
                <div class="input-group">
                    <i class="fas fa-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                    <input type="text" class="form-control rounded-start" placeholder="What do you need?">
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- End of Navbar -->



<div class="slider">
    <div class="slides">  

  
      <button class="slide" onclick="switchSrc(this, '24mosaic')" style="background-image: url('icons/Group1/3.jpg');" >
      </button><button class="slide" onclick="switchSrc(this, '2x2mosaic')" style="background-image: url('icons/Group1/2.png');"></button>
      </button><button class="slide" onclick="switchSrc(this, '78mosaic')" style="background-image: url('icons/Group1/1.jpg');">
      </button>
      <button class="slide" onclick="switchSrc(this, 'hexagonmosaic')" style="background-image: url('icons/Group1/4.jpg');">
      </button><button class="slide" onclick="switchSrc(this, 'brickbondlarge')" style="background-image: url('icons/Group1/5.jpg');">
      </button><button class="slide" onclick="switchSrc(this, 'fiddlestickmosaic')" style="background-image: url('icons/Group1/6.jpg');"></button>
      </button><button class="slide" onclick="switchSrc(this, 'herringbonelarge')" style="background-image: url('icons/Group1/7.jpg');">
      </button>
      <button class="slide" onclick="switchSrc(this, '78rockface')" style="background-image: url('icons/Group1/8.jpg');">
      </button><button class="slide" onclick="switchSrc(this, '1x6interlocking')" style="background-image: url('icons/Group1/9.png');">
      </button><button class="slide" onclick="switchSrc(this, 'versailles')" style="background-image: url('icons/Group1/10.png');"></button>
      </button><button class="slide" onclick="switchSrc(this, 'rhomboidmosaic')" style="background-image: url('icons/Group1/11.png');">
      </button>

      <button class="slide" onclick="switchSrc(this, 'riverrock')" style="background-image: url('icons/Group1/12.png');">
    </button><button class="slide" onclick="switchSrc(this, 'minibrickbond')" style="background-image: url('icons/Group1/25.jpg');">
    </button><button class="slide" onclick="switchSrc(this, 'smallherringbone')" style="background-image: url('icons/Group1/26.jpg');"></button>
    </button><button class="slide" onclick="switchSrc(this, '78hex')" style="background-image: url('icons/Group1/50.png');">

    </button>

      </div>
  </div>



    

  <p style= "color: #462ae2; font-size: 18pt; text-align: center; font-family:courier;">Group1</p>
 


<div id="colors1">

  <a style="color: #0a0a0a; font-size: 16pt; font-family:courier;">Color-1</a>
<label><select id="diffuse" name="" class="form-control">


<?php 

include_once 'bd/cone.php';

$consulta = "SELECT colors.Color,colors.clavecolor FROM price,colors,models where models.clavemodel=1 and colors.idcolor = price.idcolor and models.idmodel = price.idmodel ORDER BY colors.color ASC ";
//$consulta = "SELECT Color FROM colors ";
$ejecutar=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
?>
    <?php foreach ($ejecutar as $opciones): ?>
    <option value= "<?php echo $opciones['clavecolor']?>"><?php echo $opciones['Color']?></option>
    
    <?php endforeach   ?>
</select>

</label> 
<button id="colora1" style=" background-color: #fff; min-width: 1%;max-width: 15%;height: 50px; border: #fff; align-content: center;" type="submit"><img style="min-width: 60%;max-width: 100%; height: 40px;background-color: #fff;" src="icons/add.png" alt="x" /></button>


</div>




<div id="colors2">
<a  id="colorlabel2" style="color: #0a0a0a; font-size: 16pt; font-family:courier;bottom: 1px;">Color-2</a>
<label><select id="diffuses" name="" class="form-control">

<?php 
include_once 'bd/cone.php';



$consulta = "SELECT colors.Color,colors.clavecolor FROM price,colors,models where models.clavemodel=1 and colors.idcolor = price.idcolor and models.idmodel = price.idmodel ORDER BY colors.color ASC ";
//$consulta = "SELECT Color FROM colors ";
$ejecutar=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
?>
    <?php foreach ($ejecutar as $opciones): ?>
    <option value= "<?php echo $opciones['clavecolor']?>"><?php echo $opciones['Color']?></option>
    
    <?php endforeach   ?>

</select>
</label>
<button id="colora2" style=" background-color: #fff; min-width: 1%;max-width: 15%;height: 50px; border: #fff; align-content: center;" type="submit"><img style="min-width: 60%;max-width: 100%; height: 40px;background-color: #fff;" src="icons/add.png" alt="x" /></button>
    <button id="delete2" style=" background-color: #fff; min-width: 1%;max-width: 15%;height: 50px; border: #fff; align-content: center;" type="submit"><img style="min-width: 60%;max-width: 100%; height: 40px;background-color: #fff;" src="icons/delete.png" alt="x" /></button>
    <br> 
</div>



<div id="colors3">
<a id="colorlabel3" style="color: #0a0a0a; font-size: 16pt; font-family:courier;bottom: 1px;">Color-3</a>
<label><select id="diffusess" name="" class="form-control">

<?php 
include_once 'bd/cone.php';
$consulta = "SELECT colors.Color,colors.clavecolor FROM price,colors,models where models.idmodel=1 and colors.idcolor = price.idcolor and models.idmodel = price.idmodel ORDER BY colors.color ASC ";
//$consulta = "SELECT Color FROM colors ";
$ejecutar=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
?>
    <?php foreach ($ejecutar as $opciones): ?>
    <option value= "<?php echo $opciones['clavecolor']?>"><?php echo $opciones['Color']?></option>
    
    <?php endforeach   ?>

</select>
</label>
<button id="delete3" style=" background-color: #fff; min-width: 1%;max-width: 15%;height: 50px; border: #fff; align-content: center;" type="submit"><img style="min-width: 60%;max-width: 100%; height: 40px;background-color: #fff;" src="icons/delete.png" alt="x" /></button>
 
 
</div>
</div>




<form method="POST" id="download-button" target="_blank"  style="  margin-top: 10%;  background-color: transparent; min-width: 22%;max-width: 9%;height: 50px; border: transparent; align-content: center;" action="/MosaicMixer/quota.php">

<label type="hidden" for="lbResultadoo" name="lbResultadoo" value="lbResultadoo" id="lbResultadoo">fd</label>
      <input type="hidden" id="myInputo" name="lbResultadoo" value="" class="custom" size="32">
    <div id="resultado">
      <label for="lbResultado" name="lbResultado" value="lbResultado" id="lbResultado">df</label>
      <input type="hidden" id="myInput" name="lbResultado" value="" class="custom" size="32">
  
      <label type="hidden" for="lbResultados" name="lbResultados" value="lbResultados" id="lbResultados">fd</label>
      <input type="hidden" id="myInputs" name="lbResultados" value="" class="custom" size="32">
  
      <label for="ulListadoaas" name="ulListadoaas" value="ulListadoaas" id="ulListadoaas"></label>
    <input type="hidden" id="myInputaaas" name="ulListadoaas" value="group1" class="custom" size="32">


      <label type="hidden" for="lbResultadoss" name="lbResultadoss" value="lbResultadoss" id="lbResultadoss">fd</label>
      <input type="hidden" id="myInputss" name="lbResultadoss" value="" class="custom" size="32">

     
           <!-- Numero de materiales pintados del color 1 -->
      <label type="hidden" for="color111" name="color111" value="color111" id="color111">fd</label>
      <input type="hidden" id="color111a" name="color111" value="" class="custom" size="32">
           <!-- Numero de materiales pintados del color 2 -->
      <label type="hidden" for="color222" name="color222" value="color222" id="color222">fd</label>
      <input type="hidden" id="color222a" name="color222" value="" class="custom" size="32">
      <!-- Numero de materiales pintados del color 3 -->
      <label type="hidden" for="color333" name="color333" value="color333" id="color333">fd</label>
      <input type="hidden" id="color333a" name="color333" value="" class="custom" size="32">
      
      <input id="saco" type="image" value="" style="min-width: 20%;max-width: 100%; height: 50px;background-color: transparent;" src="icons/cotizacion.png" />

    </div>




    </form>
</form>


<script type="module">



document.getElementById("color111").hidden = true;
document.getElementById("color222").hidden = true;
document.getElementById("color333").hidden = true;
document.getElementById("lbResultadoo").hidden = true;
document.getElementById("lbResultado").hidden = true;
document.getElementById("lbResultados").hidden = true;
document.getElementById("lbResultadoss").hidden = true;
document.getElementById("diffuses").hidden = true;
document.getElementById("diffusess").hidden = true;
document.getElementById("colorlabel2").hidden = true;
document.getElementById("colorlabel3").hidden = true;
document.getElementById("colora1").hidden = true;
document.getElementById("colora2").hidden = true;
document.getElementById("delete2").hidden = true;
document.getElementById("download-button").hidden = true;
document.getElementById("delete3").hidden = true;

        



let sequence1 = []
  let sequence2 = []
  let sequence3 = []
const modelViewer = document.querySelector("model-viewer");

  window.switchSrc = (element, name) => {
  


    const base = "models/group1/" + name;

    modelViewer.src = base + '.gltf';
    modelViewer.poster = base + '.webp';
    const slides = document.querySelectorAll(".slide");
    slides.forEach((element) => {element.classList.remove("selected");});
    sequence1 = [];
 sequence2 = [];
 sequence3 = [];
 sequence1.length=0;
 sequence2.length=0;
 sequence3.length=0;
    document.getElementById("diffuses").hidden = true;
    document.getElementById("diffusess").hidden = true;
    document.getElementById("diffuses").value = "";
    document.getElementById("diffusess").value = "";
    document.getElementById("diffuse").value = "";
    document.getElementById("colorlabel2").hidden = true;
    document.getElementById("colorlabel3").hidden = true;
    document.getElementById("delete3").hidden = true;
    document.getElementById("delete2").hidden = true;
    document.getElementById("colora2").hidden = true;
    document.getElementById("colora1").hidden = true;

    element.classList.add("selected");
   
    document.getElementById("download-button").hidden = true;
    document.getElementById("myInput").value = "";
 document.getElementById("myInputs").value = "";
 document.getElementById("myInputss").value = "";
 document.getElementById("myInputo").value = "";
 document.getElementById("color111a").value = "";
 document.getElementById("color222a").value = "";
 document.getElementById("color333a").value = "";


 document.getElementById('lbResultado').innerHTML = "";
 document.getElementById("lbResultados").innerHTML = "";
 document.getElementById('lbResultadoo').innerHTML = "";
 document.getElementById("lbResultadoss").innerHTML = "";
 document.getElementById('color111').innerHTML = "";
 document.getElementById("color222").innerHTML = "";
 document.getElementById('color333').innerHTML = "";

////////////////////////////////////////////////////////////////



document.getElementById('lbResultadoo').innerHTML = name;

document.getElementById("myInputo").value = name;
 


 


 ////////////////////////////////////////////////////////////////////////////
 





///////////////////////////////////////////////////////////////////////////////////

document.getElementById("colora1").addEventListener(
  "click",
  () => {
    document.getElementById("diffuses").hidden = false;
    document.getElementById("colora1").hidden = true;
    document.getElementById("colorlabel2").hidden = false;

   
  },
  false

);
document.getElementById("colora2").addEventListener(
  "click",
  () => {
    document.getElementById("diffusess").hidden = false;
    document.getElementById("colorlabel3").hidden = false;
    document.getElementById("colora2").hidden = true;
   
  },
  false



);


document.getElementById('delete2').addEventListener('click', (event) => {
    


    document.getElementById("color222a").value = "";
document.getElementById("color222").innerHTML = "";
document.getElementById('lbResultadoss').innerHTML = "";
document.getElementById("myInputss").value = "";
document.getElementById('lbResultados').innerHTML = ""; 
document.getElementById("myInputs").value = "";
document.getElementById("diffuses").hidden = true;
document.getElementById("colorlabel2").hidden = true;
document.getElementById("diffusess").hidden = true;
document.getElementById("colorlabel3").hidden = true;
document.getElementById("colora2").hidden = true;
document.getElementById("colora1").hidden = false;
document.getElementById("delete2").hidden = true;
document.getElementById("diffuses").value = "";

const modelViewer = document.querySelector("model-viewer");

if(name+".gltf" == "24mosaic.gltf") {
   
    sequence1 = [0,2,5,6,8,11,12,14];
   const total=15;
   document.getElementById('color111').innerHTML = (total);
document.getElementById("color111a").value = (total);
   
   
   
   }
   else
     if(name+".gltf" == "2x2mosaic.gltf") {
        sequence1 = [0,2,4,7,9,11,12,14,16,19,21,23,24,26,28,31,33,35];              
   const total=36;
   document.getElementById('color111').innerHTML = (total);
document.getElementById("color111a").value = (total); 
   
   
   }
   else
     if(name+".gltf" == "hexagonmosaic.gltf") {
        sequence1 = [0,1,2,3,12,13,14,15,24,25,26,27,36,37,38,39,48,49,50,51];
       const total=56;
       document.getElementById('color111').innerHTML = (total);
document.getElementById("color111a").value = (total);
   }
   else
   
   if(name+".gltf" == "fiddlestickmosaic.gltf") {
   
   
   
    sequence1 = [1,3,5,7,9,11,13,15,17,19,21,23,25,27,29,31,33,35];
  
   const total=36;
   document.getElementById('color111').innerHTML = (total);
document.getElementById("color111a").value = (total);
   }
   else
   if(name+".gltf" == "78mosaic.gltf") {
   
    sequence1 = [0,2,4,6,8,10,13,15,17,19,21,23,24,26,28,30,32,34,37,39,41,43,45,47,48,50,52,54,56,58,61,63,65,67,69,71,72,74,76,78,80,82,85,87,89,91,93,95,96,98,100,102,104,106,109,111,113,115,117,119,120,122,124,126,128,130,133,135,137,139,141,143];
 const total=144;
   document.getElementById('color111').innerHTML = (total);
document.getElementById("color111a").value = (total);
   
   }
   else
   if(name+".gltf" == "brickbondlarge.gltf") {
    sequence1 = [0,3,4,7];
   const total=8;
   document.getElementById('color111').innerHTML = (total);
document.getElementById("color111a").value = (total); 
   }
   else
   if(name+".gltf" == "herringbonelarge.gltf") {
    sequence1 = [4,5,6,7,12,13,14,15];

   const total=16;
   document.getElementById('color111').innerHTML = (total);
document.getElementById("color111a").value = (total);
   }
   else
   if(name+".gltf" == "1x6interlocking.gltf") {
    sequence1 = [1,2,5,6,9,10,13,14,17,18,21,22];
 
   const total=24;
   document.getElementById('color111').innerHTML = (total);
document.getElementById("color111a").value = (total);
   }
   else
   if(name+".gltf" == "versailles.gltf") {
   
   
    sequence1 = [1,2,9,8,11];

   const total=12;
   document.getElementById('color111').innerHTML = (total);
document.getElementById("color111a").value = (total);
   }
   else
   if(name+".gltf" == "rhomboidmosaic.gltf") {
   
    sequence1 = [0,1,2,3,4,5,6,7,8,9,10,22,23,24,25,26,27,28,29,30,31,32,44,45,46,47,48,49,50,51,52,53,54,66,67,68,69,70,71,72,73,74,75,76,88,89,90,91,92,93,94,95,96,97,98,110,111,112,113,114,115,116,117,118,119,120];

   const total=121;
   document.getElementById('color111').innerHTML = (total);
document.getElementById("color111a").value = (total);
   }
   else
   if(name+".gltf" == "riverrock.gltf") {
   
    sequence1 = [1,3,4,5,6,9,11,14,15,16,18,19,20,21,22,24,28,29,32,33,36,37,38,39,41,42,43,44,47,48,49,50,51,52,53,54,55,56,58,59,62,63,65,66,67,70,72];

   const total=74;
   document.getElementById('color111').innerHTML = (total);
document.getElementById("color111a").value = (total);
   
   }
   else
if(name+".gltf" == "78rockface.gltf") {
    sequence1 = [1,2,5,6,8,9,15,16,17,18,19,23,24,26,27,28,29,34,35,38,40,41,42,44,50,51,53,54,56,58,59,63,66,67,70,72,73,74,78,79,81,82,84,85,87,90,91,92,95,98,100,102,103,104,108,109,111,114,117,118,119,123,125,127,128,131,134,135,138,140,141,142,145,147,148,151,152,154,155,156,160,163,165,166,167,168,173,175,177,180,182,183,184,188,189,191,193,195];
const total=196;
document.getElementById('color111').innerHTML = (total);
document.getElementById("color111a").value = (total);
}
   else
   if(name+".gltf" == "minibrickbond.gltf") {
   
    sequence1 = [1,3,5,7,9,11,13,15,17,19,21,23,25,27,29,31,33,35,37,39,41,43,45,47,49,51,53,55,57,59,61,63,65,67,69,71,73,75,77,79,81,83,85,87,89];

   const total=91;
   document.getElementById('color111').innerHTML = (total);
document.getElementById("color111a").value = (total); 
   }
   else
   if(name+".gltf" == "smallherringbone.gltf") {
   
    sequence1 = [2,3,6,7,9,10,11,14,15,18,19,22,23,26,27,30,31,34,35,38,39,42,43,46,47,50,51,54,55,58,59,62,63,66,67,70,71,74,75,78,79];

   const total=80;
   document.getElementById('color111').innerHTML = (total);
document.getElementById("color111a").value = (total);
   }
   else
   if(name+".gltf" == "78hex.gltf") {
    sequence1 = [13,15,17,19,21,23,38,40,42,44,46,48,63,65,67,69,71,73,88,90,92,94,96,98,113,115,117,119,121,123,138,140,142,144,146,148,163,165,167,169,171,173];

   const total=175;
   document.getElementById('color111').innerHTML = (total);
document.getElementById("color111a").value = (total);
   
   }


for (let i = 0; i <=sequence1.length ; i++) {

const material = modelViewer.model.materials[sequence1[i]];

material.pbrMetallicRoughness['baseColorTexture'].texture.source.setURI(document.getElementById("diffuse").value);

material.pbrMetallicRoughness.setRoughnessFactor(0.8);
material.pbrMetallicRoughness.setMetallicFactor(1.0);

}  
});



document.getElementById('delete3').addEventListener('click', (event) => {
    
 
 


    document.getElementById("color333a").value = "";
document.getElementById("color333").innerHTML = "";
document.getElementById('lbResultadoss').innerHTML = "";
document.getElementById("myInputss").value = "";
document.getElementById("diffusess").hidden = true;
document.getElementById("colorlabel3").hidden = true;
document.getElementById("colora2").hidden = false;
document.getElementById("delete2").hidden = false;
document.getElementById("diffusess").value = "";
document.getElementById("delete3").hidden = true;




const modelViewer = document.querySelector("model-viewer");
if(name+".gltf" == "24mosaic.gltf") {
   
   sequence1 = [1,3,4,7,9,10,13];
   sequence2 = [0,2,12,14];
   const total=15;
document.getElementById('color222').innerHTML = (total-sequence1.length);
document.getElementById("color222a").value = (total-sequence1.length); 
   
   
   
   }
   else
     if(name+".gltf" == "2x2mosaic.gltf") {
   sequence1 = [1,3,5,6,8,10,13,15,17,18,20,22,25,27,29,30,32,34];
   sequence2 = [0,2,4,12,14,16,19,21,23,31,33,35];                
   const total=36;
document.getElementById('color222').innerHTML = (total-sequence1.length);
document.getElementById("color222a").value = (total-sequence1.length); 
   
   
   }
   else
     if(name+".gltf" == "hexagonmosaic.gltf") {
       sequence1 = [6,7,8,18,19,20,30,31,32,4,5,9,10,11,16,17,21,22,23,28,29,33,34,35,40,41,42,43,44,45,46,47,52,53,54,55];
       sequence2 = [1,2,3,12,14,25,26,27,36,38,49,50,51];         
       const total=56;
document.getElementById('color222').innerHTML = (total-sequence1.length);
document.getElementById("color222a").value = (total-sequence1.length); 
   }
   else
   
   if(name+".gltf" == "fiddlestickmosaic.gltf") {
   
   
   
   sequence1 = [0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30,32,34];
   sequence2 = [1,7,9,11,21,23,25,31];     
   const total=36;
document.getElementById('color222').innerHTML = (total-sequence1.length);
document.getElementById("color222a").value = (total-sequence1.length); 
   }
   else
   if(name+".gltf" == "78mosaic.gltf") {
   
   sequence1 = [1,3,5,7,9,11,12,14,16,18,20,22,25,27,29,31,33,35,36,38,40,42,44,46,49,51,53,55,57,59,60,62,64,66,68,70,73,75,77,79,81,83,84,86,88,90,92,94,97,99,101,103,105,107,108,110,112,114,116,118,121,123,125,127,129,131,132,134,136,138,140,142];
   sequence2 = [0,2,4,6,8,10,24,26,28,30,32,34,37,39,41,43,45,47,61,63,65,67,69,71,72,74,76,78,80,82,96,98,100,102,104,106,109,111,113,115,117,119,133,135,137,139,141,143];  
   const total=144;
document.getElementById('color222').innerHTML = (total-sequence1.length);
document.getElementById("color222a").value = (total-sequence1.length); 
   
   }
   else
   if(name+".gltf" == "brickbondlarge.gltf") {
   
   sequence1 = [1,2,5,6];
   sequence2 = [3,7];   
   const total=8;
document.getElementById('color222').innerHTML = (total-sequence1.length);
document.getElementById("color222a").value = (total-sequence1.length); 
   }
   else
   if(name+".gltf" == "herringbonelarge.gltf") {
   
   sequence1 = [0,1,2,3,8,9,10,11,16];
   sequence2 = [5,6,13,14];   
   const total=16;
document.getElementById('color222').innerHTML = (total-sequence1.length);
document.getElementById("color222a").value = (total-sequence1.length); 
   }
   else
   if(name+".gltf" == "1x6interlocking.gltf") {
   sequence1 = [0,3,4,7,8,11,12,15,16,19,20,23];
   sequence2 = [1,5,9,13,17,21];  
   const total=24;
document.getElementById('color222').innerHTML = (total-sequence1.length);
document.getElementById("color222a").value = (total-sequence1.length); 
   }
   else
   if(name+".gltf" == "versailles.gltf") {
   
   
   
       sequence1 = [0,5,6,7,4,3,10];
   sequence2 = [1,2];
   const total=12;
document.getElementById('color222').innerHTML = (total-sequence1.length);
document.getElementById("color222a").value = (total-sequence1.length); 
   }
   else
   if(name+".gltf" == "rhomboidmosaic.gltf") {
   
   sequence1 = [11,12,13,14,15,16,17,18,19,20,21,33,34,35,36,37,38,39,40,41,42,43,55,56,57,58,59,60,61,62,63,64,65,77,78,79,80,81,82,83,84,85,86,87,99,100,101,102,103,104,105,106,107,108,109];
   sequence2 = [23,25,27,29,31,67,69,71,73,75,111,113,115,117,119];
   const total=121;
document.getElementById('color222').innerHTML = (total-sequence1.length);
document.getElementById("color222a").value = (total-sequence1.length); 
   }
   else
   if(name+".gltf" == "riverrock.gltf") {
   
   sequence1 = [0,2,7,8,10,12,13,17,23,25,26,27,30,31,34,35,40,45,46,57,60,61,64,68,69,71,73];
   sequence2 = [1,5,9,11,16,19,20,22,24,29,32,37,39,41,47,51,52,53,56,59,62,63,66,70];
   const total=74;
document.getElementById('color222').innerHTML = (total-sequence1.length);
document.getElementById("color222a").value = (total-sequence1.length); 
   
   }
   else
if(name+".gltf" == "78rockface.gltf") {
sequence1 = [0,3,4,7,10,11,12,13,14,20,21,22,25,30,31,32,33,36,37,39,43,45,46,47,48,49,52,55,57,60,61,62,64,65,68,69,71,75,76,77,80,83,86,88,89,93,94,96,97,99,101,105,106,107,110,112,113,115,116,120,121,122,124,126,129,130,132,133,136,137,139,143,144,146,149,150,153,157,158,159,161,162,164,169,170,171,172,174,176,178,179,181,185,186,187,190,192,194];
sequence2 = [2,17,18,23,24,27,28,29,59,63,66,67,70,72,79,98,100,102,103,108,109,140,142,145,147,148,151,154,180,184,188,189,191,193,195];  
const total=196;
document.getElementById('color222').innerHTML = (total-sequence1.length);
document.getElementById("color222a").value = (total-sequence1.length); 
}
   else
   if(name+".gltf" == "minibrickbond.gltf") {
   
   sequence1 = [0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30,32,34,36,38,40,42,44,46,48,50,52,54,56,58,60,62,64,66,68,70,72,74,76,78,80,82,84,86,88,90];
   sequence2 = [3,7,11,17,21,25,31,35,39,45,49,53,59,63,67,73,77,81,87];
   const total=91;
document.getElementById('color222').innerHTML = (total-sequence1.length);
document.getElementById("color222a").value = (total-sequence1.length); 
   }
   else
   if(name+".gltf" == "smallherringbone.gltf") {
   
   sequence1 = [0,1,4,5,8,12,13,16,17,20,21,24,25,28,29,32,33,36,37,40,41,44,45,48,49,52,53,56,57,60,61,64,65,68,69,72,73,76,77];
   sequence2 = [6,7,14,15,22,23,30,31,38,39,46,47,54,55,62,63,70,71,78,79];
   const total=80;
document.getElementById('color222').innerHTML = (total-sequence1.length);
document.getElementById("color222a").value = (total-sequence1.length); 
   }
   else
   if(name+".gltf" == "78hex.gltf") {
   sequence1 = [0,1,2,3,4,5,6,7,8,9,10,11,12,14,16,18,20,22,24,25,26,27,28,29,30,31,32,33,34,35,36,37,39,41,43,45,47,49,50,51,52,53,54,55,56,57,58,59,60,61,62,64,66,68,70,72,74,75,76,77,78,79,80,81,82,83,84,85,86,87,89,91,93,95,97,99,100,101,102,103,104,105,106,107,108,109,110,111,112,114,116,118,120,122,124,125,126,127,128,129,130,131,132,133,134,135,136,137,139,141,143,145,147,149,150,151,152,153,154,155,156,157,158,159,160,161,162,164,166,168,170,172,174];
   sequence2 = [13,17,21,40,44,48,63,67,71,90,94,98,113,117,121,140,144,148,163,167,171];
   const total=175;
document.getElementById('color222').innerHTML = (total-sequence1.length);
document.getElementById("color222a").value = (total-sequence1.length); 
   
   }

for (let i = 0; i <=sequence2.length ; i++) {
const material = modelViewer.model.materials[sequence2[i]];

material.pbrMetallicRoughness['baseColorTexture'].texture.source.setURI(document.getElementById("diffuses").value);
material.pbrMetallicRoughness.setRoughnessFactor(0.8);
material.pbrMetallicRoughness.setMetallicFactor(1.0);

} 
 });

 ////////////////////////////////////////

  document.querySelector('#diffuse').addEventListener('input', (event) => {
    createAndApplyTexture('baseColorTexture', event);

    var selectcolor1 =  document.getElementById('diffuse');
    selectcolor1.addEventListener('change',
  function(){



    if(name == "undefinied")
{
    alert("dsd")
}
    var selectedOption = this.options[selectcolor1.selectedIndex];

    document.getElementById('lbResultado').innerHTML = selectedOption.text;

    document.getElementById("myInput").value = selectedOption.text;
    
    
    document.getElementById('color111').innerHTML = sequence1.length;

    document.getElementById("color111a").value = sequence1.length;
   

  });




 if(document.getElementById("diffuses").value == "")
{
    if(name+".gltf" == "24mosaic.gltf") {
    sequence1 = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14];
 
}
else
if(name+".gltf" == "2x2mosaic.gltf") {

    sequence1 = [0,2,4,7,9,11,12,14,16,19,21,23,24,26,28,31,33,35,1,3,5,6,8,10,13,15,17,18,20,22,25,27,29,30,32,34];


}
else
if(name+".gltf" == "78mosaic.gltf") {

sequence1 = [1,3,5,7,9,11,12,14,16,18,20,22,25,27,29,31,33,35,36,38,40,42,44,46,49,51,53,55,57,59,60,62,64,66,68,70,73,75,77,79,81,83,84,86,88,90,92,94,97,99,101,103,105,107,108,110,112,114,116,118,121,123,125,127,129,131,132,134,136,138,140,142,0,2,4,6,8,10,13,15,17,19,21,23,24,26,28,30,32,34,37,39,41,43,45,47,48,50,52,54,56,58,61,63,65,67,69,71,72,74,76,78,80,82,85,87,89,91,93,95,96,98,100,102,104,106,109,111,113,115,117,119,120,122,124,126,128,130,133,135,137,139,141,143];


}
else
if(name+".gltf" == "hexagonmosaic.gltf") {

    sequence1 = [0,1,2,6,7,8,12,13,14,18,19,20,24,25,26,30,31,32,36,37,38,3,4,5,9,10,11,15,16,17,21,22,23,27,28,29,33,34,35,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55];


}
else
if(name+".gltf" == "brickbondlarge.gltf") {

    sequence1 = [0,1,4,5,2,3,6,7];

}
else
if(name+".gltf" == "fiddlestickmosaic.gltf") {

sequence1 = [0,2,3,5,6,8,9,11,12,14,15,17,18,20,21,23,24,26,27,29,30,32,33,35,1,4,7,10,13,16,19,22,25,28,31,34];

}
else
if(name+".gltf" == "herringbonelarge.gltf") {

sequence1 = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16];

}
else
if(name+".gltf" == "78rockface.gltf") {
sequence1 = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,192,193,194,195];

}
else
if(name+".gltf" == "1x6interlocking.gltf") {
sequence1 = [1,3,5,7,9,11,13,15,17,19,21,23,0,2,4,6,8,10,12,14,16,18,20,22];
     
}
else
if(name+".gltf" == "versailles.gltf") {

sequence1 = [0,1,2,3,4,5,6,7,8,9,10,11];

}

else
if(name+".gltf" == "rhomboidmosaic.gltf") {

sequence1 = [11,12,13,14,15,16,17,18,19,20,32,33,34,35,36,37,38,39,40,41,53,54,55,56,57,58,59,60,61,62,74,75,76,77,78,79,80,81,82,83,95,96,97,98,99,100,101,102,103,104,0,1,2,3,4,5,6,7,8,9,10,21,22,23,24,25,26,27,28,29,30,31,42,43,44,45,46,47,48,49,50,51,52,63,64,65,66,67,68,69,70,71,72,73,84,85,86,87,88,89,90,91,92,93,94,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120];


}
else
if(name+".gltf" == "riverrock.gltf") {

    sequence1 = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73];


}
else
if(name+".gltf" == "minibrickbond.gltf") {

sequence1 = [1,3,5,7,9,11,13,15,17,19,21,23,25,27,29,31,33,35,37,39,41,43,45,47,49,51,53,55,57,59,61,63,65,67,69,71,73,75,77,79,81,83,85,87,89,0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30,32,34,36,38,40,42,44,46,48,50,52,54,56,58,60,62,64,66,68,70,72,74,76,78,80,82,84,86,88,90];


}
else
if(name+".gltf" == "smallherringbone.gltf") {

sequence1 = [5,6,7,8,9,15,16,17,18,19,25,26,27,28,29,35,36,37,38,39,45,46,47,48,49,55,56,57,58,59,65,66,67,68,69,75,76,77,78,79,0,1,2,3,4,10,11,12,13,14,20,21,22,23,24,30,31,32,33,34,40,41,42,43,44,50,51,52,53,54,60,61,62,63,64,70,71,72,73,74];


}
else
if(name+".gltf" == "78hex.gltf") {

sequence1 = [7,8,9,10,11,12,13,21,22,23,24,25,26,27,35,36,37,38,39,40,41,49,50,51,52,53,54,55,63,64,65,66,67,68,69,77,78,79,80,81,82,83,91,92,93,94,95,96,97,105,106,107,108,109,110,111,119,120,121,122,123,124,125,133,134,135,136,137,138,139,147,148,149,150,151,152,153,161,162,163,164,165,166,167,0,1,2,3,4,5,6,14,15,16,17,18,19,20,28,29,30,31,32,33,34,42,43,44,45,46,47,48,56,57,58,59,60,61,62,70,71,72,73,74,75,76,84,85,86,87,88,89,90,98,99,100,101,102,103,104,112,113,114,115,116,117,118,126,127,128,129,130,131,132,140,141,142,143,144,145,146,154,155,156,157,158,159,160,168,169,170,171,172,173,174];

}
}

  
});
///////////////////////////////////////77
document.querySelector('#diffuses').addEventListener('input', (event) => {
createAndApplyTexture2('baseColorTexture', event);

var selectcolor1 =  document.getElementById('diffuses');
selectcolor1.addEventListener('change',
  function(){
    var selectedOption1 = this.options[selectcolor1.selectedIndex];

    document.getElementById('lbResultados').innerHTML = selectedOption1.text;

    document.getElementById("myInputs").value = selectedOption1.text;


    document.getElementById('color111').innerHTML = sequence1.length;

    document.getElementById("color111a").value = sequence1.length;

    document.getElementById('color222').innerHTML = sequence2.length;

    document.getElementById("color222a").value = sequence2.length;


  });



if(document.getElementById("diffuses").hidden == false && document.getElementById("diffusess").hidden == true)
{
if(name+".gltf" == "24mosaic.gltf") {
    sequence1 = [1,3,4,7,9,10,13];
    sequence2 = [0,2,5,6,8,11,12,14];


}
else
if(name+".gltf" == "2x2mosaic.gltf") {

sequence2 = [0,2,4,7,9,11,12,14,16,19,21,23,24,26,28,31,33,35];
sequence1 = [1,3,5,6,8,10,13,15,17,18,20,22,25,27,29,30,32,34];
 
}
else
if(name+".gltf" == "78mosaic.gltf") {

sequence2 = [0,2,4,6,8,10,13,15,17,19,21,23,24,26,28,30,32,34,37,39,41,43,45,47,48,50,52,54,56,58,61,63,65,67,69,71,72,74,76,78,80,82,85,87,89,91,93,95,96,98,100,102,104,106,109,111,113,115,117,119,120,122,124,126,128,130,133,135,137,139,141,143];
sequence1 = [1,3,5,7,9,11,12,14,16,18,20,22,25,27,29,31,33,35,36,38,40,42,44,46,49,51,53,55,57,59,60,62,64,66,68,70,73,75,77,79,81,83,84,86,88,90,92,94,97,99,101,103,105,107,108,110,112,114,116,118,121,123,125,127,129,131,132,134,136,138,140,142];



}
else
if(name+".gltf" == "hexagonmosaic.gltf") {
    sequence1 = [6,7,8,18,19,20,30,31,32,4,5,9,10,11,16,17,21,22,23,28,29,33,34,35,40,41,42,43,44,45,46,47,52,53,54,55];
    sequence2 = [0,1,2,3,12,13,14,15,24,25,26,27,36,37,38,39,48,49,50,51];
 


}
else
if(name+".gltf" == "brickbondlarge.gltf") {

    sequence2 = [0,3,4,7];
sequence1 = [1,2,5,6];
  

}
else
if(name+".gltf" == "fiddlestickmosaic.gltf") {

sequence1 = [0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30,32,34];
sequence2 = [1,3,5,7,9,11,13,15,17,19,21,23,25,27,29,31,33,35];

}
else
if(name+".gltf" == "herringbonelarge.gltf") {

sequence1 = [0,1,2,3,8,9,10,11,16];
sequence2 = [4,5,6,7,12,13,14,15];

}
else
if(name+".gltf" == "78rockface.gltf") {
sequence1 = [0,3,4,7,10,11,12,13,14,20,21,22,25,30,31,32,33,36,37,39,43,45,46,47,48,49,52,55,57,60,61,62,64,65,68,69,71,75,76,77,80,83,86,88,89,93,94,96,97,99,101,105,106,107,110,112,113,115,116,120,121,122,124,126,129,130,132,133,136,137,139,143,144,146,149,150,153,157,158,159,161,162,164,169,170,171,172,174,176,178,179,181,185,186,187,190,192,194];
sequence2 = [1,2,5,6,8,9,15,16,17,18,19,23,24,26,27,28,29,34,35,38,40,41,42,44,50,51,53,54,56,58,59,63,66,67,70,72,73,74,78,79,81,82,84,85,87,90,91,92,95,98,100,102,103,104,108,109,111,114,117,118,119,123,125,127,128,131,134,135,138,140,141,142,145,147,148,151,152,154,155,156,160,163,165,166,167,168,173,175,177,180,182,183,184,188,189,191,193,195];

}
else
if(name+".gltf" == "1x6interlocking.gltf") {
sequence1 = [0,3,4,7,8,11,12,15,16,19,20,23];
sequence2 = [1,2,5,6,9,10,13,14,17,18,21,22];

}
else
if(name+".gltf" == "versailles.gltf") {

    sequence1 = [0,5,6,7,4,3,10];
sequence2 = [1,2,9,8,11];

}

else
if(name+".gltf" == "rhomboidmosaic.gltf") {

sequence2 = [0,1,2,3,4,5,6,7,8,9,10,22,23,24,25,26,27,28,29,30,31,32,44,45,46,47,48,49,50,51,52,53,54,66,67,68,69,70,71,72,73,74,75,76,88,89,90,91,92,93,94,95,96,97,98,110,111,112,113,114,115,116,117,118,119,120];
sequence1 = [11,12,13,14,15,16,17,18,19,20,21,33,34,35,36,37,38,39,40,41,42,43,55,56,57,58,59,60,61,62,63,64,65,77,78,79,80,81,82,83,84,85,86,87,99,100,101,102,103,104,105,106,107,108,109];

}
else
if(name+".gltf" == "riverrock.gltf") {

sequence1 = [0,2,7,8,10,12,13,17,23,25,26,27,30,31,34,35,40,45,46,57,60,61,64,68,69,71,73];
sequence2 = [1,3,4,5,6,9,11,14,15,16,18,19,20,21,22,24,28,29,32,33,36,37,38,39,41,42,43,44,47,48,49,50,51,52,53,54,55,56,58,59,62,63,65,66,67,70,72];

  

}
else
if(name+".gltf" == "minibrickbond.gltf") {

sequence1 = [0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30,32,34,36,38,40,42,44,46,48,50,52,54,56,58,60,62,64,66,68,70,72,74,76,78,80,82,84,86,88,90];
sequence2 = [1,3,5,7,9,11,13,15,17,19,21,23,25,27,29,31,33,35,37,39,41,43,45,47,49,51,53,55,57,59,61,63,65,67,69,71,73,75,77,79,81,83,85,87,89];

}
else
if(name+".gltf" == "smallherringbone.gltf") {

sequence1 = [0,1,4,5,8,12,13,16,17,20,21,24,25,28,29,32,33,36,37,40,41,44,45,48,49,52,53,56,57,60,61,64,65,68,69,72,73,76,77];
sequence2 = [2,3,6,7,9,10,11,14,15,18,19,22,23,26,27,30,31,34,35,38,39,42,43,46,47,50,51,54,55,58,59,62,63,66,67,70,71,74,75,78,79];

}
else
if(name+".gltf" == "78hex.gltf") {

sequence1 = [0,1,2,3,4,5,6,7,8,9,10,11,12,14,16,18,20,22,24,25,26,27,28,29,30,31,32,33,34,35,36,37,39,41,43,45,47,49,50,51,52,53,54,55,56,57,58,59,60,61,62,64,66,68,70,72,74,75,76,77,78,79,80,81,82,83,84,85,86,87,89,91,93,95,97,99,100,101,102,103,104,105,106,107,108,109,110,111,112,114,116,118,120,122,124,125,126,127,128,129,130,131,132,133,134,135,136,137,139,141,143,145,147,149,150,151,152,153,154,155,156,157,158,159,160,161,162,164,166,168,170,172,174];
sequence2 = [13,15,17,19,21,23,38,40,42,44,46,48,63,65,67,69,71,73,88,90,92,94,96,98,113,115,117,119,121,123,138,140,142,144,146,148,163,165,167,169,171,173];

}
}
});

//////////////////////////////////////////////////////////7  
document.querySelector('#diffusess').addEventListener('input', (event) => {
createAndApplyTexture3('baseColorTexture', event);


   
var selectcolor1 =  document.getElementById('diffusess');
    selectcolor1.addEventListener('change',
  function(){
    var selectedOption2 = this.options[selectcolor1.selectedIndex];

    document.getElementById('lbResultadoss').innerHTML = selectedOption2.text;

    document.getElementById("myInputss").value = selectedOption2.text;

    if(document.getElementById("diffusess").hidden == false)
{

    document.getElementById('color111').innerHTML = sequence1.length;

    document.getElementById("color111a").value = sequence1.length;

    document.getElementById('color222').innerHTML = sequence2.length;

    document.getElementById("color222a").value = sequence2.length;

    document.getElementById('color333').innerHTML = sequence3.length;

 document.getElementById("color333a").value = sequence3.length;
}
  });


  if(name+".gltf" == "24mosaic.gltf") {
   
sequence1 = [1,3,4,7,9,10,13];
sequence2 = [5,6,8,11];
sequence3 = [0,2,12,14];




}
else
  if(name+".gltf" == "2x2mosaic.gltf") {
    sequence2 = [7,9,11,24,26,28];
sequence1 = [1,3,5,6,8,10,13,15,17,18,20,22,25,27,29,30,32,34];
sequence3 = [0,2,4,12,14,16,19,21,23,31,33,35];                



}
else
  if(name+".gltf" == "hexagonmosaic.gltf") {
    sequence1 = [6,7,8,18,19,20,30,31,32,4,5,9,10,11,16,17,21,22,23,28,29,33,34,35,40,41,42,43,44,45,46,47,52,53,54,55];
    sequence2 = [0,13,15,24,37,39,48];
    sequence3 = [1,2,3,12,14,25,26,27,36,38,49,50,51];         

}
else

if(name+".gltf" == "fiddlestickmosaic.gltf") {



sequence1 = [0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30,32,34];
sequence2 = [3,5,13,15,17,19,27,33,35];           
sequence3 = [1,7,9,11,21,23,25,31];     

}
else
if(name+".gltf" == "78mosaic.gltf") {

sequence2 = [13,15,17,19,21,23,48,50,52,54,56,58,85,87,89,91,93,95,120,122,124,126,128,130];
sequence1 = [1,3,5,7,9,11,12,14,16,18,20,22,25,27,29,31,33,35,36,38,40,42,44,46,49,51,53,55,57,59,60,62,64,66,68,70,73,75,77,79,81,83,84,86,88,90,92,94,97,99,101,103,105,107,108,110,112,114,116,118,121,123,125,127,129,131,132,134,136,138,140,142];
sequence3 = [0,2,4,6,8,10,24,26,28,30,32,34,37,39,41,43,45,47,61,63,65,67,69,71,72,74,76,78,80,82,96,98,100,102,104,106,109,111,113,115,117,119,133,135,137,139,141,143];  


}
else
if(name+".gltf" == "brickbondlarge.gltf") {

sequence2 = [0,4];
sequence1 = [1,2,5,6];
sequence3 = [3,7];   

}
else
if(name+".gltf" == "herringbonelarge.gltf") {

sequence1 = [0,1,2,3,8,9,10,11,16];
sequence2 = [4,7,12,15];
sequence3 = [5,6,13,14];   
}
else
if(name+".gltf" == "78rockface.gltf") {
sequence1 = [0,3,4,7,10,11,12,13,14,20,21,22,25,30,31,32,33,36,37,39,43,45,46,47,48,49,52,55,57,60,61,62,64,65,68,69,71,75,76,77,80,83,86,88,89,93,94,96,97,99,101,105,106,107,110,112,113,115,116,120,121,122,124,126,129,130,132,133,136,137,139,143,144,146,149,150,153,157,158,159,161,162,164,169,170,171,172,174,176,178,179,181,185,186,187,190,192,194];
sequence2 = [1,5,6,8,9,15,16,19,26,34,35,38,40,41,42,44,50,51,53,54,56,58,73,74,78,81,82,84,85,87,90,91,92,95,104,111,114,117,118,119,123,125,127,128,131,134,135,138,141,152,155,156,160,163,165,166,167,168,173,175,177,182,183];
sequence3 = [2,17,18,23,24,27,28,29,59,63,66,67,70,72,79,98,100,102,103,108,109,140,142,145,147,148,151,154,180,184,188,189,191,193,195];  
}
else
if(name+".gltf" == "1x6interlocking.gltf") {
sequence1 = [0,3,4,7,8,11,12,15,16,19,20,23];
sequence2 = [2,6,10,14,18,22];
sequence3 = [1,5,9,13,17,21];  
}
else
if(name+".gltf" == "versailles.gltf") {



    sequence1 = [0,5,6,7,4,3,10];
sequence2 = [9,8,11];
sequence3 = [1,2];
}
else
if(name+".gltf" == "rhomboidmosaic.gltf") {

sequence2 = [0,1,2,3,4,5,6,7,8,9,10,22,24,26,28,30,32,44,45,46,47,48,49,50,51,52,53,54,66,68,70,72,74,76,88,89,90,91,92,93,94,95,96,97,98,110,112,114,116,118,120];
sequence1 = [11,12,13,14,15,16,17,18,19,20,21,33,34,35,36,37,38,39,40,41,42,43,55,56,57,58,59,60,61,62,63,64,65,77,78,79,80,81,82,83,84,85,86,87,99,100,101,102,103,104,105,106,107,108,109];
sequence3 = [23,25,27,29,31,67,69,71,73,75,111,113,115,117,119];
}
else
if(name+".gltf" == "riverrock.gltf") {

sequence1 = [0,2,7,8,10,12,13,17,23,25,26,27,30,31,34,35,40,45,46,57,60,61,64,68,69,71,73];
sequence2 = [3,4,6,14,15,18,21,28,33,36,38,42,43,44,48,49,50,54,55,58,65,67,72];
sequence3 = [1,5,9,11,16,19,20,22,24,29,32,37,39,41,47,51,52,53,56,59,62,63,66,70];
  

}
else
if(name+".gltf" == "minibrickbond.gltf") {

sequence1 = [0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30,32,34,36,38,40,42,44,46,48,50,52,54,56,58,60,62,64,66,68,70,72,74,76,78,80,82,84,86,88,90];
sequence2 = [1,5,9,13,15,19,23,27,29,33,37,41,43,47,51,55,57,61,65,69,71,75,79,83,85,89];
sequence3 = [3,7,11,17,21,25,31,35,39,45,49,53,59,63,67,73,77,81,87];
}
else
if(name+".gltf" == "smallherringbone.gltf") {

sequence1 = [0,1,4,5,8,12,13,16,17,20,21,24,25,28,29,32,33,36,37,40,41,44,45,48,49,52,53,56,57,60,61,64,65,68,69,72,73,76,77];
sequence2 = [2,3,10,11,18,19,26,27,34,35,42,43,50,51,58,59,66,67,74,75];
sequence3 = [6,7,14,15,22,23,30,31,38,39,46,47,54,55,62,63,70,71,78,79];
}
else
if(name+".gltf" == "78hex.gltf") {
sequence1 = [0,1,2,3,4,5,6,7,8,9,10,11,12,14,16,18,20,22,24,25,26,27,28,29,30,31,32,33,34,35,36,37,39,41,43,45,47,49,50,51,52,53,54,55,56,57,58,59,60,61,62,64,66,68,70,72,74,75,76,77,78,79,80,81,82,83,84,85,86,87,89,91,93,95,97,99,100,101,102,103,104,105,106,107,108,109,110,111,112,114,116,118,120,122,124,125,126,127,128,129,130,131,132,133,134,135,136,137,139,141,143,145,147,149,150,151,152,153,154,155,156,157,158,159,160,161,162,164,166,168,170,172,174];
sequence2 = [15,19,23,38,42,46,65,69,73,88,92,96,115,119,123,138,142,146,165,169,173];
sequence3 = [13,17,21,40,44,48,63,67,71,90,94,98,113,117,121,140,144,148,163,167,171];

}

  });
  //////////////////////////////////////////////////////////

  document.querySelector(".slider").addEventListener('beforexrselect', (ev) => {
    // Keep slider interactions from affecting the XR scene.
    ev.preventDefault();
 
   
});  


};
   

  

  const createAndApplyTexture = async (channel, event) => {
    const texture = await modelViewer.createTexture(event.target.value);

    document.getElementById("download-button").hidden = false;
    document.getElementById("colora1").hidden = false;

  for (let i = 0; i <=sequence1.length ; i++) {
        const material = modelViewer.model.materials[sequence1[i]];
 
        material.pbrMetallicRoughness[channel].setTexture(texture);
        material.pbrMetallicRoughness.setRoughnessFactor(0.8);
        material.pbrMetallicRoughness.setMetallicFactor(1.0);
   
 
    } 
}

const createAndApplyTexture2 = async (channel, event) => {
    const texture = await modelViewer.createTexture(event.target.value);
   
    document.getElementById("colora2").hidden = false;
    document.getElementById("delete2").hidden = false;
      for (let i = 0; i <=  sequence2.length ; i++) {
        const material = modelViewer.model.materials[sequence2[i]];


        material.pbrMetallicRoughness[channel].setTexture(texture);
        material.pbrMetallicRoughness.setRoughnessFactor(0.8);
        material.pbrMetallicRoughness.setMetallicFactor(1.0);
  }
  }
    
  const createAndApplyTexture3 = async (channel, event) => {
    const texture = await modelViewer.createTexture(event.target.value);
    document.getElementById("delete2").hidden = true;
    document.getElementById("delete3").hidden = false;
      for (let i = 0; i <= sequence3.length ; i++) {
        
        const material = modelViewer.model.materials[sequence3[i]];


        material.pbrMetallicRoughness[channel].setTexture(texture);
        material.pbrMetallicRoughness.setRoughnessFactor(0.8);
        material.pbrMetallicRoughness.setMetallicFactor(1.0);
  
    
  }
  }

  document.querySelector("#download-button").addEventListener("click", downloadPosterToDataURL);
      

      function downloadPosterToDataURL() {
       let url = modelViewer.toDataURL();

   const a = document.createElement("a");
   a.href = url;
   a.download = "modelViewer_toDataURL.png";
 
   URL.revokeObjectURL(url);

 // Codificarla, ya que a veces aparecen errores si no se hace
 url = encodeURIComponent(url);
 // Codificarla, ya que a veces aparecen errores si no se hace
 // La carga útil como JSON
 const payload = {
   "captura": url,
   "by": "Parzibyte",
   // Aquí más datos...
 };


 // Aquí la ruta en donde enviamos la foto. Podría ser una absoluta o relativa
 const ruta = "guardar.php";
 fetch(ruta, {
   method: "POST",
   body: JSON.stringify(payload),
   headers: {
     "Content-type": "application/x-www-form-urlencoded",
   
   
   }
 })
 .then(resultado => {
     // A los datos los decodificamos como texto plano
     return resultado.text()
   })
   .then(nombreDeLaFoto => {
     // nombreDeLaFoto trae el nombre de la imagen que le dio PHP
     console.log({ nombreDeLaFoto });

   });

// Agregar el listener al botón


}
</script>

</body>
</html>     
</model-viewer>





<!-- Footer -->
<footer style="max-width: 200%; min-width: 100%;" class="footer bg-dark text-light py-4 " id="footer">
    <div class="container">
        <div class="row pt-2 justify-content-center">
            <div class="col-lg-2 col-sm-4">
                <a href="https://www.explorematerial.com/" class="d-inline-block">
                    <img src="icons/CAPa.PNG" alt="Logo of Cartzilla"  width="100%"  class="img img-fluid">
                </a>
            </div>

            <div class="col-lg-2 col-sm-4">
               
              <ul class="footer-list ps-3">
                <li  onclick="location.href='https://materials-stone.myshopify.com/collections';" class="list-item mb-1 text-secondary">PRODUCTS</li>
                <li  onclick="location.href='https://www.explorematerial.com/pages/bespoke';" class="list-item mb-1 text-secondary">BESPOKE</li>
                <li  onclick="location.href='https://www.explorematerial.com/pages/bespoke';" class="list-item mb-1 text-secondary">SERVICES</li>
                <li  onclick="location.href='https://www.explorematerial.com/blogs/news';" class="list-item mb-1 text-secondary">BLOG</li>
                <li  onclick="location.href='https://www.explorematerial.com/pages/about';" class="list-item mb-1 text-secondary">OUR STORY</li>
                <li  onclick="location.href='https://www.explorematerial.com/pages/project-gallery';" class="list-item mb-1 text-secondary">PROJECTS</li>
              </ul>
          </div>

            <div class="col-lg-2 col-sm-4">
               
                <ul class="footer-list ps-3">
                  <li  onclick="location.href='https://www.explorematerial.com/pages/our-showrooms';" class="list-item mb-1 text-secondary">LOCATIONS</li>
                  <li  onclick="location.href='https://www.explorematerial.com/pages/contact';" class="list-item mb-1 text-secondary">CONTACT US</li>
                  <li  onclick="location.href='https://www.explorematerial.com/pages/career-opportunities';" class="list-item mb-1 text-secondary">CAREERS</li>
                  <li  onclick="location.href='https://www.explorematerial.com/pages/literature';" class="list-item mb-1 text-secondary">LITERATURE</li>
                  <li  onclick="location.href='https://www.explorematerial.com/pages/trade-program';" class="list-item mb-1 text-secondary">FOR THE TRADE</li>
                  <li  onclick="location.href='https://www.explorematerial.com/account/login?return_url=%2Faccount';" class="list-item mb-1 text-secondary">ACCOUNT</li>
                  <li  onclick="location.href='https://www.explorematerial.com/pages/frequently-asked-questions';" class="list-item mb-1 text-secondary">FAQS</li>
                  <li  onclick="location.href='https://www.explorematerial.com/a/wishlist';" class="list-item mb-1 text-secondary">WISHLIST</li>
                </ul>
            </div>
           
            <div class="col-lg-2 col-sm-4">
                <h6 class="text-light ps-3 mb-3">Follow us</h6>
                <ul class="footer-list ps-3">
                    <li  onclick="location.href='https://www.facebook.com/explorematerial';" class="list-item mb-1 text-secondary">Facebook</li>
                    <li  onclick="location.href='https://www.instagram.com/explore.material/';" class="list-item mb-1 text-secondary">Instagram</li>
                    <li  onclick="location.href='https://www.linkedin.com/company/explorematerial/';" class="list-item mb-1 text-secondary">linkedin</li>
                    <li  onclick="location.href='https://www.pinterest.com/explorematerial/_created/';" class="list-item mb-1 text-secondary">Pinterest</li>
                    <li  onclick="location.href='https://www.tiktok.com/@explorematerial';" class="list-item mb-1 text-secondary">TikTok</li>
                  
                </ul>

            </div>
            <div class="col-lg-4 col-sm-8 ">
                <div class="row">
                    <h6>Download our app</h6>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-8">
                        <a href="" class="btn btn-dark border border-1 border-secondary d-flex btn-mobile-app-footer mb-2 mb-md-0">
                            <i class="fab fa-apple text-light app-store-logo align-self-center fs-3"></i>
                            <div class="d-flex flex-column ms-2">
                                <span class="text-muted app-store-text">Download on the</span>
                                <span class="text-light app-store-name">App Store</span>
                            </div>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
        <hr class="hr-light my-3 my-md-5">
        <div class="row justify-content-lg-between justify-content-center flex-sm-column flex-lg-row">
            <div class="col-md-5 col-sm-8 text-muted fs-6 mb-lg-1 mb-2 mx-lg-0 mx-auto ">
                &copy;  2023 MATERIAL Bespoke Stone + Tile | All rights reserved
            </div>
            <div class="col-md-7 col-sm-10 text-muted fs-6 mx-lg-0 mx-auto" style="width: 50%;">
                <ul class="footer-list footer-copyright-list text-md-end text-sm-start">
                    <li class="d-inline-block mx-2 list-item">Privacy Polcy</li>
             
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- End of footer Footer -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
    integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
    integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
    crossorigin="anonymous"></script>

<!--Enable tooltips  -->
<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
</script>
</body>
</html>


<style>




  /* This keeps child nodes hidden while the element loads */
  :not(:defined) > * {
    display: none;
  }

/* Footer */
.footer-list {
    list-style-type: none;
    padding-left: 0;
   
}
/* End of footer */

/* Responsive */

@media only screen and (max-width: 576px) {
    .btn-mobile-app {
        min-width: 60%;
        max-width: 75%;
        margin: 0 auto;
    }

    .btn-mobile-app-footer {
        min-width: 30%;
        max-width: 35%;
    }
}
@media only screen and (min-width: 992px) {
    .hero-container {
        padding-top: 6rem !important;
    }
}

.slider {
    width: 100%;
    height: 20%;
    text-align: center;
    overflow: hidden;
    position: absolute;
    bottom: 0%;
 
  }

  .slides {
    display: flex;
    overflow-x: auto;

    width:100%;
    height: 100%;
    scroll-snap-type: x mandatory;
    scroll-behavior: smooth;
    -webkit-overflow-scrolling: touch;
   
  }

  .slide {
    scroll-snap-align: start;
    flex-shrink: 0;
   max-width: 8%;
    min-height: 100px;
    min-width: 100px;
    max-height: 100%;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    background-color: #fff;
    margin-right: 10px;
    border-radius: 1px;
    border: none;
    display: flex;
    
  }

  .slide.selected {
    border: 2px solid #4285f4;
    width: 100px;
    height: 100px;
    
  }

  .slide:focus {
    outline: none;
    
  }

  .slide:focus-visible {
    outline: 1px solid #4285f4;
    
  }
  model-viewer{
 min-width: 100%;
  max-width: 200% ;
height: 720px;

background-color: rgb(255, 255, 255);
}








</style>
