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
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
            >
            <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="<?php echo base_url('Home_controller/index');?>">
                <?php echo $user_data['name'];?>
            </a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('Home_controller/index');?>">Dashboard</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('Home_controller/list');?>">Team</a>
                </li>
                <!-- <li class="nav-item">
                <a class="nav-link" href="#">Projects</a>
                </li> -->
            </ul>
            </div>
            <!-- Right elements -->
            <div class="d-flex align-items-center">
                <a class="text-reset me-3" href="<?php echo base_url('Auth_controller/logout');?>">
                    <h5>sign out</h5>
                </a>
            </div>
        </div>
    </nav>
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
          <h2 class="fw-bold mb-5">Add User Data</h2>
        <form action="<?php echo base_url('Home_controller/insert_user');?>" method="POST">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" name="name" id="form3Example1" class="form-control" />
                  <label class="form-label"  for="form3Example1">Name</label>
                  
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="email" name="email" id="form3Example2" class="form-control" />
                  <label class="form-label"  for="form3Example2">Email</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="number" name="contact" id="form3Example1" class="form-control" />
                  <label class="form-label"  for="form3Example1">Contact</label>
                </div>
              </div>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">
              Add
            </button>
        </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
</body>
</html>