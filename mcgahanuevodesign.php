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

  
    
        <button class="slide" onclick="switchSrc(this, 'vernazzasmall')" style="background-image: url('icons/Mcgaha/20.jpg');" >
        </button>
        <button class="slide" onclick="switchSrc(this, 'vernazzalarge')" style="background-image: url('icons/Mcgaha/21.jpg');" >
        </button><button class="slide" onclick="switchSrc(this, 'palermocpn')" style="background-image: url('icons/Mcgaha/22.jpg');"></button>
        </button><button class="slide" onclick="switchSrc(this, 'bravadacpn')" style="background-image: url('icons/Mcgaha/23.jpg');">
        </button>
        <button class="slide" onclick="switchSrc(this, 'treviso')" style="background-image: url('icons/Mcgaha/24.jpg');">
        </button>

      </div>
  </div>


  <div> 

  
    <p id="areaContador"></p>
    <script type="text/javascript">
        var botonElement = document.getElementById("botonClick");
        var pElement = document.getElementById("areaContador");
        var contador1 = 0;
        var contador2 = 0;
        var contador3 = 0;
     
      
const arrn1 = [];
  const arrn2 = [];
  const arrn3 = [];
  const arrn4 = [];
  const arrn5 = [];
  const arrn6 = [];
  const arr = [];
    </script>

  <p style= "color: #462ae2; font-size: 18pt;text-align: center; font-family:courier;">Mcgaha_Design</p>


  <button id="btnClear">Reset</button>
 


  <a style="color: #0a0a0a; font-size: 16pt; font-family:courier;">Color-1</a>
<label><select id="diffuse" name="" class="form;-control">

<div id="colors1">
<?php 
include_once 'bd/cone.php';
$consulta = "SELECT colors.Color,colors.clavecolor FROM price,colors,models where models.idmodel=64 and colors.idcolor = price.idcolor and models.idmodel = price.idmodel ORDER BY colors.color ASC ";
//$consulta = "SELECT Color FROM colors ";
$ejecutar=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
?>
    <?php foreach ($ejecutar as $opciones): ?>
    <option value= "<?php echo $opciones['clavecolor']?>"><?php echo $opciones['Color']?></option>
    
    <?php endforeach   ?>
</select>

</label> 

<button id="delete2" style=" background-color: #fff; min-width: 1%;max-width: 15%;height: 50px; border: #fff; align-content: center;" type="submit"><img style="min-width: 60%;max-width: 100%; height: 40px;background-color: #fff;" src="icons/reset.png" alt="x" /></button>


</div>

</div>


<label for="asas1" name="asas1" value="asas1" id="asas1"></label>
<input type="hidden" id="asas1" name="asas1" value="" class="custom" size="32">

<label for="asas2" name="asas2" value="asas2" id="asas2"></label>
<input type="hidden" id="asas2" name="asas2" value="" class="custom" size="32">

<label for="asas3" name="asas3" value="asas3" id="asas3"></label>
<input type="hidden" id="asas3" name="asas3" value="" class="custom" size="32">

<label for="asas4" name="asas4" value="asas4" id="asas4"></label>
<input type="hidden" id="asas4" name="asas4" value="" class="custom" size="32">


<form method="POST" id="download-button" target="_blank"  style="  margin-top: 1%;  background-color: transparent; min-width: 22%;max-width: 9%;height: 50px; border: transparent; align-content: center;" action="/MosaicMixer/quotadesign.php">


