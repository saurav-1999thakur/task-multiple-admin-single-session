<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" />
        <title>Dashboard</title>
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
            <a class="navbar-brand mt-2 mt-lg-0" href="#">
                <?php echo $user_data['name'];?>
            </a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" href="#">Dashboard</a>
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
<!-- Navbar -->

 
<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid " id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-fluid">
									<!--begin::Navbar-->
									<div class="card mb-5 mb-xl-10">
										<div class="card-body pt-9 pb-0">
											<!--begin::Details-->
											<div class="d-flex flex-wrap flex-sm-nowrap mb-3">
												
												<!--begin::Info-->
												<div class="flex-grow-1">
													<!--begin::Title-->
													<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
														<!--begin::User--> 
														<div class="d-flex flex-column">
															<!--begin::Name-->
															<div class="d-flex align-items-center mb-2">
																<a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1"><?php echo $user_data['name'];?></a>
																<a href="#">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen026.svg-->
																	<span class="svg-icon svg-icon-1 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																			<path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="currentColor" />
																			<path d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</a>
															</div>
															<!--end::Name-->
											<!--begin::Input group-->
											<div class="row mb-7">
												<!--begin::Label-->
												<label class="col-lg-5 fw-semibold text-muted">Contact No</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-7 d-flex align-items-center">
													<span class="fw-bold fs-6 text-gray-800 me-2"><?php echo $user_data['contact'];?></span>
													<span class="badge badge-success">Verified</span>
												</div>
												<!--end::Col-->
											</div>
											<div class="row mb-7">
												<label class="col-lg-4 fw-semibold text-muted">Email</label>
												<div class="col-lg-8">
													<span class="fw-bold fs-6 text-gray-800"><?php echo $user_data['email'];?></span>
												</div>
											</div>
											<div class="row mb-7">
												<label class="col-lg-4 fw-semibold text-muted">Company</label>
												<div class="col-lg-8">
													<span class="fw-bold fs-6 text-gray-800"><?php echo $user_data['company'];?></span>
												</div>
											</div>
											<div class="row mb-7">
												<label class="col-lg-4 fw-semibold text-muted">Country</label>
												<div class="col-lg-8">
													<span class="fw-bold fs-6 text-gray-800">India</span>
												</div>
											</div>
										</div>
										<!--end::Card body-->
									</div>
									<!--end::details View-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->			
 </body>
 </html>