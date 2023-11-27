@include('topbar')
@include('sidebar')

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

            @if(session("has_consumer_services") )
            <div class="col-xl-2 col-xxl-4 col-lg-2 col-sm-4 col-md-4">
                <div class="card gradient-bx text-white bg-color1 rounded">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <p class="mb-1">Consumer Account</p>
                                <div class="center d-flex flex-wrap">
                                    <h2 class="fs-20 font-w300 text-white mb-0 mr-3" id="consumer_dsb_bal">.</h2>
                                    <div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @endif

            @if(session("has_agent_services") )
            <div class="col-xl-2 col-xxl-4 col-lg-2 col-sm-4 col-md-4">
                <div class="card gradient-bx text-white bg-color2 rounded">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <p class="mb-1">Total amount</p>
                                <div class="center d-flex flex-wrap">
                                    <h2 class="fs-20 font-w300 text-white mb-0 mr-3" id="agent_dsb_acc_bal">.</h2>
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
                                <p class="mb-1">Insurance Account</p>
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
            @endif

            @if(session("has_biller_services") )
            <div class="col-xl-2 col-xxl-4 col-lg-2  col-sm-4 col-md-4">
                <div class="card gradient-bx text-white bg-color4 rounded">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <p class="mb-1"></p>
                                <div class="center d-flex flex-wrap">
                                    <h2 class="fs-20 font-w300 text-white mb-0 mr-3" id="biller_dsb_comm_bal">.</h2>
                                    <div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @endif

            <div class="row">

            </div>

            @if(session("has_agent_services") )
            <div class="col-xl-12 col-lg-12 col-md-12  col-sm-12">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Recent Insurance Transaction</h4>

                        <span class="float-right">
                            <button class="btn btn-xs btn-primary" onclick="load_customer_data();"> <i class="flaticon-381-repeat-1"></i> </button>
                        </span>
                    </div>
                    <div class="card-body">

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
                                <tbody id="agents_table">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            @endif

            @if(session("has_biller_services") )
            <div class="col-xl-12 col-lg-12   col-xxl-12 col-sm-12">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Recent Customer Transaction</h4>

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
                                        <th scope="col">Transaction Type</th>
                                        <th scope="col">Amount(E)</th>
                                        <th scope="col">Details</th>
                                        <th scope="col">Successfull</th>
                                    </tr>
                                </thead>
                                <tbody id="biller_table">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            @endif

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

@include('footer')
<script>
    $(document).ready(function() {

        load_consumer_data();
        load_agent_data();
        load_biller_data();
    });


    function load_consumer_data() {
        $('#master_loader').show();

        $.ajax({
            type: 'GET',
            url: '<?php echo url("/load_consumer_dashboard_metrics"); ?>',
            success: function(data) {

                if (data.success) {
                    var bal = to_cash(data.balance_resp.available_balance);
                    $("#consumer_dsb_bal").html(currency + "" + bal);

                } else {}

            },
            error: function(data) {},
            complete: function(data) {
                $('#master_loader').hide();
            }
        });

    } //close fxn


    function load_agent_data() {

        $('#master_loader').show();
        $("#agents_table").html("");
        $.ajax({
            type: 'GET',
            url: '<?php echo url("/load_agent_dashboard_metrics"); ?>',
            success: function(data) {

                if (data.success) {

                    var bal = to_cash(data.balance_resp.available_balance);
                    var comm_bal = to_cash(data.balance_resp.commission_balance);
                    $("#agent_dsb_acc_bal").html(currency + "" + bal);
                    $("#agent_dsb_comm_bal").html(currency + "" + comm_bal);


                    var ministatement_records = data.ministatement_resp;
                    var c_content = "";

                    $.each(ministatement_records, function(key, value) {

                        var status = value.transaction_status_id;

                        c_content = c_content + '<tr> <td>' + format_datetime(value.transaction_date) +
                            '</td> <td>' + value.transaction_reference +
                            '</td> <td>' + value.short_description +
                            '</td> <td>' + to_cash(value.transaction_amount / base_val) +
                            '</td> <td>' + value.text +
                            '</td> <td>' + format_boolean_outputs(value.transaction_status_id) +
                            '</td> </tr>';
                    });

                    $("#agents_table").html(c_content);

                } else {}

            },
            error: function(data) {}, 
             complete: function(data) {
                $('#master_loader').hide();
            }
        });

    } //close fxn


    function load_biller_data() {
        $('#master_loader').show();
        $("#biller_table").html("");
        $.ajax({
            type: 'GET',
            url: '<?php echo url("/load_biller_dashboard_metrics"); ?>',
            success: function(data) {

                if (data.success) {
                    var bal = to_cash(data.balance_resp.available_balance);
                    $("#biller_dsb_comm_bal").html(currency + "" + bal);

                    var ministatement_records = data.ministatement_resp;
                    var c_content = "";

                    $.each(ministatement_records, function(key, value) {

                        var status = value.transaction_status_id;

                        c_content = c_content + '<tr> <td>' + format_datetime(value.transaction_date) +
                            '</td> <td>' + value.transaction_reference +
                            '</td> <td>' + value.short_description +
                            '</td> <td>' + to_cash(value.transaction_amount / base_val) +
                            '</td> <td>' + value.text +
                            '</td> <td>' + format_boolean_outputs(value.transaction_status_id) +
                            '</td> </tr>';
                    });

                    $("#biller_table").html(c_content);

                } else {}

            },
            error: function(data) {},
            complete: function(data) {
                $('#master_loader').hide();
            }
        });

    } //close fxn
</script>