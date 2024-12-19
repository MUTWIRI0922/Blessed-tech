<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blessed Technologies</title>
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="favicon-16x16.png" type="image/x-icon">
    <style>
        body{
            background-color:white;
        }
        /* .main::before{
            content:"";
            background-image:url(web\ background\ 3.jpeg) ;
            background-repeat:no-repeat;
            background-size:cover;
            opacity: 0.50;
        } */
        .Container-1{
            background-image:none;
        }
        .top-nav{
            background-color:white;
            height:50px;
           
        }
        nav{
            margin-top:-30px;
        }
        .description {
            margin-left: 0;
            font-size: 40px;
            
            color: #ff0000;
            text-align: center;
            padding-top: 3px;
            margin-top:100px;
            position:relative;
            height:700px;
            overflow: hidden;
            background-image:url(web\ pic.jpg);
            background-size:100% 700px;
            background-attachment: fixed;
            background-position: top center;
            
        }
        .double-buttons{
            margin-top:-3%;
            padding-bottom:2%;
            
        }
         .card{
            height:320px;
            width:17%;
        }
        .card img{
            width: 100%;
            height: 150px;
            border-radius:8px; 
        }
        .card-description p{
            color: white;
            font-size: 12px;
        }
        .icon{
            content:"";
        }
        span.fa.fa-bars{
            color: #7fff00;
            margin-left: 90%;
            margin-top: -80%;
            width:50px;
            height:50px;
            cursor:pointer;
            display:none;
        }
        span .fa.fa-bars::before{
            width:100px;
        }
        .logo{
            
        }
        @media screen and (max-width:768px) {
           /*  .top-nav li{
                display:none;
            } */
            span.fa.fa-bars{
             display:inline-block;
            }
            .Container-1{
                position:relative;
                height:600px;
                overflow: hidden;
            }
            .description {
                
                margin-left: 0;
                font-size: 25px;
                width: 100%;
                color: #f30017;
                text-align: center;
                padding-top: 3px;
            }
            .description a{
                color: rgb(0, 0, 0);
                text-decoration: solid;
                font-weight:600;
                font-size: 19px;
                padding-top: 20px;
            }
            .advert {
                display:none;
            }
            .card{
                width: 90%;
                background-color: #091ebb;
                box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
                height:320px;
                float: left;
                margin: 2%;
                text-align: center;
                border-radius: 8px;
            }
        }
        @media screen and (min-width:768px) {
            .top-nav li{
              display:none;
            }
            span.fa.fa-bars{
             display:inline-block;
            
            }
            .Container-1{
                height:60%;
                 background-image:url(web\ pic.jpg); 
                background-size:cover;
            }
            .description {
                margin-left: 0;
                font-size: 40px;
                width: 100%;
                text-align: center;
                padding-top: 3px;
                
                height:40%;
            }
            .advert {
                display:none;
                margin-left: 70%;
                font-size: 20px;
                width: 25%;
                margin-top:-30% ;
                text-align: center;
                padding-top: 3px;
            }
            .card{
                width: 46%;
                background-color: #091ebb;
                box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
                height:320px;
                float: left;
                margin: 2%;
                text-align: center;
                border-radius: 8px;
            }
        }
        @media screen and (min-width:900px) {
            .top-nav li{
                display:block;
            }
            span.fa.fa-bars{
             display:none;
          
            }
            .Container-1{
                height:70%;
                background-color:none;
                background-image:url(web\ pic.jpg); 
                background-size:cover;
            }
            .description {
                margin-left: 0;
                font-size: 40px;
                width: 100%;
                text-align: center;
                padding-top: 3px;
                
                height:60%;
            }
            .advert {
                display:block;
               
            }
            .card{
                width: 17%;
                background-color: #091ebb;
                box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
                height:320px;
                float: left;
                margin: 1%;
                text-align: center;
                border-radius: 8px;
            }
        }
        @media screen and (max-width: 900px) {
    .nav-bar a {display: none;}
    #et-top-navigation .icon {
      float: left;
      display: block;
	  padding-left: 90%;
	  position:relative ;
    }
  } 
    @media screen and (max-width: 900px) {
        #main-menu {margin-left: -10%;}

        .nav-barresponsive{position: relative;}
        .nav-barresponsive {
            position: absolute;
            display: block;
            width: 100%;
            top:10%;
            right:0;
            background-color: white;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.5);
        
        }
        
        .nav-barresponsive a{
            float: none;
            padding:12px 10px;
            text-decoration: none;
        text-align:left;
            font-size: large;
            left:10px;
            display: block;
            color: rgb(255, 119, 0);
            width:100%;
            padding: bottom -20px;
        
        }
        .nav-barresponsive li :hover{
            
            color: black;
        }
        
    }
