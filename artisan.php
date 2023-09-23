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
<script src="https://code.jquery.com/jquery-3.6.0.min.js" >
    
    </script>
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
                    <a class="nav-link" href="/MosaicMixer/group1new.php">Group1</a>
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
                    <a style="color: #4285f4;" class="nav-link" href="/MosaicMixer/artisandesign.php">DesignMosaic</a>
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

  
      <button class="slide" onclick="switchSrc(this, 'bambooydot')" style="background-image: url('icons/artisan/1.jpg');" >
      </button><button class="slide" onclick="switchSrc(this, 'ostra')" style="background-image: url('icons/artisan/7.jpg');"></button>
      </button><button class="slide" onclick="switchSrc(this, 'disco')" style="background-image: url('icons/artisan/3.jpg');">
      </button>
      <button class="slide" onclick="switchSrc(this, 'geostar')" style="background-image: url('icons/artisan/5.jpg');">
      </button><button class="slide" onclick="switchSrc(this, 'sigma')" style="background-image: url('icons/artisan/8.jpg');">
      </button><button class="slide" onclick="switchSrc(this, 'bamboo')" style="background-image: url('icons/artisan/2.jpg');"></button>
      </button><button class="slide" onclick="switchSrc(this, 'stella')" style="background-image: url('icons/artisan/9.jpg');">
      </button>
      <button class="slide" onclick="switchSrc(this, 'leaves')" style="background-image: url('icons/artisan/6.jpg');">
      </button><button class="slide" onclick="switchSrc(this, 'geopicket')" style="background-image: url('icons/artisan/4.jpg');">

    </button>

      </div>
  </div>

  <div> 


  <p style= "color: #462ae2; font-size: 18pt; text-align: center; font-family:courier;">Artisan Collection</p>
 
  
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

$name = $_POST['name'];

$consulta = "SELECT colors.Color,colors.clavecolor FROM price,colors,models where models.clavemodel=1 and colors.idcolor = price.idcolor and models.idmodel = price.idmodel ORDER BY colors.color ASC ";
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
    <input type="hidden" id="myInputaaas" name="ulListadoaas" value="artisan" class="custom" size="32">


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
  
  
    const base = "models/artisancollection/" + name;
 
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

