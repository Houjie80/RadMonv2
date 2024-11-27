<?php
/*
*******************************************************************************************************************
* Warning!!!, Tidak untuk diperjual belikan!, Cukup pakai sendiri atau share kepada orang lain secara gratis
*******************************************************************************************************************
* Author : @Maizil https://t.me/maizil41
*******************************************************************************************************************
* © 2024 Mutiara-Net By @Maizil
*******************************************************************************************************************
*/
include ("../include/head.html.php");
include ("../backend/data.php");
include ("../backend/ipinfo.php");
?>

<div id="sidenav" class="sidenav">
<a href="../pages/dashboard.php" class="menu"><i class="fa fa-dashboard"></i> Dashboard</a>
<!--hotspot-->
<div class="dropdown-btn"><i class="fa fa-wifi"></i> Hotspot
<i class="fa fa-caret-down"></i>
</div>
<div class="dropdown-container">
<!--users--> 
<div class="dropdown-btn"><i class="fa fa-users"></i> Users<i class="fa fa-caret-down"></i>
</div>
<div class="dropdown-container">
<a href="../hotspot/user.php" class=""> &nbsp;&nbsp;&nbsp;<i class="fa fa-list "></i> User List </a>
<a href="../hotspot/adduser.php" class=""> &nbsp;&nbsp;&nbsp;<i class="fa fa-user-plus "></i> Add User </a>
<a href="../hotspot/generate.php" class=""> &nbsp;&nbsp;&nbsp;<i class="fa fa-user-plus"></i> Generate </a>        
</div>
<!--profile-->
<div class="dropdown-btn "><i class=" fa fa-pie-chart"></i> User Profile<i class="fa fa-caret-down"></i>
</div>
<div class="dropdown-container ">
<a href="../hotspot/profile.php" class=""> &nbsp;&nbsp;&nbsp;<i class="fa fa-list "></i> Profile List </a>
<a href="../hotspot/bandwidth.php" class=""> &nbsp;&nbsp;&nbsp;<i class="fa fa-hourglass "></i> Bandwidth List </a>
</div>
<!--active-->
<a href="../hotspot/active.php" class="menu"><i class="fa fa-wifi"></i> Hotspot Active</a>
<!--ip bindings-->
<a href="../hotspot/binding.php" class="menu"><i class="fa fa-address-book"></i> MAC Bindings</a>
</div>
<!--quick print-->
<a href="../voucher/quick_print.php" class="menu"> <i class="fa fa-print"></i> Quick Print </a>
<!--vouchers-->
<a href="../voucher/voucher.php" class="menu"> <i class="fa fa-ticket"></i> Vouchers </a>
<!--log-->
<div class="dropdown-btn"><i class="fa fa-align-justify"></i> Log<i class="fa fa-caret-down"></i>
</div>
<div class="dropdown-container">
<a href="../logs/hotspot.php" class=""> <i class="fa fa-wifi"></i> Hotspot Log </a>
<a href="../logs/radius.php" class=""> <i class="fa fa-database"></i> Radius Log </a>
</div>
<!--system-->
<a href="../pages/server.php" class="menu active"> <i class="fa fa-server"></i> Status </a>
<!--billing-->
<div class="dropdown-btn "><i class=" fa fa-credit-card"></i> Billing<i class="fa fa-caret-down"></i>
</div>
<div class="dropdown-container ">
<a href="../billing/request.php" class=""> <i class="fa fa-plus-circle "></i> Topup Request </a>
<a href="../billing/user.php" class=""> <i class="fa fa-user "></i> Client List </a>
</div>
<!--report-->
<a href="../hotspot/report.php" class="menu"><i class="nav-icon fa fa-money"></i> Report</a>
<!--settings-->
<div class="dropdown-btn "><i class="fa fa-gear"></i> Settings 
<i class="fa fa-caret-down"></i> &nbsp;
</div>
<div class="dropdown-container ">
<a href="../pages/admin.php" class="menu"> <i class="fa fa-gear"></i> Admin Settings </a>
<a href="../hotspot/hslogo.php" class="menu"> <i class="fa fa-upload"></i> Upload Logo </a>
<a href="../voucher/template.php" class="menu"> <i class="fa fa-edit"></i> Template Setting </a>          
</div>
<!--about-->
<a href="../pages/about.php" class="menu"><i class="fa fa-info-circle"></i> About</a>
</div>

