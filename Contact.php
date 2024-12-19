<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts Us | Blessed Technologies</title>
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <style>
        body{
            background-color:white;
            background-image:url();
            font-size:20px;
        }
        h3,h4{
            color: red;
        }
        .main-content{
            display:flex;
        }
        .contact-form,.details{
           margin:20px;
            width:50%;
         }
         button{
            background-color:#7fff00;
            color:red;
            font-weight:600;
            font-size:18px;
            border:none;
            border-radius:8px;
            width:150px;
            height:40px;
         }
         button:hover{
            background-color:red;
            color:#091ebb;
         }
          input[type=text], input[type=email]{
            width:40% ;
            height:50px;
            border: 3px solid #555;
            color:#091ebb;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;
          }
          input[type=text]:focus, input[type=email]:focus{
           background-color:#ff0000;
           border:0px;
           width:100% ;
          }
         textarea{
            resize:both;
         }
         .alert{
            text-align:center;
            background-color:red;
            height:30px;
            top:-10px;
         }
         label{
            color:#091ebb;
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
            .top-nav li{
                display:none;
            }
            .main-content{
                display:block;
            }
            .contact-form,.details{
               margin:30px;
                width:50%;
            }
            h3{
                background-color:#091ebb;
                color:white;
                text-align:center;
            }
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
<!--<div class="alert">
         <p>Labour Day offers!! 20% Discount for every Order..</p>
</div>-->
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
<div class="main-content">
    <div class="details">
        <p><h4>Telephone:</h4>0796635581,0792085364</p>
        <p><h4>Email:</h4>amutwiri07@gmail.com</p>
        <p><h4>Facebook:</h4>Blessed Technologies</p>
    </div>
    <div class="contact-form">
        <h3>Send Us a Message</h3>
        <form action="contactform.php"  method="post">
            <label for="Name">Name</label><br>
            <input type="text" name="Name" id="NAME" placeholder="Enter Name..." required><br><br>
            <p id="error1"></p>
            <label for="Email">Email</label><br>
            <input type="email" name="Email" id="EMAIL" placeholder="Enter Email..." required><br><br>
            <p id="error2"></p>
            <label for="subject">Subject</label><br>
            <input type="text" name="Subject" id="SUBJECT" placeholder="Enter Subject..." required><br><br>
            <p id="error3"></p>
            <label for="Message">Message</label><br>
            <textarea name="Message" id="MESSAGE" cols="50" rows="10" placeholder="Type Message..." required></textarea><br>
            <button type="submit" name="submit">Send Message</button>
        </form>
    </div>
</div>
</body>
</html>