if(name+".gltf" == "bamboo.gltf") {
sequence1 = [0,2,4,7,10,12,15,16,18,20,21,23,25,26,29,30,32,35,37,38,40,41,43,46,47,48,52,55,56,58,59,61,63,65,69,71,72,75,78,79,80,82,86,88,90,91,92,94,96,99,103,104,105,107,108,109,111,112];
const total=116;
document.getElementById('color111').innerHTML = (total);
document.getElementById("color111a").value = (total);
}
else
if(name+".gltf" == "bambooydot.gltf") {
sequence1 = [58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144];
const total=145;
document.getElementById('color111').innerHTML = (total);
document.getElementById("color111a").value = (total);  
}
else
if(name+".gltf" == "disco.gltf") {
sequence1 = [5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,192,193,194,196,197,198,199,200,201,202,203,204,205,206,207,208,209,210,211,212,213,214,215,216,217,218,219,220,221,222,224,225,226,227,228,229,230,231,232,233,234,235,236,237,238,239,240,241,242,243,244,245,246,247,248,249,250,251,252,253,254,255,256,257,258,259,260,261,262,263,264,265,266,267,268,269,270,271,272,273,274,275,276,277,278,279,280,281,282,283,284,285,286,287,288,289,290,291,292,293,294,295,296,297,298,299,300,301,302,303,304,305,306,307,308,309,310,311,312,313,314,315,316,317,318,319,320,321,322,323,324,325,326,327,328,329,330,331,332,333,334,335,336,337,338,339,340,341,342,343,344,345,346,347,348,349,350,351,352,353,354,355,356,357,358,359,360,361,362,363,364,365,366,367,368,369,370,371,372,373,374,375,376,377,378,379,380,381,382,383,384,385,386,387,388,389,390,391,392,393,394,395,396,397,398,399,400,401,402,403,404,405,406,407,408,409,410,411,412,413,414,415,416,417,418,419,420,421,422,423,424,425,426,427,428,429,430,431,432,433,434,435,436,437,438,439,440,441,442,443,444,445,446,447,448,449,450,451,452,453,454,455,456,457,458,459,460,461,462,463,464,465,466,467,468,469,470,471,472,473,474,475,476,477,478,479,480,481,482,483,484,485,486,487,488,489,490,491,492,493,494,495,496,497,498,499,500,501,502,503,504,505,506,507,508,509,510,511,512,513,514,515,516,517,518,519,520,521,522,523,524,525,526,528,529,530,531,532,533,534,535,536,537,538,539,540,541,542,543,544,545,546,547,548,549,550,551,552,553,554,555,556,557,558,559,560,561,562,563,564,565,566,567,568,569,570,571,572,573,574,576,577,578,579,580,581,582,583,584,585,586,587,588,589,590,591,592,593,594,595,596,597,598,599,600,601,602,603,604,605,606,607,608,609,610,611,612,613,614,615,616,617,618,619,620,621,622,623,624,625,626,627,628,629,630,631,632,633,634,635,636,637,638,639,640,641,642,643,644,645,647,648,649,650,651,652,653,654,655,656,657,658,659,660,661,662,663,664,665,666,667,668,669,670,671,672,673,674,675,676,677,678,679,680,681,682,683,684,685,686,687,688,689,690,691,692,693,695,696,697,698,699,700,701,702,703,704,705,706,707,708,709,710,711,712,713,714,715,716,717,718,719,720,721,722,723,724,725,726,727,728,729,730,731,732,733,734,735,736,737,738,739,740,741,742,743,744,745,746,747,748,749,750,751,752,753,754,755,756,757,758,759,760,761,762,763,764,765,766,767];
const total=760;
document.getElementById('color111').innerHTML = (total);
document.getElementById("color111a").value = (total);
}
if(name+".gltf" == "geopicket.gltf") {
sequence1 = [8,9,10,11,12,13,14,15,16,17,18,19];
const total=20;
document.getElementById('color111').innerHTML = (total);
document.getElementById("color111a").value = (total);
}
else
if(name+".gltf" == "geostar.gltf") {
sequence1 = [8,9,10,11,12,13,14,15];
const total=16;
document.getElementById('color111').innerHTML = (total);
document.getElementById("color111a").value = (total);  
}
else
if(name+".gltf" == "leaves.gltf") {
sequence1 = [0,1,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,192,193,194,195,196,197,198,199,200,201,202,203,204,205,206,207,208,209,210,211,212,213,214,215,216,217,218,219,220,221,222,223,224,225,226,227,228,229,230,231,232,233,234,235,236,237,238,239,240,241,242,243,244,245,246,247,248,249,250,251,252,253,254,255,256,257,258,259,260,261,262,263,264,265,266,267,268,269,270,271,272,273,274,275,276,277,278,279,280,281,282,283,284,285,286,287,288,289,290,291,292,293,294,295,296,297,298,299,300,301,302,303,304,305,306,307,308,309,310,311,312,313,314,315,316,317,318,319,320,321,322,323,324,325,326,327,328,329,330,331,332,333,334,335,336,337,338,339,340,341,342,343,344,345,346,347,348,349,350,351,352,353,354,355,356,357,358,359,360,361,362,363,364,365,366,367,368,369,370,371,372,373,374,375,376,377,378,379,380,381,382,383,384,385,386,387,388,389,390,391,392,393,394,395,396,397,398,399,400,401,402,403,404,405,406,407,408,409,410,411,412,413,414,415,416,417,418,419,420,421,422,423,424,425,426,427,428,429,430,431,432,433,434,435,436,437,438,439,440,441,442,443,444,445,446,447,448,449,450,451,452,453,454,455,456,457,458,459,460,461,462,463,464,465,466,467,468,469,470,471,472,473,474,475,476,477,478,479,480,481,482,483,484,485,486,487,488,489,490,491,492,493,494,495,496,497,498,499,500,501,502,503,504,505,506,507,508,509,510,511,512,513,514,515,516,517,518,519,520,521,522,523,524,525,526,527,528,529,530,531,532,533,534,535,536,537,538,539,540,541,542,543,544,545,546,547,548,549,550,551,552,553,554,555,556,557,558,559,560,561,562,563,564,565,566,567,568,569,570,571,572,573,574,575,576,577,578,579,580,581,582,583,584,585,586,587,588,589,590,591,592,593,594,595,596,597,598,599,600,601,602,603,604,605,606,607,608,609,610,611,612,613,614,615,616,617,618,619,620,621,622,623,624,625,627,628,629,630,631,632,633,634,635,636,637,638,639,640,641,642,643,644,645,646,647,648,649,650,651,652,653,654,655,656,657,658,659,660,661,662,663,664,665,666,667,668,669,670,671,672,673,674,675,676,677,678,679,680,681,682,683,684,685,686,687,688,689,690,691,692,693,694,695,696,697,698,699,700,701,702,703,704,705,706,707,708,709,710,711,712,713,714,715,716,717,718,719,720,721,722,723,724,725,726,727,728,729,730,731,732,733,734,735,736,737,738,739,740,741,742,743,744,745,746,747,748,749,750,751,752,753,754,755,756,757,758,759,760,761,762,763,764,765,766,767,768,769,770,771,772,773,774,775,776,777,778,779,780,781,782,783,784,785,786,787,788,789,790,791,792,793,794,795,796,797,798,799,800,801,802,803,804,805,806,807,808,809,810,811,812,813,814,815,816,817,818,819,820,821,822,823,824,825,826,827,828,829,830,831,832,833,834,835,836,837,838,839,840,841,842,843,844,845,846,847,848,849,850,851,852,853,854,855,856,857,858,859,860,861,862,863,864,865,866,867,868,869,870,871,872,873,874,875,876,877,878,879,880,881,882,883,884,885];
const total=894;
document.getElementById('color111').innerHTML = (total);
document.getElementById("color111a").value = (total);
}
if(name+".gltf" == "ostra.gltf") {
sequence1 = [1,5,6,7,8,11,13,14,19,21,25,26,32,33,34,35,37,38,42,43];
const total=84;
document.getElementById('color111').innerHTML = (total);
document.getElementById("color111a").value = (total);
}
else
if(name+".gltf" == "sigma.gltf") {
sequence1 = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119];
const total=132;
document.getElementById('color111').innerHTML = (total);
document.getElementById("color111a").value = (total);  
}
else
if(name+".gltf" == "stella.gltf") {
sequence1 = [0,24,25,28,29,38,39,40,47,49,51,52,54,57,58,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184];
const total=185;
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
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

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

if(name+".gltf" == "bamboo.gltf") {
sequence1 = [1,3,5,6,8,9,11,13,14,17,19,22,24,27,28,31,33,34,36,39,42,44,45,49,50,51,53,54,57,60,62,64,66,67,68,70,73,74,76,77,81,83,84,85,87,89,93,95,97,98,100,101,102,106,110,113,114,115];
sequence2 = [2,4,10,16,18,25,26,29,35,37,38,40,47,52,55,56,58,65,71,75,78,82,88,91,96,103,104,111,112];
const total=116;
document.getElementById('color222').innerHTML = (total-sequence1.length);
document.getElementById("color222a").value = (total-sequence1.length);

}
else
if(name+".gltf" == "bambooydot.gltf") {
const total=145;
sequence1 = [0,1,2,3,4,5,6,7,8,9,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57];
sequence2 = [59,61,63,65,67,69,71,73,75,77,79,81,82,86,88,92,93,94,98,100,102,104,107,109,111,112,114,116,118,120,122,123,124,129,130,132,134,136,138,140,143];
document.getElementById('color222').innerHTML = (total-sequence1.length);
document.getElementById("color222a").value = (total-sequence1.length);

}
else
if(name+".gltf" == "disco.gltf") {
sequence1 = [0,1,2,4];
sequence2 = [5,7,8,9,10,11,12,13,14,48,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,192,193,194,196,198,199,200,201,202,203,204,266,267,268,269,270,271,272,273,274,275,276,277,278,279,280,281,282,283,284,285,286,287,288,289,290,291,292,293,294,295,296,297,298,299,300,301,302,303,304,305,338,339,340,341,342,343,344,345,346,347,348,349,350,351,352,353,354,355,356,357,358,359,360,361,362,363,364,365,366,367,368,369,370,371,372,373,374,375,376,377,378,379,380,381,382,383,384,385,387,388,389,390,391,392,393,394,455,456,457,458,459,460,461,462,463,464,465,466,467,468,469,470,471,472,473,474,475,476,477,478,479,480,481,482,483,484,485,486,487,488,489,490,491,492,493,494,528,529,530,531,532,533,534,535,536,537,538,539,540,541,542,543,544,545,546,547,548,549,550,551,552,553,554,555,556,557,558,559,560,561,562,563,564,565,566,567,568,569,570,571,572,573,574,576,578,579,580,581,582,583,584,585,647,648,649,650,651,652,653,654,655,656,657,658,659,660,661,662,663,664,665,666,667,668,669,670,671,672,673,674,675,676,677,678,679,680,681,682,683,684,685,686,687,688,689,690,691,692,693,695,696,697,698,699,700,701,702,703,704,705,706,707,708,709,710,711,712,713,714,715,716,717,718,719,720,721,722,723,724,725,726,727,728,729,730,731,732,733,734,767];
const total=760;
document.getElementById('color222').innerHTML = (total-sequence1.length);
document.getElementById("color222a").value = (total-sequence1.length);  
}
if(name+".gltf" == "geopicket.gltf") {
sequence1 = [0,1,2,3,4,5,6,7];
sequence2 = [9,12,15,18];
const total=20;
document.getElementById('color222').innerHTML = (total-sequence1.length);
document.getElementById("color222a").value = (total-sequence1.length);

}
else
if(name+".gltf" == "geostar.gltf") {
const total=16;
sequence1 = [0,1,2,3,4,5,6,7];
sequence2 = [8,10,12,14];
document.getElementById('color222').innerHTML = (total-sequence1.length);
document.getElementById("color222a").value = (total-sequence1.length);

}
else
if(name+".gltf" == "leaves.gltf") {
sequence1 = [886,887,888,889,890,891,892,893,894,895];
sequence2 = [12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,119,120,177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,192,193,194,195,196,197,198,199,200,201,202,203,204,205,206,207,208,209,210,211,212,213,214,215,216,217,218,219,220,221,222,223,224,225,226,227,228,229,230,231,232,233,234,235,236,237,238,239,240,241,242,243,244,307,308,309,310,311,312,313,314,315,316,317,318,319,320,321,322,323,324,325,326,327,328,329,330,331,332,333,334,335,336,337,338,339,340,341,342,343,344,345,346,347,348,349,350,351,352,353,354,355,356,357,358,359,360,361,362,363,364,365,366,367,368,369,370,371,372,373,374,375,376,377,378,379,380,381,382,383,384,385,386,387,388,389,390,391,392,393,394,395,396,397,398,399,400,401,402,403,404,405,499,500,501,502,503,504,505,506,507,508,509,510,511,512,513,514,515,516,517,518,519,520,521,522,523,524,525,526,527,528,529,530,531,532,533,534,535,536,537,538,539,540,541,542,543,544,545,546,547,548,549,550,551,552,553,554,555,556,557,558,559,560,561,562,563,564,565,566,567,568,569,570,571,572,573,574,575,576,577,578,579,580,581,582,583,584,585,586,587,588,589,590,591,592,593,594,595,596,597,598,599,600,601,602,603,604,605,606,607,608,609,610,611,612,613,614,615,616,617,618,619,620,621,622,623,624,625,627,628,629,630,631,632,633,634,635,636,637,638,639,640,641,642,643,644,645,646,647,648,649,650,651,652,653,654,655,656,657,658,659,660,661,662,663,664,665,666,667,668,669,670,671,672,673,674,675,676,677,678,679,680,681,682,683,684,685,686,687,688,689,690,691,692,693,694,695,696,697,698,699,700,701,702,703,704,705,706,707,708,709,710,711,712,713,714,715,716,717,718,719,720,721,722,723,724,725,726,727,728,729,730,731,732,733,734,735,736,737,738,739,740,741,742,743,744,745,746,747,748,749,750,751,752,753,754,755,756,757,758,759,760,761,762,763,764,765,766,767,768,769,770,771,772,773,774];
const total=894;
document.getElementById('color222').innerHTML = (total-sequence1.length);
document.getElementById("color222a").value = (total-sequence1.length);  
}
if(name+".gltf" == "ostra.gltf") {
sequence1 = [0,2,3,4,9,10,12,15,16,17,18,20,22,23,24,27,28,29,30,31,36,39,40,41,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83];
sequence2 = [1,5,6,7,8,14,19,21,32,33,34,35,37,38,42,43];
const total=84;
document.getElementById('color222').innerHTML = (total-sequence1.length);
document.getElementById("color222a").value = (total-sequence1.length);

}
else
if(name+".gltf" == "sigma.gltf") {
const total=132;
sequence1 = [120,121,122,123,124,125,126,127,128,129,130,131];
sequence2 = [4,5,10,11,16,17,24,25,40,59,64,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119];
document.getElementById('color222').innerHTML = (total-sequence1.length);
document.getElementById("color222a").value = (total-sequence1.length);

}
else
if(name+".gltf" == "stella.gltf") {
sequence1 = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,26,27,30,31,32,33,34,35,36,37,41,42,43,44,45,46,48,50,53,55,56,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74];
sequence2 = [0,24,25,28,39,52,54,58,75,76,77,78,79,85,89,90,92,94,96,97,99,103,104,106,107,113,114,115,116,119,122,123,124,127,128,129,132,133,139,140,151,153,154,155,156,157,158,159,160,161,162,163,164,167,169,170,171,174,176,178,179,181,182,184];
const total=185;
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
    var selectedOption = this.options[selectcolor1.selectedIndex];

    document.getElementById('lbResultado').innerHTML = selectedOption.text;

    document.getElementById("myInput").value = selectedOption.text;
    
    
    document.getElementById('color111').innerHTML = sequence1.length;

    document.getElementById("color111a").value = sequence1.length;
 

  });



 if(document.getElementById("diffuses").value == "")
{
    if(name+".gltf" == "bamboo.gltf") {
sequence1 = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115];
}
else
if(name+".gltf" == "bambooydot.gltf") {
sequence1 = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144];
}
else
if(name+".gltf" == "disco.gltf") {
sequence1 = [0,1,2,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,192,193,194,196,197,198,199,200,201,202,203,204,205,206,207,208,209,210,211,212,213,214,215,216,217,218,219,220,221,222,224,225,226,227,228,229,230,231,232,233,234,235,236,237,238,239,240,241,242,243,244,245,246,247,248,249,250,251,252,253,254,255,256,257,258,259,260,261,262,263,264,265,266,267,268,269,270,271,272,273,274,275,276,277,278,279,280,281,282,283,284,285,286,287,288,289,290,291,292,293,294,295,296,297,298,299,300,301,302,303,304,305,306,307,308,309,310,311,312,313,314,315,316,317,318,319,320,321,322,323,324,325,326,327,328,329,330,331,332,333,334,335,336,337,338,339,340,341,342,343,344,345,346,347,348,349,350,351,352,353,354,355,356,357,358,359,360,361,362,363,364,365,366,367,368,369,370,371,372,373,374,375,376,377,378,379,380,381,382,383,384,385,386,387,388,389,390,391,392,393,394,395,396,397,398,399,400,401,402,403,404,405,406,407,408,409,410,411,412,413,414,415,416,417,418,419,420,421,422,423,424,425,426,427,428,429,430,431,432,433,434,435,436,437,438,439,440,441,442,443,444,445,446,447,448,449,450,451,452,453,454,455,456,457,458,459,460,461,462,463,464,465,466,467,468,469,470,471,472,473,474,475,476,477,478,479,480,481,482,483,484,485,486,487,488,489,490,491,492,493,494,495,496,497,498,499,500,501,502,503,504,505,506,507,508,509,510,511,512,513,514,515,516,517,518,519,520,521,522,523,524,525,526,528,529,530,531,532,533,534,535,536,537,538,539,540,541,542,543,544,545,546,547,548,549,550,551,552,553,554,555,556,557,558,559,560,561,562,563,564,565,566,567,568,569,570,571,572,573,574,576,577,578,579,580,581,582,583,584,585,586,587,588,589,590,591,592,593,594,595,596,597,598,599,600,601,602,603,604,605,606,607,608,609,610,611,612,613,614,615,616,617,618,619,620,621,622,623,624,625,626,627,628,629,630,631,632,633,634,635,636,637,638,639,640,641,642,643,644,645,647,648,649,650,651,652,653,654,655,656,657,658,659,660,661,662,663,664,665,666,667,668,669,670,671,672,673,674,675,676,677,678,679,680,681,682,683,684,685,686,687,688,689,690,691,692,693,695,696,697,698,699,700,701,702,703,704,705,706,707,708,709,710,711,712,713,714,715,716,717,718,719,720,721,722,723,724,725,726,727,728,729,730,731,732,733,734,735,736,737,738,739,740,741,742,743,744,745,746,747,748,749,750,751,752,753,754,755,756,757,758,759,760,761,762,763,764,765,766,767];
}
if(name+".gltf" == "geopicket.gltf") {
sequence1 = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19];
}
else
if(name+".gltf" == "geostar.gltf") {
sequence1 = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
}
else
if(name+".gltf" == "leaves.gltf") {
sequence1 = [0,1,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,192,193,194,195,196,197,198,199,200,201,202,203,204,205,206,207,208,209,210,211,212,213,214,215,216,217,218,219,220,221,222,223,224,225,226,227,228,229,230,231,232,233,234,235,236,237,238,239,240,241,242,243,244,245,246,247,248,249,250,251,252,253,254,255,256,257,258,259,260,261,262,263,264,265,266,267,268,269,270,271,272,273,274,275,276,277,278,279,280,281,282,283,284,285,286,287,288,289,290,291,292,293,294,295,296,297,298,299,300,301,302,303,304,305,306,307,308,309,310,311,312,313,314,315,316,317,318,319,320,321,322,323,324,325,326,327,328,329,330,331,332,333,334,335,336,337,338,339,340,341,342,343,344,345,346,347,348,349,350,351,352,353,354,355,356,357,358,359,360,361,362,363,364,365,366,367,368,369,370,371,372,373,374,375,376,377,378,379,380,381,382,383,384,385,386,387,388,389,390,391,392,393,394,395,396,397,398,399,400,401,402,403,404,405,406,407,408,409,410,411,412,413,414,415,416,417,418,419,420,421,422,423,424,425,426,427,428,429,430,431,432,433,434,435,436,437,438,439,440,441,442,443,444,445,446,447,448,449,450,451,452,453,454,455,456,457,458,459,460,461,462,463,464,465,466,467,468,469,470,471,472,473,474,475,476,477,478,479,480,481,482,483,484,485,486,487,488,489,490,491,492,493,494,495,496,497,498,499,500,501,502,503,504,505,506,507,508,509,510,511,512,513,514,515,516,517,518,519,520,521,522,523,524,525,526,527,528,529,530,531,532,533,534,535,536,537,538,539,540,541,542,543,544,545,546,547,548,549,550,551,552,553,554,555,556,557,558,559,560,561,562,563,564,565,566,567,568,569,570,571,572,573,574,575,576,577,578,579,580,581,582,583,584,585,586,587,588,589,590,591,592,593,594,595,596,597,598,599,600,601,602,603,604,605,606,607,608,609,610,611,612,613,614,615,616,617,618,619,620,621,622,623,624,625,627,628,629,630,631,632,633,634,635,636,637,638,639,640,641,642,643,644,645,646,647,648,649,650,651,652,653,654,655,656,657,658,659,660,661,662,663,664,665,666,667,668,669,670,671,672,673,674,675,676,677,678,679,680,681,682,683,684,685,686,687,688,689,690,691,692,693,694,695,696,697,698,699,700,701,702,703,704,705,706,707,708,709,710,711,712,713,714,715,716,717,718,719,720,721,722,723,724,725,726,727,728,729,730,731,732,733,734,735,736,737,738,739,740,741,742,743,744,745,746,747,748,749,750,751,752,753,754,755,756,757,758,759,760,761,762,763,764,765,766,767,768,769,770,771,772,773,774,775,776,777,778,779,780,781,782,783,784,785,786,787,788,789,790,791,792,793,794,795,796,797,798,799,800,801,802,803,804,805,806,807,808,809,810,811,812,813,814,815,816,817,818,819,820,821,822,823,824,825,826,827,828,829,830,831,832,833,834,835,836,837,838,839,840,841,842,843,844,845,846,847,848,849,850,851,852,853,854,855,856,857,858,859,860,861,862,863,864,865,866,867,868,869,870,871,872,873,874,875,876,877,878,879,880,881,882,883,884,885,886,887,888,889,890,891,892,893,894,895];
}
if(name+".gltf" == "ostra.gltf") {
sequence1 = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83];
}
else
if(name+".gltf" == "sigma.gltf") {
sequence1 = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131];
}
else
if(name+".gltf" == "stella.gltf") {
sequence1 = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184];

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


  });


