@include('includes.topmenu')
@include('includes.side_nav')

<div class="content-body">
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Customers</a></li>
                <li class="breadcrumb-item active" aria-current="page">Customers Details</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-xxl-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mt-1" id="filter_records_form">
                            <div class="col-lg-3 mb-2">
                                <div class="media">
                                 
                                </div>
                            </div>
                           

                        </div>
                        <hr>

                        <div class="row">
                            <div>
                                <span class="float-left">
								<h6 class='text-muted '> Customer Details <small><span class="color5" id="duration"></span></small></h6>
                                </span>
                            </div>

                            <div class="table-responsive recentOrderTable ">
                                <table class="table table-striped" id="datatable">
                                    <thead>
                                        <tr>

                                            <th scope="col">Full Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone Number</th>
                                            <th scope="col">ID Number</th>
                                        </tr>
                                    </thead>
                                    <tbody id="records_table">
									<tr>
                                        
                                        <td>Joy Kirui Cherotich</td>
                                        <td>letim@gmail.com</td>
                                        <td>0741099846</td>
                                        <td>38458778</td>
                                        
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
