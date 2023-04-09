<!DOCTYPE html>
<html>
<head>
  <title>YIRGACHEFFE COFFEE - Graceland Coffee</title>
  <meta name="description" content="Known for its sweet flavor and aroma with a light to medium body. Ethiopian Yirgacheffes are spicy and fragrant, and are frequently reviewed and rated as some of the highest quality Arabica coffees in the world.">
   <link rel="icon" href="grace4.jpeg" type="image/gif" sizes="16x16">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <script type="text/javascript">
        $('.navTrigger').click(function () {
    $(this).toggleClass('active');
    console.log("Clicked menu");
    $("#mainListDiv").toggleClass("show_list");
    $("#mainListDiv").fadeIn();

});

    

    </script>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Quicksand:400,500,700');
:focus{outline: none;}


html,

body {
 background: #F8f9ff;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
     font-family: 'Roboto Slab', serif; 
    font-size: 62.5%;
    font-size: 10px;
   
}

::placeholder{
  font-size: 16px;
  padding-bottom: 30px;

position: relative;


}


.nav {
    width: 100%;
    height: 45px;
    position: fixed;
    line-height: 40px;
    text-align: center;
    z-index: 1000;
 font-family: 'Roboto Slab', serif; 
      font-weight: bolder;
background: black;
  opacity: 0.8;
  
  
}

.nav div.logo {
    float: left;
    width: auto;
    height: auto;
    padding-left: 3rem;
}

.nav div.logo a {
    text-decoration: none;
    color: #fff;
    font-size: 2rem;
}

.nav div.logo a:hover {
    color: #00E676;
}

.nav div.main_list {
    height: 40px;
    float: right;
}

.nav div.main_list ul {
    width: 100%;
    height: 40px;
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
}

.nav div.main_list ul li {
    width: auto;
    height: 40px;
    padding: 0;
    padding-right: 3rem;
}

.nav div.main_list ul li a {
    text-decoration: none;
    color: #fff;
    line-height: 40px;
    font-size: 2rem;
}

.nav div.main_list ul li a:hover {
    color: #00E676;
}




.home {
    width: 100%;
    height: 75vh;
    background-image: url(home.jpg);
    background-position: center top;
    background-size:cover;
}

.navTrigger {
    display: none;
}

.nav {
    padding-top: 20px;
    padding-bottom: 20px;
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
}




@media screen and (min-width: 768px) and (max-width: 1024px) {
    .container {
        margin: 0;
    }

}

@media screen and (max-width:1024px) {
    .navTrigger {
        display: block;

    }
    .nav div.logo {
        margin-left: 15px;
    }
    .nav div.main_list {
        width: 100%;
        height: 0;
        overflow: hidden;
    }
    .nav div.show_list {
        height: auto;
        display: none;
    }
    .nav div.main_list ul {
        flex-direction: column;
        width: 100%;
        height: 100vh;
        right: 0;
        left: 0;
        bottom: 0;
        background-color: #111;
       
        background-position: center top;
    }
    .nav div.main_list ul li {
        width: 100%;
        text-align: right;
    }
    .nav div.main_list ul li a {
        text-align: center;
        width: 100%;
        font-size: 2rem;
        margin-right: 30px;
        
    }
    .nav div.media_button {
        display: block;
    }
    iframe{
      height: 200px;
    }
}




.navTrigger {
    cursor: pointer;
    width: 30px;
    height: 25px;
    margin: auto;
    position: absolute;
    right: 30px;
    top: 10px;
    bottom: 0;
    padding: 5px;
     


}

.navTrigger i {
    background-color: #00dedd; 
    

    border-radius: 2px;
    content: '';
    display: block;
    width: 100%;
    height: 4px;
    position: relative;
    top: -3px;

}

.navTrigger i:nth-child(1) {
    -webkit-animation: outT 0.3s backwards;
    animation: outT 0.8s backwards;
    -webkit-animation-direction: reverse;
    animation-direction: reverse;

}

.navTrigger i:nth-child(2) {
    margin: 5px 0;
    -webkit-animation: outM 0.3s backwards;
    animation: outM 0.8s backwards;
    -webkit-animation-direction: reverse;
    animation-direction: reverse;
}

