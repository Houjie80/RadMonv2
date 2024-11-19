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
include('../include/head.html.php');
?>

<div id="sidenav" class="sidenav">
<a href="../pages/dashboard.php" class="menu "><i class="fa fa-dashboard"></i> Dashboard</a>
<!--hotspot-->
<div class="dropdown-btn active"><i class="fa fa-wifi"></i> Hotspot
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
<div class="dropdown-btn active"><i class=" fa fa-pie-chart"></i> User Profile<i class="fa fa-caret-down"></i>
</div>
<div class="dropdown-container ">
<a href="../hotspot/profile.php" class=""> &nbsp;&nbsp;&nbsp;<i class="fa fa-list "></i> Profile List </a>
<a href="../hotspot/bandwidth.php" class="active"> &nbsp;&nbsp;&nbsp;<i class="fa fa-hourglass "></i> Bandwidth List </a>
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
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3><i class="fa fa-plus"></i> Add Bandwidth &nbsp; | &nbsp; 
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
                        <form method="post" role="form" action="../backend/addbw.php" id="addbwForm">
                            <div>
                                <a class="btn bg-warning" href="../hotspot/bandwidth.php"> <i class="fa fa-close"></i> Close</a>
                                <button type="submit" name="updatebillplans" value="top" class="btn bg-primary"><i class="fa fa-save"></i> Save</button>
                            </div>

                            <table class="table">
                                <tr>
                                    <td>Bandwidth Name</td>
                                    <td><input type="text" class="form-control" id="name" name="name" autocomplete="name" required></td>
                                </tr>
                                <tr>
                                    <td>Rate Download</td>
                                    <td>
                                        <div class="input-group">
                                            <div class="input-group-8">
                                                <input type="number" class="form-control" id="rate_down" name="rate_down" value="1" min="1">
                                            </div>
                                            <div class="input-group-4">
                                            <select class="form-control" id="rate_down_unit" name="rate_down_unit">
                                                <option value="Kbps">Kbps</option>
                                                <option value="Mbps">Mbps</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>Rate Upload</td>
                                    <td>
                                        <div class="input-group">
                                            <div class="input-group-8">
                                                <input type="number" class="form-control" id="rate_up" name="rate_up" value="1" min="1">
                                            </div>
                                            <div class="input-group-4">
                                            <select class="form-control" id="rate_up_unit" name="rate_up_unit">
                                                <option value="Kbps">Kbps</option>
                                                <option value="Mbps">Mbps</option>
                                            </select>
                                        </td>
                                    </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="../js/radmon-ui.<?php echo $theme; ?>.min.js"></script>
<script src="../js/radmon.js"></script>
<script src="../plugins/add.bandwidth.js"></script>

</body>
</html>