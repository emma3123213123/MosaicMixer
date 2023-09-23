<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   
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
                    <a class="nav-link" href="/MosaicMixer/artisan.php">Artisan_Collection</a>
                </li>
                  <li class="nav-item me-1">
                    <a class="nav-link" href="/MosaicMixer/parquetnew.php">Parquet</a>
                </li>
                  <li class="nav-item me-1">
                      <a class="nav-link" href="/MosaicMixer/pebblesnew.php">Pebbles</a>
                  </li>
                  <li class="nav-item me-1">
                    <a style="color: #4285f4;" class="nav-link" href="/MosaicMixer/specialtynewdesign.php">MosaicDesign</a>
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

  
        <button class="slide" onclick="switchSrc(this, 'madisondewey')" style="background-image: url('icons/specialty/27.jpg');" >
        </button>
        <button class="slide" onclick="switchSrc(this, 'southtowncypress')" style="background-image: url('icons/specialty/28.jpg');" >
        </button><button class="slide" onclick="switchSrc(this, 'calico')" style="background-image: url('icons/specialty/31.jpg');"></button>
        </button><button class="slide" onclick="switchSrc(this, 'galileo')" style="background-image: url('icons/specialty/32.jpg');">
        </button>

      </div>
  </div>


  <div> 

 
  <p style= "color: #462ae2; font-size: 18pt; text-align: center; font-family:courier;">Specialty</p>
 

<div id="colors1">

  <a style="color: #0a0a0a; font-size: 16pt; font-family:courier;">Color-1</a>
<label><select id="diffuse" name="" class="form-control">





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
<button id="colora1" style=" background-color: #fff; min-width: 1%;max-width: 15%;height: 50px; border: #fff; align-content: center;" type="submit"><img style="min-width: 60%;max-width: 100%; height: 40px;background-color: #fff;" src="icons/add.png" alt="x" /></button>


</div>



<div id="colors2">
<a  id="colorlabel2" style="color: #0a0a0a; font-size: 16pt; font-family:courier;bottom: 1px;">Color-2</a>
<label><select id="diffuses" name="" class="form-control">

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

<label for="ulListadoaas" name="ulListadoaas" value="ulListadoaas" id="ulListadoaas"></label>
    <input type="hidden" id="myInputaaas" name="ulListadoaas" value="specialty" class="custom" size="32">

 
    <div id="resultado">
      <label for="lbResultado" name="lbResultado" value="lbResultado" id="lbResultado">df</label>
      <input type="hidden" id="myInput" name="lbResultado" value="" class="custom" size="32">
  
      <label type="hidden" for="lbResultados" name="lbResultados" value="lbResultados" id="lbResultados">fd</label>
      <input type="hidden" id="myInputs" name="lbResultados" value="" class="custom" size="32">
  
      
      <label type="hidden" for="lbResultadoss" name="lbResultadoss" value="lbResultadoss" id="lbResultadoss">fd</label>
      <input type="hidden" id="myInputss" name="lbResultadoss" value="" class="custom" size="32">

      <label type="hidden" for="lbResultadoo" name="lbResultadoo" value="lbResultadoo" id="lbResultadoo">fd</label>
      <input type="hidden" id="myInputo" name="lbResultadoo" value="" class="custom" size="32">
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


let sequence1 = [];
  let sequence2 = [];
  let sequence3 = [];
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