<label for="ulListadoaas" name="ulListadoaas" value="ulListadoaas" id="ulListadoaas"></label>
    <input type="hidden" id="myInputaaas" name="ulListadoaas" value="mcgaha" class="custom" size="32">

    <div id="resultado">
          Color1:  <label for="lbResultado" name="lbResultado" value="lbResultado" id="lbResultado"></label>
            <input type="hidden" id="myInput" name="lbResultado" value="" class="custom" size="32">
            <a id="conta1"></a>

        <br>
        Color2:  <label for="ulListado" name="ulListado" value="ulListado" id="ulListado"></label>
            <input type="hidden" id="myInputa" name="ulListado" value="" class="custom" size="32">
            <a id="conta2"></a>

            <br>
            Color3:   <label for="ulListadoa" name="ulListadoa" value="ulListadoa" id="ulListadoa"></label>
            <input type="hidden" id="myInputaa" name="ulListadoa" value="" class="custom" size="32">
            <a id="conta3"></a>

            <br>
			   <label  type="hidden" for="ulListadoaa" name="ulListadoaa" value="ulListadoaa" id="ulListadoaa"></label>
            <input type="hidden" id="myInputaaa" name="ulListadoaa" value="" class="custom" size="32">
            <br>
               <label  type="hidden"  for="ulListadoaaa" name="ulListadoaaa" value="ulListadoaaa" id="ulListadoaaa"></label>
            <input type="hidden" id="myInputaaaa" name="ulListadoaaa" value="" class="custom" size="32">
            <br>
               <label  type="hidden" for="ulListadoaaaa" name="ulListadoaaaa" value="ulListadoaaaa" id="ulListadoaaaa"></label>
            <input type="hidden" id="myInputaaaaa" name="ulListadoaaaa" value="" class="custom" size="32">
            <br>
         
<label type="hidden" for="lbResultadoo" name="lbResultadoo" value="lbResultadoo" id="lbResultadoo">fd</label>
<input type="hidden" id="myInputo" name="lbResultadoo" value="" class="custom" size="32">  

<label type="hidden" for="numcolor1" name="numcolor1" value="numcolor1" id="numcolor1">3</label>
<input type="hidden" id="numcolor11" name="numcolor1" value="" class="custom" size="32">

<label type="hidden" for="numcolor2" name="numcolor2" value="numcolor2" id="numcolor2">4</label>
<input type="hidden" id="numcolor22" name="numcolor2" value="" class="custom" size="32">

<label type="hidden" for="numcolor3" name="numcolor3" value="numcolor3" id="numcolor3">5</label>
<input type="hidden" id="numcolor33" name="numcolor3" value="" class="custom" size="32">
<br>

    <input id="saco" type="image" value="" style="min-width: 20%;max-width: 100%; height: 50px;background-color: transparent;" src="icons/cotizacion.png" />
    </div>




</form>
</form>


<script type="module">

document.getElementById("asas1").hidden = true;
document.getElementById("asas2").hidden = true;
document.getElementById("asas3").hidden = true;
document.getElementById("delete2").hidden = true;
document.getElementById('btnClear').hidden = true;
document.getElementById("download-button").hidden = true;
document.getElementById("diffuse").value = "";

document.getElementById("lbResultadoo").hidden = true;
document.getElementById("numcolor1").hidden = true;
document.getElementById("numcolor2").hidden = true;
document.getElementById("numcolor3").hidden = true;
document.getElementById("ulListadoaa").hidden = true;
document.getElementById("ulListadoaaa").hidden = true;
document.getElementById("ulListadoaaaa").hidden = true;

