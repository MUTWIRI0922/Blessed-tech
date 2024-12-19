<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Home.css">
    <script src="orders.js"></script>
    <title>order</title>
    <style>
        body{
            background-image:url(web\ background\ 2.jpg)
            background-size:cover;
            opacity:1;

        }
        .Quantitybox{
            display:none;
        }
        .form{
            display:flex;     
            margin-left:30px;  
        }
     .column1,.column2{
            margin: 1%;
            width:48%;
        }
        .top{
            text-align:center;
            font-size:30px;
            font-weight:600;
            color:#091ebb;
        }
        input[type=submit]{
          
            cursor: pointer;
            background-color:#7fff00;
            border:none;
            border-radius:8px;
            height:30px;
            font-weight:500;
        }
        input[type=text],input[type=email],input[type=tel]{
          width:300px;
          height:30px; 
        }
        input[type=checkbox]{
          
          cursor: pointer;
         
      }
    </style>
</head>
<body>
<div class="top-nav">
            <nav>
            <a href=""><img class="logo" src="LOGO.png" alt=""></a>
            <ul class="nav-bar">
                
                <li class="active"><a href="Index.php">Home</a></li>
                <li><a href="About us.php">About Us</a></li>
                <li><a href="Services.php">Our Services</a></li>
                <li><a href="Contact.php">Contact Us</a></li>
                
            </ul>
            </nav>
</div>
    <?php
    ?>
    <div class="orderform">
        <div class="top">
            <P>Thankyou for showing interest in our services.</P>
                    <P>Make an order in the form below</P>

        </div>
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" name="orderform" class="form" onsubmit="return orderconfirm()">
        <div class="column1">
                 <label for="Name">Your Name:</label><br>
                <input type="text" name="Name" id="" required><br><br>
                <label for="Mobile">Your Mobile number:</label><br>
                <input type="tel" name="Mobile number" id="" required><br><br>
                <label for="Email">Your Email:</label><br>
                <input type="email" name="Email" id="" required><br><br>
                <label for="Product">Which products do you need?</label><br>
                <input type="checkbox" name="Product" value="poster" id="Poster" onclick="posterquantity()">Poster/flier at Kshs. 400 each<br>
                    <div id="Quantityboxposter" style="display:none;">
                        <label for="number"> Quantity</label>
                        <select name="number" id="" >
                            <option value="">--select--</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                <input type="checkbox" name="Product" value="Business card" id="BScard" onclick="bscardquantity()" >Business card<br>
                    <div id="Quantityboxcard" style="display:none;">
                        <label for="number"> Quantity</label>
                        <select name="number" id="" >
                            <option value="">--select--</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <br>
                <input type="checkbox" name="Product" value="Banner" id="banner" onclick="bannerquantity()">Banner<br>
                <div class="" id="Quantityboxbanner" style="display:none;">
                    <label for="number"> Quantity</label>
                    <select name="number" id="" >
                        <option value="">--select--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                    <br>
                <input type="checkbox" name="Product" value="Website" id="website" onclick="webquantity()">Website<br>
                <div class="" id="Quantityboxweb" style="display:none;">
                     <label for="number"> Quantity</label>
                    <select name="number" id="" >
                        <option value="">--select--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                    <br>
                <input type="checkbox" name="Product" id="cyber" onclick="cybercategory()">Cyber Service<br><br>
                <div class="" id="Quantityboxcyber" style="display:none;">
                    <label for="number"> Category</label>
                    <select name="number" id="" >
                        <option value="">--select--</option>
                        <option value="">KRA services</option>
                        <option value="">HELB services</option>
                        <option value="">KUCCPS Services</option>
                        <option value="">NTSA services</option>
                        <option value="">Others</option>
                    </select>
                </div>
                
                    
                    <br>
        </div>
            <div class="column2">
                <label for="Description">A brief description of what you need:</label><br>
                <textarea name="Description" id="" cols="60" rows="10"></textarea><br><br>
                <label for="Description">Please upload any image that you would prefer it to be used:</label><br>
                <input type="file" name="Images" id=""><br><br>

                <input type="submit" value="Submit Order" onclick="orderconfirm()">

            </div>
            
        </form>
    </div>
    <script>
           
    </script>
</body>
</html>