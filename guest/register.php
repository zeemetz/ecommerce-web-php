<br/><br/><br/><br/>
<div class="row" style='width:90%; margin:0 auto;'>
  	
  	<div class="container col-md-3">
      <form class="form-signin" role="form" action="guest/login.php" method='post'>
      	<h3>Sign In</h3>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input name='username' type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <br/>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name='password' type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <!-- <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div> -->
        <br/>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div>
  <div class="col-md-9">
  	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/s1.jpg" alt="..." width="100%">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="images/s2.jpg" alt="..." width="100%">
      <div class="carousel-caption">
        ...
      </div>
    </div>
     <div class="item">
      <img src="images/s3.jpg" alt="..." width="100%">
      <div class="carousel-caption">
        ...
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  
	<form action='guest/registerController.php' method='post'>
  <div class="col-md-6" style="margin-bottom:5%;">
  	<h2>Registration</h2>
  	<div class="input-group" style='width:90%'>
  	<hr/>
  		<label>Username</label>
	  <input name='username' type="email" class="form-control" placeholder="Username">
	</div>
	<br/>
	<div class="input-group" style='width:90%'>
  		<label>Password</label>
	  <input name='password' type="password" class="form-control" placeholder="Password">
	</div>
	<br/>
	<div class="input-group" style='width:90%'>
  		<label>Phone</label>
	  <input name='phone' type="text" class="form-control" placeholder="Phone">
	</div>
	<br/>
	<button class="btn btn-lg btn-primary" type="submit">Register</button>
  </div>
  </form>
  <div class='col-md-6'>
  	<br/>
  	<div class="alert alert-success" role="alert"> <span class='glyphicon glyphicon-ok'></span> Success Register </div>
  	<div class="alert alert-danger" role="alert"> <span class='glyphicon glyphicon-ok'></span> Failed Register </div>
  </div>
</div>
</div>