.navTrigger i:nth-child(3) {
    -webkit-animation: outBtm 0.3s backwards;
    animation: outBtm 0.3s backwards;
    -webkit-animation-direction: reverse;
    animation-direction: reverse;
}

.navTrigger.active i:nth-child(1) {
    -webkit-animation: inT 0.3s forwards;
    animation: inT 0.8s forwards;
}

.navTrigger.active i:nth-child(2) {
    -webkit-animation: inM 0.3s forwards;
    animation: inM 0.3s forwards;
}

.navTrigger.active i:nth-child(3) {
    -webkit-animation: inBtm 0.3s forwards;
    animation: inBtm 0.3s forwards;
}

@-webkit-keyframes inM {
    50% {
        -webkit-transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(45deg);
    }
}

@keyframes inM {
    50% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(45deg);
    }
}

@-webkit-keyframes outM {
    50% {
        -webkit-transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(45deg);
    }
}

@keyframes outM {
    50% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(45deg);
    }
}

@-webkit-keyframes inT {
    0% {
        -webkit-transform: translateY(0px) rotate(0deg);
    }
    50% {
        -webkit-transform: translateY(9px) rotate(0deg);
    }
    100% {
        -webkit-transform: translateY(9px) rotate(135deg);
    }
}

@keyframes inT {
    0% {
        transform: translateY(0px) rotate(0deg);
    }
    50% {
        transform: translateY(9px) rotate(0deg);
    }
    100% {
        transform: translateY(9px) rotate(135deg);
    }
}

@-webkit-keyframes outT {
    0% {
        -webkit-transform: translateY(0px) rotate(0deg);
    }
    50% {
        -webkit-transform: translateY(9px) rotate(0deg);
    }
    100% {
        -webkit-transform: translateY(9px) rotate(135deg);
    }
}

@keyframes outT {
    0% {
        transform: translateY(0px) rotate(0deg);
    }
    50% {
        transform: translateY(9px) rotate(0deg);
    }
    100% {
        transform: translateY(9px) rotate(135deg);
    }
}

@-webkit-keyframes inBtm {
    0% {
        -webkit-transform: translateY(0px) rotate(0deg);
    }
    50% {
        -webkit-transform: translateY(-9px) rotate(0deg);
    }
    100% {
        -webkit-transform: translateY(-9px) rotate(135deg);
    }
}

@keyframes inBtm {
    0% {
        transform: translateY(0px) rotate(0deg);
    }
    50% {
        transform: translateY(-9px) rotate(0deg);
    }
    100% {
        transform: translateY(-9px) rotate(135deg);
    }
}

@-webkit-keyframes outBtm {
    0% {
        -webkit-transform: translateY(0px) rotate(0deg);
    }
    50% {
        -webkit-transform: translateY(-9px) rotate(0deg);
    }
    100% {
        -webkit-transform: translateY(-9px) rotate(135deg);
    }
}

@keyframes outBtm {
    0% {
        transform: translateY(0px) rotate(0deg);
    }
    50% {
        transform: translateY(-9px) rotate(0deg);
    }
    100% {
        transform: translateY(-9px) rotate(135deg);
    }
}

.affix {
    padding: 0;
    background-color: #111;
    opacity: 0.8;
}