btnClear.onclick = function(){
    contador1=0;
    contador2=0;
    contador3=0;
    document.querySelector('#diffuse').value = "";
    document.getElementById("diffuse").value = "";
    document.getElementById('lbResultado').innerHTML = "";
document.getElementById("myInput").value = "";
document.getElementById("ulListado").innerHTML = "";  
document.getElementById("myInputa").value = "";
document.getElementById("ulListadoa").innerHTML = "";  
document.getElementById("myInputaa").value = "";
document.getElementById("download-button").hidden = true;
document.getElementById("conta1").value = 0;
document.getElementById("conta1").innerHTML = 0;
document.getElementById("conta2").value = 0;
document.getElementById("conta2").innerHTML = 0;
document.getElementById("conta3").value = 0;
document.getElementById("conta3").innerHTML = 0;
document.getElementById("delete2").hidden = true;
arr.length=0;
arrn1.length=0;
arrn2.length=0;
arrn3.length=0;
arrn1=[];
arrn2=[];
arrn3=[];
}

  const modelViewer = document.querySelector("model-viewer");

  window.switchSrc = (element, name) => {
 
    const base = "models/mcgaha/" + name;

   
    contador1=0;
    contador2=0;
    contador3=0;

    document.getElementById("btnClear").click();


  

    

    document.getElementById("myInputo").value = name;
    document.getElementById('lbResultadoo').innerHTML = name;

    




document.getElementById('delete2').addEventListener('click', (event) => {
    
    contador1=0;
    contador2=0;
    contador3=0;
    document.querySelector('#diffuse').value = "";
    document.getElementById("diffuse").value = "";
    document.getElementById('lbResultado').innerHTML = "";
document.getElementById("myInput").value = "";
document.getElementById("ulListado").innerHTML = "";  
document.getElementById("myInputa").value = "";
document.getElementById("ulListadoa").innerHTML = "";  
document.getElementById("myInputaa").value = "";
document.getElementById("download-button").hidden = true;
document.getElementById("conta1").value = 0;
document.getElementById("conta1").innerHTML = 0;
document.getElementById("conta2").value = 0;
document.getElementById("conta2").innerHTML = 0;
document.getElementById("conta3").value = 0;
document.getElementById("conta3").innerHTML = 0;
document.getElementById("delete2").hidden = true;

arrn1.splice(0,arrn1.length);
arrn2.splice(0,arrn2.length);
arrn3.splice(0,arrn3.length);

arr.length=0;

const modelViewer = document.querySelector("model-viewer");




for (let j = 0; j <=10000 ; j++) {

const material = modelViewer.model.materials[j];
var asasaa = document.getElementById("diffuse").value = "colores/reset.png";
material.pbrMetallicRoughness['baseColorTexture'].texture.source.setURI(asasaa);
material.pbrMetallicRoughness.setRoughnessFactor(0.8);
material.pbrMetallicRoughness.setMetallicFactor(1.0);

}  

});





var btnClear = document.getElementById('btnClear').value;




    modelViewer.src = base + '.gltf';
    modelViewer.poster = base + '.webp';
    const slides = document.querySelectorAll(".slide");
    slides.forEach((element) => {element.classList.remove("selected");});
    element.classList.add("selected");



 
   
   
  


////////////////////////////////////////////


};

  document.querySelector(".slider").addEventListener('beforexrselect', (ev) => {
    // Keep slider interactions from affecting the XR scene.
 
    ev.preventDefault();
 

  });   


 

  
  var selectcolor1 =  document.getElementById('diffuse');
    selectcolor1.addEventListener('change',
  function(){
    

    var selectedOption = this.options[selectcolor1.selectedIndex];
    
    if(arrn1.length < 1 && document.getElementById("lbResultado").innerHTML != "" && arr.length == 1)
{


  alert("Colorea tu primer color")
  arr.length = arr.length - 1

            
            
     

}
else
if(arrn2.length < 1 && document.getElementById("ulListado").innerHTML != "" && arr.length == 2)
{


  alert("Colorea tu segundo color")
  arr.length = arr.length - 1

            
            
     

}
else

if(arrn3.length < 1 && document.getElementById("ulListadoa").innerHTML != "" && arr.length == 3)
{


  alert("Colorea tu segundo color")
  arr.length = arr.length - 1

            
            
     

}

    arr.push(selectedOption.text);
	


    
    document.getElementById('lbResultado').innerHTML = arr[0];

document.getElementById("myInput").value =arr[0];

document.getElementById("ulListado").innerHTML = arr[1];  
document.getElementById("myInputa").value =arr[1];

document.getElementById("ulListadoa").innerHTML = arr[2];  
document.getElementById("myInputaa").value =arr[2];

document.getElementById("ulListadoaa").innerHTML = arr[3];  
document.getElementById("myInputaaa").value =arr[3];

document.getElementById("ulListadoaaa").innerHTML = arr[4];  
document.getElementById("myInputaaaa").value =arr[4];

document.getElementById("ulListadoaaaa").innerHTML = arr[5];  
document.getElementById("myInputaaaaa").value =arr[5];


//alert(arr.length)


});




	
 