<div id="main">
 <div id="loading" class="lds-dual-ring"></div>
  <div class="main-container" style="display:none">
    <div id="reloadHome">
      <div id="r_1" class="row">
        <div class="col-4">
          <div class="box bmh-75 box-bordered">
            <div class="box-group">
              <div class="box-group-icon">
                <i class="fa fa-calendar"></i>
              </div>
              <div class="box-group-area">
                <span>System date & time <br>
                  <span id="date"></span>
                  <span id="time"></span>
                  <br> Uptime: <span id="uptime"> <?php echo $uptime; ?> </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="box bmh-75 box-bordered">
            <div class="box-group">
              <div class="box-group-icon">
                <i class="fa fa-info-circle"></i>
              </div>
              <div class="box-group-area">
                <span> Board Name : <?php echo "$board"; ?> <br /> Model : <?php echo "$model"; ?> <br /> Router OS : <?php echo "$id $version"; ?> </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="box bmh-75 box-bordered">
            <div class="box-group">
              <div class="box-group-icon">
                <i class="fa fa-server"></i>
              </div>
              <div class="box-group-area">
                <span> CPU Load : <span id="cpu-"> <?php echo $cpuValue; ?>% </span> Temp : <?php echo "$temp"; ?> <br /> Free Memory : <?php echo $freeMemory; ?><br/> Free HDD : <?php echo "$freehdd"; ?> <br />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="box bmh-75 box-bordered">
          <div class="box-group">
            <div class="box-group-icon">
              <i class="fa fa-globe"></i>
            </div>
            <div class="box-group-area">
              <span> IP : <?php echo $ip; ?> <br> ISP : <?php echo $organization; ?> <br> Country : <?php echo $country; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="box bmh-75 box-bordered">
          <div class="box-group">
            <div class="box-group-icon">
              <i class="fa fa-chrome"></i>
            </div>
            <div class="box-group-area">
              <div id="result">Check Ping...</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="box bmh-75 box-bordered">
          <div class="box-group">
            <div class="box-group-icon">
              <i class="fa fa-sitemap"></i>
            </div>
            <div class="box-group-area">
                <span> 
                <?php
                echo printLan();
                echo printWan();
                echo printHotspot();
                ?>
                </span>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div id="r_2" class="row">
            <div class="card">
              <div class="card-header">
                <h3>
                  <i class="fa fa-plug"></i> Service Status
                </h3>
              </div>
              <div class="card-body">
                <div class="row"> <?php foreach ($services as $displayName => $serviceName): ?> 
                <?php 
                $isRunning = check_service_status($serviceName);
                $bgClass = $isRunning ? "bg-green" : "bg-red";
                $iconClass = $isRunning ? "fa-plug" : "fa-power-off";
                $statusText = $isRunning ? "Running" : "Not Running";
                ?>
                <div class="col-3 col-box-6">
                <div class="box 
                    <?= $bgClass ?> bmh-75">
                      <h1> <?= $displayName ?> </h1>
                      <div>
                        <i class="fa 
						<?= $iconClass ?>">
                        </i> <?= $statusText ?>
                      </div>
                    </div>
                  </div> <?php endforeach; ?> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <script src="../js/radmon-ui.<?php echo $theme; ?>.min.js"></script>
    <script src="../js/radmon.js"></script>
    <script src="../plugins/dash.load.js" defer></script>
    <script>window.onload=function(){const host='google.com';const resultDiv=document.getElementById('result');resultDiv.innerHTML='Check Ping...';fetch(`../backend/check_ping.php?host=${host}`) .then(response=>response.json()) .then(data=>{const packetLoss=data.packetLoss;const avgTime=data.avgTime;resultDiv.innerHTML=` Host : ${host}<br>Loss : ${packetLoss}%<br>Time : ${avgTime}ms `}) .catch(error=>{resultDiv.innerHTML='Ping failed.'})};</script>
</body>
</html>
