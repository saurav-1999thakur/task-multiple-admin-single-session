<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" />
        <title>Team User</title>
    </head>
    <body id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
    <!-- Navbar -->
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
            </ul>
            </div>
            <!-- Right elements -->
            <div class="d-flex align-items-center">
                <a class="text-reset me-3" href="<?php echo base_url('Home_controller/add_data');?>">
                    <h6>Add Data</h6>
                </a>
                <a class="text-reset me-3" href="<?php echo base_url('Auth_controller/logout');?>">
                    <h5>sign out</h5>
                </a>
            </div>
        </div>
    </nav>
    <!--begin::Body-->
    <div class="container">
    <div class="card-body py-3">
		<!--begin::Table container-->
		<div class="table-responsive">
			<!--begin::Table-->
			<table class="table table-bordered border-dark table-row-gray-300 align-middle gy-4">
				<!--begin::Table head-->
			    <thead>
				    <tr class="fw-bold text-muted">
					    <th class="min-w-50px">S.No.</th>
					    <th class="min-w-150px">Name</th>
					    <th class="min-w-150px">Contact</th>
					    <th class="min-w-150px">Email</th>
					    <th class="min-w-150px">Date</th>
					    <!-- <th class="min-w-150px"></th> -->
					    <th class="min-w-100px text-end">Actions</th>
				    </tr>
			    </thead>
				<!--end::Table head-->
				<!--begin::Table body-->
				<tbody>
                <?php $s=1; foreach($list as $data){?>
					<tr>
						<td><?php echo $s++;?></td>
						<td><?php echo $data['name'];?></td> 
						<td><?php echo $data['contact'];?></td> 
						<td><?php echo $data['email'];?></td> 
						<td><?php echo $data['created_at'];?></td> 
						<td>
							<!-- edit list  for database -->
							<div class="d-flex justify-content-end flex-shrink-0">
								<a href="#">
									<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true" style="font-size: 25px;">
									</i> 
								</a>
							<!-- delete list for database -->
								<a href="#">
									<i class="fa fa-trash fa-fw" aria-hidden="true" style="font-size: 25px;">
									</i>
								</a>   
							</div>
						</td> 
					</tr>
                    <?php }?>
				</tbody>
				<!--end::Table body-->
			</table>
			<!--end::Table-->
		</div>
		<!--end::Table container-->
	</div>
	<!--begin::Body-->
    </div>
<!-- Navbar -->
 </body>
 </html>