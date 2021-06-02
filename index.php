<!doctype html>
<html>
    <head>
        <title>WILDLIFE PHOTOGRAPHY</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <div  style="padding-left: 0px;">
            
            <nav class="topnav" style="background-color: black;padding-left: 0px;padding-right: 50px; position: fixed;width: 1210px;">
                <a class="log" href="#"><img style="height: 80px; width: 120px;background-color: white" src="wild_logo.PNG"></a>
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a class="navbar">
                 <a href="#home" style="display: inline-block;padding: 2px; text-decoration: none;font-size: 20px">Home</a>&nbsp;&nbsp;&nbsp;
                
            
                <a href="#about" style="display: inline-block;padding: 2px;text-decoration: none;font-size: 20px">About</a>&nbsp;&nbsp;&nbsp;
           
           
                 <a href="#register" style="display: inline-block;padding: 2px;text-decoration: none;font-size: 20px">Register</a>&nbsp;&nbsp;&nbsp;
           
            <a href="#travel" style="display: inline-block;padding: 2px;text-decoration: none;font-size: 20px">Travel</a>&nbsp;&nbsp;&nbsp;
           
                
                <a href="#shop" style="display: inline-block;padding: 2px;text-decoration: none;font-size: 20px">Shop</a>&nbsp;&nbsp;&nbsp;
            
            
                <span href="#" ><i class='fas fa-share-alt' style=' font-size:20px;color:white;'></i></span>&nbsp;&nbsp;
                    <span href="#" ><i class="fa fa-shopping-cart" style=" font-size:20px;color:white;"></i></span>&nbsp;&nbsp;

                </a>      
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav();myFunction()">&times;</a>
  <input type="text" placeholder="Search..." style="background-color: white;font-size: 17px;color: white"><i class="fa fa-search" style="color: white;font-size: 20px"> </i>
  <a href="#">Home</a>
  <a href="#">About</a>
  <a href="#">Contest</a>
  <a href="#">Travel</a>
  <a href="#">Shop</a>
</div>
                
  <span style="font-size:30px;cursor:pointer;color: white" onclick="myFunction();openNav();">&#9776;</span>
                          </nav>
        </div>
        
        <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
        <br><br><br><br>
        <video width="60%" height="580px" autoplay muted loop id="myVideo">
  <source src="https://assets.joelsartore.com/2020/05/Joel-Web-Reflections-Full-Size-Extended-h.264-v3_RESIZED.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
        <q style="color: white;font-size: 50px;text-align: right;position: absolute;font-family: 'Rajdhani',monospace" class="quote"><i>Live and let live</i></q>
        <a id="myBtn" onclick="myFunction()"></a>
  <div style="background-color: white"><br><br></div>
<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>
      

   
        
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Rajdhani:wght@500&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Noto+Sans&family=Open+Sans:wght@300;400&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=David+Libre&display=swap');
            
            
            
            
 body {
  
                font-family: Arial, Helvetica, sans-serif;
                background-color: antiquewhite;
                background-repeat: no-repeat;
                width: 100%;
                height: 100%;
                background-color: black;
                overflow-x: hidden;
                opacity: 10;
                visibility: inherit;
                z-index: 20;
                margin: 0;
               
}
             
.topnav a:hover{
                background-color: red;
                color: white;
            }
.topnav a {
 
  color: white;
  text-decoration: none;
  color: #f2f2f2;
  text-decoration: none;
  font-size: 17px;
}
.topnav{
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
    height: auto;
        }
.quote{
  position: absolute;
  bottom: 35%;
  right: 10%;
    left: 50%;
  
}
    
    
        }
            
.topnav a.active {
     background-color: red;
     color: black;
}  
            
  
      .sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  right: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  left:  25px;
  font-size: 30px;
  margin-left: 150px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 20px;}
}    
@media only screen and (max-width: 767px)
body {
    font-size: 13px;
}
#example{
        background-color: #121926;
        }
.tagline{
        font-family: 'Architects Daughter', cursive;
        font-size: 30px;
        color: white;
        }   d
#myvideo{
background-repeat: no-repeat;
background-size: cover;
top: 0;
left: 0;
right: 0;
bottom: 0;
z-index: -100;
        }            
#intro{     
       color: white;
font-family: 'Open Sans', sans-serif;
    font-weight: 500;
       font-size: 25px; 
       
        }
p{
   font-family: 'Open Sans' , sans-serif;
   color: white;
    font-size: 1rem;
            }
    .fa-instagram {
    width:20px; height:20px;
    background: #f09433; 
    background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); 
    background: -webkit-linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
    background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f09433', endColorstr='#bc1888',GradientType=1 );
    border-radius: 5px;
  }