modelViewer.addEventListener("load", () => {

const changeColor = (event) => {
  


  if(arr.length == 4)
{
alert("solo tienes 3 colores, asegurate de colorear todos los materiales")

  
              document.querySelector('#diffuse').value=""
              arr.length = 10
          
}        


  const material = modelViewer.materialFromPoint(event.clientX, event.clientY);

//material.pbrMetallicRoughness.
  //setBaseColorFactor(0xff0000);






  if(arr.length == 3)
{

if(arr[2] == arr[0]  ) 
          {
alert("Termina de seleccionar tus 3 colores diferentes")
arr.length = arr.length - 1
            document.querySelector('#diffuse').value=""
            document.getElementById("ulListadoa").innerHTML = "";  

          
          }
   

}
if(arr.length == 2)
{

if(arr[1] == arr[0]  ) 
          {
alert("Termina de seleccionar tus 3 colores diferentes")
arr.length = arr.length - 1
            document.querySelector('#diffuse').value=""
            document.getElementById("ulListado").innerHTML = "";  
          
          }
   

}

if(arr.length == 3)
{

if(arr[2] == arr[1]  ) 
          {
alert("Termina de seleccionar tus 3 colores diferentes")
arr.length = arr.length - 1
            document.querySelector('#diffuse').value=""
            document.getElementById("ulListadoa").innerHTML = "";  
          
          }
   

}




if(arr.length >= 5)
{

if(arr[4] != arr[0] && arr[4] != arr[1] && arr[4] != arr[2] ) 
            {
  
              document.querySelector('#diffuse').value=""
              arr.length = arr.length - 1
              document.getElementById("ulListadoaaa").innerHTML = " "
            }
    

}
          

     
if(arr.length >= 6)
{

if(arr[5] != arr[0] && arr[5] != arr[1] && arr[5] != arr[2] ) 
            {
  
              document.querySelector('#diffuse').value=""
              arr.length = arr.length - 1
              document.getElementById("ulListadoaaaa").innerHTML = " "

            }
    

}
     





  
    
  material.pbrMetallicRoughness['baseColorTexture'].texture.source.setURI(document.querySelector('#diffuse').value);

  document.getElementById("download-button").hidden = false;
  document.getElementById("saco").hidden = true;
    document.getElementById("delete2").hidden = false;

  



  if(arr.length == 1 && document.getElementById("diffuse").value != "")
{

for (let i = 0; i < 1000 ; i++) {


 

if( material == modelViewer.model.materials[i])
{
  arrn1.push(i)
  arrn1.sort(function(a,b){return a - b;});
document.getElementById('asas1').innerHTML = arrn1;
document.getElementById("asas1").value = arrn1;


}

}   

}
else
if(arr.length ==2  && document.getElementById("ulListadoa").innerHTML != "" )    {

  for (let i = 0; i < 1000 ; i++) {


 

if( material == modelViewer.model.materials[i])
{
  arrn2.push(i)
  arrn2.sort(function(a,b){return a - b;});
document.getElementById('asas2').innerHTML = arrn2;
document.getElementById("asas2").value = arrn2;


}

} 

}

else

if(arr.length == 3 && document.getElementById("ulListadoaaa").innerHTML != "" )    {

  for (let i = 0; i < 1000 ; i++) {


 

if( material == modelViewer.model.materials[i])
{
  arrn3.push(i)
  arrn3.sort(function(a,b){return a - b;});
document.getElementById('asas3').innerHTML = arrn3;
document.getElementById("asas3").value = arrn3;


}

} 

}

else
/////////////////


if(arr.length == 4 && document.getElementById("ulListadoaaa").innerHTML != "")    {
 if(arr[3] == arr[0])
 {
  for (let i = 0; i < 1000 ; i++) {



if( material == modelViewer.model.materials[i])
{
arrn1.push(i)
arrn1.sort(function(a,b){return a - b;});
document.getElementById('asas4').innerHTML = arrn1;
document.getElementById("asas4").value = arrn1;


}

}  
 }
 else
 if(arr[3] == arr[1])
 {
  for (let i = 0; i < 1000 ; i++) {




if( material == modelViewer.model.materials[i])
{
arrn2.push(i)
  arrn2.sort(function(a,b){return a - b;});
document.getElementById('asas2').innerHTML = arrn1;
document.getElementById("asas2").value = arrn1;


}

}  
 }
 else
 if(arr[3] == arr[2] )
 {
  for (let i = 0; i < 1000 ; i++) {




if( material == modelViewer.model.materials[i])
{
arrn3.push(i)
  arrn3.sort(function(a,b){return a - b;});
document.getElementById('asas3').innerHTML = arrn1;
document.getElementById("asas3").value = arrn1;


}

}  
 }

}




////////////////////comoparacion de 1 arreglo////////////////////////////////////

if(arrn1.length > 0 )
{
 
var tot= contador1;

for(var i=0;i<tot+1 ;i++)
{
  
if(arrn1[i] == arrn1[i-1]  && arrn1.length > 0 )
{
  
  delete(arrn1[i])
  arrn1.sort(function(a,b){return a - b;});
  arrn1.length = arrn1.length - 1
  contador1 = contador1-1;


}

}

}

if(arrn2.length > 0 )
{
var tot1= contador2 ;

for(var i=0;i<tot1+1 ;i++)
{
 
if(arrn2[i] == arrn2[i-1]  && arrn2.length > 0)
{
   
   delete(arrn2[i])
   arrn2.sort(function(a,b){return a - b;});
   arrn2.length = arrn2.length - 1
   contador2 = contador2-1;


}

}
}
if(arrn3.length > 0 )
{
var tot2= contador3 ;

for(var i=0;i<tot2+1 ;i++)
{
 
if(arrn3[i] == arrn3[i-1]  && arrn3.length > 0)
{
   
   delete(arrn3[i])
   arrn3.sort(function(a,b){return a - b;});
   arrn3.length = arrn3.length - 1
   contador3 = contador3-1;


}

}
}
//////array 4 ////////////////////////////////////////////////

//////array 4 ////////////////////////////////////////////////

///////////////////comparacion de 2 arreglos  2 con el 1 ///////////////////////////////////
if(arrn2.length > 0 )
{

if(arrn2.length >= arrn1.length)
{
  for(var i=0;i<arrn2.length;i++)
  {
      for(var j=0;j<arrn2.length;j++)
      {
          if(arrn1[i]==arrn2[j])
          {

            delete(arrn1[i])
            arrn1.sort(function(a,b){return a - b;});
            arrn1.length = arrn1.length - 1
   contador1 = contador1-1;
         

        
      }
      }
  }
}
else
if(arrn1.length > arrn2.length)
{
  for(var i=0;i<arrn1.length;i++)
  {
      for(var j=0;j<arrn2.length;j++)
      {
          if(arrn1[i]==arrn2[j])
          {

       
            delete(arrn1[i])
            arrn1.sort(function(a,b){return a - b;});
            arrn1.length = arrn1.length - 1
   contador1 = contador1-1;
          



      }
      }
  }
}




}

//////////////////comparacion 3 con el 1///////////////////////
if(arrn3.length > 0 )
{

if(arrn3.length >= arrn1.length)
{
  for(var i=0;i<arrn3.length;i++)
  {
      for(var j=0;j<arrn3.length;j++)
      {
          if(arrn1[i]==arrn3[j])
          {

            delete(arrn1[i])
            arrn1.sort(function(a,b){return a - b;});
            arrn1.length = arrn1.length - 1
   contador1 = contador1-1;
         

        
      }
      }
  }
}
else
if(arrn1.length > arrn3.length)
{
  for(var i=0;i<arrn1.length;i++)
  {
      for(var j=0;j<arrn3.length;j++)
      {
          if(arrn1[i]==arrn3[j])
          {

       
            delete(arrn1[i])
            arrn1.sort(function(a,b){return a - b;});
            arrn1.length = arrn1.length - 1
   contador1 = contador1-1;
          



      }
      }
  }
}





}


////////////////////comparacion 3 con el 2/////////////////////////////////
if(arrn3.length > 0 )
{

if(arrn3.length >= arrn2.length)
{
  for(var i=0;i<arrn3.length;i++)
  {
      for(var j=0;j<arrn3.length;j++)
      {
          if(arrn2[i]==arrn3[j])
          {

            delete(arrn2[i])
            arrn2.sort(function(a,b){return a - b;});
            arrn2.length = arrn2.length - 1
   contador2 = contador2-1;
         

        
      }
      }
  }
}
else
if(arrn2.length > arrn3.length)
{
  for(var i=0;i<arrn2.length;i++)
  {
      for(var j=0;j<arrn3.length;j++)
      {
          if(arrn2[i]==arrn3[j])
          {

       
            delete(arrn2[i])
            arrn2.sort(function(a,b){return a - b;});
            arrn2.length = arrn2.length - 1
   contador2 = contador2-1;
          



      }
      }
  }
}





}
/////////////////////////////




console.log(arrn1)
console.log(arrn2)
console.log(arrn3)
console.log(arrn4)

if(arr.length == 1 && document.getElementById("diffuse").value != "")
{
 
contador1++  

}

else
if(arr.length ==2  && document.getElementById("ulListadoa").innerHTML != "" )    {
  if(arr[1] == arr[0])
 {
  contador1++  
  
 }
 else
 if(arr[1] == arr[1])
 {
  contador2++  
 }
 else
 if(arr[1] == arr[2] )
 {
  contador3++  
 }
}
else
if(arr.length == 3 && document.getElementById("ulListadoaa").innerHTML != "" )    {
  if(arr[2] == arr[0])
 {
  contador1++  
 }
 else
 if(arr[2] == arr[1])
 {
  contador2++  
 }
 else
 if(arr[2] == arr[2] )
 {
  contador3++  
 }
}

if(arr.length == 4 && document.getElementById("ulListadoaaa").innerHTML != "" )    {
 if(arr[3] == arr[0])
 {
  contador1++  
 }
 else
 if(arr[3] == arr[1])
 {
  contador2++  
 }
 else
 if(arr[3] == arr[2] )
 {
  contador3++  
 }

}

if(arr.length == 5 &&  document.getElementById("ulListadoaaaa").innerHTML != "")    {
 if(arr[4] == arr[0])
 {
  contador1++  
 }
 else
 if(arr[4] == arr[1])
 {
  contador2++  
 }
 else
 if(arr[4] == arr[2])
 {
  contador3++  
 }

}

if(arr.length == 6)    {
 if(arr[5] == arr[0])
 {
  contador1++  
 }
 else
 if(arr[5] == arr[1])
 {
  contador2++  
 }
 else
 if(arr[5] == arr[2])
 {
  contador3++  
 }

}


if(document.getElementById("lbResultadoo").innerHTML== "vernazzasmall") {
const total=8;
if(contador1+contador2+contador3 > total-1)        {
      document.getElementById("saco").hidden = false;
     } 
}
else
if(document.getElementById("lbResultadoo").innerHTML== "vernazzalarge") {
const total=4;
if(contador1+contador2+contador3 > total-1)        {
      document.getElementById("saco").hidden = false;
     } 
}
else
if(document.getElementById("lbResultadoo").innerHTML== "vernazzalarge") {
const total=3;
if(contador1+contador2+contador3 > total-1)        {
      document.getElementById("saco").hidden = false;
     } 
}
else
if(document.getElementById("lbResultadoo").innerHTML== "palermocpn") {
const total=7;
if(contador1+contador2+contador3 > total-1)        {
      document.getElementById("saco").hidden = false;
     } 
}
else
if(document.getElementById("lbResultadoo").innerHTML== "bravadacpn") {
const total=8;
if(contador1+contador2+contador3 > total-1)        {
      document.getElementById("saco").hidden = false;
     } 
}




material.pbrMetallicRoughness.setRoughnessFactor(0.8);
      material.pbrMetallicRoughness.setMetallicFactor(1.0);
  
      var pElement1 = document.getElementById("conta1");
    
    pElement1.textContent = contador1;

 
    document.getElementById("numcolor11").value = contador1;
    document.getElementById('numcolor1').innerHTML = contador1;

    

    var pElement2 = document.getElementById("conta2");
    
    pElement2.textContent = contador2;
    document.getElementById("numcolor22").value = contador2;
    document.getElementById('numcolor2').innerHTML = contador2;

    var pElement3 = document.getElementById("conta3");
    
    pElement3.textContent = contador3;
    document.getElementById("numcolor33").value = contador3;
    document.getElementById('numcolor3').innerHTML = contador3;



  }

modelViewer.addEventListener("click", changeColor)


});
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

