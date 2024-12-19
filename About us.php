<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Blessed Technologies</title>
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png" type="image/png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" >
    <link rel="manifest" href="site.webmanifest">

    <style>
        body{
            background-color:white;
        }
        @media screen and (max-width:768px) {
            .top-nav li{
                display:none;
            }
            
        }
        @media screen and (min-width:768px) {
            .top-nav li{
                display:none;
            }
            
        }
        @media screen and (min-width:900px) {
            .top-nav li{
                display:block;
            }
            
        }
        .about-card{
            width:80%;
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            height:auto;
            border-radius:4px;
            text-align: center;
            margin-left:10%;
        }
        .about-card-1{
            background-color:chartreuse;

        }
        .about-card-2{
            background-color:red;

        }
        .about-card-3{
            background-color:chartreuse;

        }
        .about-card-4{
            background-color:red;

        }
        h3{
            color: #091ebb;
        }
        p{
            font-weight:50;
            font-size:16px;
            padding:10px;
        }
        span.fa.fa-bars{
            color: #7fff00;
            margin-left: 90%;
            margin-top: -15%;
            width:50px;
            height:50px;
            display:none;
            cursor:pointer;
        }
        @media screen and (max-width:768px){
            span.fa.fa-bars{
            display:block;
        }
        }
        @media screen and (min-width:768px){
            span.fa.fa-bars{
            display:block;
        }
        }
        @media screen and (min-width:900px) {
            span.fa.fa-bars{
                        display:none;
            }
         }
    </style>
</head>
<body>
<div class="top-nav">
            <nav>
            <a href=""><img class="logo" src="LOGO.png" alt=""></a>
            <span class="fa fa-bars"></span>
            <ul class="nav-bar">
                
                <li class="active"><a href="Index.php">Home</a></li>
                <li><a href="About us.php">About Us</a></li>
                <li><a href="Services.php">Our Services</a></li>
                <li><a href="Contact.php">Contact Us</a></li>
                
            </ul>
            </nav>
</div>

<div class="Main-content">
    <div class="about-card about-card-1">
            <h3 style="color: white;">Who we are</h3>
            <p>BlessedTechnologies is a three-months old start-up
            that began in February 2024.</p> <p>Our scope of operations is
            in Graphics design, Website development and Cyber 
            services.We deliver our services in a freelance mode
            worldwide.</p> <p> Some of the specific services we offer are 
            logo design, poster/flier design,bannner design,business cards,etc.</p>    
    </div>
    <div class="about-card about-card-2">
        <h3 style="color: white;">Mission</h3>
        <p>To increase the popularity of our clients through quality services in graphics design and web development.</p>
    </div>
    <div class="about-card about-card-3">
        <h3 style="color: white;">Vision</h3>
        <p>A number-one worldwide hub of graphics design and web development</p>
    </div>
    <div class="about-card about-card-4">
        <h3>Core values</h3>
        
            <li>Quality</li>
            <li>Timeliness</li>
            <li>Integrity</li>
            <li>Uniqueness</li>
        
    </div>
</div>
</body>
</html>