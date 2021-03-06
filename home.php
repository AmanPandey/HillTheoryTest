<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hilltheory IT Solution || Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link href="css/custom.css" rel="stylesheet" />

<!-- Media Query CSS -->
  <style>
    
 .showMobile{
   display: none;
 }
@media only screen and (max-width:767px){
  body{
    background-color: #0b1119;
    width: 100%;
  }

  .hideMobile{
      display: none;
  }

  .showMobile{
    display: block;
  }

 .mobileScreen{
 margin-left: 5px;
 }


 .scrollmenu {
    overflow:  auto;
    white-space: nowrap;
    margin-left: 5px;
    scrollbar-color: rebeccapurple green; 
  }

  .scrollItem{
  width: 150px;
  height: 150px;
  background-color: #28292b;
  border-radius: 10px;
  display: inline-block;
  margin-right: 5px;
  }


}
  </style>

<!-- /Media Query CSS -->


</head>
<body style="background-color: #0b1119;">


<nav class="navbar" style="background-color:#0b1119;">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="home"><img src="assets/web_logo.png" alt="" width="200"></a>
  <!-- Links -->
  <ul style=" float:right;" class="hideMobile" >
    <button class="payment_btn">Payment</button>
    <Select><option value=""> Venkata Sai Teja M2</option></Select>
  </ul>

  <ul style=" float:right;" class="showMobile">
  <a href="orders"><img src="assets/menu.png" width="50" alt=""></a>
  </ul>


</nav>




<nav class="navbar" style="background-color:transparent; margin-top:-30PX; font-size: 16px; width: 100%; ">
<!-- Links -->
  <span class="navbar hideMobile" style="width: 100%;">
    
  <div style="width: 50%;">
    <span class="nav-item" style="float:left; margin-right: 10px;">
      <a class="#" style="color: #c35d47;" href="home" >Home</a>
    </span>
    <span class="nav-item" style="float: left; margin-right: 10px;">
      <a class="#" style="color: #646970;" href="#">Trades</a>
    </span>
    <span class="nav-item" style="float: left; margin-right: 10px;">
      <a class="#" style="color: #646970;" href="#">Prices</a>
    </span>
    <span class="nav-item" style="float: left; margin-right: 10px;">
      <a class="#" style="color: #646970;" href="#">Portfolio</a>
    </span>
    <span class="nav-item" style="float: left; margin-right: 10px;">
      <a class="#" style="color: #646970;" href="orders">Orders</a>
    </span>
    
  </div>

    <div  style="width: 50%;">
    
  <Small style="font-size: 10px; color: #f9b13a; float: right; margin-right: 10px;">Venkata Sai Teja M2 <br/>	<span style="color:#fff;"> ??? 4,39,567.89  </span></Small>

  <Small style="font-size: 10px; color: #f9b13a; float: right;  margin-right: 50px;" >EXPOSER <br/>  <span style="color:#fff;"> ??? 0 </span></Small>
    </div>

  </span>
 
  <span class="navbar showMobile" style="width: 100%;">
  <Small style="font-size: 10px; color: #f9b13a; float: left; margin-left: 50%; margin-right: 15px;" >EXPOSER <br/>  <span style="color:#fff;"> ??? 0 </span></Small>
  
  <Small style="font-size: 10px; color: #f9b13a; float: right; margin-right: 5px;">Venkata Sai Teja M2 <br/>	<span style="color:#fff;"> ??? 4,39,567.89  </span></Small>

  
  </span>
 
</nav>



<div style="clear: both;"></div>
<div class="row" style="margin-top: -20px;">
  <div class="col-sm-12">
<hr style="height:2px; background-color:#646970;" />
<h6 style="color: #c35d47; margin-left: 50px;" class="hideMobile">Top Gainers<br/> <small style="color: #646970;"> Coins that have gained the most in 24 hours </small> </h6>
<h6 style="color: #c35d47; margin-left: 5px;" class="showMobile">Top Gainers<br/> <small style="color: #646970;"> Coins that have gained the most in 24 hours </small> </h6>

<div class="scrollmenu" style="color:aliceblue;">