const modelViewer = document.querySelector("model-viewer");

  window.switchSrc = (element, name) => {
  
    const base = "models/specialty/" + name;
    modelViewer.src = base + '.gltf';
    modelViewer.poster = base + '.webp';
    const slides = document.querySelectorAll(".slide");
    slides.forEach((element) => {element.classList.remove("selected");});
  
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

if(name+".gltf" == "madisondewey.gltf") {
sequence1 = [0,1,2,3,4,5,6,7,8,9,10,12,14,16,18,21,22,24,26,29];
const total=30;
document.getElementById('color111').innerHTML = (total);
document.getElementById("color111a").value = (total);
}
else
if(name+".gltf" == "southtowncypress.gltf") {
sequence1 = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,22,24,26,28,30,32,34,36,38,40,42,44,46,48,50,52,54,56,58];
const total=60;
document.getElementById('color111').innerHTML = (total);
document.getElementById("color111a").value = (total);  
}
else
if(name+".gltf" == "calico.gltf") {
sequence1 = [8,9,10,11];
const total=12;
document.getElementById('color111').innerHTML = (total);
document.getElementById("color111a").value = (total);
}
else
if(name+".gltf" == "galileo.gltf") {
sequence1 = [2,3,4,5,6];
const total=7;
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
    
    

    const modelViewer = document.querySelector("model-viewer");
  
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






if(name+".gltf" == "madisondewey.gltf") {
sequence1 = [11,13,15,17,19,20,23,25,27,28];
sequence2 = [10,12,14,16,18,21,22,24,26,29 ];
const total=30;
document.getElementById('color222').innerHTML = (total-sequence1.length);
document.getElementById("color222a").value = (total-sequence1.length);

}
else
if(name+".gltf" == "southtowncypress.gltf") {
const total=60;
sequence1 = [21,23,25,27,29,31,33,35,37,39,41,43,45,47,49,51,53,55,57,59];
sequence2 = [20,22,24,26,28,30,32,34,36,38,40,42,44,46,48,50,52,54,56,58];
document.getElementById('color222').innerHTML = (total-sequence1.length);
document.getElementById("color222a").value = (total-sequence1.length);

}
else
if(name+".gltf" == "galileo.gltf") {
sequence1 = [0,1];
sequence2 = [4,5];
const total=7;
document.getElementById('color222').innerHTML = (total-sequence1.length);
document.getElementById("color222a").value = (total-sequence1.length);  
}
else
if(name+".gltf" == "calico.gltf") {
const total=12;
sequence1 = [0,1,2,3,4,5,6,7];
sequence2 = [8,10];
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
    if(name+".gltf" == "madisondewey.gltf") {
sequence1 = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29];
}
else
if(name+".gltf" == "southtowncypress.gltf") {

    sequence1 = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59];

}
else
if(name+".gltf" == "calico.gltf") {

sequence1 = [0,1,2,3,4,5,6,7,8,9,10,11];
}
else
if(name+".gltf" == "galileo.gltf") {


    sequence1 = [0,1,2,3,4,5,6];
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
    if(name+".gltf" == "madisondewey.gltf") {
sequence1 = [11,13,15,17,19,20,23,25,27,28];
sequence2 = [0,1,2,3,4,5,6,7,8,9,10,12,14,16,18,21,22,24,26,29];


}
else
if(name+".gltf" == "southtowncypress.gltf") {

    sequence1 = [21,23,25,27,29,31,33,35,37,39,41,43,45,47,49,51,53,55,57,59];
    sequence2 = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,22,24,26,28,30,32,34,36,38,40,42,44,46,48,50,52,54,56,58];
    
}
else
if(name+".gltf" == "calico.gltf") {

sequence1 = [0,1,2,3,4,5,6,7];
sequence2 = [8,9,10,11];
}
else
if(name+".gltf" == "galileo.gltf") {


    sequence1 = [0,1];
    sequence2 = [2,3,4,5,6];
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
  

  if(name+".gltf" == "madisondewey.gltf") {
sequence1 = [11,13,15,17,19,20,23,25,27,28];
sequence2 = [0,1,2,3,4,5,6,7,8,9];
sequence3 = [10,12,14,16,18,21,22,24,26,29 ];

}
else
if(name+".gltf" == "southtowncypress.gltf") {

    sequence1 = [21,23,25,27,29,31,33,35,37,39,41,43,45,47,49,51,53,55,57,59];
    sequence2 = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19];
    sequence3 = [20,22,24,26,28,30,32,34,36,38,40,42,44,46,48,50,52,54,56,58];
}
else
if(name+".gltf" == "calico.gltf") {

    sequence1 = [0,1,2,3,4,5,6,7];
    sequence2 = [9,11];   
    sequence3 = [8,10];
}
else
if(name+".gltf" == "galileo.gltf") {


    sequence1 = [0,1];
    sequence2 = [2,3,6];
    sequence3 = [4,5];
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
