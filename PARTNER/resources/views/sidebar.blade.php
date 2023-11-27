<!--**********************************
            Sidebar start
        ***********************************-->
<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{ URL::to('/dashboard') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-home-2"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>

            @if(session("has_agent_services") )
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-menu-2"></i>
                    <span class="nav-text">Agent Services</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ URL::to('/create_customer') }}">Create Customer</a></li>   
                    <li><a href="{{ URL::to('/agent_statement') }}">Agent Statement</a></li> 
                    <li><a href="{{ URL::to('/agent_account') }}">Agent Account</a></li>
                    <li><a href="{{ URL::to('/sub_agents') }}">Manage Sub-agents</a></li>
                    <!-- <li><a href="#">Agent Commission</a></li> -->                            
                </ul>
            </li>
            @endif
            @if(session("has_biller_services") )
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-briefcase"></i>
                    <span class="nav-text">Biller Services</span>
                </a>
                <ul aria-expanded="false">
                <li><a href="{{ URL::to('/biller_statement') }}">Biller Statement</a></li> 
                    <li><a href="{{ URL::to('/biller_account') }}">Biller Account</a></li>  
                </ul>
            </li>
            

            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-share-1"></i>
                    <span class="nav-text">Disbursements</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ URL::to('/disburse') }}">Disburse</a></li>                    
                    <li><a href="{{ URL::to('/disbursement_history') }}">Disbursement History</a></li> 
                </ul>
            </li>
            @endif

            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-view-2"></i>
                    <span class="nav-text">Administration</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ URL::to('/profile') }}">Profile </a></li>         
                    <!-- <li><a href="#">Users</a></li>                     -->
                    <!-- <li><a href="#">Roles </a></li>                     -->
                    <!-- <li><a href="#">Logs</a></li>  -->
                </ul>
            </li>
           
        </ul>


    </div>
</div>
<!--**********************************
            Sidebar end
        ***********************************-->