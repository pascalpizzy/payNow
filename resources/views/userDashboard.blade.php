<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from intez-html.vercel.app/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jul 2022 12:50:55 GMT -->
@extends('layouts.dashBoardMain')


@section('contents')
<body class="dashboard">

<div id="preloader">
    <i>.</i>
    <i>.</i>
    <i>.</i>
</div>

<div id="main-wrapper">


    <div class="header">
    <div class="container">
       <div class="row">
          <div class="col-xxl-12">
             <div class="header-content">
                <div class="header-left">
                   <div class="brand-logo"><a class="mini-logo" href="/"><img src="images/logoi.png" alt="" width="40"></a></div>
                   <div class="search">
                      <form action="#">
                         <div class="input-group"><input type="text" class="form-control" placeholder="Search Here"><span class="input-group-text"><i class="ri-search-line"></i></span></div>
                      </form>
                   </div>
                </div>
                <div class="header-right">
                   <div class="dark-light-toggle"><span class="dark"><i class="ri-moon-line"></i></span><span class="light"><i class="ri-sun-line"></i></span></div>
                   <div class="nav-item dropdown notification dropdown">
                      <div data-toggle="dropdown" aria-haspopup="true" class="" aria-expanded="false">
                         <div class="notify-bell icon-menu"><span><i class="ri-notification-2-line"></i></span></div>
                      </div>
                      <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu notification-list dropdown-menu dropdown-menu-right">
                         <h4>Recent Notification</h4>
                         <div class="lists">
                            <a class="" href="index-2.html#">
                               <div class="d-flex align-items-center">
                                  <span class="me-3 icon success"><i class="ri-check-line"></i></span>
                                  <div>
                                     <p>Account created successfully</p>
                                     <span>2020-11-04 12:00:23</span>
                                  </div>
                               </div>
                            </a>
                            <a class="" href="index-2.html#">
                               <div class="d-flex align-items-center">
                                  <span class="me-3 icon fail"><i class="ri-close-line"></i></span>
                                  <div>
                                     <p>2FA verification failed</p>
                                     <span>2020-11-04 12:00:23</span>
                                  </div>
                               </div>
                            </a>
                            <a class="" href="index-2.html#">
                               <div class="d-flex align-items-center">
                                  <span class="me-3 icon success"><i class="ri-check-line"></i></span>
                                  <div>
                                     <p>Device confirmation completed</p>
                                     <span>2020-11-04 12:00:23</span>
                                  </div>
                               </div>
                            </a>
                            <a class="" href="index-2.html#">
                               <div class="d-flex align-items-center">
                                  <span class="me-3 icon pending"><i class="ri-question-mark"></i></span>
                                  <div>
                                     <p>Phone verification pending</p>
                                     <span>2020-11-04 12:00:23</span>
                                  </div>
                               </div>
                            </a>
                            <a href="notification.html">More<i class="ri-arrow-right-s-line"></i></a>
                         </div>
                      </div>
                   </div>
                   
                   <div class="dropdown profile_log dropdown">
                      <div data-toggle="dropdown" aria-haspopup="true" class="" aria-expanded="false">
                         <div class="user icon-menu active"><span><i class="ri-user-line"></i></span></div>
                      </div>
                      <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu dropdown-menu-right">
                         <div class="user-email">
                            <div class="user">
                               <span class="thumb"><img src="images/profile/3.png" alt=""></span>
                               <div class="user-info">
                                  <h5>{{ $loggedInUser->name }}</h5>
                                  <span>{{ $loggedInUser->email }}</span>
                               </div>

                               
                            </div>
                         </div>
                         <a class="dropdown-item" href="profile.html"><span><i class="ri-user-line"></i></span>Profile</a>
                         <a class="dropdown-item" href="balance.html"><span><i class="ri-wallet-line"></i></span>Balance</a>
                         <a class="dropdown-item" href="settings-profile.html"><span><i class="ri-settings-3-line"></i></span>Settings</a>
                         <a class="dropdown-item" href="settings-activity.html"><span><i class="ri-time-line"></i></span>Activity</a>
                         <a class="dropdown-item" href="lock.html"><span><i class="ri-lock-line"></i></span>Lock</a>
                         <a class="dropdown-item logout" href="signin.html"><i class="ri-logout-circle-line"></i>Logout</a>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>

    <div class="sidebar">
    <div class="brand-logo"><a class="full-logo" href="/"><img src="images/logoi.png" alt="" width="30"></a></div>
    <div class="menu">
        <ul>
            <li><a href="index.html">
                    <span><i class="ri-home-5-line"></i></span>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a href="balance.html">
                    <span><i class="ri-wallet-line"></i></span>
                    <span class="nav-text">Wallet</span>
                </a>
            </li>
            <li><a href="bill.html">
                    <span><i class="ri-secure-payment-line"></i></span>
                    <span class="nav-text">Payment</span>
                </a>
            </li>
            <li><a href="invoice.html">
                    <span><i class="ri-file-copy-2-line"></i></span>
                    <span class="nav-text">Invoice</span>
                </a>
            </li>
            <li><a href="settings-profile.html">
                    <span><i class="ri-settings-3-line"></i></span>
                    <span class="nav-text">Settings</span>
                </a>
            </li>
            <li class="logout"><a href="signin.html">
                    <span><i class="ri-logout-circle-line"></i></span>
                    <span class="nav-text">Signout</span>
                </a>
            </li>
        </ul>
    </div>
