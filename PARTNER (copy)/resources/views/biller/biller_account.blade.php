@include('includes.topmenu')

@include('includes.side_nav')



<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
	<!-- row -->
	<div class="container-fluid">

		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Account</a></li>
				<li class="breadcrumb-item active" aria-current="page">Account</li>
			</ol>
		</nav>


		<div class="row">
			<!--**********************************
                    Start dynamic content
        ***********************************-->

			<div class="col-xl-12 col-lg-12 col-xxl-12 col-sm-12">
				<div class="card">
					<div class="card-body">



						<div class="row mt-1">

							<div class="col-lg-3  col-md-4  col-sm-6 mb-2">
								<div class="media">
									<div class="media-body">
										<span class="d-block  font-14 text-muted mb-2"> Name</span>
										<p class="font-16 text-dark" id="biller_name">Liberty Insurance </p>
									</div>
								</div>
							</div>

							<div class="col-lg-3  col-md-4  col-sm-6 mb-2">
								<div class="media">

									<div class="media-body">
										<span class="d-block  font-14 text-muted mb-2">Number</span>
										<p class="font-16 text-dark" id="biller_number">OO6/LIB/INS</p>
									</div>
								</div>
							</div> 

							<div class="col-lg-3  col-md-4  col-sm-6 mb-2">
								<div class="media">

									<div class="media-body">
										<span class="d-block  font-14 text-muted mb-2">Location</span>
										<p class="font-16 text-dark"> <span id="business_location"> Nairobi</span> </span></p>
									</div>
								</div>
							</div> 


							<div class="col-lg-3  col-md-4  col-sm-6 mb-2">
								<div class="media">
									<div class="media-body">
										<span class="d-block  font-14 text-muted mb-2">Phone</span>
										<p class="font-16 text-dark"> <span id="msisdn">0741000000 </span></p>
									</div>
								</div>
							</div>
						</div>

						<hr>

						<div class="row">

							<div class="col-lg-4  col-md-4  col-sm-6 mb-2">
								<div class="media">
									<div class="media-body">
										<span class="d-block  font-14 text-muted mb-2"> Account Balance
											<b>
												<i class="ml-2 flaticon-381-repeat-1" onclick="load_biller_data();"></i>
											</b> </span>
										<p class="font-16 text-dark" id="biller_acc_bal">E5,000,000 </p>
									</div>
								</div>
							</div>


						
						</div>
						<hr>
						<div class="row">
							<div> <span class="float-left">
									<h6 class='text-muted '>Recent Transactions </h6>
								</span>

								<span class="float-right">
									<b>
										<i class="ml-2 flaticon-381-repeat-1" onclick="load_biller_data();"></i>
									</b>
								</span>
							</div>


							<div class="table-responsive recentOrderTable">
								<table class="table table-striped">
									<thead>
										<tr>
											<th scope="col">Date</th>
											<th scope="col">Transaction Ref</th>
											<th scope="col">Transaction Type</th>
											<th scope="col">Amount(E)</th>
											<th scope="col">Details</th>
											<th scope="col">Successfull</th>
										</tr>
									</thead>
									<tbody id="billers_table">
									
    <!-- Example row with added "Details" information -->
    <tr>
        <td>2023-01-01</td>
        <td>TRX123456</td>
        <td>Payment</td>
        <td>E500.00</td>
        <td>Policy Renewal</td>
        <td>Yes</td>
    </tr>

    <!-- Add more rows with details as needed -->
</tbody>
								
								</table>
							</div>


						</div>


					</div>
				</div>
			</div>





			<!--**********************************
                    end dynamic content
        ***********************************-->

		</div>
	</div>
</div>
<!--**********************************
            Content body end
        ***********************************-->

<!--**********************************
            Footer start
        ***********************************-->

@include('includes.footer')