<!-------------Listed Items--------------------->
<div class="scrollItem">
  <h5 style="margin-top: 20px; margin-left: 10px;"> <img src="assets/bitcoincash.png" width="30" alt=""> <span class="itemTitle"> Bitcoin Cash </span></h5>
  <h6 style="color: #eeb2cf; font-weight: bold; margin-left: 20px; font-size: 12px;">??? 28, 908.42</h6>
  <h6 style="color: #0ac18e; font-weight: bold; margin-left: 20px;  font-size: 12px;">+12.69%</h6>
  <center>
  <button class="buyBtn" style="margin-right: 5px;">  Buy </button>
  <button class="buyBtn">  Trade </button>
  </center>
</div>
<!-------------/Listed Items--------------------->


<!-------------Listed Items--------------------->
<div class="scrollItem">
  <h5 style="margin-top: 20px; margin-left: 10px;"> <img src="assets/bitcoincash.png" width="30" alt=""> <span class="itemTitle"> Bitcoin Cash </span></h5>
  <h6 style="color: #eeb2cf; font-weight: bold; margin-left: 20px; font-size: 12px;">??? 28, 908.42</h6>
  <h6 style="color: #0ac18e; font-weight: bold; margin-left: 20px;  font-size: 12px;">+12.69%</h6>
  <center>
  <button class="buyBtn" style="margin-right: 5px;">  Buy </button>
  <button class="buyBtn">  Trade </button>
  </center>
</div>
<!-------------/Listed Items--------------------->


<!-------------Listed Items--------------------->
<div class="scrollItem">
  <h5 style="margin-top: 20px; margin-left: 10px;"> <img src="assets/bitcoincash.png" width="30" alt=""> <span class="itemTitle"> Bitcoin Cash </span></h5>
  <h6 style="color: #eeb2cf; font-weight: bold; margin-left: 20px; font-size: 12px;">??? 28, 908.42</h6>
  <h6 style="color: #0ac18e; font-weight: bold; margin-left: 20px;  font-size: 12px;">+12.69%</h6>
  <center>
  <button class="buyBtn" style="margin-right: 5px;">  Buy </button>
  <button class="buyBtn">  Trade </button>
  </center>
</div>
<!-------------/Listed Items--------------------->


<!-------------Listed Items--------------------->
<div class="scrollItem">
  <h5 style="margin-top: 20px; margin-left: 10px;"> <img src="assets/bitcoincash.png" width="30" alt=""> <span class="itemTitle"> Bitcoin Cash </span></h5>
  <h6 style="color: #eeb2cf; font-weight: bold; margin-left: 20px; font-size: 12px;">??? 28, 908.42</h6>
  <h6 style="color: #0ac18e; font-weight: bold; margin-left: 20px;  font-size: 12px;">+12.69%</h6>
  <center>
  <button class="buyBtn" style="margin-right: 5px;">  Buy </button>
  <button class="buyBtn">  Trade </button>
  </center>
</div>
<!-------------/Listed Items--------------------->


<!-------------Listed Items--------------------->
<div class="scrollItem">
  <h5 style="margin-top: 20px; margin-left: 10px;"> <img src="assets/bitcoincash.png" width="30" alt=""> <span class="itemTitle"> Bitcoin Cash </span></h5>
  <h6 style="color: #eeb2cf; font-weight: bold; margin-left: 20px; font-size: 12px;">??? 28, 908.42</h6>
  <h6 style="color: #0ac18e; font-weight: bold; margin-left: 20px;  font-size: 12px;">+12.69%</h6>
  <center>
  <button class="buyBtn" style="margin-right: 5px;">  Buy </button>
  <button class="buyBtn">  Trade </button>
  </center>
</div>
<!-------------/Listed Items--------------------->