</div>

    <div class="content-body">
        <div class="container">
            <div class="page-title">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-4">
                        <div class="page-title-content">
                            <h3>Welcome {{ $loggedInUser->name }}</h3>
                            <p class="mb-2">your unique ID is || Paynow-{{ $loggedInUser->unique_id }}</p>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="breadcrumbs"><a href="#">Home </a><span><i
                                    class="ri-arrow-right-s-line"></i></span><a href="#">Dashboard</a></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Account Statistics</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="stat-widget d-flex align-items-center">
                                        <div class="widget-icon me-3 bg-primary"><span><i
                                                    class="ri-wallet-line"></i></span></div>
                                        <div class="widget-content">
                                            <h3>{{ $loggedInUser->balance }}.00</h3>
                                            <p>Flutterwave Balance</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="stat-widget d-flex align-items-center">
                                        <div class="widget-icon me-3 bg-secondary"><span><i
                                                    class="ri-wallet-2-line"></i></span></div>
                                        <div class="widget-content">
                                            <h3>245860</h3>
                                            <p>Paystack Balance</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="stat-widget d-flex align-items-center">
                                     
                                        <div class="widget-content balance-stats active">
                                            <a href="/payment-page"><h3>Add Money</h3></a>
                                            <p>flutter </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="stat-widget d-flex align-items-center">
                                        
                                        <div class="widget-content balance-stats active">
                                           <a href="/paystack_payment"><h3>Add Money</h3></a>
                                            <p>paystack </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div id="user-activity" class="card" data-aos="fade-up">
                        <div class="card-header">
                            <h4 class="card-title">Expenses</h4>
                        </div>
                        <div class="card-body">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <canvas id="activity"></canvas>
                        </div>
                    </div>
                </div> 
               <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Unpaid Bills</h4>
                        </div>
                        <div class="card-body">
                            <div class="unpaid-content">
                                <ul>
                                    <li>
                                        <p class="mb-0">Service</p>
                                        <h5 class="mb-0">Youtube Chanel</h5>
                                    </li>
                                    <li>
                                        <p class="mb-0">Issued</p>
                                        <h5 class="mb-0">March 17, 2021</h5>
                                    </li>
                                    <li>
                                        <p class="mb-0">Payment Due</p>
                                        <h5 class="mb-0">17 Days</h5>
                                    </li>
                                    <li>
                                        <p class="mb-0">Paid</p>
                                        <h5 class="mb-0">0.00</h5>
                                    </li>
                                    <li>
                                        <p class="mb-0">Amount to pay</p>
                                        <h5 class="mb-0">$ 532.69</h5>
                                    </li>
                                    <li>
                                        <p class="mb-0">Payment Method</p>
                                        <h5 class="mb-0">Paypal</h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}
              
                <div class=" col-xxl-4 col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Total Balance Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="total-balance">
                                        <p style="color: rgb(3, 194, 98)">Total Balance including pending and successful payment</p>
                                        <h2>#{{ $userTransactionsTotal }}.00</h2>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="balance-stats active">
                                        <p>Last Month</p>
                                        <h3>$</h3>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="balance-stats">
                                        <p>Expenses</p>
                                        <h3>$</h3>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="balance-stats">
                                        <p>Taxes</p>
                                        <h3>$</h3>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="balance-stats">
                                        <p>Debt</p>
                                        <h3>$</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="credit-card visa">
                                <div class="type-brand">
                                    <h4>Debit Card</h4>
                                    <img src="images/cc/visa.png" alt="">
                                </div>
                                <div class="cc-number">
                                    <h6>1234</h6>
                                    <h6>5678</h6>
                                    <h6>7890</h6>
                                    <h6>9875</h6>
                                </div>
                                <div class="cc-holder-exp">
                                    <h5>{{ $loggedInUser->name }}</h5>
                                    <div class="exp"><span>EXP:</span><strong>12/21</strong></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12">
                            <div class="credit-card payoneer">
                                <div class="type-brand">
                                    <h4>Debit Card</h4>
                                    <img src="images/cc/payoneer.png" alt="">
                                </div>
                                <div class="cc-number">
                                    <h6>1234</h6>
                                    <h6>5678</h6>
                                    <h6>7890</h6>
                                    <h6>9875</h6>
                                </div>
                                <div class="cc-holder-exp">
                                    <h5>{{ $loggedInUser->name }}</h5>
                                    <div class="exp"><span>EXP:</span><strong>12/21</strong></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class=" col-xxl-4 col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Statistics</h4>
                        </div>
                        <div class="card-body">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <canvas id="most-selling-items"></canvas>
                        </div>
                    </div>
                </div> --}}
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Transaction History</h4>
                            <a href="#">See more</a>
                        </div>
                        <div class="card-body">
                            
                            <div class="invoice-content">
                                
                                <ul>
                                    @foreach ($userTransactions as $userTransaction )

                                   
                                    <li class="d-flex justify-content-between active">
                                        
                                        <div class="d-flex align-items-center">
                                          
                                            {{-- <div class="invoice-user-img me-3"><img src="images/avatar/1.jpg" alt=""
                                                    width="50"></div> --}}
                                            <div class="invoice-info">
                                                <h5 class="mb-0">{{ $userTransaction->amount }}</h5>
                                                <p>{{ $userTransaction->created_at }}</p>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <h5 class="mb-2">{{ $userTransaction->unique_id }}</h5>
                                            <span class=" text-white bg-danger">{{ $userTransaction->status }}</span>

                                        </div>
                                        
                                    </li>   
                                    @endforeach                                     
                                    
                                   
                                </ul>
                              
                                 
                            </div>
                            
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>



</div>

@endsection

</body>


<!-- Mirrored from intez-html.vercel.app/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jul 2022 12:51:02 GMT -->
</html>