if(document.getElementById("diffuses").hidden == false && document.getElementById("diffusess").hidden == true)
{
    if(name+".gltf" == "bamboo.gltf") {
sequence1 = [1,3,5,6,8,9,11,13,14,17,19,22,24,27,28,31,33,34,36,39,42,44,45,49,50,51,53,54,57,60,62,64,66,67,68,70,73,74,76,77,81,83,84,85,87,89,93,95,97,98,100,101,102,106,110,113,114,115];
sequence2 = [0,2,4,7,10,12,15,16,18,20,21,23,25,26,29,30,32,35,37,38,40,41,43,46,47,48,52,55,56,58,59,61,63,65,69,71,72,75,78,79,80,82,86,88,90,91,92,94,96,99,103,104,105,107,108,109,111,112];
document.getElementById('color111').innerHTML = sequence1.length;
document.getElementById("color111a").value = sequence1.length;

document.getElementById('color222').innerHTML = sequence2.length;
document.getElementById("color222a").value = sequence2.length;
}
else
if(name+".gltf" == "bambooydot.gltf") {
sequence1 = [0,1,2,3,4,5,6,7,8,9,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57];
sequence2 = [58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144];
document.getElementById('color111').innerHTML = 0;
document.getElementById("color111a").value = 0;

document.getElementById('color222').innerHTML = sequence2.length;
document.getElementById("color222a").value = sequence2.length;
}
else
if(name+".gltf" == "disco.gltf") {
sequence2 = [5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,192,193,194,196,197,198,199,200,201,202,203,204,205,206,207,208,209,210,211,212,213,214,215,216,217,218,219,220,221,222,224,225,226,227,228,229,230,231,232,233,234,235,236,237,238,239,240,241,242,243,244,245,246,247,248,249,250,251,252,253,254,255,256,257,258,259,260,261,262,263,264,265,266,267,268,269,270,271,272,273,274,275,276,277,278,279,280,281,282,283,284,285,286,287,288,289,290,291,292,293,294,295,296,297,298,299,300,301,302,303,304,305,306,307,308,309,310,311,312,313,314,315,316,317,318,319,320,321,322,323,324,325,326,327,328,329,330,331,332,333,334,335,336,337,338,339,340,341,342,343,344,345,346,347,348,349,350,351,352,353,354,355,356,357,358,359,360,361,362,363,364,365,366,367,368,369,370,371,372,373,374,375,376,377,378,379,380,381,382,383,384,385,386,387,388,389,390,391,392,393,394,395,396,397,398,399,400,401,402,403,404,405,406,407,408,409,410,411,412,413,414,415,416,417,418,419,420,421,422,423,424,425,426,427,428,429,430,431,432,433,434,435,436,437,438,439,440,441,442,443,444,445,446,447,448,449,450,451,452,453,454,455,456,457,458,459,460,461,462,463,464,465,466,467,468,469,470,471,472,473,474,475,476,477,478,479,480,481,482,483,484,485,486,487,488,489,490,491,492,493,494,495,496,497,498,499,500,501,502,503,504,505,506,507,508,509,510,511,512,513,514,515,516,517,518,519,520,521,522,523,524,525,526,528,529,530,531,532,533,534,535,536,537,538,539,540,541,542,543,544,545,546,547,548,549,550,551,552,553,554,555,556,557,558,559,560,561,562,563,564,565,566,567,568,569,570,571,572,573,574,576,577,578,579,580,581,582,583,584,585,586,587,588,589,590,591,592,593,594,595,596,597,598,599,600,601,602,603,604,605,606,607,608,609,610,611,612,613,614,615,616,617,618,619,620,621,622,623,624,625,626,627,628,629,630,631,632,633,634,635,636,637,638,639,640,641,642,643,644,645,647,648,649,650,651,652,653,654,655,656,657,658,659,660,661,662,663,664,665,666,667,668,669,670,671,672,673,674,675,676,677,678,679,680,681,682,683,684,685,686,687,688,689,690,691,692,693,695,696,697,698,699,700,701,702,703,704,705,706,707,708,709,710,711,712,713,714,715,716,717,718,719,720,721,722,723,724,725,726,727,728,729,730,731,732,733,734,735,736,737,738,739,740,741,742,743,744,745,746,747,748,749,750,751,752,753,754,755,756,757,758,759,760,761,762,763,764,765,766,767];
sequence1 = [0,1,2,4];
document.getElementById('color111').innerHTML = sequence1.length;
document.getElementById("color111a").value = sequence1.length;

document.getElementById('color222').innerHTML = sequence2.length;
document.getElementById("color222a").value = sequence2.length;
}
if(name+".gltf" == "geopicket.gltf") {
sequence1 = [0,1,2,3,4,5,6,7];
sequence2 = [8,9,10,11,12,13,14,15,16,17,18,19];
document.getElementById('color111').innerHTML = sequence1.length;
document.getElementById("color111a").value = sequence1.length;

document.getElementById('color222').innerHTML = sequence2.length;
document.getElementById("color222a").value = sequence2.length;
}
else
if(name+".gltf" == "geostar.gltf") {
sequence1 = [0,1,2,3,4,5,6,7];
sequence2 = [8,9,10,11,12,13,14,15];
document.getElementById('color111').innerHTML = sequence1.length;
document.getElementById("color111a").value = sequence1.length;

document.getElementById('color222').innerHTML = sequence2.length;
document.getElementById("color222a").value = sequence2.length;
}
else
if(name+".gltf" == "leaves.gltf") {
sequence1 = [886,887,888,889,890,891,892,893,894,895];
sequence2 = [0,1,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,192,193,194,195,196,197,198,199,200,201,202,203,204,205,206,207,208,209,210,211,212,213,214,215,216,217,218,219,220,221,222,223,224,225,226,227,228,229,230,231,232,233,234,235,236,237,238,239,240,241,242,243,244,245,246,247,248,249,250,251,252,253,254,255,256,257,258,259,260,261,262,263,264,265,266,267,268,269,270,271,272,273,274,275,276,277,278,279,280,281,282,283,284,285,286,287,288,289,290,291,292,293,294,295,296,297,298,299,300,301,302,303,304,305,306,307,308,309,310,311,312,313,314,315,316,317,318,319,320,321,322,323,324,325,326,327,328,329,330,331,332,333,334,335,336,337,338,339,340,341,342,343,344,345,346,347,348,349,350,351,352,353,354,355,356,357,358,359,360,361,362,363,364,365,366,367,368,369,370,371,372,373,374,375,376,377,378,379,380,381,382,383,384,385,386,387,388,389,390,391,392,393,394,395,396,397,398,399,400,401,402,403,404,405,406,407,408,409,410,411,412,413,414,415,416,417,418,419,420,421,422,423,424,425,426,427,428,429,430,431,432,433,434,435,436,437,438,439,440,441,442,443,444,445,446,447,448,449,450,451,452,453,454,455,456,457,458,459,460,461,462,463,464,465,466,467,468,469,470,471,472,473,474,475,476,477,478,479,480,481,482,483,484,485,486,487,488,489,490,491,492,493,494,495,496,497,498,499,500,501,502,503,504,505,506,507,508,509,510,511,512,513,514,515,516,517,518,519,520,521,522,523,524,525,526,527,528,529,530,531,532,533,534,535,536,537,538,539,540,541,542,543,544,545,546,547,548,549,550,551,552,553,554,555,556,557,558,559,560,561,562,563,564,565,566,567,568,569,570,571,572,573,574,575,576,577,578,579,580,581,582,583,584,585,586,587,588,589,590,591,592,593,594,595,596,597,598,599,600,601,602,603,604,605,606,607,608,609,610,611,612,613,614,615,616,617,618,619,620,621,622,623,624,625,627,628,629,630,631,632,633,634,635,636,637,638,639,640,641,642,643,644,645,646,647,648,649,650,651,652,653,654,655,656,657,658,659,660,661,662,663,664,665,666,667,668,669,670,671,672,673,674,675,676,677,678,679,680,681,682,683,684,685,686,687,688,689,690,691,692,693,694,695,696,697,698,699,700,701,702,703,704,705,706,707,708,709,710,711,712,713,714,715,716,717,718,719,720,721,722,723,724,725,726,727,728,729,730,731,732,733,734,735,736,737,738,739,740,741,742,743,744,745,746,747,748,749,750,751,752,753,754,755,756,757,758,759,760,761,762,763,764,765,766,767,768,769,770,771,772,773,774,775,776,777,778,779,780,781,782,783,784,785,786,787,788,789,790,791,792,793,794,795,796,797,798,799,800,801,802,803,804,805,806,807,808,809,810,811,812,813,814,815,816,817,818,819,820,821,822,823,824,825,826,827,828,829,830,831,832,833,834,835,836,837,838,839,840,841,842,843,844,845,846,847,848,849,850,851,852,853,854,855,856,857,858,859,860,861,862,863,864,865,866,867,868,869,870,871,872,873,874,875,876,877,878,879,880,881,882,883,884,885];
document.getElementById('color111').innerHTML = sequence1.length;
document.getElementById("color111a").value = sequence1.length;

document.getElementById('color222').innerHTML = sequence2.length;
document.getElementById("color222a").value = sequence2.length;
}
if(name+".gltf" == "ostra.gltf") {
sequence1 = [0,2,3,4,9,10,12,15,16,17,18,20,22,23,24,27,28,29,30,31,36,39,40,41,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83];
sequence2 = [1,5,6,7,8,11,13,14,19,21,25,26,32,33,34,35,37,38,42,43];
document.getElementById('color111').innerHTML = sequence1.length;
document.getElementById("color111a").value = sequence1.length;

document.getElementById('color222').innerHTML = sequence2.length;
document.getElementById("color222a").value = sequence2.length;
}
else
if(name+".gltf" == "sigma.gltf") {
sequence1 = [120,121,122,123,124,125,126,127,128,129,130,131];
sequence2 = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119];
document.getElementById('color111').innerHTML = sequence1.length;
document.getElementById("color111a").value = sequence1.length;

document.getElementById('color222').innerHTML = sequence2.length;
document.getElementById("color222a").value = sequence2.length;
}
else
if(name+".gltf" == "stella.gltf") {
sequence1 = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,26,27,30,31,32,33,34,35,36,37,41,42,43,44,45,46,48,50,53,55,56,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74];
sequence2 = [0,24,25,28,29,38,39,40,47,49,51,52,54,57,58,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184];
document.getElementById('color111').innerHTML = 0;
document.getElementById("color111a").value = 0;