<!-------------Listed Items--------------------->
<div class="scrollItem">
  <h5 style="margin-top: 20px; margin-left: 10px;"> <img src="assets/bitcoincash.png" width="30" alt=""> <span class="itemTitle"> Bitcoin Cash </span></h5>
  <h6 style="color: #eeb2cf; font-weight: bold; margin-left: 20px; font-size: 12px;">??? 28, 908.42</h6>
  <h6 style="color: #0ac18e; font-weight: bold; margin-left: 20px;  font-size: 12px;">+12.69%</h6>
  <center>
  <button class="buyBtn" style="margin-right: 5px;">  Buy </button>
  <button class="buyBtn">  Trade </button>
  </center>
</div>
<!-------------/Listed Items--------------------->


<!-------------Listed Items--------------------->
<div class="scrollItem">
  <h5 style="margin-top: 20px; margin-left: 10px;"> <img src="assets/bitcoincash.png" width="30" alt=""> <span class="itemTitle"> Bitcoin Cash </span></h5>
  <h6 style="color: #eeb2cf; font-weight: bold; margin-left: 20px; font-size: 12px;">??? 28, 908.42</h6>
  <h6 style="color: #0ac18e; font-weight: bold; margin-left: 20px;  font-size: 12px;">+12.69%</h6>
  <center>
  <button class="buyBtn" style="margin-right: 5px;">  Buy </button>
  <button class="buyBtn">  Trade </button>
  </center>
</div>
<!-------------/Listed Items--------------------->


<!-------------Listed Items--------------------->
<div class="scrollItem">
  <h5 style="margin-top: 20px; margin-left: 10px;"> <img src="assets/bitcoincash.png" width="30" alt=""> <span class="itemTitle"> Bitcoin Cash </span></h5>
  <h6 style="color: #eeb2cf; font-weight: bold; margin-left: 20px; font-size: 12px;">??? 28, 908.42</h6>
  <h6 style="color: #0ac18e; font-weight: bold; margin-left: 20px;  font-size: 12px;">+12.69%</h6>
  <center>
  <button class="buyBtn" style="margin-right: 5px;">  Buy </button>
  <button class="buyBtn">  Trade </button>
  </center>
</div>
<!-------------/Listed Items--------------------->


<!-------------Listed Items--------------------->
<div class="scrollItem">
  <h5 style="margin-top: 20px; margin-left: 10px;"> <img src="assets/bitcoincash.png" width="30" alt=""> <span class="itemTitle"> Bitcoin Cash </span></h5>
  <h6 style="color: #eeb2cf; font-weight: bold; margin-left: 20px; font-size: 12px;">??? 28, 908.42</h6>
  <h6 style="color: #0ac18e; font-weight: bold; margin-left: 20px;  font-size: 12px;">+12.69%</h6>
  <center>
  <button class="buyBtn" style="margin-right: 5px;">  Buy </button>
  <button class="buyBtn">  Trade </button>
  </center>
</div>
<!-------------/Listed Items--------------------->


<!-------------Listed Items--------------------->
<div class="scrollItem">
  <h5 style="margin-top: 20px; margin-left: 10px;"> <img src="assets/bitcoincash.png" width="30" alt=""> <span class="itemTitle"> Bitcoin Cash </span></h5>
  <h6 style="color: #eeb2cf; font-weight: bold; margin-left: 20px; font-size: 12px;">??? 28, 908.42</h6>
  <h6 style="color: #0ac18e; font-weight: bold; margin-left: 20px;  font-size: 12px;">+12.69%</h6>
  <center>
  <button class="buyBtn" style="margin-right: 5px;">  Buy </button>
  <button class="buyBtn">  Trade </button>
  </center>
</div>
<!-------------/Listed Items--------------------->


<!-------------Listed Items--------------------->
<div class="scrollItem">
  <h5 style="margin-top: 20px; margin-left: 10px;"> <img src="assets/bitcoincash.png" width="30" alt=""> <span class="itemTitle"> Bitcoin Cash </span></h5>
  <h6 style="color: #eeb2cf; font-weight: bold; margin-left: 20px; font-size: 12px;">??? 28, 908.42</h6>
  <h6 style="color: #0ac18e; font-weight: bold; margin-left: 20px;  font-size: 12px;">+12.69%</h6>
  <center>
  <button class="buyBtn" style="margin-right: 5px;">  Buy </button>
  <button class="buyBtn">  Trade </button>
  </center>
