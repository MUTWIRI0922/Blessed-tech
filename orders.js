function bscardquantity()
{
    var checkbox = document.getElementById('BScard');
    var quantity = document.getElementById('Quantityboxcard');
    
    if (checkbox.checked == true) {
        quantity.style.display="block";
        
    } else {
        quantity.style.display="none";
    }


}
function posterquantity()
{
    var checkbox = document.getElementById('Poster');
    var quantity = document.getElementById('Quantityboxposter');
    
    if (checkbox.checked == true) {
        quantity.style.display="block";
        
    } else {
        quantity.style.display="none";
    }


}
function bannerquantity()
{
    var checkbox = document.getElementById('banner');
    var quantity = document.getElementById('Quantityboxbanner');
    
    if (checkbox.checked == true) {
        quantity.style.display="block";
        
    } else {
        quantity.style.display="none";
    }


}
function webquantity()
{
    var checkbox = document.getElementById('website');
    var quantity = document.getElementById('Quantityboxweb');
    
    if (checkbox.checked == true) {
        quantity.style.display="block";
        
    } else {
        quantity.style.display="none";
    }


}
function cybercategory()
{
    var checkbox = document.getElementById('cyber');
    var quantity = document.getElementById('Quantityboxcyber');
    
    if (checkbox.checked == true) {
        quantity.style.display="block";
        
    } else {
        quantity.style.display="none";
    }


}

function orderconfirm()
{
   //var quantity= document.forms["orderform"]["number"].value;
   // var type = document.forms["orderform"]["product"].value;

    window.alert("Would you like to order",quantity, type+"s?");

}