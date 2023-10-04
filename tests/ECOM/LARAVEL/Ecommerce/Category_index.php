<!DOCTYPE html>
<html lang="en">
<?php include_once 'require_html_head.php';?>
<body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="black" data-headerbg="color_1">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
		<div>
			<img src="images/pre.gif" alt=""> 
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        
		<!--**********************************
            Header start
        ***********************************-->
        <?php include_once 'require_header.php';?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php include_once 'require_side_menu.php';?>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="container-fluid">
				<div class="row">
					 
					<div class="col-xl-12 col-xxl-12 bst-seller">
						<div class="card">
							<div class="card-body p-0">
								<div class="table-responsive active-projects style-1 ItemsCheckboxSec shorting ">
									<div class="tbl-caption">
										<h4 class="heading mb-0">Employees</h4>
										<div>
											<a class="btn btn-primary btn-sm me-2" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">+ Add Employee</a>
											<button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">+ Invite Employee
											</button>
										</div>
									</div>
									<table id="empoloyees-tbl3" class="table">
										<thead>
                                            <tr>
												<th>
													<div class="form-check custom-checkbox ms-0">
														<input type="checkbox" class="form-check-input checkAllInput" id="checkAll2" required="">
														<label class="form-check-label" for="checkAll2"></label>
													</div>
												</th>
                                                <th>Employee ID</th>
                                                <th>Employee Name</th>
                                                <th>Email Address</th>
                                                <th>Contact Number</th>
                                                <th>Gender</th>
                                                <th>Location</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
										<tbody>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox100" required="">
														<label class="form-check-label" for="customCheckBox100"></label>
													</div>
												</td>
												<td><span>1001</span></td>
												<td>
													<div class="products">
														<img src="images/contacts/pic1.jpg" class="avatar avatar-md" alt="">
														<div>
															<h6><a href="javascript:void(0)">Ricky Antony</a></h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">ra@gmail.com</a></td>
												<td>
													<span>+12 123 456 7890</span>
												</td>
												<td>
													<span>Female</span>
												</td>	
												<td>
													<span>AZ</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox101" required="">
														<label class="form-check-label" for="customCheckBox101"></label>
													</div>
												</td>
												<td><span>1018</span></td>
												<td>
													<div class="products">
														<img src="images/contacts/pic2.jpg" class="avatar avatar-md" alt="">
														<div>
															<h6><a href="javascript:void(0)">Micky Antony</a></h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">abc@gmail.com</a></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td>
													<span>PA</span>
												</td>
												<td>
													<span class="badge badge-danger light border-0">Pending</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox151" required="">
														<label class="form-check-label" for="customCheckBox151"></label>
													</div>
												</td>
												<td><span>1018</span></td>
												<td>
													<div class="products">
														<img src="images/contacts/pic2.jpg" class="avatar avatar-md" alt="">
														<div>
															<h6><a href="javascript:void(0)">Ricky M</a></h6>
															<span>Software Designer</span>	
														</div>	
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">rm@gmail.com</a></td>
												<td>
													<span>+55 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td>
													<span>WA</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox102" required="">
														<label class="form-check-label" for="customCheckBox102"></label>
													</div>
												</td>
												<td><span>1018</span></td>
												<td>
													<div class="products">
														<img src="images/contacts/pic3.jpg" class="avatar avatar-md" alt="">
														<div>
															<h6><a href="javascript:void(0)">Ricky Antony</a></h6>
															<span>Software Designer</span>	
														</div>	
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">abc@gmail.com</a></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Female</span>
												</td>	
												<td>
													<span>AR</span>
												</td>
												<td>
													<span class="badge badge-danger light border-0">Pending</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox103" required="">
														<label class="form-check-label" for="customCheckBox103"></label>
													</div>
												</td>
												<td><span>152</span></td>
												<td>
													<div class="products">
														<img src="images/contacts/pic1.jpg" class="avatar avatar-md" alt="">
														<div>
															<h6><a href="javascript:void(0)">Ricky Moni</a></h6>
															<span>Game Designer</span>	
														</div>	
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">abc@gmail.com</a></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Female</span>
												</td>	
												<td>
													<span>NYC</span>
												</td>
												<td>
													<span class="badge badge-primary light border-0">Inprogress</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox104" required="">
														<label class="form-check-label" for="customCheckBox104"></label>
													</div>
												</td>
												<td><span>1018</span></td>
												<td>
													<div class="products">
														<img src="images/contacts/pic3.jpg" class="avatar avatar-md" alt="">
														<div>
															<h6><a href="javascript:void(0)">Ricky Antony</a></h6>
															<span>Software Designer</span>	
														</div>	
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">abc@gmail.com</a></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Female</span>
												</td>	
												<td>
													<span>AR</span>
												</td>
												<td>
													<span class="badge badge-danger light border-0">Pending</span>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								
							</div>
						</div>
					</div>
					 
				</div>
			</div>
        </div>
		<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-center modal-xl">
			<div class="modal-content">
			  <div class="modal-header border-0">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
				<div class="modal-body pt-0">
					<div class="text-center">
						<h2>Choose the plans that’s perfect for your business.</h2>
						<p>Donec ligula ligula, porta at urna non, faucibus congue urna. Nullam nulla purus, facilisis vitae odio ac, tempus aliquet dolor.</p>
					</div>
					<div class="d-flex justify-content-center mb-4">	
						<ul class="nav nav-pills" id="pills-tab2" role="tablist">
						  <li class="nav-item" role="presentation">
							<button class="nav-link active" data-series="year" id="pills-year-tab2" data-bs-toggle="pill" data-bs-target="#pills-year" type="button" role="tab" aria-selected="true">Yearly</button>
						  </li>
						  <li class="nav-item" role="presentation">
							<button class="nav-link" data-series="month" id="pills-month-tab2" data-bs-toggle="pill" data-bs-target="#pills-month" type="button" role="tab" aria-selected="false" tabindex="-1">Monthly</button>
						  </li>
						</ul>
					</div>	
					<div class="row">
						<div class="tab-content" id="pills-tabContent1">
							  <div class="tab-pane fade show active" id="pills-year" role="tabpanel" aria-labelledby="pills-year-tab">
								<div class="row">
									<div class="col-xl-4 col-lg-6">
										<div class="card upgrad-plan">
											<div class="card-body">
												<div class="text-center">
													<span class="badge badge-info light border-0">Standard</span>
													<div class="d-flex align-items-baseline m-prise">
														<h4>$12</h4><span>/Per Year</span>
													</div>
														<ul class="prise-list">
															<li>
																<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="24" height="24" rx="12" fill="#F0F5FF"/>
																	<path d="M16.8125 8.93774L10.6875 15.0625L7.625 12.0002" stroke="#0B63E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																</svg>
																User Dashboard
															</li>
															<li>
																<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="24" height="24" rx="12" fill="#F0F5FF"/>
																	<path d="M16.8125 8.93774L10.6875 15.0625L7.625 12.0002" stroke="#0B63E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																</svg>
																Post 3 Ads per week
															</li>
															<li>
																<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="24" height="24" rx="12" fill="#F0F5FF"/>
																	<path d="M16.8125 8.93774L10.6875 15.0625L7.625 12.0002" stroke="#0B63E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																</svg>
																Multiple images & videos
															</li>
														</ul>
												</div>
											</div>
											<div class="card-footer text-center border-0">
												<a href="javascript:void(0)" class="btn btn-primary light btn-block">Choose plans<i class="fa-solid fa-arrow-right ms-2"></i></a>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-lg-6">
										<div class="card upgrad-plan">
											<div class="card-body">
												<div class="text-center">
													<span class="badge badge-info light border-0">Premium</span>
													<div class="d-flex align-items-baseline m-prise">
														<h4>$25</h4><span>/Per Year</span>
													</div>
														<ul class="prise-list">
															<li>
																<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="24" height="24" rx="12" fill="#F0F5FF"/>
																	<path d="M16.8125 8.93774L10.6875 15.0625L7.625 12.0002" stroke="#0B63E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																</svg>
																User Dashboard
															</li>
															<li>
																<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="24" height="24" rx="12" fill="#F0F5FF"/>
																	<path d="M16.8125 8.93774L10.6875 15.0625L7.625 12.0002" stroke="#0B63E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																</svg>
																Post 3 Ads per week
															</li>
															<li>
																<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="24" height="24" rx="12" fill="#F0F5FF"/>
																	<path d="M16.8125 8.93774L10.6875 15.0625L7.625 12.0002" stroke="#0B63E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																</svg>
																Multiple images & videos
															</li>
															<li>
																<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="24" height="24" rx="12" fill="#F0F5FF"/>
																	<path d="M16.8125 8.93774L10.6875 15.0625L7.625 12.0002" stroke="#0B63E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																</svg>
																Basic customer support
															</li>
															<li>
																<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="24" height="24" rx="12" fill="#F0F5FF"/>
																	<path d="M16.8125 8.93774L10.6875 15.0625L7.625 12.0002" stroke="#0B63E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																</svg>
																Featured ads
															</li>
														</ul>
												</div>
											</div>
											<div class="card-footer text-center border-0">
												<a href="javascript:void(0)" class="btn btn-primary light btn-block">Choose plans<i class="fa-solid fa-arrow-right ms-2"></i></a>
											</div>
										</div>
									</div>
									<div class="col-xl-4">
										<div class="card upgrad-plan">
											<div class="card-body">
												<div class="text-center">
													<span class="badge badge-info light border-0">Business</span>
													<div class="d-flex align-items-baseline m-prise">
														<h4>$200</h4><span>/Per Year</span>
													</div>
														<ul class="prise-list">
															<li>
																<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="24" height="24" rx="12" fill="#F0F5FF"/>
																	<path d="M16.8125 8.93774L10.6875 15.0625L7.625 12.0002" stroke="#0B63E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																</svg>
																User Dashboard
															</li>
															<li>
																<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="24" height="24" rx="12" fill="#F0F5FF"/>
																	<path d="M16.8125 8.93774L10.6875 15.0625L7.625 12.0002" stroke="#0B63E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																</svg>
																Post 3 Ads per week
															</li>
															<li>
																<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="24" height="24" rx="12" fill="#F0F5FF"/>
																	<path d="M16.8125 8.93774L10.6875 15.0625L7.625 12.0002" stroke="#0B63E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																</svg>
																Multiple images & videos
															</li>
															<li>
																<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="24" height="24" rx="12" fill="#F0F5FF"/>
																	<path d="M16.8125 8.93774L10.6875 15.0625L7.625 12.0002" stroke="#0B63E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																</svg>
																Basic customer support
															</li>
															<li>
																<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="24" height="24" rx="12" fill="#F0F5FF"/>
																	<path d="M16.8125 8.93774L10.6875 15.0625L7.625 12.0002" stroke="#0B63E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																</svg>
																Featured ads
															</li>
															<li>
																<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="24" height="24" rx="12" fill="#F0F5FF"/>
																	<path d="M16.8125 8.93774L10.6875 15.0625L7.625 12.0002" stroke="#0B63E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																</svg>
																Special ads badge
															</li>
															<li>
																<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="24" height="24" rx="12" fill="#F0F5FF"/>
																	<path d="M16.8125 8.93774L10.6875 15.0625L7.625 12.0002" stroke="#0B63E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																</svg>
																Call to Action in Every Ads
															</li>
														</ul>
												</div>
											</div>
											<div class="card-footer text-center border-0">
												<a href="javascript:void(0)" class="btn btn-primary light btn-block">Choose plans<i class="fa-solid fa-arrow-right ms-2"></i></a>
											</div>
										</div>
									</div>
									
								</div>
							  </div>
							   <div class="tab-pane fade" id="pills-month" role="tabpanel" aria-labelledby="pills-month-tab">
									<div class="row">
									<div class="col-xl-4 col-lg-6">
										<div class="card upgrad-plan">
											<div class="card-body">
												<div class="text-center">
													<span class="badge badge-info light border-0">Standard</span>
													<div class="d-flex align-items-baseline m-prise">
														<h4>$08</h4><span>/Per Month</span>
													</div>
														<ul class="prise-list">
															<li>
																<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="24" height="24" rx="12" fill="#F0F5FF"/>
																	<path d="M16.8125 8.93774L10.6875 15.0625L7.625 12.0002" stroke="#0B63E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																</svg>
																User Dashboard
															</li>
															<li>
																<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="24" height="24" rx="12" fill="#F0F5FF"/>
																	<path d="M16.8125 8.93774L10.6875 15.0625L7.625 12.0002" stroke="#0B63E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																</svg>
																Post 3 Ads per week
															</li>
															<li>
																<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="24" height="24" rx="12" fill="#F0F5FF"/>
																	<path d="M16.8125 8.93774L10.6875 15.0625L7.625 12.0002" stroke="#0B63E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																</svg>
																Multiple images & videos
															</li>
														</ul>
												</div>
											</div>
											<div class="card-footer text-center border-0">
												<a href="javascript:void(0)" class="btn btn-primary light btn-block">Choose plans<i class="fa-solid fa-arrow-right ms-2"></i></a>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-lg-6">
										<div class="card upgrad-plan">
											<div class="card-body">
												<div class="text-center">
													<span class="badge badge-info light border-0">Premium</span>
													<div class="d-flex align-items-baseline m-prise">
														<h4>$20</h4><span>/Per Month</span>
													</div>
														<ul class="prise-list">
															<li>
																<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="24" height="24" rx="12" fill="#F0F5FF"/>
																	<path d="M16.8125 8.93774L10.6875 15.0625L7.625 12.0002" stroke="#0B63E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																</svg>
																User Dashboard
															</li>
															<li>
																<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="24" height="24" rx="12" fill="#F0F5FF"/>
																	<path d="M16.8125 8.93774L10.6875 15.0625L7.625 12.0002" stroke="#0B63E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																</svg>
																Post 3 Ads per week
															</li>
															<li>
																<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="24" height="24" rx="12" fill="#F0F5FF"/>
																	<path d="M16.8125 8.93774L10.6875 15.0625L7.625 12.0002" stroke="#0B63E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																</svg>
																Multiple images & videos
															</li>
															<li>
																<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="24" height="24" rx="12" fill="#F0F5FF"/>
																	<path d="M16.8125 8.93774L10.6875 15.0625L7.625 12.0002" stroke="#0B63E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																</svg>
																Basic customer support
															</li>
															<li>
																<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="24" height="24" rx="12" fill="#F0F5FF"/>
																	<path d="M16.8125 8.93774L10.6875 15.0625L7.625 12.0002" stroke="#0B63E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																</svg>
																Featured ads
															</li>
														</ul>
												</div>
											</div>
											<div class="card-footer text-center border-0">
												<a href="javascript:void(0)" class="btn btn-primary light btn-block">Choose plans<i class="fa-solid fa-arrow-right ms-2"></i></a>
											</div>
										</div>
									</div>
									<div class="col-xl-4">
										<div class="card upgrad-plan">
											<div class="card-body">
												<div class="text-center">
													<span class="badge badge-info light border-0">Business</span>
													<div class="d-flex align-items-baseline m-prise">
														<h4>$50</h4><span>/Per Month</span>
													</div>
														<ul class="prise-list">
															<li>
																<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="24" height="24" rx="12" fill="#F0F5FF"/>
																	<path d="M16.8125 8.93774L10.6875 15.0625L7.625 12.0002" stroke="#0B63E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																</svg>
																User Dashboard
															</li>
															<li>
																<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="24" height="24" rx="12" fill="#F0F5FF"/>
																	<path d="M16.8125 8.93774L10.6875 15.0625L7.625 12.0002" stroke="#0B63E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																</svg>
																Post 3 Ads per week
															</li>
															<li>
																<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="24" height="24" rx="12" fill="#F0F5FF"/>
																	<path d="M16.8125 8.93774L10.6875 15.0625L7.625 12.0002" stroke="#0B63E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																</svg>
																Multiple images & videos
															</li>
															<li>
																<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="24" height="24" rx="12" fill="#F0F5FF"/>
																	<path d="M16.8125 8.93774L10.6875 15.0625L7.625 12.0002" stroke="#0B63E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																</svg>
																Basic customer support
															</li>
															<li>
																<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="24" height="24" rx="12" fill="#F0F5FF"/>
																	<path d="M16.8125 8.93774L10.6875 15.0625L7.625 12.0002" stroke="#0B63E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																</svg>
																Featured ads
															</li>
															<li>
																<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="24" height="24" rx="12" fill="#F0F5FF"/>
																	<path d="M16.8125 8.93774L10.6875 15.0625L7.625 12.0002" stroke="#0B63E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																</svg>
																Special ads badge
															</li>
															<li>
																<svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="24" height="24" rx="12" fill="#F0F5FF"/>
																	<path d="M16.8125 8.93774L10.6875 15.0625L7.625 12.0002" stroke="#0B63E5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																</svg>
																Call to Action in Every Ads
															</li>
														</ul>
												</div>
											</div>
											<div class="card-footer text-center border-0">
												<a href="javascript:void(0)" class="btn btn-primary light btn-block">Choose plans<i class="fa-solid fa-arrow-right ms-2"></i></a>
											</div>
										</div>
									</div>
								</div>
							  </div>
						</div>
					</div>
				</div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				  </div>
				</div>
			</div>
		</div>	
		</div>
		<div class="offcanvas offcanvas-end customeoff" tabindex="-1" id="offcanvasExample">
		  <div class="offcanvas-header">
		  <h5 class="modal-title" id="#gridSystemModal">Add Employee</h5>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
				<i class="fa-solid fa-xmark"></i>
			</button>
		  </div>
		  <div class="offcanvas-body">
			<div class="container-fluid">
				<div>
					<label>Profile Picture</label>
					<div class="dz-default dlab-message upload-img mb-3">	
						<form action="#" class="dropzone">
							<svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M27.1666 26.6667L20.4999 20L13.8333 26.6667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M20.5 20V35" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M34.4833 30.6501C36.1088 29.7638 37.393 28.3615 38.1331 26.6644C38.8731 24.9673 39.027 23.0721 38.5703 21.2779C38.1136 19.4836 37.0724 17.8926 35.6111 16.7558C34.1497 15.619 32.3514 15.0013 30.4999 15.0001H28.3999C27.8955 13.0488 26.9552 11.2373 25.6498 9.70171C24.3445 8.16614 22.708 6.94647 20.8634 6.1344C19.0189 5.32233 17.0142 4.93899 15.0001 5.01319C12.9861 5.0874 11.015 5.61722 9.23523 6.56283C7.45541 7.50844 5.91312 8.84523 4.7243 10.4727C3.53549 12.1002 2.73108 13.9759 2.37157 15.959C2.01205 17.9421 2.10678 19.9809 2.64862 21.9222C3.19047 23.8634 4.16534 25.6565 5.49994 27.1667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M27.1666 26.6667L20.4999 20L13.8333 26.6667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
							<div class="fallback">
								<input name="file" type="file" multiple>
								
							</div>
						</form>
					</div>	
				</div>
				<form>
					<div class="row">
						<div class="col-xl-6 mb-3">
							<label for="exampleFormControlInput1" class="form-label">Employee ID <span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
						</div>	
						<div class="col-xl-6 mb-3">
							<label for="exampleFormControlInput2" class="form-label">Employee Name<span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="exampleFormControlInput2" placeholder="">
						</div>	
						<div class="col-xl-6 mb-3">
							<label for="exampleFormControlInput3" class="form-label">Employee Email<span class="text-danger">*</span></label>
							<input type="email" class="form-control" id="exampleFormControlInput3" placeholder="">
						</div>
						<div class="col-xl-6 mb-3">
							<label for="exampleFormControlInput4" class="form-label">Password<span class="text-danger">*</span></label>
							<input type="password" class="form-control" id="exampleFormControlInput4" placeholder="">
						</div>
						<div class="col-xl-6 mb-3">
							<label class="form-label">Designation<span class="text-danger">*</span></label>
							<select class="default-select form-control">
								<option  data-display="Select">Please select</option>
								<option value="html">Software Engineer</option>
								<option value="css">Civil Engineer</option>
								<option value="javascript">Web Doveloper</option>
							</select>
						</div>	
						<div class="col-xl-6 mb-3">
							<label class="form-label">Department<span class="text-danger">*</span></label>
							<select class="default-select form-control">
								<option  data-display="Select">Please select</option>
								<option value="html">Software</option>
								<option value="css">Doit</option>
								<option value="javascript">Designing</option>
							</select>
						</div>
						<div class="col-xl-6 mb-3">
							<label class="form-label">Country<span class="text-danger">*</span></label>
							<select class="default-select form-control">
								<option  data-display="Select">Please select</option>
								<option value="html">Ind</option>
								<option value="css">USA</option>
								<option value="javascript">UK</option>
							</select>
						</div>
						<div class="col-xl-6 mb-3">
							<label for="exampleFormControlInput88" class="form-label">Mobile<span class="text-danger">*</span></label>
							<input type="number" class="form-control" id="exampleFormControlInput88" placeholder="">
						</div>
						<div class="col-xl-6 mb-3">
							<label class="form-label">Gender<span class="text-danger">*</span></label>
							<select class="default-select form-control">
								<option  data-display="Select">Please select</option>
								<option value="html">Male</option>
								<option value="css">Female</option>
								<option value="javascript">Other</option>
							</select>
						</div>
						<div class="col-xl-6 mb-3">
							<label for="exampleFormControlInput99" class="form-label">Joining Date<span class="text-danger">*</span></label>
							<input type="date" class="form-control" id="exampleFormControlInput99">
						</div>
						<div class="col-xl-6 mb-3">
							<label for="exampleFormControlInput8" class="form-label">Date of Birth<span class="text-danger">*</span></label>
							<input type="date" class="form-control" id="exampleFormControlInput8">
						</div>
						<div class="col-xl-6 mb-3">
							<label for="exampleFormControlInput10" class="form-label">Reporting To<span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="exampleFormControlInput10" placeholder="">
						</div>		
						<div class="col-xl-6 mb-3">
							<label class="form-label">Language Select<span class="text-danger">*</span></label>
							<select class="default-select form-control">
								<option  data-display="Select">Please select</option>
								<option value="html">English</option>
								<option value="css">Hindi</option>
								<option value="javascript">Canada</option>
							</select>
						</div>
						<div class="col-xl-6 mb-3">
							<label class="form-label">User Role<span class="text-danger">*</span></label>
							<select class="default-select form-control">
								<option  data-display="Select">Please select</option>
								<option value="html">Parmanent</option>
								<option value="css">Parttime</option>
								<option value="javascript">Per Hours</option>
							</select>
						</div>
						<div class="col-xl-12 mb-3">
							<label class="form-label">Address<span class="text-danger">*</span></label>
							<textarea rows="2" class="form-control"></textarea>
						</div>
						<div class="col-xl-12 mb-3">
							<label class="form-label">About<span class="text-danger">*</span></label>
							<textarea rows="2" class="form-control"></textarea>
						</div>	
					</div>
					<div>
						<button class="btn btn-primary me-1">Submit</button>
						<button class="btn btn-danger light ms-1">Cancel</button>
					</div>
				</form>
			  </div>
		  </div>
		</div>		
		<!-- Vertically centered modal -->		
        <!--**********************************
            Content body end
        ***********************************-->
		
        <!--**********************************
            Footer start
        ***********************************-->
        <?php include_once 'require_footer.php';?>
        <!--**********************************
            Footer end
        ***********************************-->
 
	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="./vendor/apexchart/apexchart.js"></script>
	
	 <script src="./vendor/peity/jquery.peity.min.js"></script>
	<!-- Dashboard 1 -->
	<script src="./js/dashboard/dashboard-2.js"></script>
	 
	<script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script src="./vendor/datatables/js/dataTables.buttons.min.js"></script>
	<script src="./vendor/datatables/js/buttons.html5.min.js"></script>
	<script src="./vendor/datatables/js/jszip.min.js"></script>
	<script src="./js/plugins-init/datatables.init.js"></script>
   
	<!-- Apex Chart -->
	
	
	

	<!-- Vectormap -->
   
    <script src="./js/custom.js"></script>
	<script src="./js/deznav-init.js"></script>
	
   
	
	
	
</body>
</html>