.content {
  float: right;
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}
* {
  box-sizing: border-box;
}  
.container {
  position: relative;
  text-align: center;
  color: white;
   right: 0%; 
    
    
}
                     
.top-right {
  position: absolute;
  top: 300px;
  right: 300px;
    left: auto;
}
#heading{
    font-family: 'Open Sans',sans-serif;
    font-size: 35px;
    color: #f39c12;
    padding-left: 0px;
        }
.con_background{
   
    background-image: url(eagle2.jpg);
    min-height: 600px;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
            }
.btn-primary{
    color: white;
    background-color: blue;
    text-decoration: none;
 }

.et_pb_button:hover {
                
                background-color: black;
                cursor: pointer;
                color: red;
                font-weight: 700;
    text-decoration: none;
            }
.et_pb_button{
                transition: 0.4s;
                border: 2px white solid;
                font-size: 25px;
    text-decoration: none;
    border-radius: 3px;
    color: white;
    box-sizing: border-box;
    padding: 10px;
            }
                
                
                
                
                
                
            }
a {
    color: #2ea3f2;
    text-decoration: none;
}
.description{
     box-sizing: border-box;
    padding-right: 0px;
}
.description2{
    box-sizing: border-box;
    padding-right: 650px;
            }
.container2{
    background-image:url(dload.png);
    min-height: 1600px;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
            }
.center{
 position: relative;
 text-align: center;
 color: white;
        }
.container_2{
    position: absolute;
  text-align: center;
  color: white;
            }
#head_con{
    position: absolute;
    bottom: 300%;
    left:35%;
  
    color: white;
      font-family: 'Open Sans',monospace;
      font-size: 25px;
    
    
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    background: 0 0;
    font-size: 100%;
    vertical-align: baseline;
    
         }
.button {
    position: relative;
    padding: .3em 1em;
    border: 1px solid white;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    background-color: transparent;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    font-size: 20px;
    font-weight: 500;
    line-height: 1.7em!important;
    color: white;
}
 
            .button:hover{
                background-color: black;
                cursor: pointer;
                color: red;
                font-weight: 700;
            }
            .button{
                transition: 0.4s;
                border: 2px white solid;
                font-size: 25px;
            }
            .footercontainer{
                position: fixed;
                left: 0;
                bottom: 0%;
                width: 100%;
                text-align: center;
            }     
            
   @media only screen and (max-width: 980px)
.beecam {
    text-align: center;
    margin-left: auto;
    margin-right: auto;
}
.beecam {
    text-align: left;
    margin-left: 0;
}
@media only screen and (max-width: 980px)
.camtrap {
    text-align: center;
    margin-left: auto;
    margin-right: auto;
}
.camtrap {
    text-align: left;
    margin-left: 0;
}
.responsive_1{
    width: 50%;
    height: 50%;
            }
.responsive_2{
    width: 50%;
    height:50%;
            }
.responsive_3{
    width: 50%;
    height: 50%;
            }
.image_block {
    width: 175px;
    height: 175px;
    position: relative;
    margin: 0 auto;
}
.image_block a img {
position: absolute;
bottom: 0;
}
.responsive_4{
    width: 100%;
    height: auto;
            }
#head_con1{
                bottom: 270%;
                left: 40%;
                position: absolute;
                
            }
#head_con2{
                bottom: 250%;
                left: 40%;
                position: absolute;
                
            }
#head_con3{
                bottom: 230%;
                left: 40%;
                position: absolute;
                
            }
#head_con4{
                bottom: 210%;
                left: 40%;
                position: absolute;
                
            }
#head_con5{
                bottom: 190%;
                left: 40%;
                position: absolute;
                
            }

#button_gsn{
                bottom: 130%;
                left: 40%;
                position: absolute;
    
            }           
            
            
            
  </style>
    </head>

    <body>
        
            <div id=example>
                <br><br><br> <br><br><br> 
                <center><a id="intro">Hi! I'm Siddanthi....</a></center>
               
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div style="text-align: center;padding: 20px;color: white">I often use my own inventions to achieve 
                fresh perspectives in my work. When I'm not photographing wildlife in Africa, 
                I can be found developing devices & training resources
                to help others take better photographs of wildlife.</div>
