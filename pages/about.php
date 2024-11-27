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
<a href="../hotspot/profile.php" class=" "> &nbsp;&nbsp;&nbsp;<i class="fa fa-list "></i> Profile List </a>
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
<a href="../pages/server.php" class="menu"> <i class="fa fa-server"></i> Status </a>
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
<a href="../pages/about.php" class="menu active"><i class="fa fa-info-circle"></i> About</a>
</div>

<div id="main">  
<div id="loading" class="lds-dual-ring"></div>
<div class="main-container" style="display:none">

<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h3><i class="fa fa-info-circle"></i> About</h3>
</div>
<div class="card-body">
  <h3>RADIUS MONITOR V2</h3>
  <p>Aplikasi ini dipersembahkan untuk pengusaha hotspot pemula yang belum memiliki MikroTik.</p>
  <ul>
    <li>Author : Maizil</li>
    <li>Template : <a href="https://github.com/laksa19/mikhmonv3" target="_blank" class="text-danger">Mikhmon V3</a></li>
    <li>Licence : <a href="https://github.com/maizil41/radmonv2/blob/master/LICENSE" target="_blank" class="text-danger">GPLv2</a></li>
    <li>Website : <a href="https://github.com/maizil41/RadMonv2" target="_blank" class="text-danger">maizil41/radmonv2</a></li>
    <li>Facebook : <a href="https://fb.com/maizil.41" target="_blank" class="text-danger">fb.com/maizil</a></li>
  </ul>
  <p>Terima kasih untuk yang telah berdonasi melalui <a href="https://saweria.co/mutiarawrt" onclick="openPopup(this.href); return false;"><i class="text-danger">SAWERIA</i> Ataupun <a href="../img/dana.png" onclick="openPopup(this.href); return false;"><i class="text-danger">DANA</i></p>
  <div>
    <i>Copyright &copy; 2024<a href="https://t.me/mutiarawrt" target="_blank" class="text-danger"> Mutiara-Wrt</a></i>
  </div>
</div>
</div>
<div class="col-12">
<div class="card">
<div class="card-header">
<h3><i class="fa fa-info-circle"></i> Changelog</h3>
</div>
<div class="card-body">
<style>.iFWrapper{position:relative;padding-bottom:56.25%;padding-top:25px;height:0}.iFWrapper iframe{position:absolute;top:0;left:0;width:100%;height:100%;border:none}</style>
<div class="iFWrapper">
<iframe src="https://maizil41.github.io/RadMonv2"></iframe>
</div>
<script src="../js/radmon-ui.<?php echo $theme; ?>.min.js"></script>
<script src="../js/radmon.js"></script>
<script>
  function openPopup(url) {
    window.open(url, '_blank', 'width=600,height=400,scrollbars=yes,resizable=yes');
  }
</script>
</body>
</html>

