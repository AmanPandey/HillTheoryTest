<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hilltheory IT Solution || Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link href="css/custom.css" rel="stylesheet" />

  <!-- Media Query CSS -->
  <style>
  .tradeButton{
    width: 350px;
    height: 30px;
    border: 2px solid #eb5029;
    color: #fff;
    background-color: #eb5029;
    border-radius: 30px;
    font-size: 16px;
  }

  .buySell{
    background-color: transparent;
    border-color: #646970;
  }

  .tradeHistoryContainer{
    color: #fff;
  }

  
  .buySellContainer{
    color: #fff;
    display: none;
  }

  .orderTable{
    width: 750px;
  }

  .tablerow{
    width: 100%;
    background-color: #28292b;
    border-radius: 10px;
    color: #fff;
  }

  .tableColl{
    margin-top: 20px;
    margin-bottom: 20px;
    margin-left: 20px;
  }

  .searchInput{
    width: 80%;
    background-color: transparent;
    border: 0px solid transparent;
    border-bottom: 2px solid #2a8ae0;
  }
  
  .searchInputDate{
    width: 100%;
    background-color: transparent;
    color: #646970;
    border: 0px solid transparent;
    border-bottom: 2px solid #2a8ae0;
  }



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


  .tradeButton{
    width: 120px;
    height: 30px;
    border: 2px solid #eb5029;
    color: #fff;
    background-color: #eb5029;
    border-radius: 30px;
    font-size: 16px;
  }

  .buySell{
    background-color: transparent;
    border-color: #646970;
  }

  .searchInputDate{
    width: 100%;
    background-color: transparent;
    color: #646970;
    border: 0px solid transparent;
    border-bottom: 2px solid #2a8ae0;
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



<div class="showMobile" style="width: 100%; height: 70px; bottom: -20px; position: fixed; ">
  <img src="assets/mobile_menu.png" width-="100%" alt="">
</div>

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
    
  <Small style="font-size: 10px; color: #f9b13a; float: right; margin-right: 10px;">Venkata Sai Teja M2 <br/>	<span style="color:#fff;"> ₹ 4,39,567.89  </span></Small>

  <Small style="font-size: 10px; color: #f9b13a; float: right;  margin-right: 50px;" >EXPOSER <br/>  <span style="color:#fff;"> ₹ 0 </span></Small>
    </div>

  </span>
 
  <span class="navbar showMobile" style="width: 100%;">
  <Small style="font-size: 10px; color: #f9b13a; float: left; margin-left: 50%; margin-right: 15px;" >EXPOSER <br/>  <span style="color:#fff;"> ₹ 0 </span></Small>
  
  <Small style="font-size: 10px; color: #f9b13a; float: right; margin-right: 5px;">Venkata Sai Teja M2 <br/>	<span style="color:#fff;"> ₹ 4,39,567.89  </span></Small>

  
  </span>
 
</nav>




<div style="clear: both;"></div>

<center>
  <button class="tradeButton" style="margin-right: 50px;" onclick="tradeHistory()">Trades History</button>
  <button class="tradeButton buySell"  onclick="buySell()">Buy/Sell</button>


  <div style="clear: both;"></div>

  <div class="showMobile" style="width:90%">

    <small style="color:#3c914f; margin-left: 10px;"> Search By Date</small>
    <br>
    <input style="margin-left: 10px;" type="date" class="searchInputDate" >
  </div>


<div style="width: 90%; margin-top: 20px;  background-color: #28292b; border-radius: 10px; color: #fff; ">
  
    <span style="margin-top:10px; float: left;"><img src="assets/doge.png" width="30" alt=""> DOGE (DOGE) 
    <small style="color: #b03444;">Sell</small></span>
  <br>
  <div style=" margin-left: 10px;"><br>
  <h6><small style="color: #90938a; float: left;">Market Value</small> <small style="color: #fff; float: right; margin-right: 20px;">₹8.55</small></h6><br>
  <h6><small style="color: #90938a; float: left;">Amount</small> <small style="color: #fff; float: right; margin-right: 20px;">₹8.55</small></h6><br>
  <h6><small style="color: #90938a; float: left;">Qty</small> <small style="color: #fff; float: right; margin-right: 20px;">₹8.55</small></h6><br>
  <h6><small style="color: #90938a; float: left;">P/L</small> <small style="color: #fff; float: right; margin-right: 20px;">₹8.55</small></h6><br>
  <h6><small style="color: #90938a; float: left;">Date</small> <small style="color: #fff; float: right; margin-right: 20px;">₹8.55</small></h6><br>
  <h6><small style="color: #90938a; float: left;">P/L Percentage</small>  <small style="color: #fff; float: right; margin-right: 20px;">₹8.55</small></h6><br>
  </div>

</div>


<div style="width: 90%; margin-top: 20px;  background-color: #28292b; border-radius: 10px; color: #fff; ">
  
    <span style="margin-top:10px; float: left;"><img src="assets/doge.png" width="30" alt=""> DOGE (DOGE) 
    <small style="color: #b03444;">Sell</small></span>
  <br>
  <div style=" margin-left: 10px;"><br>
  <h6><small style="color: #90938a; float: left;">Market Value</small> <small style="color: #fff; float: right; margin-right: 20px;">₹8.55</small></h6><br>
  <h6><small style="color: #90938a; float: left;">Amount</small> <small style="color: #fff; float: right; margin-right: 20px;">₹8.55</small></h6><br>
  <h6><small style="color: #90938a; float: left;">Qty</small> <small style="color: #fff; float: right; margin-right: 20px;">₹8.55</small></h6><br>
  <h6><small style="color: #90938a; float: left;">P/L</small> <small style="color: #fff; float: right; margin-right: 20px;">₹8.55</small></h6><br>
  <h6><small style="color: #90938a; float: left;">Date</small> <small style="color: #fff; float: right; margin-right: 20px;">₹8.55</small></h6><br>
  <h6><small style="color: #90938a; float: left;">P/L Percentage</small>  <small style="color: #fff; float: right; margin-right: 20px;">₹8.55</small></h6><br>
  </div>

</div>


<div style="width: 90%; margin-top: 20px;  background-color: #28292b; border-radius: 10px; color: #fff; ">
  
    <span style="margin-top:10px; float: left;"><img src="assets/doge.png" width="30" alt=""> DOGE (DOGE) 
    <small style="color: #b03444;">Sell</small></span>
  <br>
  <div style=" margin-left: 10px;"><br>
  <h6><small style="color: #90938a; float: left;">Market Value</small> <small style="color: #fff; float: right; margin-right: 20px;">₹8.55</small></h6><br>
  <h6><small style="color: #90938a; float: left;">Amount</small> <small style="color: #fff; float: right; margin-right: 20px;">₹8.55</small></h6><br>
  <h6><small style="color: #90938a; float: left;">Qty</small> <small style="color: #fff; float: right; margin-right: 20px;">₹8.55</small></h6><br>
  <h6><small style="color: #90938a; float: left;">P/L</small> <small style="color: #fff; float: right; margin-right: 20px;">₹8.55</small></h6><br>
  <h6><small style="color: #90938a; float: left;">Date</small> <small style="color: #fff; float: right; margin-right: 20px;">₹8.55</small></h6><br>
  <h6><small style="color: #90938a; float: left;">P/L Percentage</small>  <small style="color: #fff; float: right; margin-right: 20px;">₹8.55</small></h6><br>
  </div>

</div>


<div style="width: 90%; margin-top: 20px;  background-color: #28292b; border-radius: 10px; color: #fff; ">
  
    <span style="margin-top:10px; float: left;"><img src="assets/doge.png" width="30" alt=""> DOGE (DOGE) 
    <small style="color: #b03444;">Sell</small></span>
  <br>
  <div style=" margin-left: 10px;"><br>
  <h6><small style="color: #90938a; float: left;">Market Value</small> <small style="color: #fff; float: right; margin-right: 20px;">₹8.55</small></h6><br>
  <h6><small style="color: #90938a; float: left;">Amount</small> <small style="color: #fff; float: right; margin-right: 20px;">₹8.55</small></h6><br>
  <h6><small style="color: #90938a; float: left;">Qty</small> <small style="color: #fff; float: right; margin-right: 20px;">₹8.55</small></h6><br>
  <h6><small style="color: #90938a; float: left;">P/L</small> <small style="color: #fff; float: right; margin-right: 20px;">₹8.55</small></h6><br>
  <h6><small style="color: #90938a; float: left;">Date</small> <small style="color: #fff; float: right; margin-right: 20px;">₹8.55</small></h6><br>
  <h6><small style="color: #90938a; float: left;">P/L Percentage</small>  <small style="color: #fff; float: right; margin-right: 20px;">₹8.55</small></h6><br>
  </div>

</div>


<div style="width: 90%; margin-top: 20px;  background-color: #28292b; border-radius: 10px; color: #fff; ">
  
    <span style="margin-top:10px; float: left;"><img src="assets/doge.png" width="30" alt=""> DOGE (DOGE) 
    <small style="color: #b03444;">Sell</small></span>
  <br>
  <div style=" margin-left: 10px;"><br>
  <h6><small style="color: #90938a; float: left;">Market Value</small> <small style="color: #fff; float: right; margin-right: 20px;">₹8.55</small></h6><br>
  <h6><small style="color: #90938a; float: left;">Amount</small> <small style="color: #fff; float: right; margin-right: 20px;">₹8.55</small></h6><br>
  <h6><small style="color: #90938a; float: left;">Qty</small> <small style="color: #fff; float: right; margin-right: 20px;">₹8.55</small></h6><br>
  <h6><small style="color: #90938a; float: left;">P/L</small> <small style="color: #fff; float: right; margin-right: 20px;">₹8.55</small></h6><br>
  <h6><small style="color: #90938a; float: left;">Date</small> <small style="color: #fff; float: right; margin-right: 20px;">₹8.55</small></h6><br>
  <h6><small style="color: #90938a; float: left;">P/L Percentage</small>  <small style="color: #fff; float: right; margin-right: 20px;">₹8.55</small></h6><br>
  </div>

</div>

</center>


  <center>

<table class="orderTable hideMobile" style="border-collapse: separate; border-spacing: 0 1em;">
<tr >
  <td colspan="3">
    <small style="color:#3c914f;"> Search By Market</small>
    <br>
    <input class="searchInput" type="text" placeholder="Enter search keywords">
  </td>
  <td colspan="3">
    <small style="color:#3c914f;"> Search By Date</small>
    <br>
    <input type="date" class="searchInputDate" >
  </td>
</tr>


<tr class="tablerow">
  <td class="tableColl" colspan="2"> 
    <img src="assets/doge.png" width="30" alt=""> DOGE (DOGE) 
    <small style="color: #b03444;">Sell</small>
  <br>
  <h6><small style="color: #90938a;">Market Value</small> <br/> <span style="color: #fff;">₹8.55</span></h6>
  <h6><small style="color: #90938a;">Amount</small> <br/> <span style="color: #fff;">₹855</span></h6>
  </td>
  <td colspan="2" style="width: 100px;">
  <br>
  <h6><small style="color: #90938a;">Qty</small> <br/> <span style="color: #fff;">100</span></h6>
  <h6><small style="color: #90938a;">P/L</small> <br/> <span style="color: #6c2e37;">₹-3</span></h6>
 </td>
  <td colspan="2">
  <br>
  <h6><small style="color: #90938a;">Date</small> <br/> <span style="color: #fff;">March 16, 2022, 6:25:43 PM</span></h6>
  <h6><small style="color: #90938a;">P/L Percentage</small> <br/> <span style="color: #6c2e37;">₹-0.35%</span></h6>
</td>
</tr>

<tr class="tablerow">
  <td class="tableColl" colspan="2"> 
    <img src="assets/doge.png" width="30" alt=""> DOGE (DOGE) 
    <small style="color: #b03444;">Sell</small>
  <br>
  <h6><small style="color: #90938a;">Market Value</small> <br/> <span style="color: #fff;">₹8.55</span></h6>
  <h6><small style="color: #90938a;">Amount</small> <br/> <span style="color: #fff;">₹855</span></h6>
  </td>
  <td colspan="2" style="width: 100px;">
  <br>
  <h6><small style="color: #90938a;">Qty</small> <br/> <span style="color: #fff;">100</span></h6>
  <h6><small style="color: #90938a;">P/L</small> <br/> <span style="color: #6c2e37;">₹-3</span></h6>
 </td>
  <td colspan="2">
  <br>
  <h6><small style="color: #90938a;">Date</small> <br/> <span style="color: #fff;">March 16, 2022, 6:25:43 PM</span></h6>
  <h6><small style="color: #90938a;">P/L Percentage</small> <br/> <span style="color: #6c2e37;">₹-0.35%</span></h6>
</td>
</tr>

<tr class="tablerow">
  <td class="tableColl" colspan="2"> 
    <img src="assets/doge.png" width="30" alt=""> DOGE (DOGE) 
    <small style="color: #b03444;">Sell</small>
  <br>
  <h6><small style="color: #90938a;">Market Value</small> <br/> <span style="color: #fff;">₹8.55</span></h6>
  <h6><small style="color: #90938a;">Amount</small> <br/> <span style="color: #fff;">₹855</span></h6>
  </td>
  <td colspan="2" style="width: 100px;">
  <br>
  <h6><small style="color: #90938a;">Qty</small> <br/> <span style="color: #fff;">100</span></h6>
  <h6><small style="color: #90938a;">P/L</small> <br/> <span style="color: #6c2e37;">₹-3</span></h6>
 </td>
  <td colspan="2">
  <br>
  <h6><small style="color: #90938a;">Date</small> <br/> <span style="color: #fff;">March 16, 2022, 6:25:43 PM</span></h6>
  <h6><small style="color: #90938a;">P/L Percentage</small> <br/> <span style="color: #6c2e37;">₹-0.35%</span></h6>
</td>
</tr>

<tr class="tablerow">
  <td class="tableColl" colspan="2"> 
    <img src="assets/doge.png" width="30" alt=""> DOGE (DOGE) 
    <small style="color: #b03444;">Sell</small>
  <br>
  <h6><small style="color: #90938a;">Market Value</small> <br/> <span style="color: #fff;">₹8.55</span></h6>
  <h6><small style="color: #90938a;">Amount</small> <br/> <span style="color: #fff;">₹855</span></h6>
  </td>
  <td colspan="2" style="width: 100px;">
  <br>
  <h6><small style="color: #90938a;">Qty</small> <br/> <span style="color: #fff;">100</span></h6>
  <h6><small style="color: #90938a;">P/L</small> <br/> <span style="color: #6c2e37;">₹-3</span></h6>
 </td>
  <td colspan="2">
  <br>
  <h6><small style="color: #90938a;">Date</small> <br/> <span style="color: #fff;">March 16, 2022, 6:25:43 PM</span></h6>
  <h6><small style="color: #90938a;">P/L Percentage</small> <br/> <span style="color: #6c2e37;">₹-0.35%</span></h6>
</td>
</tr>
</table>

<div style="clear: both;"></div>





</center>

<script>
function tradeHistory() {
  document.getElementById("demo").style.color = "red";
}

function buySell() {
  document.getElementsByClassName("buySell").style.backgroundColor = "#eb5029";
  document.getElementsByClassName("buySell").style.borderColor = "#eb5029";
  document.getElementsByClassName("tradeButton").style.backgroundColor = "transparent";
  document.getElementsByClassName("tradeButton").style.borderColor = "#646970";
  document.getElementsByClassName("tradeHistoryContainer").style.display = "none";
  document.getElementsByClassName("buySellContainer").style.display = "block";
}

</script>


</body>
</html>