<br><br><br><br>
                <div class="aboutme" style="color: white;font-size: 20px;display: block;padding-left: 170px;"><i class="fa fa-address-card-o"></i> About us
                <br><br><br><br>
                </div>
                <div style="font-size: 20px;padding-left: 170px;display: block;color: white;text-decoration: none;align-items: center"><i class="fa fa-tags" ></i> Follow us
                    <br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<a style="font-size: 17px;  font-family: 'David Libre', serif; ">Join over a million people in my online communities!</a><br><br>
                    <a href="www.instagram.com"><img src="insta.png" width="25px" height="25px"></a>&nbsp;&nbsp;&nbsp;
                    <a href="www.facebook.com"><img src="nfb.png" width="25px" height="25px"></a>&nbsp;&nbsp;&nbsp;
                    <a href="www.twitter.com" ><img src="ntw.jpg" width="25px" height="22px"></a>&nbsp;&nbsp;&nbsp;
                    <a href="www.youtube.com"><img src="nyt.jpg" width="28px" height="31px"></a>
                </div><br><br>
                <div style="background-color: white"><br><br></div>
                <div class="container">     
                    <a class=""><img src="eagle2.jpg"  alt="eagle" width="100%" height="800px"></a>
                    <div class="top-right" >
                        <a id="heading" style="text-align: left;">Learn Wildlife Photography</a>
                        <br><br>
                        <div style="font-size: 1.5vw;opacity: 0.75;">We have produced a range of training resources for nature photographers of all levels. If you are looking to advance your photography then let me guide you through selecting equipment to suit your budget, mastering your camera settings, wildlife photography techniques, post-processing and more. If you're an advanced photographer, learn how to use the latest cutting-edge technologies or check out our business and marketing training platform.</div>
                        <br><br>
                        <a class="et_pb_button et_pb_more_button" href="elephanto.jpg">Start Here</a>
                    </div>
                </div>
                <div style="background-color: white"><br><br></div>
                <div style="height:800px;background-color: #121926;" class="container2">
                <br><br><br>
                    <div style="font-size: 30px;font-family:'Open Sans',monospace;text-align: center;color: white">Take your Wildlife Photography to the Next Level!</div>
<br><br>
                    <center><a style="font-size: 20px;font-family: 'David Libre', serif;color: white;">Discover the world of remote and camera trap wildlife photography...</a></center>
                    <br><br><br><br><br>
                    <div class="img_block"><a class="camtrap"><img src="ctrap.jpg" alt="Camera_trap" class="responsive_1" width="300" height="195" >
                        <a style="color: white;font-size: 4vw;">&#128073 Camera Traps</a>
                        </a><br>
                    <a class="beecam"><img src="bcam.jpg" alt="Beetle_cam" class="responsive_2" width="300" height="195">
                        <a style="color: white;font-size: 4vw;background-color: #121926">&#128073 Beetle Camera</a>
                        </a><br>
                        <a><img src="campg.jpg" alt="camptrations" class="responsive_3" width="300" height="195" >
                        <a style="color: white;font-size: 4vw;">&#128073 Free Guide</a>
                        </a></div><br>
                   <br><br>
                    <div style="background-color: white">
                    <br><br></div>
                    <div class="container_2">
                        <a><img src="cheetah2.jpg" class="responsive_4" width="100%" height="500">
                        </a>
                        <div class="center">
                            <div id="head_con">Join our Free Wildlife Photography Course!</div><br><br>
                            <div>
                                <span id="head_con1">&#10004 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Equipment recommendations for your budget</span><br><br>
                                <span  id="head_con2">&#10004 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Master your camera settings</span><br><br>
                                <span id="head_con3">&#10004 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wildlife photography tips & techniques</span><br><br>
                                <span id="head_con4">&#10004 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;How to take photos like a pro</span><br><br>
                                <span id="head_con5">&#10004 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Post-processing nature photography</span>
                            </div>
                            <a href="eagle.jpg" id="button_gsn"><button class="button">Get Started Now &#8250</button></a>
                        </div>
                    
                    </div>
                
    </body>
                <footer class="footercontainer">
                    <div style="background-color:#121926;color: white">
                        <a href="#" >&copy; 2020wildlife.com | </a>
                        <a href="#privacy-policy">Privacy Policy | </a>
                        <a href="#terms-of-service">Terms of service | </a>
                        <a href="contact">Contact</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
                         <a href="www.facebook.com"><img src="nfb.png" width="25px" height="25px"></a>
                        <a href="www.instagram.com"><img src="insta.png" width="25px" height="25px"></a>
                        <a href="www.twitter.com" ><img src="ntw.jpg" width="25px" height="22px"></a>
                        <a href="www.youtube.com"><img src="nyt.jpg" width="28px" height="31px"></a>
                        <br><br>
                        </div>
                </footer>
        </html>