.myH2 {
    text-align:center;
    font-size: 3rem;
    /*color:#2c9eaa;*/
    font-family: 'Roboto Slab', serif; 
    color: black;
}
.myP {
    text-align: justify;
    padding-left:15%;
    padding-right:15%;
    font-size: 20px;
    font-family: 'Roboto', sans-serif;
    color: #5d5d5d;
    margin-top: 0px;
}
@media all and (max-width:700px){
    .myP {
        padding:2%;
        font-size: 15px;
    }
    .myH2{
      font-size: 2rem;
    }
}
 input[type=submit]{
   width: 150px;
   height: 40px;
      box-shadow: 0px 7px 16px 0px rgba(0, 0, 0, 0.3);
    border: none;
    color:  #fff;
    padding: 10px;
line-height: 10px;
    text-decoration: none;
    margin: 5px;
    cursor: pointer;
    border-radius: 25px;
   background:#4a2c2a; 
   /* background: #00FFCC;*/
    margin-bottom: 10px;
    
    display: block;
margin-left:auto;
margin-right:auto;
letter-spacing: 1px;
font-size: 17px;



}
.columnpage button{
   width: 150px;
   height: 40px;
      box-shadow: 0px 7px 16px 0px rgba(0, 0, 0, 0.3);
    border: none;
    color:  #fff;
    padding: 10px;
line-height: 10px;
    text-decoration: none;
    margin: 5px;
    cursor: pointer;
    border-radius: 25px;
   background:#4a2c2a; 
   /* background: #00FFCC;*/
    margin-bottom: 10px;
    
    display: block;
margin-left:auto;
margin-right:auto;
letter-spacing: 1px;
font-size: 17px;



}.columnpage button:hover{
  opacity: 0.7;
}
.columnpage button:active{
  transition: 0.2s;
 transform: translateY(2px);
}
input[type=submit]:active {
  
   color: #f2f2f2;
 
  
 }

input[type=submit]:hover{
  background:#00FFCC;
  transition: 0.2s;



}
.column {
  float: left;
  width: 32%;
  padding: 6px;
  margin-bottom: 10px;
}


.row::after {
  content: "";
  clear: both;
  display: table;
}
@media screen and (max-width: 900px) {
  .column {
    width: 45%;
  }
  .trapic{
    width: 90%;
  }
}
@media screen and (max-width: 650px) {
  .column {
    width: 97%;
  }
.trapic{
    width: 60%;
  
}
 input[type=submit]{
   width: 140px;}
}
.trapic{
  width: 75%;
  display: block;
  margin-left: auto;
  margin-right:auto;

}
@media screen and (max-width: 1224px){
   .trapic{
    width: 100%;
      display: block;
  margin-left: auto;
  margin-right:auto;
  }
}
@media screen and (max-width: 900px){
   .trapic{
    width: 80%;
      display: block;
  margin-left: auto;
  margin-right:auto;
  }
}
     
      .parent {
        display: block;
        margin-left: auto;
        margin-right: auto;
      position: relative;
      max-width: 800px;
      margin: 0 auto;
      box-sizing: border-box;
      }
      .parent img {
      vertical-align: middle;
            display: block;
        margin-left: auto;
        margin-right: auto;
      }
      .parent .text {
      position: absolute;
      bottom: 0;
      background: rgb(0, 0, 0); 
      background: rgba(0, 0, 0, 0.3); 
      color: #ffffff;
      width: 100%;
      padding: 10px;
         box-sizing: border-box;
      }




.dummy_page {
  height: 200px;
  width: 100%;
  background-color: #f0f0f0;
  text-align: center;
  box-sizing: border-box;
  padding: 60px 0px;
}


.iconcolumn {
  float: left;
  width: 33.33%;
  color: #f1f1f1;
  text-align: center;
  margin-bottom: 15px;




}


.iconrow::after {
  content: "";
  clear: both;
  display: table;

}
.iconcontaier{
  display: block;

  margin-left: auto;
  margin-right:auto;
   background-color: black;
  width: 80%;
  padding: : 50px;
  margin-top: 60px;
}
.text {
  padding-left: 15px;
  display: inline-block;
}
.text h4 {
  color: #f1f1f1;
  font-size: 14px;
  font-weight: 600;
  margin-bottom: 2px;
}
.text span {
  color: #757575;
  font-size: 13px;
}
.contbut{
    width: 50%;}
    .cent h2{
      font-size: 45px;
       word-spacing: 4px;
    }
    .cent .job{
      font-size: 45px;
    }
    .cent .through{
      font-size: 30px;
    }
    @media screen and (max-width: 1000px) {
  .iconcolumn  {
    width: 100%;
    text-align: left;
    margin-left: 30px
  }
  .contbut{
    width: 80%;}
    .cent h2{
 font-size: 35px;
 position: relative;
 top: 40px;
  }
  .cent .through{
    font-size: 25px;
  }
  .cent .job{
    font-size: 35px;
  }
}



