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
<a href="../pages/dashboard.php" class="menu "><i class="fa fa-dashboard"></i> Dashboard</a>
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
<div class="dropdown-btn active"><i class="fa fa-gear"></i> Settings 
<i class="fa fa-caret-down"></i> &nbsp;
</div>
<div class="dropdown-container ">
<a href="../pages/admin.php" class="menu"> <i class="fa fa-gear"></i> Admin Settings </a>
<a href="../hotspot/hslogo.php" class="menu"> <i class="fa fa-upload"></i> Upload Logo </a>
<a href="../voucher/template.php" class="menu active"> <i class="fa fa-edit"></i> Template Setting </a>          
</div>
<!--about-->
<a href="../pages/about.php" class="menu "><i class="fa fa-info-circle"></i> About</a>
</div>

<?php
require '../config/mysqli_db.php';
$sql = "SELECT * FROM print_config LIMIT 1";
$result = $conn->query($sql);
$data = $result->fetch_assoc();

$conn->close();
?>
<div id="main">  
<div id="loading" class="lds-dual-ring"></div>
<div class="main-container" style="display:none">

<form method="post" action="../backend/submit.php" enctype="multipart/form-data" role="form" id="changeConfig">
<div class="row">
<div class="col-12">
<div class="card" >
<div class="card-header">
<h3 class="card-title"><i class="fa fa-edit"></i> Template Settings &nbsp; | &nbsp; 
    <small id="loader" style="display: none;">
        <i><i class="fa fa-circle-o-notch fa-spin"></i> Processing...</i>
    </small>
    <?php if (isset($_GET['message'])): ?>
        <small id="message">
            <?php echo htmlspecialchars($_GET['message']); ?>
        </small>
    <?php endif; ?>
</h3>
</div>
<div class="card-body">
<table class="table table-sm">
<tr>
<td>Hotspot Name</td><td>
<div class="input-group">
<div class="input-group-6">
<input class="group-item group-item-l" type="text" id="hsname1" name="hsname1" required value="<?php echo htmlspecialchars($data['hsname1']); ?>">
</div>
<div class="input-group-6">
<input class="group-item group-item-l" type="text" id="hsname2" name="hsname2" required value="<?php echo htmlspecialchars($data['hsname2']); ?>">
</div>
</div>
</td>
</tr>
<tr>
<td>DNS Name</td><td><input class="form-control" type="text" id="hsdomain" name="hsdomain" title="DNS Name Eg: mutiara.net" required value="<?php echo htmlspecialchars($data['hsdomain']); ?>">
</td>
</tr>
<tr>
<td>IP Address</td><td><input class="form-control" type="text" id="hsip" name="hsip" title="Ip Address Eg: 10.10.10.1" required value="<?php echo htmlspecialchars($data['hsip']); ?>">
</td>
</tr>
<tr> 
<td>CS Number</td><td><input class="form-control" type="text" id="hscsn" name="hscsn" title="Your Phone Number" required value="<?php echo htmlspecialchars($data['hscsn']); ?>">
</td>
</tr>
<tr>
<td>Qr Code Option</td>
<td>
<div class="input-group">
<div class="input-group-12">
<select class="group-item group-item-l" id="hsqrmode" name="hsqrmode">
<option value="url" <?php echo $data['hsqrmode'] == 'url' ? 'selected' : ''; ?>>URL with Voucher Code</option>
<option value="code" <?php echo $data['hsqrmode'] == 'code' ? 'selected' : ''; ?>>Voucher Code Only</option>
</select>
</select>
</div>
</td>
</tr>
<tr>
<td>Url Option</td>
<td>
<div class="input-group">
<div class="input-group-12">
<select class="group-item group-item-l" id="hsipdomain" name="hsipdomain">
<option value="ip" <?php echo $data['hsipdomain'] == 'ip' ? 'selected' : ''; ?>>Hotspot IP</option>
<option value="domain" <?php echo $data['hsipdomain'] == 'domain' ? 'selected' : ''; ?>>Hotspot Domain</option>
</select>
</select>
</div>
</tr>
<tr>
<td>Logo Mode</td>
<td>
<select class="form-control" id="logomode" name="logomode">
<option value="text" <?php echo $data['logomode'] == 'text' ? 'selected' : ''; ?>>Text</option>
<option value="image" <?php echo $data['logomode'] == 'image' ? 'selected' : ''; ?>>Images</option>
</select>
</select>
</td>
</tr>
<tr>
<td></td>
<td>
<div class="input-group-4">
<input class="group-item group-item-md" type="submit" style="cursor: pointer;" name="save" value="Save"/>
</div>
<div class="input-group-1">	
<div style="cursor: pointer;" class="group-item group-item-r pd-2p5 text-center" onclick="location.reload();" title="Reload Data"><i class="fa fa-refresh"></i></div>
</div>
</table>
</div>
</div>
</div>
</div>
</div>
</form>
<script src="../js/radmon-ui.<?php echo $theme; ?>.min.js"></script>
<script src="../js/radmon.js"></script>
<script src="../plugins/change.config.js"></script>
</body>
</html>