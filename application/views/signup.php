<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 300px;
        "></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Sign up now</h2>
          <form action="<?php echo base_url('Auth_controller/register_admin');?>" method="POST">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" name="name" id="form3Example1" class="form-control" />
                  <span style="color:red"><?php echo form_error('name'); ?></span>
                  <label class="form-label"  for="form3Example1">Name</label>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="email" name="email" id="form3Example2" class="form-control" />
                  <span style="color:red"><?php echo form_error('email'); ?></span>
                  <label class="form-label"  for="form3Example2">Email</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="number" name="contact" id="form3Example1" class="form-control" />
                  <span style="color:red"><?php echo form_error('contact'); ?></span>
                  <label class="form-label"  for="form3Example1">Contact</label>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="password" name="password" id="form3Example2" class="form-control" />
                  <span style="color:red"><?php echo form_error('password'); ?></span>
                  <label class="form-label"  for="form3Example2">Password</label>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" name="company" id="form3Example2" class="form-control" />
                  <span style="color:red"><?php echo form_error('company'); ?></span>
                  <label class="form-label"  for="form3Example2">Company</label>
                </div>
              </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">
              Sign up
            </button>
            <p class="small fw-bold mt-2 pt-1 mb-0">You have an account? <a href="<?php echo base_url('Auth_controller/login');?>"
                class="link-danger">Login</a></p>

            <!-- Register buttons -->
            <div class="text-center">
              <p>or sign up with:</p>

              <button type="button" class="btn btn-link btn-floating mx-1">
			        <i class="fa fa-facebook" aria-hidden="true"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
			        <i class="fa fa-github" aria-hidden="true"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
			        <i class="fa fa-linkedin" aria-hidden="true"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
</body>
</html>