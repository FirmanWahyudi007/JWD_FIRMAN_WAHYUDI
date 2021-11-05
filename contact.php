<!DOCTYPE html>
<html>
<head>
	<title>Design UI</title>
	<link rel="stylesheet" type="text/css" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Digital Talent</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
    	</button>
    	<div class="collapse navbar-collapse" id="navbarSupportedContent">
    		<ul class="navbar-nav mr-auto">
      		<li class="nav-item">
              <a class="nav-link" href="../library">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="direction.php">Direction <span class="sr-only">(current)</span></a>
            </li>
      			<li class="nav-item">
        			<a class="nav-link" href="contact.php">Contact Us <span class="sr-only">(current)</span></a>
      			</li>
    		</ul>
  		</div>
	</nav>
	<h4 align="center" style="margin: 20px;">Contact Us</h4>
	<hr>
  <div class="container" style="margin-bottom: 350px">
    <div class="row"> 
    <div class="col-md-6">
      <form>
      <div class="form-group row">
      <label class="col-sm-2 col-form-label">Nama</label>
      <div class="col-sm-10">
        <input type="text" name="nama" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" name="email" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Message</label>
      <div class="col-sm-10">
        <textarea class="form-control"></textarea>
      </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary" name="tambah">Send</button>
          <button class="btn btn-warning" name="clear">Cancel</button>
        </div>
    </div>
    </form>
    </div>
    <div class="col-md-6">
      <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=kapongan%20kaliurang&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{position:relative;text-align:right;height:auto;width:auto;}.gmap_canvas {overflow:hidden;background:none!important;height:auto;width:auto;}</style></div>
    </div>
  </div>
  </div>
  <footer class="footer mt-auto py-3">
      <div class="container">
        <span class="text-muted">Company Profile</span>
        <span class="text-muted" style="float: right;">Copyright</span>
      </div>
  </footer>
</body>
<script type="text/javascript" src="vendor/twbs/bootstrap/dist/js/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="vendor/twbs/bootstrap/dist/js/popper.min.js"></script>
<script type="text/javascript" src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</html>