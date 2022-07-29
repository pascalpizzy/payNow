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
                                  <h5></h5>
                                  <span></span>
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
                            <h3>Welcome </h3>
                            
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="breadcrumbs"><a href="#">Home </a><span><i
                                    class="ri-arrow-right-s-line"></i></span><a href="#">Dashboard</a></div>
                    </div>
                </div>
            </div>
            <div class="row">
                
                           
                

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Users Transaction History</h4>
                            <a href="#">See more</a>
                        </div>
                        <div class="card-body">
                            
                            <div class="invoice-content">
                                
                                <ul>


                                    <div class="col-md-12 form-group" style="margin-top:20px; margin-bottom:20px;">
                                        <table class="table" id="dataTable">
                                            <thead>
                                                <tr>
                                                <th scope="col">S/NO</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Transaction ID</th>
                                                <th scope="col">Created AT</th>
                                                <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                            
                                            @if(count($allPayment)>0)
                                                @php $count = 1 @endphp
                                                @foreach ($allPayment as $allPayments)
                            
                                                    <tr>
                                                    <td>{{$count}}</td>
                                                    <td>N{{$allPayments->amount}}</td>
                                                    <td>{{$allPayments->email}}</td>
                                                    <td>{{$allPayments->unique_id}}</td>
                                                    <td>{{$allPayments->created_at}}</td>
                                                    <td class=" text-white bg-danger">{{$allPayments->status}}</td>
                                                   
                                                    {{-- <td>
                                                        <div style="width:100px; cursor:pointer;">
                                                        <a href="{{ $imageName }}" data-gallery="{{ $all_slider->unique_id }}" class="portfolio-lightbox preview-link" title="{{$all_slider->title}}">
                                                            <img src="{{ $imageName }}" style="width:100%;" />
                                                        </a>
                                                        </div>
                                                    </td>
                                                    <td><a href="/edit_slider/{{ $all_slider->unique_id }}" class="btn btn-info">Edit</a> </td>
                                                    <td><button onclick=" if( confirm('Do you really want to delete slider ?') === true ){ window.location.href = 'delete_slider/{{ $all_slider->unique_id }}' } " type="button" class="btn btn-danger"><a>Delete</a></button></td> --}}
                                                    </tr>
                            
                                                @php $count++ @endphp
                                                @endforeach
                                            @else
                                            <tr>
                                                <td colspan="6">
                                                    <div class="col-md-12" style="margin-top:20px;">
                                                        <p class="alert alert-warning text-center">No Data Available</p>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endif
                                            </tbody>
                                    </table>
                            
                                    </div>
                            
                                    
                                   
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