</div>
<!-------------/Listed Items--------------------->


<!-------------Listed Items--------------------->
<div class="scrollItem">
  <h5 style="margin-top: 20px; margin-left: 10px;"> <img src="assets/bitcoincash.png" width="30" alt=""> <span class="itemTitle"> Bitcoin Cash </span></h5>
  <h6 style="color: #eeb2cf; font-weight: bold; margin-left: 20px; font-size: 12px;">??? 28, 908.42</h6>
  <h6 style="color: #0ac18e; font-weight: bold; margin-left: 20px;  font-size: 12px;">+12.69%</h6>
  <center>
  <button class="buyBtn" style="margin-right: 5px;">  Buy </button>
  <button class="buyBtn">  Trade </button>
  </center>
</div>
<!-------------/Listed Items--------------------->


<!-------------Listed Items--------------------->
<div class="scrollItem">
  <h5 style="margin-top: 20px; margin-left: 10px;"> <img src="assets/bitcoincash.png" width="30" alt=""> <span class="itemTitle"> Bitcoin Cash </span></h5>
  <h6 style="color: #eeb2cf; font-weight: bold; margin-left: 20px; font-size: 12px;">??? 28, 908.42</h6>
  <h6 style="color: #0ac18e; font-weight: bold; margin-left: 20px;  font-size: 12px;">+12.69%</h6>
  <center>
  <button class="buyBtn" style="margin-right: 5px;">  Buy </button>
  <button class="buyBtn">  Trade </button>
  </center>
</div>
<!-------------/Listed Items--------------------->


<!-------------Listed Items--------------------->
<div class="scrollItem">
  <h5 style="margin-top: 20px; margin-left: 10px;"> <img src="assets/bitcoincash.png" width="30" alt=""> <span class="itemTitle"> Bitcoin Cash </span></h5>
  <h6 style="color: #eeb2cf; font-weight: bold; margin-left: 20px; font-size: 12px;">??? 28, 908.42</h6>
  <h6 style="color: #0ac18e; font-weight: bold; margin-left: 20px;  font-size: 12px;">+12.69%</h6>
  <center>
  <button class="buyBtn" style="margin-right: 5px;">  Buy </button>
  <button class="buyBtn">  Trade </button>
  </center>
</div>
<!-------------/Listed Items--------------------->


<!-------------Listed Items--------------------->
<div class="scrollItem">
  <h5 style="margin-top: 20px; margin-left: 10px;"> <img src="assets/bitcoincash.png" width="30" alt=""> <span class="itemTitle"> Bitcoin Cash </span></h5>
  <h6 style="color: #eeb2cf; font-weight: bold; margin-left: 20px; font-size: 12px;">??? 28, 908.42</h6>
  <h6 style="color: #0ac18e; font-weight: bold; margin-left: 20px;  font-size: 12px;">+12.69%</h6>
  <center>
  <button class="buyBtn" style="margin-right: 5px;">  Buy </button>
  <button class="buyBtn">  Trade </button>
  </center>
</div>
<!-------------/Listed Items--------------------->





</div>
</div>
</div>


<div style="clear: both;"></div>
<div class="row" style="margin-top: -10px;">
  <div class="col-sm-12">
<hr style="height:2px; background-color:#646970;" />
<h6 style="color: #c35d47; margin-left: 50px;" class="hideMobile" >Top Loser<br/> <small style="color: #646970;"> Coins that have gained the most in 24 hours </small> </h6>
<h6 style="color: #c35d47; margin-left: 5px;" class="showMobile" >Top Loser<br/> <small style="color: #646970;"> Coins that have gained the most in 24 hours </small> </h6>

<div class="scrollmenu" style="color:aliceblue;">


<!-------------Listed Items--------------------->
<div class="scrollItem">
  <h5 style="margin-top: 20px; margin-left: 10px;"> <img src="assets/bitcoincash.png" width="30" alt=""> <span class="itemTitle"> Bitcoin Cash </span></h5>
  <h6 style="color: #eeb2cf; font-weight: bold; margin-left: 20px; font-size: 12px;">??? 28, 908.42</h6>
  <h6 style="color: #0ac18e; font-weight: bold; margin-left: 20px;  font-size: 12px;">+12.69%</h6>
  <center>
  <button class="buyBtn" style="margin-right: 5px;">  Buy </button>
  <button class="buyBtn">  Trade </button>
  </center>
