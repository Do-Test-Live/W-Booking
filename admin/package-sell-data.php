<?php
session_start();
require_once("../includes/dbcontroller.php");
$db_handle = new DBController();
$update= $db_handle->insertQuery("update billing_details set credit_card_num='' where approve!='3'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Booking Data Admin | Restaurants</title>
    <meta name="description" content="Some description for the page"/>
    <?php require_once('include/css.php'); ?>
</head>
<body>
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<div id="main-wrapper">
    <div class="nav-header">
        <a href="dashboard.php" class="brand-logo">
            <img class="logo-abbr" src="public/images/logo_icon.png" alt="">
            <img class="logo-compact" src="public/images/logo_text.png" alt="">
            <img class="brand-title" src="public/images/logo_text.png" alt="">
        </a>
        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="dashboard_bar">
                            Booking Data
                        </div>
                    </div>

                    <!--Top Header Common Part Start-->
                    <?php require_once('include/header.php'); ?>
                    <!--Top Header Common Part End-->
                </div>
            </nav>
        </div>
    </div>

    <!--Side nav Start-->
    <?php require_once('include/navbar.php'); ?>
    <!--Side nav end-->

    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Booking Data</a></li>
                </ol>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Order Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example4" class="display min-w850">
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Food Name</th>
                                        <th>Code</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Seat Number</th>
                                        <th>Price</th>
                                        <th>Email</th>
                                        <th>Number</th>
                                        <th>Occasion</th>
                                        <th>Allergies</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $package_sell_data = $db_handle->runQuery("SELECT * FROM order_detail order by id desc");
                                    $row_count = $db_handle->numRows("SELECT * FROM order_detail order by id desc");

                                    for ($i = 0; $i < $row_count; $i++) {
                                        ?>
                                        <tr>
                                            <td>
                                                SL#<?php echo $package_sell_data[$i]["id"]; ?><br/>
                                                <?php

                                                $datetime = new DateTime($package_sell_data[$i]["updated_at"]);
                                                $la_time = new DateTimeZone('America/New_York');
                                                $datetime->setTimezone($la_time);

                                                echo $datetime->format('d/m/Y h:i A'); ?>
                                            </td>
                                            <td><?php echo $package_sell_data[$i]["name"]; ?></td>
                                            <td><?php echo $package_sell_data[$i]["food"]; ?></td>
                                            <td><?php echo $package_sell_data[$i]["code"]; ?></td>
                                            <td><?php echo $package_sell_data[$i]["date"]; ?></td>
                                            <td><?php echo $package_sell_data[$i]["time"]; ?></td>
                                            <td><?php echo $package_sell_data[$i]["seat_number"]; ?></td>
                                            <td><?php echo $package_sell_data[$i]["price"]; ?></td>
                                            <td><?php echo $package_sell_data[$i]["email"]; ?></td>
                                            <td><?php echo $package_sell_data[$i]["number"]; ?></td>
                                            <td><?php echo $package_sell_data[$i]["occasion"]; ?></td>
                                            <td><?php echo $package_sell_data[$i]["alergies"]; ?></td>
                                            <!--<td>
                                                <div class="d-flex">
                                                    <button class="btn btn-secondary shadow btn-xs sharp mr-1"
                                                       data-toggle="modal" data-target=".bd-example-modal-xl"><i
                                                                class="fa fa-eye" onclick="showInvoice(<?php /*echo $package_sell_data[$i]["id"]; */?>);"></i></button>
                                                    <?php
/*                                                    if ($package_sell_data[$i]["approve"] == 3) {
                                                        */?>
                                                        <a href="Payment?id=<?php /*echo $package_sell_data[$i]["id"]; */?>&type=<?php /*echo $package_sell_data[$i]["payment_type"]; */?>" class="btn btn-success shadow btn-xs sharp mr-1"><i
                                                                    class="fa fa-check"></i></a>
                                                        <a href="Decline?sell_id=<?php /*echo $package_sell_data[$i]["id"]; */?>" class="btn btn-danger shadow btn-xs sharp"><i
                                                                    class="fa fa-times-circle"></i></a>
                                                        <?php
/*                                                    }
                                                    */?>
                                                </div>
                                            </td>-->
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--footer Start-->
    <?php require_once('include/footer.php'); ?>
    <!--footer End-->
</div>
<?php require_once('include/js.php'); ?>
</body>
</html>

<script>
async function showInvoice(id) {
    $.ajax({
            type: "POST",
            url: "Invoice-View",
            data: {id: id},
            success:async function(msg){
                $("#showInvoice").html(msg)
            },
            error: function(){
                alert("failure");
        }
    });
}
</script>
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Invoice Details</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12" id="showInvoice">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>
