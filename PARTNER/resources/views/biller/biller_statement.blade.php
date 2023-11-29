
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
				<li class="breadcrumb-item"><a href="#">Biller</a></li>
				<li class="breadcrumb-item active" aria-current="page">Biller Statements</li>
			</ol>
		</nav>


		<div class="row">
			<!--**********************************
                    Start dynamic content
        ***********************************-->

			<div class="col-xl-12 col-lg-12 col-xxl-12 col-sm-12">
				<div class="card">
					<div class="card-body">



						<div class="row mt-1" id="filter_records_form">

							
								<div class="col-lg-3 mb-2">
									<div class="media">
										<div class="media-body">
											<span class="d-block  font-14 text-muted mb-2">From Date</span>
											<input type="text" class="form-control " name="from" id="from" value="2023-11-28 ">
										</div>
									</div>
								</div>

								<div class="col-lg-3 mb-2">
									<div class="media">

										<div class="media-body">
											<span class="d-block  font-14 text-muted mb-2">To Date</span>
											<input type="text" class="form-control " name="to" id="to" value=" 2023-11-28">
										</div>
									</div>
								</div>

								<div class="col-lg-3 mb-2">
									<div class="media">
										<div class="media-body">
											<button type="button" name="btn_filter_transactions" class=" mt-4 btn btn-sm btn-primary" onclick="filter_transactions();"> View Transactions </button>
										</div>
									</div>
								</div>
						

						</div>

						<hr>

						<div class="row">
							<div> <span class="float-left">
									<h6 class='text-muted '> Biller Transactions <small>(<span class="color5" id="duration"></span>)</small></h6>
								</span>
							</div>


							<div class="table-responsive recentOrderTable ">
								<table class="table table-striped" id="datatable">
									<thead >
										<tr>
											<th scope="col">Transaction Date</th>
											<th scope="col">Ref</th>
											<th scope="col">Payment Type</th>
											<th scope="col">Amount(E)</th>
											<th scope="col">Details</th>
											<th scope="col">Successfull</th>
										</tr>
									</thead>
									<tbody id="records_table">
									<tr>
        <td>2023-01-01</td>
        <td>TRX123456</td>
        <td>Payment</td>
        <td>E500.00</td>
        <td>Policy Renewal</td>
        <td>Yes</td>
    </tr>
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


@include('includes.footer')