@media screen and (max-width: 600px) {
  .iconcolumn  {
    width: 100%;
    text-align: left;
    margin-left: 30px
  }
  .iconcontaier{
    width: 100%;
  }
  .contbut{
    width: 80%;}
    .cent h2{
 font-size: 15px;
 position: relative;
 top: 40px;
  }
  .cent .through{
    font-size: 10px;
  }
  .cent .job{
    font-size: 15px;
  }
}


 


@media only screen and (min-width: 1280px) {
  .contain {
    width: 1200px;
    margin: 0 auto;
  }

  
  

}
@media only screen and (max-width: 1139px) {
  .contain .social {
    width: 1000px;
    display: block;
  }
  .social h1 {
    margin: 0px;
  }
  .nav{
    opacity: 0.7;
  }
}
.fotter{
  background: black; 
  width: 100%;
clear: both;
overflow: hidden;
margin-top: 150px;
}
@media only screen and (max-width: 950px) {
  .footer .col {
    width: 33%;
  }
  .footer .col h1 {
    font-size: 14px;
  }
  .footer .col ul li {
    font-size: 13px;
  }
}
@media only screen and (max-width: 500px) {
    .footer .col {
      width: 50%;
    }
    .footer .col h1 {
      font-size: 14px;
    }
    .footer .col ul li {
      font-size: 13px;
    }
}
@media only screen and (max-width: 340px) {
  .footer .col {
    width: 100%;
  }
 
}
.responsive {
  width: 100%;
  max-height: 800px;

  height: auto;
  position: relative;

}
.subscribe-form {
  position: relative;
  overflow: hidden;
}
.subscribe-form input {
  -webkit-appearance:none;
  width: 100%;
  padding: 15px 5px;
  background: #f1f1f1;
  border: 1px solid #f1f1f1;
  color: #2e2e2e;
  font-size: 15px;
}
.subscribe-form button {
    position: absolute;
    right: -2px;
    background: #E70024;
   padding: 15.76px 15px;
    border: 1px solid #E70024;
    top: 0;
}
  .subscribe-form button:hover {
background: brown;
border-color: brown;
transition: 0.2s;
}
.subscribe-form button i {
  color: #fff;
  font-size: 22px;
  transform: rotate(-6deg);

}
.containe{
  position: relative;
  text-align: center;
  color: white;

}
.cent{
  position: absolute; top: 48%;
  left: 30%;
  transform: translate(-50%, -50%);

}

.columnpage{
  float: left;
  width: 50%;

  position: relative;
  top: 100px;
}
@media screen and (max-width: 700px) {
  .columnpage {
    width: 100%;
    
  }
  .pcont{
    margin-left: 30px;
    margin-right: 10px;
   
  }
}

h6{
  margin: 0px; 
  position: relative;
  top: 100px; 
  font-size: 40px;
   margin-left: 50px; 
   word-spacing: 5px; 
   font-weight: lighter;
}






.custom-select {
  position: relative;
  font-family: Arial;
  margin:20px;

}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
 background:#e9e9e9;
 width: 100%;
 
 font-size: 17px;

 border-radius: 5px;
 padding: 10px;


  
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 20px;
  right: -10px;
  width: 0;
  height: 0;
  border: 6px solid black;
  border-color: black transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: black
  padding: 8px 16px;
  border: 1px solid black;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
 
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background: white;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
  font-size: 17px;
  width: 270px;


}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.2);
}
h6{
  margin: 0px; 
  position: relative;
  top: 100px; 
  font-size: 30px;
   margin-left: 50px; 
   word-spacing: 5px; 
   font-weight: lighter;
}
    @media only screen and (max-width: 580px) {
          h6{
                  margin: 0px; 
  position: relative;
  top: 100px; 
  font-size: 25px;
  margin-left: 10px;
 text-align: left;
   word-spacing: 5px; 
   font-weight: lighter;
                }
   }


   @media only screen and (max-width: 980px) {
          .horizontal {
      display: none;
                }
   }
    </style>


