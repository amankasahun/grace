<!DOCTYPE html>
<html>
<head>
  <title>Graceland Coffee - Contact us</title>
    <meta name="description" content="Through Facebook, Instagram and Telegram">
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

::placeholder{
  font-size: 16px;
padding-bottom: 20px;
position: relative;

font-family: helivtica;

}
html,

body {
  background: #f8f9ff;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
   font-family: 'Roboto Slab', serif; 
    font-size: 62.5%;
    font-size: 10px;
    
     background-position: center top;
    background-size:cover;*
   
}


.nav {
    width: 100%;
    height: 45px;
    position: fixed;
    line-height: 40px;
    text-align: center;
    z-index: 1000;
    background: black;
    font-family: 'Roboto Slab', serif; 

    top: 0;
  
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


/* Home section */

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


/* Media qurey section */

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
        /*same background color of navbar*/
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


/* Animation */
/* Inspiration taken from Dicson https://codemyui.com/simple-hamburger-menu-x-mark-animation/ */

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
    background-color: #fff;
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
}
.myP {
    text-align: justify;
    padding-left:15%;
    padding-right:15%;
    font-size: 20px;
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
    color:  #330033;
    padding: 10px;
line-height: 10px;
    text-decoration: none;
    margin: 5px;
    cursor: pointer;
    border-radius: 25px;
    background: #00FFCC;
    margin-bottom: 10px;
    
    display: block;
margin-left:auto;
margin-right:auto;
letter-spacing: 1px;
font-size: 17px;
}

input[type=submit]:hover{
  background:#00dedd;
  transition: 0.2s;

}
.column {
  float: left;
  width: 32%;
  padding: 6px;
  margin-bottom: 10px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
@media screen and (max-width: 1000px) {
  .column {
    width: 97%;
  }
}
.trapic{
  width: 75%;
  display: block;
  margin-left: auto;
  margin-right:auto;

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
      background: rgb(0, 0, 0); /* Fallback color */
      background: rgba(0, 0, 0, 0.3); /* Black background with 0.5 opacity */
      color: #ffffff;
      width: 100%;
      padding: 10px;
         box-sizing: border-box;
      }


/* REMOVE THIS, USE YOUR OWN  */

.dummy_page {
  height: 200px;
  width: 100%;
  background-color: #f0f0f0;
  text-align: center;
  box-sizing: border-box;
  padding: 60px 0px;
}
/* STYLES SPECIFIC TO FOOTER  */

.iconcolumn {
  float: left;
  width: 33.33%;
  color: #f1f1f1;
  text-align: center;
  margin-bottom: 15px;




}

/* Clearfix (clear floats) */
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
  color: white;
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

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 1000px) {
  .iconcolumn  {
    width: 100%;
    text-align: left;
    margin-left: 30px
  }
  .contbut{
    width: 80%;}
}
@media screen and (max-width: 1000px) {
.iconcontaier{
  width: 100%;}}

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

  height: auto;
}
.subscribe-form {
  position: relative;
  overflow: hidden;
}
.subscribe-form input {
   -webkit-appearance:none;
  width: 100%;
  padding: 15px 5px;
  background:#f1f1f1;
  border: 1px solid #f1f1f1;
  color: #2e2e2e;
  font-size: 15px;
  box-sizing: border-box;


}
.subscribe-form button {
   -webkit-appearance:none;
    position: absolute;
    right: -2px;
    background: #E70024;
    padding: 15.76px 15px;
    border: 1px solid #E70024;
    top: 0;}
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
	
   
 
   h2{
      color:#2c9eaa;
      
      text-align: center;
    
    
   }

  
      



     /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


   
      .cont{
         
position: relative;
top: 100px;
  padding: 10px;
         width: 360px;
        
         color:white;
         margin-top: 20px;
             box-shadow: 0px 7px 16px 0px rgba(0, 0, 0, 0.3);
         border-radius: 10px;

margin-left: auto;
margin-right:auto;
margin-top: 40px;
margin-bottom: 40px;


      }
      .cont input[type=text] {
         -webkit-appearance:none;
        display: block;
   width: 95%;
   height:  27px;
        padding:10px;
     -webkit-transition: width 0.3s ease-in-out;
    transition: width 0.4s ease-in-out;
 font-size: 17px;
  
  border: 1px solid white;
  background: #e8e9ee;
  border-radius: 5px;
 

}
.cont input[type=Email]{
   -webkit-appearance:none;
     width: 95%;
        padding:10px;
        height:  27px;
     -webkit-transition: width 0.3s ease-in-out;
    transition: width 0.4s ease-in-out;
 font-size: 17px;
  border: 1px solid white;
 
  background: #e8e9ee;
  border-radius: 5px;
}
input[type=email]:focus{



  border: 1px solid rgba(74, 44, 42, 3);

}
input[type=text]:focus,textarea:focus{


  border: 1px solid rgba(74, 44, 42, 3);
}
input[type=text]:hover,textarea:hover{
  transition: 0.2s;


  border: 1px solid rgba(74, 44, 42, 3);
}
input[type=email]:hover{
  transition: 0.2s;


  border: 1px solid rgba(74, 44, 42, 3);

}


