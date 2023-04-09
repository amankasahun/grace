<!DOCTYPE html>
<html>
<head>
<!--  <title>Graceland Coffee - Ethiopian Coffee</title>
  <meta charset="utf-8">
    <meta name="description" content="is a social enterprise that empowers high risk mothers through job opportunity."> -->
    <link rel="manifest" href="manifest.json">
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


input[type=submit]:hover{
  background:brown;
  transition: 0.2s;



}
input[type=submit]:active {
  


    
   transform: translateY(5px);
 
  
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
  .myP{
    font-size: 12px;
  }
  .trapic{
    width: 90%;
  }
}
@media screen and (max-width: 650px) {
  .column {
    width: 96%;
  

  }
   .myP{
    font-size: 16px;
  }
.trapic{
    width: 60%;
  
}
 input[type=submit]{
  -webkit-appearance:none;
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
  hr{
    width: 80%;
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
margin-top: 40px;}
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
  border: 1px solid #e2e2e2;
  color: #2e2e2e;
  font-size: 15px;
  box-sizing: border-box;
 

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
.responsivee {
  width: 100%;
  max-width: 800px;
  height: auto;
}


    </style>


</head>
<body>

    <nav class="nav">
        <div class="container">
            <div class="logo">
                <a style="cursor: pointer;" href="#">Graceland Coffee</a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a style="color: #00E676;" href="">Home</a></li>
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

<div class="containe">
    <img   src="grace3.jpeg" alt="Nature" class="responsive" width="100%" >
    <div  class="cent"><h2 style="font-family: 'Roboto Slab', serif; font-weight: bolder; letter-spacing: 2px;">Empowering Women<br/><span class="through" style=" color: #f4f4f4;"> through</span><br> <span style=" color: #f1f1f1; hover:;" class="job"> Job Oportunity!</span> </h2></div>
</div>
     <div>
        <!-- just to make scrolling effect possible -->
            <h2 style="margin-top: 65px; " data-aos="flip-left" class="myH2">Graceland Coffee </h2>
           
                <p style="line-height: 1.6; text-align: center; " data-aos="zoom-in" style="text-align: center;" class="myP">
                
                <strong>Graceland Coffee </strong> is a social enterprise that empowers high risk mothers through job opportunity. We provide child care, meals, and vocational training throughout the day so that each woman has a chance to provide for her family.
            </p>
            <form method="post"></form>
           <a style="text-decoration: none;" href="story.php"> <input data-aos="zoom-out-up" type="submit" name="submit" value="Learn more"></a>
    </div>
    
     
        
            <h2 style="margin-top: 65px;" data-aos="flip-left" class="myH2">Our Coffee<img src="  https://img.icons8.com/metro/30/000000/coffee.png"></h2>

    <div class="trapic">
<div class="row">
  <div class="column">
     <div class="parent">
      <img data-aos="fade-right" src="grace4.jpeg" alt="Notebook" style="width:100%; height: 240px;">
      <div data-aos="fade-up"  class="text">
        <h2>Dark Roast</h2>
        <p>Dark roasted coffees are dark brown in color, like chocolate, or sometimes almost black. </p>
      </div>
    </div>
  </div>
  <div  class="column">
     <div class="parent">
      <img data-aos="zoom-in-right"  src="pro.jpg" alt="Notebook" style="width:100%;height: 240px;">
      <div  data-aos="fade-up"  class="text">
        <h2>Medium Roast</h2>
        <p>Medium roasted coffees are medium brown in color with more body than light roasts. </p>
      </div>
    </div>
  </div>
  <div class="column">
     <div class="parent">
      <img data-aos="zoom-in-right"  src="b.jpg" alt="Notebook" style="width:100%;height: 240px;">
      <div  data-aos="fade-up"  class="text">
        <h2>Light Roast</h2>
        <p>Light roasts are light brown in color, with a light body and no oil on the surface of the beans. </p>
      </div>
    </div>
  </div>
</div>
</div>
<div>
 
            <h2 style="margin-top: 60px;"  data-aos="fade-up" class="myH2">About us</h2>
           
                <p style="line-height: 1.6; text-align: center;" data-aos="zoom-in" class="myP">
               Our employees roast, grind, and package our signature coffee to sell at wholesale price. We currently have three mothers on staff we and are loving our time together as  <strong> Grace family!</strong> 'Like' our Facebook page or follow us on Instagram for photos, updates, info, and more. If you have questions, please feel free to email or private message us on social media! 
            </p>
            <div style ="vertical-align: middle;
  width: 100px;
  height: 100px;
  border-radius: 50%;
 
  background-size:cover;
  display: block;
  margin-left: auto; margin-right: auto;
  "><img src="https://img.icons8.com/ios/100/000000/coffee-beans-.png"></div>
            <h3 style="text-align: center; margin-bottom: 30px;"> By Nardi Kassahun</h3>
    </div>


 <img style="position: relative; margin-bottom: 30px; top:20px;  display: block; margin-left: auto; margin-right: auto; " data-aos="fade-up"  src="gracepic.jpeg" alt="Nature" class="responsivee" width="600" height="600">
 <h2 style="text-align: center; color: #4a2c2a; font-style: italic; position: relative;line-height: 1.6; font-size: 17px; background: #e8e9ee; padding: 40px; top: 40px; color: black;">The finest coffee ​that you have ever sipped. <br><strong style="font-style: italic;"> 100% Guaranteed.</strong></h2>


<a style="color: #f1f1f1; position: fixed; background: white; right: 20px; bottom: 20px;padding: 5px; font-size: 22px;  width: 25px; height: 25px;  box-shadow: 1px 1px 1px 1px  rgba(0,0,0,0.5); color: #2e2e2e; border-radius: 50%; " href="log1.php"><i style="padding: 10px; text-align: center; position: relative; bottom: 8px; right: 6px;" class="fa fa-sign-in"></i></a>

<div class="fotter">

<div style="margin-top: 10px; "  class="iconcontaier">

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
<h2 style="color: white; text-align: center; margin-top:40px; font-size: 15px;">Subscribe and save up to 10%</h2>
<div style=" display: block; margin-right: auto; margin-left: auto;" class="contbut"> 
  <div  class="subscribe-form">
                                 <form onsubmit="return false">
                                    <input required id="name" type="Email" name="em" placeholder="Email Address">
                                    <button type="submit" id="name" onclick="Send_Data(this)" name="submit1"><span style="color: #f1f1f1; font-weight: bolder; font-size: 14px; ">SUBSCRIBE</span></button>
                                  
                                
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
    duration : 1300,
  })
</script>