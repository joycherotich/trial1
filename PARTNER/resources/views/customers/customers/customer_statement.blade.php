@include('includes.topmenu')
@include('includes.side_nav')

<div class="content-body">
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Customers</a></li>
                <li class="breadcrumb-item active" aria-current="page">Customers Payment</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-xxl-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mt-1" id="filter_records_form">
                            <div class="col-lg-3 mb-2">
                                <div class="media">
                                    <!-- Your filter form goes here -->
                                </div>
                            </div>
                            <!-- Add more filter columns if needed -->

                        </div>
                        <hr>

                        <div class="row">
                            <div>
                                <span class="float-left">
                                    <h6 class='text-muted '> Customer Payment Details <small><span class="color5" id="duration"></span></small></h6>
                                </span>
                            </div>

                            <div class="table-responsive recentOrderTable">
                                
                                    <table class="table table-striped" id="datatable">
                                    <tbody id="records_table">
                                    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Payment Cycle ID</th>
        <th scope="col">Full Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone Number</th>
        <th scope="col">ID Number</th>
        <th scope="col">Amount</th>
        <th scope="col">Payment Reference</th>
       
    </tr>
</thead>
    <tr>
        <td>2</td>
        <td>Annually</td>
        <td>JOY KIRUI CHEROTICH</td>
        <td>letimjoy7@gmail.com</td>
        <td>0741099846</td>
        <td>123456789</td>
        <td>500.00</td>
        <td>RTWYSND</td>
       
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
</div>



@include('includes.footer')
