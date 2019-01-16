<html lang="en">
<head>

<?php

include_once("header.php");
?>

 <style>
 img{
    margin: 25%;
 }

 img.effect {
  
   transition: transform .5s;
   opacity: 1;
  display: block;
  backface-visibility: hidden;

 }
 
img.effect:hover{
  transform: scale(1.2);
  opacity: 0.3;

 
}
.word{
  
  position: absolute;
  text-align: center;
  padding-left: 1em;
  padding-right: 1em;
  width: 100%;
  top: 50%;
  left: 50%;
  opacity: 1;
  color: pink;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  -webkit-transition: all 0.3s ease-in-out 0s;
  -moz-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
}
.word:hover{
  top: 50%;
  left: 50%;
 
}



 .content wrapper{
     
  margin: auto;
  width: 50%;
  padding: 10px;
 }

 </style>
 </head>
   <body>
<div class="page">
  <div class="wrapper">
    <div class="content-wrapper">
      <div class="content">
<div class="container-fluid">
  <div class="row">
  <div class="col-sm-2 col-md-2">
    </div>
    <div class="col-sm-3 col-md-3">
     <a href="#"><img src="img1.png" class= "effect">
      <div class="word">
         <h3  class="word"> Hello</h3> 
        
        </div>
      </a>
    </div>
    <div class="col-sm-2 col-md-2">
    </div>
    <div class="col-sm-3 col-md-3">
 
     <a href="#"><img src="img1.png" class="effect" > </a>
      </div>

      <div class="col-sm-2 col-md-2">
    </div>
    </div>
    <div class="row">
    <div class="col-sm-4 col-md-4 effect">
   
    <a href="#"><img src="img1.png" class="effect"> </a>
   
 
    </div>
    <div class="col-sm-4 col-md-4">
  
    <a href="#"><img src="img1.png" class="effect"> </a>
 
    </div>
    <div class="col-sm-4 col-md-4">
    <a href="#"><img src="img1.png" class="effect"> </a>
    </div>
   
  </div>
</div>
</div>
  </div>
</div>
</div>
</body>
</html>