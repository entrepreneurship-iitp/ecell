<?php
    header("Pragma: no-cache");
    header("Cache-Control: no-cache");
    header("Expires: 0");
    $amount=$_POST['amount'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Payments | Campus Ambassador Program</title>
    <meta name="GENERATOR" content="Evrsoft First Page">
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                   <div style="background-color:  #2f323e;">
                    <!-- Logo -->
                    <a class="logo" href="dashboard.html">
                        <!-- Logo icon image, you can use font-icon also -->
                        <b style="color: #fff">
                        <h3 class="dark-logo"> <b style="color: #fff">Ecell</b></h3>
                            <h3 class="light-logo"><b style="color: #fff">E-Cell</b> </h3>
                            <h3 class="dark-logo"> <b style="color: #fff">IIT Patna</b></h3>
                            <h3 class="light-logo"><b style="color: #fff">IIT Patna</b> </h3>
                            
                        </b>

                     </a>
                 </div>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg"
                            href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                    </li>
                    <li>
                        <a class="profile-pic" href="#"> <img src="../plugins/images/users/hey.jpg" alt="user-img"
                                width="36" class="img-circle"><b class="hidden-xs">Hey Welcome!</b></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span
                            class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="dashboard.html" class="waves-effect"><i class="fa fa-clock-o fa-fw"
                                aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="profile.html" class="waves-effect"><i class="fa fa-user fa-fw"
                                aria-hidden="true"></i>Profile</a>
                    </li>
                    <li>
                        <a href="basic-table.html" class="waves-effect"><i class="fa fa-table fa-fw"
                                aria-hidden="true"></i>Basic Table</a>
                    </li>
                    
                   
                    <li>
                        <a href="blank.html" class="waves-effect"><i class="fa fa-columns fa-fw"
                                aria-hidden="true"></i>Campus Ambassador</a>
                    </li>
                    <li>
                        <a href="payment.php" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>Payments</a>
                    </li>
                </ul>
               
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Payments</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                       
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Payment Summary</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                 <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Payable Amount</h3>   
                               <div class="table-responsive">

                    <form method="post" action="pgRedirect.php">
        <table class="table">
            <thread>
                <tr>
                    <th>S.No</th>
                    <th>Label</th>
                    <th>Value</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td><label>ORDER_ID::*</label></td>
                    <td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
                        name="ORDER_ID" autocomplete="off"
                        value="<?php echo  "Ecell" . rand(10000,99999999)?>">
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><label>CUSTID ::*</label></td>
                    <td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><label>INDUSTRY_TYPE_ID ::*</label></td>
                    <td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><label>Channel ::*</label></td>
                    <td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
                        size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><label>Total Amount</label></td>
                    <td><input title="TXN_AMOUNT" tabindex="10"
                        type="number" name="TXN_AMOUNT"
                        value="<?php echo $amount; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input style="background-color: black;color: white;
  padding: 15px 32px" value="CheckOut" type="submit"   onclick=""></td>
                </tr>
            </thread>
        </table>
        * - Mandatory Fields. Do not change the values.
    </form>
              </div></div></div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center">  </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
</body>

</html>