textarea{
   -webkit-appearance:none;
  width: 95%;
        padding:10px;
     -webkit-transition: width 0.3s ease-in-out;
    transition: width 0.4s ease-in-out;
 font-size: 17px;
  
 border: 1px solid white;
  background: #e8e9ee;
  border-radius: 5px;
  outline:none;

}
.cont input[type=text]:focus{

   outline: none;
    -webkit-appearance:none;
   


}
.cont button{

  -webkit-appearance:none;
   width: 90%;
      box-shadow: 0px 7px 16px 0px rgba(0, 0, 0, 0.3);
    border: none;
    color: white;
    padding: 10px;
    text-decoration: none;
    margin: 5px;
    cursor: pointer;
    border-radius: 5px;
    background:#E70024;
    font-weight: bold;
    display: block;
margin-left:auto;
margin-right:auto;}
 .cont input[type=submit]:active {
    -webkit-transition: all 0.30s ease-in-out;
  -moz-transition: all 0.30s ease-in-out;
  -ms-transition: all 0.30s ease-in-out;
  -o-transition: all 0.30s ease-in-out;

    transform: translateY(5px);
    background-color: black;
    
  
 }
 .cont button:hover{
  background-color:  #ff787e;
  -webkit-transition:ease-in-out;
  transition: 0.3s;
   box-shadow: 0px 7px 16px 0px rgba(0, 0, 0, 0.3);
 }
  .cont input[type=reset]:hover{
  background-color:  #ff787e;
  -webkit-transition:ease-in-out;
  transition: 0.3s;
 box-shadow: 0px 7px 16px 0px rgba(0, 0, 0, 0.3);}

@media only screen and (max-width: 340px) {
  .cont{
    width: 250px;
  }
  .cont input[type=text] {
    width: 90%;
  }
  .cont input[type=Email]{
    width: 90%;
  }
  textarea{
  width: 90%;
}
.cont input[type=submit]{
width: 72%;
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
                    <li><a style="color: #00E676;"  href="contact.php">Contact us</a></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>

<form onsubmit="return false">
 

<div data-aos="fade-up" class="cont">
<h2 style="color: #111; font-size: 25px;">Contact Us</h2>
<table style="width: 99%;">
<tr>
	<td> <input type="text" id="namee" required="" name="" required="" placeholder="Name..."></td>
</tr>

<tr>
	<td><input type="email" id="cont" required="" name="" required="" placeholder="Email..."><br/></td>
</tr>



<tr>
    <td><textarea required="" id="contet" name="nume" placeholder="Comment..." cols="30" rows="8"></textarea>

<br/>
</td></tr></table>
<tr>
    <button  type="submit" id="namee" name="but"  required="" onclick="Send_Dataa(this)" ><span style="font-size: 15px;">SEND</span></button>
  <span id="responsee"></span>
</td>	
</tr></tr></table></div>
</form>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script type="text/javascript">
    function Send_Dataa(b){
      var namee=document.getElementById("namee").value;
      var cont=document.getElementById("cont").value;
      var contet=document.getElementById("contet").value;

      var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;


if (document.getElementById("cont").value != "" && document.getElementById("namee").value != ""  && document.getElementById("contet").value != "" && document.getElementById("cont").value.match(mailformat)) {

      var httpr = new XMLHttpRequest();
      httpr.open("POST","homeajaxx.php",true);
      httpr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
      httpr.onreadystatechange=function(){
        if (httpr.readyState==4 && httpr.status==200) {
          document.getElementById("response").innerHTML=httpr.responseText;
        }
      }
      httpr.send("namee="+namee+"&cont="+cont+"&contet="+contet);
      b.innerHTML="SENT";
      b.style.fontSize="15px";
      b.style.color="#fff";
      b.style.fontWeight="bolder";
      b.style.background="#e0e0e0";
      b.style.borderColor="#e0e0e0";
      b.style.color="black";


     
      document.getElementById("hn").style.display="none";
      //document.getElementById("thank").innerHTML="Thank you for Subscribing!";
      
     
      function fun(){
       document.getElementById("thank").style.display="none";
      }

    }


  }
  </script></form>



<div style="background: #111; width: 100%; position: relative;top: 120px; overflow: hidden;" class="fotter">

<div style="margin-top: 10px; background: #111;" class="iconcontaier">

<div class="iconrow">
  <div class="iconcolumn">
  <i style="font-size:  40px; " class="fa fa-map-marker"></i>
  <div class="text"><h4>Location</h4><span>Kore, Addis Ababa, Ethiopia</span></div>
  </div>
  <div class="iconcolumn">
<i style="font-size:  30px;"class="fa fa-phone"></i>
<div class="text"><h4>Call Us</h4><span>+251911367977</span></div>
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
  <p onclick="display.getElementById('hn').style.display='none'"  id="thank" style="color: white; font-size: 17px; text-align: center;"></p>
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
</div>





<!-- END OF FOOTER -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>

<!-- Function used to shrink nav bar removing paddings and adding black background -->
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
    duration : 1300,
  })
</script>









</body>







</body>