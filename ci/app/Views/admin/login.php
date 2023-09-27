<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<style type="text/css">
		body{
			background-image: url('<?=base_url()?>public/uploads/bg.jpg');
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
</head>
<body>

	<section class="vh-100" >
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
          	<form action="<?=base_url()?>admin/login" method="post"> 
	            <h3 class="mb-5">MIS Mariveles</h3>
	            <?php if(session()->get('invalid')): ?>
	            <div class="alert alert-danger" role="alert">
	            	<?= session()->get('invalid') ?>
	            </div>
	        	<?php endif; ?>
	            <div class="form-outline mb-4">
	             <label class="form-label float-left" for="typeEmailX-2">Email</label>
	              <input type="email" id="typeEmailX-2" name="email" class="form-control form-control-lg" />
	              
	            </div>

	            <div class="form-outline mb-4">
	              <label class="form-label float-left" for="typePasswordX-2">Password</label>
	              <input type="password" id="typePasswordX-2" name="password" class="form-control form-control-lg" />
	              
	            </div>

	            <!-- Checkbox -->
	            <div class="form-check d-flex justify-content-start mb-4">
	              <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
	              <label class="form-check-label" for="form1Example3"> Remember Me </label>
	            </div>

	            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
       		 </form>
           

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>