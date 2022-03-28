<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hilltheory IT Solution || Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link href="css/custom.css" rel="stylesheet" />
</head>
<body style="background-color: #0b1119;">


<nav class="navbar" style="background-color:#0b1119;">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#"><img src="assets/web_logo.png" alt="" width="200"></a>
  <!-- Links -->
  <ul style=" float:right;">
    <button class="payment_btn">Payment</button>
    <Select><option value=""> Venkata Sai Teja M2</option></Select>
  </ul>
</nav>



<nav class="navbar" style="background-color:transparent; margin-top:-30PX; font-size: 16px; width: 100%; ">
<!-- Links -->
  <span class="navbar" style="width: 100%;">
    
  <div style="width: 50%;">
    <span class="nav-item" style="float:left; margin-right: 10px;">
      <a class="#" style="color: #646970;" href="home" >Home</a>
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
      <a class="#" style="color: #c35d47;" href="orders">Orders</a>
    </span>
    
  </div>

    <div  style="width: 50%;">
    
  <Small style="font-size: 10px; color: #f9b13a; float: right; margin-right: 10px;">Venkata Sai Teja M2 <br/>	<span style="color:#fff;"> ₹ 4,39,567.89  </span></Small>

  <Small style="font-size: 10px; color: #f9b13a; float: right;  margin-right: 50px;" >EXPOSER <br/>  <span style="color:#fff;"> ₹ 0 </span></Small>
    </div>

  </span>
 
    
 
</nav>

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
</style>


<div style="clear: both;"></div>

<center>
  <button class="tradeButton" style="margin-right: 50px;" onclick="tradeHistory()">Trades History</button>
  <button class="tradeButton buySell"  onclick="buySell()">Buy/Sell</button>
  

  <div style="clear: both;"></div>
<table class="orderTable" style="border-collapse: separate; border-spacing: 0 1em;">
<tr>
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