</div>
<!-------------/Listed Items--------------------->


<!-------------Listed Items--------------------->
<div class="scrollItem">
  <h5 style="margin-top: 20px; margin-left: 10px;"> <img src="assets/bitcoincash.png" width="30" alt=""> <span class="itemTitle"> Bitcoin Cash </span></h5>
  <h6 style="color: #eeb2cf; font-weight: bold; margin-left: 20px; font-size: 12px;">??? 28, 908.42</h6>
  <h6 style="color: #0ac18e; font-weight: bold; margin-left: 20px;  font-size: 12px;">+12.69%</h6>
  <center>
  <button class="buyBtn" style="margin-right: 5px;">  Buy </button>
  <button class="buyBtn">  Trade </button>
  </center>
</div>
<!-------------/Listed Items--------------------->

</div>
</div>
</div>



<div style="clear: both;"></div>
<div class="row" style="margin-top: -10px;">
  <div class="col-sm-12">
<hr style="height:2px; background-color:#646970;" />
<h6 style="color: #c35d47; margin-left: 50px;" class="hideMobile" >Popular<br/> <small style="color: #646970;"> Most popular coins bought by first time investors </small> </h6>
<h6 style="color: #c35d47; margin-left: 5px;" class="showMobile" >Popular<br/> <small style="color: #646970;"> Most popular coins bought by first time investors </small> </h6>

<div class="scrollmenu" style="color:aliceblue;">


<!-------------Listed Items--------------------->
<div class="scrollItem">
  <h5 style="margin-top: 20px; margin-left: 10px;"> <img src="assets/bitcoincash.png" width="30" alt=""> <span class="itemTitle"> Bitcoin Cash </span></h5>
  <h6 style="color: #eeb2cf; font-weight: bold; margin-left: 20px; font-size: 12px;">??? 28, 908.42</h6>
  <h6 style="color: #0ac18e; font-weight: bold; margin-left: 20px;  font-size: 12px;">+12.69%</h6>
  <center>
  <button class="buyBtn" style="margin-right: 5px;">  Buy </button>
  <button class="buyBtn">  Trade </button>
  </center>
</div>
<!-------------/Listed Items--------------------->


<!-------------Listed Items--------------------->
<div class="scrollItem">
  <h5 style="margin-top: 20px; margin-left: 10px;"> <img src="assets/bitcoincash.png" width="30" alt=""> <span class="itemTitle"> Bitcoin Cash </span></h5>
  <h6 style="color: #eeb2cf; font-weight: bold; margin-left: 20px; font-size: 12px;">??? 28, 908.42</h6>
  <h6 style="color: #0ac18e; font-weight: bold; margin-left: 20px;  font-size: 12px;">+12.69%</h6>
  <center>
  <button class="buyBtn" style="margin-right: 5px;">  Buy </button>
  <button class="buyBtn">  Trade </button>
  </center>
</div>
<!-------------/Listed Items--------------------->
<!-------------Listed Items--------------------->
<div class="scrollItem">
  <h5 style="margin-top: 20px; margin-left: 10px;"> <img src="assets/bitcoincash.png" width="30" alt=""> <span class="itemTitle"> Bitcoin Cash </span></h5>
  <h6 style="color: #eeb2cf; font-weight: bold; margin-left: 20px; font-size: 12px;">??? 28, 908.42</h6>
  <h6 style="color: #0ac18e; font-weight: bold; margin-left: 20px;  font-size: 12px;">+12.69%</h6>
  <center>
  <button class="buyBtn" style="margin-right: 5px;">  Buy </button>
  <button class="buyBtn">  Trade </button>
  </center>
</div>
<!-------------/Listed Items--------------------->