document.getElementById('color222').innerHTML = sequence2.length;
document.getElementById("color222a").value = sequence2.length;
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

 

    

  });
  if(document.getElementById("diffusess").hidden == false)
{

  if(name+".gltf" == "bamboo.gltf") {
sequence1 = [1,3,5,6,8,9,11,13,14,17,19,22,24,27,28,31,33,34,36,39,42,44,45,49,50,51,53,54,57,60,62,64,66,67,68,70,73,74,76,77,81,83,84,85,87,89,93,95,97,98,100,101,102,106,110,113,114,115];
sequence2 = [0,7,12,15,20,21,23,30,32,41,43,46,48,59,61,63,69,72,79,80,86,90,92,94,99,105,107,108,109];
sequence3 = [2,4,10,16,18,25,26,29,35,37,38,40,47,52,55,56,58,65,71,75,78,82,88,91,96,103,104,111,112];
document.getElementById('color111').innerHTML = sequence1.length;
document.getElementById("color111a").value = sequence1.length;

document.getElementById('color222').innerHTML = sequence2.length;
document.getElementById("color222a").value = sequence2.length;

document.getElementById('color333').innerHTML = sequence3.length;
document.getElementById("color333a").value = sequence3.length;
}
else
if(name+".gltf" == "bambooydot.gltf") {
sequence1 = [0,1,2,3,4,5,6,7,8,9,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57];
sequence2 = [58,60,62,64,66,68,70,72,74,76,78,80,83,84,85,87,89,90,91,95,96,97,99,101,103,105,106,108,110,113,115,117,119,121,125,126,127,128,131,133,135,137,139,141,142,144];
sequence3 = [59,61,63,65,67,69,71,73,75,77,79,81,82,86,88,92,93,94,98,100,102,104,107,109,111,112,114,116,118,120,122,123,124,129,130,132,134,136,138,140,143];
document.getElementById('color111').innerHTML = 0;
document.getElementById("color111a").value = 0;

document.getElementById('color222').innerHTML = sequence2.length;
document.getElementById("color222a").value = sequence2.length;

document.getElementById('color333').innerHTML = sequence3.length;
document.getElementById("color333a").value = sequence3.length;
}
else
if(name+".gltf" == "disco.gltf") {
sequence1 = [0,1,2,4];
sequence2 = [6,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,46,47,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,197,205,206,207,208,209,210,211,212,213,214,215,216,217,218,219,220,221,222,224,225,226,227,228,229,230,231,232,233,234,235,236,237,238,239,240,241,242,243,244,245,246,247,248,249,250,251,252,253,254,255,256,257,258,259,260,261,262,263,264,265,306,307,308,309,310,311,312,313,314,315,316,317,318,319,320,321,322,323,324,325,326,327,328,329,330,331,332,333,334,335,336,337,386,395,396,397,398,399,400,401,402,403,404,405,406,407,408,409,410,411,412,413,414,415,416,417,418,419,420,421,422,423,424,425,426,427,428,429,430,431,432,433,434,435,436,437,438,439,440,441,442,443,444,445,446,447,448,449,450,451,452,453,454,495,496,497,498,499,500,501,502,503,504,505,506,507,508,509,510,511,512,513,514,515,516,517,518,519,520,521,522,523,524,525,526,577,586,587,588,589,590,591,592,593,594,595,596,597,598,599,600,601,602,603,604,605,606,607,608,609,610,611,612,613,614,615,616,617,618,619,620,621,622,623,624,625,626,627,628,629,630,631,632,633,634,635,636,637,638,639,640,641,642,643,644,645,735,736,737,738,739,740,741,742,743,744,745,746,747,748,749,750,751,752,753,754,755,756,757,758,759,760,761,762,763,764,765,766];
sequence3 = [5,7,8,9,10,11,12,13,14,48,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,192,193,194,196,198,199,200,201,202,203,204,266,267,268,269,270,271,272,273,274,275,276,277,278,279,280,281,282,283,284,285,286,287,288,289,290,291,292,293,294,295,296,297,298,299,300,301,302,303,304,305,338,339,340,341,342,343,344,345,346,347,348,349,350,351,352,353,354,355,356,357,358,359,360,361,362,363,364,365,366,367,368,369,370,371,372,373,374,375,376,377,378,379,380,381,382,383,384,385,387,388,389,390,391,392,393,394,455,456,457,458,459,460,461,462,463,464,465,466,467,468,469,470,471,472,473,474,475,476,477,478,479,480,481,482,483,484,485,486,487,488,489,490,491,492,493,494,528,529,530,531,532,533,534,535,536,537,538,539,540,541,542,543,544,545,546,547,548,549,550,551,552,553,554,555,556,557,558,559,560,561,562,563,564,565,566,567,568,569,570,571,572,573,574,576,578,579,580,581,582,583,584,585,647,648,649,650,651,652,653,654,655,656,657,658,659,660,661,662,663,664,665,666,667,668,669,670,671,672,673,674,675,676,677,678,679,680,681,682,683,684,685,686,687,688,689,690,691,692,693,695,696,697,698,699,700,701,702,703,704,705,706,707,708,709,710,711,712,713,714,715,716,717,718,719,720,721,722,723,724,725,726,727,728,729,730,731,732,733,734,767];
document.getElementById('color111').innerHTML = sequence1.length;
document.getElementById("color111a").value = sequence1.length;

document.getElementById('color222').innerHTML = sequence2.length;
document.getElementById("color222a").value = sequence2.length;

document.getElementById('color333').innerHTML = sequence3.length;
document.getElementById("color333a").value = sequence3.length;
}
if(name+".gltf" == "geopicket.gltf") {
sequence1 = [0,1,2,3,4,5,6,7];
sequence2 = [8,10,11,13,14,16,17,19];
sequence3 = [9,12,15,18];
document.getElementById('color111').innerHTML = sequence1.length;
document.getElementById("color111a").value = sequence1.length;

document.getElementById('color222').innerHTML = sequence2.length;
document.getElementById("color222a").value = sequence2.length;

document.getElementById('color333').innerHTML = sequence3.length;
document.getElementById("color333a").value = sequence3.length;
}
else
if(name+".gltf" == "geostar.gltf") {
sequence1 = [0,1,2,3,4,5,6,7];
sequence2 = [9,11,13,15];
sequence3 = [8,10,12,14];
document.getElementById('color111').innerHTML = sequence1.length;
document.getElementById("color111a").value = sequence1.length;

document.getElementById('color222').innerHTML = sequence2.length;
document.getElementById("color222a").value = sequence2.length;

document.getElementById('color333').innerHTML = sequence3.length;
document.getElementById("color333a").value = sequence3.length;
}
else
if(name+".gltf" == "leaves.gltf") {
sequence1 = [886,887,888,889,890,891,892,893,894,895];
sequence2 = [0,1,3,4,5,6,7,8,9,10,11,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,245,246,247,248,249,250,251,252,253,254,255,256,257,258,259,260,261,262,263,264,265,266,267,268,269,270,271,272,273,274,275,276,277,278,279,280,281,282,283,284,285,286,287,288,289,290,291,292,293,294,295,296,297,298,299,300,301,302,303,304,305,306,406,407,408,409,410,411,412,413,414,415,416,417,418,419,420,421,422,423,424,425,426,427,428,429,430,431,432,433,434,435,436,437,438,439,440,441,442,443,444,445,446,447,448,449,450,451,452,453,454,455,456,457,458,459,460,461,462,463,464,465,466,467,468,469,470,471,472,473,474,475,476,477,478,479,480,481,482,483,484,485,486,487,488,489,490,491,492,493,494,495,496,497,498,775,776,777,778,779,780,781,782,783,784,785,786,787,788,789,790,791,792,793,794,795,796,797,798,799,800,801,802,803,804,805,806,807,808,809,810,811,812,813,814,815,816,817,818,819,820,821,822,823,824,825,826,827,828,829,830,831,832,833,834,835,836,837,838,839,840,841,842,843,844,845,846,847,848,849,850,851,852,853,854,855,856,857,858,859,860,861,862,863,864,865,866,867,868,869,870,871,872,873,874,875,876,877,878,879,880,881,882,883,884,885];
sequence3 = [12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,119,120,177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,192,193,194,195,196,197,198,199,200,201,202,203,204,205,206,207,208,209,210,211,212,213,214,215,216,217,218,219,220,221,222,223,224,225,226,227,228,229,230,231,232,233,234,235,236,237,238,239,240,241,242,243,244,307,308,309,310,311,312,313,314,315,316,317,318,319,320,321,322,323,324,325,326,327,328,329,330,331,332,333,334,335,336,337,338,339,340,341,342,343,344,345,346,347,348,349,350,351,352,353,354,355,356,357,358,359,360,361,362,363,364,365,366,367,368,369,370,371,372,373,374,375,376,377,378,379,380,381,382,383,384,385,386,387,388,389,390,391,392,393,394,395,396,397,398,399,400,401,402,403,404,405,499,500,501,502,503,504,505,506,507,508,509,510,511,512,513,514,515,516,517,518,519,520,521,522,523,524,525,526,527,528,529,530,531,532,533,534,535,536,537,538,539,540,541,542,543,544,545,546,547,548,549,550,551,552,553,554,555,556,557,558,559,560,561,562,563,564,565,566,567,568,569,570,571,572,573,574,575,576,577,578,579,580,581,582,583,584,585,586,587,588,589,590,591,592,593,594,595,596,597,598,599,600,601,602,603,604,605,606,607,608,609,610,611,612,613,614,615,616,617,618,619,620,621,622,623,624,625,627,628,629,630,631,632,633,634,635,636,637,638,639,640,641,642,643,644,645,646,647,648,649,650,651,652,653,654,655,656,657,658,659,660,661,662,663,664,665,666,667,668,669,670,671,672,673,674,675,676,677,678,679,680,681,682,683,684,685,686,687,688,689,690,691,692,693,694,695,696,697,698,699,700,701,702,703,704,705,706,707,708,709,710,711,712,713,714,715,716,717,718,719,720,721,722,723,724,725,726,727,728,729,730,731,732,733,734,735,736,737,738,739,740,741,742,743,744,745,746,747,748,749,750,751,752,753,754,755,756,757,758,759,760,761,762,763,764,765,766,767,768,769,770,771,772,773,774];
document.getElementById('color111').innerHTML = sequence1.length;
document.getElementById("color111a").value = sequence1.length;

document.getElementById('color222').innerHTML = sequence2.length;
document.getElementById("color222a").value = sequence2.length;

document.getElementById('color333').innerHTML = sequence3.length;
document.getElementById("color333a").value = sequence3.length;
}
if(name+".gltf" == "ostra.gltf") {
sequence1 = [0,2,3,4,9,10,12,15,16,17,18,20,22,23,24,27,28,29,30,31,36,39,40,41,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83];
sequence2 = [11,13,25,26];
sequence3 = [1,5,6,7,8,14,19,21,32,33,34,35,37,38,42,43];
document.getElementById('color111').innerHTML = sequence1.length;
document.getElementById("color111a").value = sequence1.length;

document.getElementById('color222').innerHTML = sequence2.length;
document.getElementById("color222a").value = sequence2.length;

document.getElementById('color333').innerHTML = sequence3.length;
document.getElementById("color333a").value = sequence3.length;
}
else
if(name+".gltf" == "sigma.gltf") {
sequence1 = [120,121,122,123,124,125,126,127,128,129,130,131];
sequence2 = [0,1,2,3,6,7,8,9,12,13,14,15,18,19,20,21,22,23,26,27,28,29,30,31,32,33,34,35,36,37,38,39,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,60,61,62,63,65,66,67,68,69,70];
sequence3 = [4,5,10,11,16,17,24,25,40,59,64,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119];
document.getElementById('color111').innerHTML = sequence1.length;
document.getElementById("color111a").value = sequence1.length;

document.getElementById('color222').innerHTML = sequence2.length;
document.getElementById("color222a").value = sequence2.length;

document.getElementById('color333').innerHTML = sequence3.length;
document.getElementById("color333a").value = sequence3.length;
}
else
if(name+".gltf" == "stella.gltf") {
sequence1 = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,26,27,30,31,32,33,34,35,36,37,41,42,43,44,45,46,48,50,53,55,56,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74];
sequence2 = [29,38,40,47,49,51,57,80,81,82,83,84,86,87,88,91,93,95,98,100,101,102,105,108,109,110,111,112,117,118,120,121,125,126,130,131,134,135,136,137,138,141,142,143,144,145,146,147,148,149,150,152,165,166,168,172,173,175,177,180,183];
sequence3 = [0,24,25,28,39,52,54,58,75,76,77,78,79,85,89,90,92,94,96,97,99,103,104,106,107,113,114,115,116,119,122,123,124,127,128,129,132,133,139,140,151,153,154,155,156,157,158,159,160,161,162,163,164,167,169,170,171,174,176,178,179,181,182,184];
document.getElementById('color111').innerHTML = 0;
document.getElementById("color111a").value = 0;

document.getElementById('color222').innerHTML = sequence2.length;
document.getElementById("color222a").value = sequence2.length;

document.getElementById('color333').innerHTML = sequence3.length;
document.getElementById("color333a").value = sequence3.length;
}
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