</head>
<body>

    <nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="#">Graceland Coffee</a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="story.php">Our Story</a></li>
                    <li><a href="contact.php">Contact us</a></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>

<h6>Product:</h6>

  
<div class="row">
  <div class="columnpage">
    <img data-aos="zoom-in-right"  src="grc1.gif" alt="package" style="width:100%">

  </div>

  <div class="columnpage">
    <div class="pcont">
    <h2 style="font-size: 20px; color:#2e2e2e; letter-spacing: 1px; word-spacing: 1px;">YIRGACHEFFE COFFEE</h2>
<p style="font-size: 17px; font-family: 'Roboto', sans-serif; color:#2e2e2e; line-height: 1.6; margin-right: 10px;">Known for its sweet flavor and aroma with a light to medium body. Ethiopian Yirgacheffes are spicy and fragrant, and are frequently reviewed and rated as some of the highest quality Arabica coffees in the world.</p>
<hr style="width: 97%; margin-right: 20px; border-color: white;">
<!--surround the select box with a "custom-select" DIV element. Remember to set the width:-->
<div>
<h2 style="color: #575757;">Grind</h2>
  
<div class="custom-selectt" style="width:250px;">
  <select style="width:275px; height: 38px; font-size: 17px;border-color: #9f9f9f; background: #F8f9ff; border-radius: 5px;">
  
   
    <option value="1">Whole Bean</option>
    <option value="2">Home Espresso</option>
    <option value="3">Commercial Espresso</option>

  </select>
</div>
<h2 style="color: #575757;">Roast</h2>
<div class="custom-selectt" style="width:250px;">
  <select style="width:275px; height: 38px; font-size: 17px;border-color: #9f9f9f;background: #F8f9ff;border-radius: 5px;">

    <option value="0">Light Roast</option>
    <option value="1">Medium Roast</option>
    <option value="2">Dark Roast</option>
    

  </select>
</div>
<h2 style="color: #575757;">Size</h2>
<div class="custom-selectt" style="width:250px;">
  <select style="width:275px; height: 38px; font-size: 17px;border-color: #9f9f9f;background: #F8f9ff;border-radius: 5px;">
   
    <option value="0">250 g / 8.8 oz</option>
    <option value="1">500 g /17.6 oz</option>
    <option value="2">1000 g / 35.3 oz</option>
   

  </select>
</select>
</div>
<h2 style="color: #575757;">Subscription</h2>
<div class="custom-selectt" style="width:250px;">
  <select style="width:275px; height: 38px; font-size: 17px; border-color: #9f9f9f;background: #F8f9ff;border-radius: 5px; ">

    <option value="0">One time purchase: $10</option>
    <option value="1">Subscribe and Save(10%): $9</option>
   
   

  </select>

</div>

<h2 style="color: #575757;">Amount</h2>
<div class="custom-selectt" style="width:50px; height: 58px; font-size: 17px;">
 <input  style="width:60px; height: 35px; font-size: 17px; border-color: #9f9f9f; border-radius: 5px;" type="number" name="">
</div>

  <button style="float: left; margin-right: 20px;  background: #E70024;border-radius: 5px; margin-top: 20px;font-weight: bolder; width: 250px; color: #f1f1f1; font-family: 'Roboto Slab', serif; margin-top: 30px; cursor: not-allowed;" type="submit" name="" onclick="aman(this)"  type="button"> <i style="font-weight: bold; position: relative;right:25px;" class="fa fa-cart-plus"></i> Add to Cart</i></button>


  <button style="float: left;  background: #FF9900; border-radius: 5px; margin-top: 0px; width: 250px; color: black;margin-top: 30px; cursor: not-allowed;" type="submit" name="" onclick="aman(this)"  type="button"> <i  style="font-weight: bold; position: relative;right:5px;" class="fa fa-amazon"> Shop on Amazon</i></button>

</div>
</div>
<script type="text/javascript">
  function aman(my){
    alert("Temporarily out of stock. Subscribe and be notified when it is avialable.");
  }