</style>
</head>
<body>
    <div class="main">
        <div class="Container-1">
                <div class="top-nav">
                    <nav>
                    <a href=""><img class="logo" src="LOGO.png" alt="logo"></a>
                    <span id="icon" class="fa fa-bars" onclick="Mobilenav()"></span>
                    <ul id="main-menu" class="nav-bar">
                        
                        <li class="active"><a href="Index.php">Home</a></li>
                        <li><a href="About us.php">About Us</a></li>
                        <li><a href="Services.php">Our Services</a></li>
                        <li><a href="Contact.php">Contact Us</a></li>
                        
                    </ul>
                    </nav>
                </div>
                <div class="description">
                    <p style="color:white;">WELCOME TO BLESSED TECHNOLOGIES</p>
                    <p>We are a hub of quality and appealing designs, specialized in graphic
                        design and web design products.
                    </p>
                    <div class="double-buttons">
                        <button><a href="orderform.php">Make an order</a></button>
                        <button><a href="Services.php">Our services</a></button>
                    </div>
                </div>
               <!-- <div class="advert">
                    <div class="card-1">
                        <p>We are always ready to offer our services </p>
                    </div>
                    <div class="card-2">

                    </div>
                    <div class="card-3">

                    </div>-->
                </div>
            </div>
            <h1>What we offer</h1>
            <div class="Container-2">
                    <div class="card">
                    <img src="cardimg2.png" alt="">
                        <div class="card-description">
                            <h4>Banners</h4>
                            <p>We design banners for advertisements and major events.</p><br>
                            <button ><a href="">See samples</a></button>
                        </div>
                    </div>
                    <div class="card">
                    <img src="cardimg4.jpg" alt="" >
                        <div class="card-description">
                            <h4>Posters/fliers</h4>
                            <p>We design posers and fliers  for all kinds of organizations and events.</p><br>
                            <button ><a href="">See samples</a></button>
                        </div>
                    </div>
                
                <div class="card">
                    <img src="cardimg1.jpg" alt="">
                        <div class="card-description">
                            <h4>Business cards</h4>
                            <p>We design appealing business cards for employees and business executives.</p><br>
                            <button ><a href="">See samples</a></button>
                        </div>
                </div>
                <div class="card">
                    <img src="cardimg 3.png" alt="">
                        <div class="card-description">
                            <h4>Websites</h4>
                            <p>We create websites for businesses, churches and all organisations at an affordable price.</p>
                            <button ><a href="">See samples</a></button>
                        </div>
                </div>
                <div class="card">
                    <img src="cardimg 3.png" alt="">
                        <div class="card-description">
                            <h4>Videos</h4>
                            <p>We create and edit videos that can be used in marketing by businesses.</p><br>
                            <button ><a href="">See samples</a></button>
                        </div>
                </div>

            </div>
    </div>
    <script>
					function Mobilenav() {
			var x = document.getElementById("main-menu");
			if (x.className === "nav-bar") {
			x.className += "responsive";
			} else {
			x.className = "nav-bar";
			}
            // document.getElementById("icon").innerHTML(url(/favicon-16x16.png))
		    }
	</script>
    
</body>
</html>