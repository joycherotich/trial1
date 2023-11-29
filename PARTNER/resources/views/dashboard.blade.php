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
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>


        <div class="row">
            <!--**********************************
            Start dynamic content
            ***********************************-->

          <div class="col-xl-2 col-xxl-4 col-lg-2 col-sm-4 col-md-4">
                <div class="card gradient-bx text-white bg-color1 rounded">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <p class="mb-1">Customer Account</p>
                                <div class="center d-flex flex-wrap">
                                    <h2 class="fs-20 font-w300 text-white mb-0 mr-3" id="consumer_dsb_bal">E200,000</h2>
                                    <div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            
             <div class="col-xl-2 col-xxl-4 col-lg-2 col-sm-4 col-md-4">
                <div class="card gradient-bx text-white bg-color2 rounded">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <p class="mb-1">Biller Account Balance</p>
                                <div class="center d-flex flex-wrap">
                                    <h2 class="fs-20 font-w300 text-white mb-0 mr-3" id="agent_dsb_acc_bal">E5,000,000</h2>
                                    <div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-xxl-4 col-lg-2 col-sm-4 col-md-4">
                <div class="card gradient-bx text-white bg-color3 rounded">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <p class="mb-1">.</p>
                                <div class="center d-flex flex-wrap">
                                    <h2 class="fs-20 font-w300 text-white mb-0 mr-3" id="agent_dsb_comm_bal">.</h2>
                                    <div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            

            <div class="row">

            </div>

                        <div class="col-xl-12 col-lg-12 col-md-12  col-sm-12">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Recent Customer Transaction</h4>

                        <span class="float-right">
                            <button class="btn btn-xs btn-primary" onclick="load_agent_data();"> <i class="flaticon-381-repeat-1"></i> </button>
                        </span>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive recentOrderTable">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">Transaction Ref</th>
                                        <th scope="col">Payment Type</th>
                                        <th scope="col">Amount(E)</th>
                                        <th scope="col">Details</th>
                                        <th scope="col">Successfull</th>
                                    </tr>
                                </thead>
                                <tbody id="customers_table">
                                <tr>
        <td>2023-01-01</td>
        <td>TRX123456</td>
        <td>Payment</td>
        <td>$500.00</td>
        <td>Policy Renewal</td>
        <td>Yes</td>
    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            
        <div class="col-xl-12 col-lg-12   col-xxl-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Recent Biller Transaction</h4>
                        <span class="float-right">
                            <button class="btn btn-xs btn-primary" onclick="load_biller_data();"> <i class="flaticon-381-repeat-1"></i> </button>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive recentOrderTable">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">Transaction Ref</th>
                                        <th scope="col">Payment Type</th>
                                        <th scope="col">Amount(E)</th>
                                        <th scope="col">Details</th>
                                        <th scope="col">Successfull</th>
                                    </tr>
                                </thead>
                                <tbody id="biller_table">
                                <tr>
        <td>2023-01-01</td>
        <td>TRX123456</td>
        <td>Payment</td>
        <td>$500.00</td>
        <td>Policy Renewal</td>
        <td>Yes</td>
    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            
            <!--  -->

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