</script>
<script>
var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>
  </div>

</div>


</div>




    <div class="fotter">

<div style="margin-top: 10px;" class="iconcontaier">

<div class="iconrow">
  <div class="iconcolumn">
  <i style="font-size:  40px;" class="fa fa-map-marker"></i>
  <div class="text"><h4>Location</h4><span>Kore, Addis Ababa, Ethiopia</span></div>
  </div>
  <div class="iconcolumn">
<i style="font-size:  30px;"class="fa fa-phone"></i>
<div class="text"><h4>Call Us</h4><span>+251911367926 | +251911237926</span></div>
  </div>
  <div class="iconcolumn">
<i style="font-size:  30px;"color: red;" class="fa fa-envelope"></i>
<div class="text"><h4>Email</h4><span>Graceforethiopia@gmail.com</span></div>
  </div>
</div>
  <hr style="border-color:  #757575; border-width: 0.4px;">
<h2 style="color: white; text-align: center; margin-top:40px;">Subscribe and save up to 10%</h2>
<div style=" display: block; margin-right: auto; margin-left: auto;" class="contbut"> 
  <div  class="subscribe-form">
                                <form onsubmit="return false">
                                    <input required id="name" type="Email" name="em" placeholder="Email Address">
                                    <button type="submit" id="name" onclick="Send_Data(this)" name="submit1"><span style="color: #f1f1f1; font-size: 14px; font-weight: bolder; ">SUBSCRIBE</span></button>
                                  
                                
</form>
</div>
                              
</form>
  <p onclick="display.getElementById('hn').style.display='none'"  id="thank" style="color: white; font-size: 15px; text-align: center;"></p>
                                    <img    style="width: 50px; height: 50px; float: left; display: none; background: white; "  id="hn" src="bell.svg">
                               
</div>

  <script type="text/javascript">
    function Send_Data(b){
      var name=document.getElementById("name").value;

      var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;


if (document.getElementById("name").value != "" && document.getElementById("name").value.match(mailformat)) {

      var httpr = new XMLHttpRequest();
      httpr.open("POST","homeajax.php",true);
      httpr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
      httpr.onreadystatechange=function(){
        if (httpr.readyState==4 && httpr.status==200) {
          document.getElementById("response").innerHTML=httpr.responseText;
        }
      }
    httpr.send("name="+name);
      b.innerHTML="SUBSCRIBED";
      b.style.fontSize="14px";
      b.style.color="#fff";
      b.style.fontWeight="bolder";
      b.style.background="#e0e0e0";
      b.style.borderColor="#e0e0e0";
      b.style.color="black";
     
      document.getElementById("hn").style.display="none";
      document.getElementById("thank").innerHTML="Thank you for Subscribing!";
      
     
      function fun(){
       document.getElementById("thank").style.display="none";
      }

    }


  }
  </script>


</div>



<div style="display: block; width: 50%; margin-right: auto; margin-left: auto; text-align: center;">

<h2 style="color: #f1f1f1;">Connect with Us</h2>
 <a style="color: #f1f1f1; font-size: 20px; margin:5px;" href="https://www.facebook.com/graceforethiopia"><i class="fa fa-facebook"></i></a>
<a style="color: #f1f1f1; font-size: 20px;margin:5px;"href="https://web.telegram.org/#/im?p=u594999539_7451142547724682975"><i class="fa fa-telegram"></i></i></a>
 <a style="color: #f1f1f1; font-size: 20px;margin:5px;"href="https://www.instagram.com/grace_coffee_/?hl=en"><i class="fa fa-instagram"></i></i></a>
 


</div>

<h3 style="text-align: center; color: #f1f1f1;">&copy 2020 Graceland Coffee </h3>

</div>
</div></body>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>


    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>
     <script type="text/javascript">
        $('.navTrigger').click(function () {
    $(this).toggleClass('active');
    console.log("Clicked menu");
    $("#mainListDiv").toggleClass("show_list");
    $("#mainListDiv").fadeIn();

});

    </script>
    <script type="text/javascript">
  AOS.init({
    duration : 1200,
  })
</script>

</html>