<!-------------Listed Items--------------------->
<div class="scrollItem">
  <h5 style="margin-top: 20px; margin-left: 10px;"> <img src="assets/bitcoincash.png" width="30" alt=""> <span class="itemTitle"> Bitcoin Cash </span></h5>
  <h6 style="color: #eeb2cf; font-weight: bold; margin-left: 20px; font-size: 12px;">??? 28, 908.42</h6>
  <h6 style="color: #0ac18e; font-weight: bold; margin-left: 20px;  font-size: 12px;">+12.69%</h6>
  <center>
  <button class="buyBtn" style="margin-right: 5px;">  Buy </button>
  <button class="buyBtn">  Trade </button>
  </center>
</div>
<!-------------/Listed Items--------------------->
<!-------------Listed Items--------------------->
<div class="scrollItem">
  <h5 style="margin-top: 20px; margin-left: 10px;"> <img src="assets/bitcoincash.png" width="30" alt=""> <span class="itemTitle"> Bitcoin Cash </span></h5>
  <h6 style="color: #eeb2cf; font-weight: bold; margin-left: 20px; font-size: 12px;">??? 28, 908.42</h6>
  <h6 style="color: #0ac18e; font-weight: bold; margin-left: 20px;  font-size: 12px;">+12.69%</h6>
  <center>
  <button class="buyBtn" style="margin-right: 5px;">  Buy </button>
  <button class="buyBtn">  Trade </button>
  </center>
</div>
<!-------------/Listed Items--------------------->


<!-------------Listed Items--------------------->
<div class="scrollItem">
  <h5 style="margin-top: 20px; margin-left: 10px;"> <img src="assets/bitcoincash.png" width="30" alt=""> <span class="itemTitle"> Bitcoin Cash </span></h5>
  <h6 style="color: #eeb2cf; font-weight: bold; margin-left: 20px; font-size: 12px;">??? 28, 908.42</h6>
  <h6 style="color: #0ac18e; font-weight: bold; margin-left: 20px;  font-size: 12px;">+12.69%</h6>
  <center>
  <button class="buyBtn" style="margin-right: 5px;">  Buy </button>
  <button class="buyBtn">  Trade </button>
  </center>
</div>
<!-------------/Listed Items--------------------->
<!-------------Listed Items--------------------->
<div class="scrollItem">
  <h5 style="margin-top: 20px; margin-left: 10px;"> <img src="assets/bitcoincash.png" width="30" alt=""> <span class="itemTitle"> Bitcoin Cash </span></h5>
  <h6 style="color: #eeb2cf; font-weight: bold; margin-left: 20px; font-size: 12px;">??? 28, 908.42</h6>
  <h6 style="color: #0ac18e; font-weight: bold; margin-left: 20px;  font-size: 12px;">+12.69%</h6>
  <center>
  <button class="buyBtn" style="margin-right: 5px;">  Buy </button>
  <button class="buyBtn">  Trade </button>
  </center>
</div>
<!-------------/Listed Items--------------------->


<!-------------Listed Items--------------------->
<div class="scrollItem">
  <h5 style="margin-top: 20px; margin-left: 10px;"> <img src="assets/bitcoincash.png" width="30" alt=""> <span class="itemTitle"> Bitcoin Cash </span></h5>
  <h6 style="color: #eeb2cf; font-weight: bold; margin-left: 20px; font-size: 12px;">??? 28, 908.42</h6>
  <h6 style="color: #0ac18e; font-weight: bold; margin-left: 20px;  font-size: 12px;">+12.69%</h6>
  <center>
  <button class="buyBtn" style="margin-right: 5px;">  Buy </button>
  <button class="buyBtn">  Trade </button>
  </center>
</div>
<!-------------/Listed Items--------------------->
<!-------------Listed Items--------------------->
<div class="scrollItem">
  <h5 style="margin-top: 20px; margin-left: 10px;"> <img src="assets/bitcoincash.png" width="30" alt=""> <span class="itemTitle"> Bitcoin Cash </span></h5>
  <h6 style="color: #eeb2cf; font-weight: bold; margin-left: 20px; font-size: 12px;">??? 28, 908.42</h6>
  <h6 style="color: #0ac18e; font-weight: bold; margin-left: 20px;  font-size: 12px;">+12.69%</h6>
  <center>
  <button class="buyBtn" style="margin-right: 5px;">  Buy </button>
  <button class="buyBtn">  Trade </button>
  </center>
