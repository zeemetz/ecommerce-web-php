 <!-- header -->
<?php if(!isset($_SESSION['username'])) {?>
 <!-- GUEST -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"  style='border-radius:0;'>
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php?page=guest/product.php">Product</a></li>
        <li><a href="index.php?page=guest/register.php">member</a></li>
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li> -->
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <form class="navbar-form navbar-left" role="search">
      <div class="row">
        <div class="col-lg-12">
          <div class="input-group">
            <input type="text" class="form-control" placeholder='Search'>
            <span class="input-group-btn">
              <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>.</button>
            </span>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->
      </form>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<?php } else if($_SESSION['role']=='admin'){?>
<!-- ADMIN -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"  style='border-radius:0;'>
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Product <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="index.php?page=admin/product.php">Product</a></li>
            <li><a href="index.php?page=admin/insertproduct.php">Insert Product</a></li>
          </ul>
        </li>
        <li><a href="index.php?page=admin/transaction.php">Transaction</a></li>
        <li><a href="index.php?page=logout.php">Log-Out</a></li>
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li> -->
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <form class="navbar-form navbar-left" role="search">
      <div class="row">
        <div class="col-lg-12">
          <div class="input-group">
            <input type="text" class="form-control" placeholder='Search'>
            <span class="input-group-btn">
              <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>.</button>
            </span>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->
      </form>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<?php } else if($_SESSION['role']=="member"){?>
<!-- MEMBER -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"  style='border-radius:0;'>
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php?page=member/product.php">Product</a></li>
        <li><a href="index.php?page=member/cart.php">Cart</a></li>
        <li><a href="index.php?page=member/payment.php">Payment</a></li>
        <li><a href="logout.php">Log-Out</a></li>
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li> -->
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <form class="navbar-form navbar-left" role="search">
      <div class="row">
        <div class="col-lg-12">
          <div class="input-group">
            <input type="text" class="form-control" placeholder='Search'>
            <span class="input-group-btn">
              <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>.</button>
            </span>
          </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->
      </form>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<?php } ?>