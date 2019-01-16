<!DOCTYPE html>
<html lang="en">
<head>

<?php include "library.php"; ?>
<style>
 body{
   background: black;
 }
 .sidebar {
  margin: 0;
  padding: 0;
  width: 25%;
  background-color: black;
  position: fixed;
  height: 100%;
  overflow: auto;
}
.active {
  background-color: #D4AF37;
}

.wrapper {
 
  margin-left: 25%;
  position: relative;
  min-height: 600px;
  
}
::-webkit-scrollbar {
    width: 0px;  /* remove scrollbar space */
    background: transparent;  /* optional: just make scrollbar invisible */
}
::-webkit-scrollbar-thumb {
    background: #FF0000;
}
.content-wrapper {

  width: 100%;
}

.sidebar a {
  display: block;
  color: #555;
  padding: 30px;
  text-decoration: none;
  font-size: 15px;
}
div.content {
 
  height: 1000px;
  clear: both;
  overflow-y: auto;
  overflow-x: hidden;
  position: relative;
  top: 0;
  bottom: 0;

}


.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}


@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  
  }
  .sidebar a {
    float: left;
    padding: 15px;
    font-size: 2vw;
  
  }
  .wrapper{
    margin-left: 0;
  }
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  
  }
}

 </style>
</head>


<div class="sidebar">
<a class="active" href="index.php">LING LOONG SEAFOOD</a>
  <a href="restaurant.php">RESTAURANTS</a>
  <a href="#contact">RESERVATIONS</a>
  <a href="#about">ABOUT US</a> 

  
</div>


</body>
</html>