</div>
<!-------------/Listed Items--------------------->


<!-------------Listed Items--------------------->
<div class="scrollItem">
  <h5 style="margin-top: 20px; margin-left: 10px;"> <img src="assets/bitcoincash.png" width="30" alt=""> <span class="itemTitle"> Bitcoin Cash </span></h5>
  <h6 style="color: #eeb2cf; font-weight: bold; margin-left: 20px; font-size: 12px;">??? 28, 908.42</h6>
  <h6 style="color: #0ac18e; font-weight: bold; margin-left: 20px;  font-size: 12px;">+12.69%</h6>
  <center>
  <button class="buyBtn" style="margin-right: 5px;">  Buy </button>
  <button class="buyBtn">  Trade </button>
  </center>
</div>
<!-------------/Listed Items--------------------->
<!-------------Listed Items--------------------->
<div class="scrollItem">
  <h5 style="margin-top: 20px; margin-left: 10px;"> <img src="assets/bitcoincash.png" width="30" alt=""> <span class="itemTitle"> Bitcoin Cash </span></h5>
  <h6 style="color: #eeb2cf; font-weight: bold; margin-left: 20px; font-size: 12px;">??? 28, 908.42</h6>
  <h6 style="color: #0ac18e; font-weight: bold; margin-left: 20px;  font-size: 12px;">+12.69%</h6>
  <center>
  <button class="buyBtn" style="margin-right: 5px;">  Buy </button>
  <button class="buyBtn">  Trade </button>
  </center>
</div>
<!-------------/Listed Items--------------------->


<!-------------Listed Items--------------------->
<div class="scrollItem">
  <h5 style="margin-top: 20px; margin-left: 10px;"> <img src="assets/bitcoincash.png" width="30" alt=""> <span class="itemTitle"> Bitcoin Cash </span></h5>
  <h6 style="color: #eeb2cf; font-weight: bold; margin-left: 20px; font-size: 12px;">??? 28, 908.42</h6>
  <h6 style="color: #0ac18e; font-weight: bold; margin-left: 20px;  font-size: 12px;">+12.69%</h6>
  <center>
  <button class="buyBtn" style="margin-right: 5px;">  Buy </button>
  <button class="buyBtn">  Trade </button>
  </center>
</div>
<!-------------/Listed Items--------------------->
<!-------------Listed Items--------------------->
<div class="scrollItem">
  <h5 style="margin-top: 20px; margin-left: 10px;"> <img src="assets/bitcoincash.png" width="30" alt=""> <span class="itemTitle"> Bitcoin Cash </span></h5>
  <h6 style="color: #eeb2cf; font-weight: bold; margin-left: 20px; font-size: 12px;">??? 28, 908.42</h6>
  <h6 style="color: #0ac18e; font-weight: bold; margin-left: 20px;  font-size: 12px;">+12.69%</h6>
  <center>
  <button class="buyBtn" style="margin-right: 5px;">  Buy </button>
  <button class="buyBtn">  Trade </button>
  </center>
</div>
<!-------------/Listed Items--------------------->


<!-------------Listed Items--------------------->
<div class="scrollItem">
  <h5 style="margin-top: 20px; margin-left: 10px;"> <img src="assets/bitcoincash.png" width="30" alt=""> <span class="itemTitle"> Bitcoin Cash </span></h5>
  <h6 style="color: #eeb2cf; font-weight: bold; margin-left: 20px; font-size: 12px;">??? 28, 908.42</h6>
  <h6 style="color: #0ac18e; font-weight: bold; margin-left: 20px;  font-size: 12px;">+12.69%</h6>
  <center>
  <button class="buyBtn" style="margin-right: 5px;">  Buy </button>
  <button class="buyBtn">  Trade </button>
  </center>
</div>
<!-------------/Listed Items--------------------->

</div>
</div>
</div>






</body>
</html>

