



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="order.css">
    <title>Order</title>


    <style>
      
*{
    font-family: 'poppins',sans-serif;
    margin: 0;
    padding: 0;
    outline: none;
   text-transform: capitalize;
   transition: all .2s linear;
   border:0;
}

body{
    background-color: blueviolet;

}

.container{
   
   display: flex;
   justify-content: center;
   align-items: center;
   padding: 25px;
   min-height: 80vh;
   padding-top: 50px;
   
}


.container form{
    padding: 20px;
    width: 670px;
    background-color: #fff;
    box-shadow: 2px 5px 13px rgb(54, 53, 53);
}

.container form .row{
    display: flex;
   flex-wrap: wrap;
    gap: 100px;
}

.container form .row .firstcolum .title{
    font-size: 20px;
    color:#333;
    padding-bottom: 9px;
    text-transform: uppercase;
}
.container form .row .firstcolum .inputbox{
   margin-bottom: 15px;

}
.container form .row .firstcolum .inputbox span{
    margin-bottom: 5px;
    display: block;
 
 }

 .container form .row .firstcolum .inputbox input{
    width: 100%;
    border:1px solid #ccc;
    padding: 10px 15px;
    font-size: 15px;
    text-transform: none;
  
  }
  
 .submit-btn{
   padding: 12px;
   font-size: 15px;
   background-color: blueviolet;
   color: #fff;
   margin-top: 5px;
   cursor: pointer;
   width: 100%;
 }
    </style>
</head>
<body>


     <div class="container">
         <form action="orderForm2.php" method="POST" enctype="multipart/form-data">
           

         <div class="row">

            <div class="firstcolum">
                 
                 <div class="inputbox">
                    <span>Fill Name:</span>
                    <input type="text" name="name" placeholder="Enter Your Name">
                 </div>

                 <div class="inputbox">
                    <span>Contact Number:</span>
                    <input type="text" name="num" placeholder="Enter Your Number">
                 </div>
                 <div class="inputbox">
                    <span>Address:</span>
                    <input type="text" name="address" placeholder="Enter Your Address">
                 </div>
                 <div class="inputbox">
                    <span>City:</span>
                    <input type="text" name="city" placeholder="Enter Your City">
                 </div>


                 <div class="flex">
                   <div class="inputbox">
                    <span>State:</span>
                    <input type="text" name="state" placeholder="Enter Your State">
                 </div>
                 <div class="inputbox">
                    <span>Zip Code:</span>
                    <input type="text" name="zip" placeholder="Zip Code">
                 </div>
                 </div>


</div>





<div class="firstcolum">
                
                

                 
                
                 
                 <div class="inputbox">
                    <span>Your desired Budget:</span>
                    <input type="text" name="budget" placeholder="Budget">
                 </div>
                 <div class="inputbox">
                    <span>Approximate Area size:</span>
                    <input type="text" name="budget" placeholder="Size(Square feet)">
                 </div>
                 
                 <div class="flex">
                   <div class="inputbox">
                    <span>What plants you want:</span>
                    <select name="preference" style="background-color:blueviolet ; height:30px; width:18vw">
                    <option value="indoor">Flower</option>
                    <option value="outdoor">Fruit</option>
                    <option value="outdoor">vegetable</option>
                    <option value="outdoor">herbal</option>
                    <option value="outdoor">Foreign</option>
                </select>
                 </div>
                 <div class="inputbox">
                    <span>Number of plants:</span>
                    <input type="text" name="budget" placeholder="number of plants">
                 </div>
                 <div class="flex">
                   <div class="inputbox">
                    <span>Your Preference:</span>
                    <select name="preference" style="background-color:blueviolet ; height:30px; width:18vw">
                    <option value="indoor">indoor</option>
                    <option value="outdoor">outdoor</option>
                    <option value="outdoor">Rooftop</option>
                </select>
                 </div>
                 <div class="inputbox">
                   
                    <input type="file" name="image">
                   
                 </div>
                 </div>


</div>
</div>
   <input type="submit" name="submit" value="SUBMIT" class="submit-btn">
</form>



     </div>
</body>
</html>