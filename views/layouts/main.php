<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\DashboardAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use app\models\Company;

DashboardAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="utf-8"<?= Yii::$app->charset ?>/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?=Html::CsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <?php $this->beginBody() ?>
    <div class="wrapper">
      
  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
         
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/download.PNG" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin FuelIn</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Main Profile</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Customer</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu"> 
            <li class="active"><a href="http://localhost/basic/web/index.php?r=site%2Flogin"><i class="fa fa-circle-o"></i> Customer LogIn</a></li>
            <li><a href="http://localhost/basic/web/index.php?r=userregistration"><i class="fa fa-circle-o"></i> Create Customer</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Order Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="http://localhost/basic/web/index.php?r=order"><i class="fa fa-circle-o"></i> Create Order</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> View Order</a></li>
          </ul>
        </li>
        <li>
        <li class="treeview">
          <a href="http://localhost/basic/web/index.php?r=site%2Findex">
            <i class="fa fa-th"></i> <span>Company</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="http://localhost/basic/web/index.php?r=site%2Fabout"><i class="fa fa-circle-o"></i> About Us</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i> <span>Vehicle Registration</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="http://localhost/basic/web/index.php?r=vehicleregistration"><i class="fa fa-circle-o"></i> Register Vehicles</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Distributors</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="http://localhost/basic/web/index.php?r=distributors"><i class="fa fa-circle-o"></i> Chartdb</a></li>
            <li><a href="https://www.lankaioc.com/dealer-list/"><i class="fa fa-circle-o"></i> Dealer_list</a></li>
            <li><a href="https://www.lankaioc.com/shed-locator/"><i class="fa fa-circle-o"></i> Shed_locator</a></li>
            <li><a href="https://www.lankaioc.com/tenders/"><i class="fa fa-circle-o"></i> Tender_list</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Fuel Station</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="http://localhost/basic/web/index.php?r=fuelstation"><i class="fa fa-circle-o"></i> View </a></li>
            <li><a href="https://mapcarta.com/N4019464970"><i class="fa fa-circle-o"></i> Ceypetco </a></li>
            <li><a href="https://www.lankaioc.com/consumer/service-stations/"><i class="fa fa-circle-o"></i> Lanka IOC </a></li>
          </ul>
        </li>

        <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Georgian Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Outlook</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        <li class="header">Transactions</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Payment</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
          <ul class="treeview-menu">
            <li><a href="https://pay.google.com/gp/w/u/0/home/paymentmethods"><i class="fa fa-circle-o"></i> Google Pay</a></li>
            <li><a href="https://www.visa.com.lk/pay-with-visa/featured-technologies/visa-paywave.html?utm_source=sem&utm_medium=search&utm_campaign=lk-23q3-contactlesslimitincreasecampaign-traf&utm_content=cash-contactlesslimitincreasecampaign-cashlesscontactless-sem&dclid=&gclid=Cj0KCQjwla-hBhD7ARIsAM9tQKuqbfBKWvDdV_DcThgqoQ-d-XETqq66Ctw4GGA5OyABshwXCLXW2lcaAnDSEALw_wcB"><i class="fa fa-circle-o"></i> VISA Card</a></li>
            <li><a href="https://www.dialog.lk/browse/quickPayment.jsp"><i class="fa fa-circle-o"></i> Dialog</a></li>
            <li><a href="https://online.boc.lk/T001/channel.jsp"><i class="fa fa-circle-o"></i> BOC Bank Online </a></li>
            <li><a href="https://www.seylanbank.lk/banking-internet-seylan-real/login"><i class="fa fa-circle-o"></i> Seylan Bank Online </a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Token</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="http://localhost/basic/web/index.php?r=token"><i class="fa fa-circle-o"></i> View Token</a></li>
            <li class="treeview"></li>
              </ul>
        </li>
        <li><a href="http://localhost/basic/web/index.php?r=site%2Fcontact"><i class="fa fa-book"></i> <span>Contact Us</span></a></li>
        <li class="header">News & Feeds</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


<!-- Left col -->
  <section class="col-lg-7 connectedSortable">
    <!-- Custom tabs (Charts with tabs)-->
      <div class="nav-tabs-custom">
    <!-- Tabs within a box -->
        <ul class="nav nav-tabs pull-right">
          <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
            <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
          <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>
        </ul>
      <div class="tab-content no-padding">
    <!-- Morris chart - Sales -->
      <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px; width: 100%;"></div>
      <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px; width: 100%;"></div>
      </div>
      </div>
  </section>

  <!-- /.nav-tabs-custom -->
  <section class="col-lg-5 connectedSortable">

<!-- Map box -->
    <div class="box box-solid bg-light-blue-gradient">
    <div class="box-header">
    <!-- tools box -->
    <div class="pull-right box-tools">
      <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip"
              title="Date range">
        <i class="fa fa-calendar"></i></button>
      <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"
              data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
        <i class="fa fa-minus"></i></button>
    </div>
    <!-- /. tools -->

        <i class="fa fa-map-marker"></i>

          <h3 class="box-title">
              Visitors
          </h3>
    </div>
    <div class="box-body">
        <div id="world-map" style="height: 250px; width: 100%;"></div>
    </div>
  <!-- /.box-body-->
    <div class="box-footer no-border">
    <div class="row">
    <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
        <div id="sparkline-1"></div>
        <div class="knob-label">Visitors</div>
    </div>
      <!-- ./col -->
    <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
        <div id="sparkline-2"></div>
        <div class="knob-label">Online</div>
    </div>
      <!-- ./col -->
    <div class="col-xs-4 text-center">
      <div id="sparkline-3"></div>
      <div class="knob-label">Exists</div>
    </div>
      <!-- ./col -->
    </div>
  </section>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

        <!-- Main content -->
        <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>85<sup style="font-size: 20px">%</sup></h3>

              <p>New Fuel Orders</p>
            </div>
            <div class="image">
              <img src="dist/img/fuel.png" alt="Fuel Orders" style="width:25%">
              
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>60<sup style="font-size: 20px">%</sup></h3>

              <p> Consumer Visit Rate</p>
            </div>
            <div class="image">
              <img src="dist/img/petrol.png" alt="Visit Rate" style="width:25%">
              
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>90<sup style="font-size: 20px">%</sup></h3>

              <p>User Registrations</p>
            </div>
            <div class="image">
              <img src="dist/img/oil.png" alt="Registrations" style="width:25%">
              
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>50<sup style="font-size: 20px">%</sup></h3>

              <p>Unique Visitors</p>
            </div>
            <div class="img">
                <img src="dist/img/fuel.png" alt="Visitors" style="width:25%">
              
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

    <!-- Main content -->
    <section class="content">
        <?=$content?>
</section>
</div>
</div>
<!-- ./wrapper -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>