<!DOCTYPE html>
<html lang="en">
@extends('layouts.dashBoardMain')


@section('contents')
<body>
  
  
  <div class="container">  
      <div class="mt-2 px-5 text-center bg-primary py-5">
        <h1 style="color: white">Make Deposit</h1>   
        <a href="/user_dashboard"><button style="color: blue">Home</button></a>  
             
      </div>

      
      <div class="row">
        <form id="paymentForm" method="POST" action="{{ route('storePaystackDetails') }}">
          @csrf


          <div class="row">
            <h6>Make Payment using Paystack</h6>
            <div class="col-6">
              <div class="form-group">
                <label for="email">Email Address</label>
                <input value="{{ $user->email }}" disabled type="email" name="email" id="email-address" required class="form-control"/>
              </div>
            </div>
            
            <div class="col-6"">
              <div class="form-group">
                <label for="amount">Amount</label>
                <input type="tel" name="amount" id="amount" class="form-control" required />
              </div>
            </div>

            
            <div class="col-6"">
              <div class="form-group">
                <label for="first-name">First Name</label>
                <input type="text" name="first_name" id="first-name" class="form-control"/>
              </div>
            </div>


            <div class="col-6"">
              <div class="form-group">
                <label for="last-name">Last Name</label>
                <input type="text" name="last_name" id="last-name" class="form-control" />
              </div>
            </div>
            <div class="col-6"">

            </div>                
                    
              <div class="form-submit">
                <button type="submit" class="btn btn-primary" onclick="payWithPaystack(event)"> Pay </button>
              </div>
          
            </div>
        </form>
      </div>

  </div>

<script src="https://js.paystack.co/v1/inline.js"></script> 
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@include('request')
@include('validateModule')


<script>
   const paymentForm = document.getElementById('paymentForm');
   paymentForm.addEventListener("submit", payWithPaystack, false);
    function payWithPaystack(e){
        e.preventDefault();

                    let handler = PaystackPop.setup({
                key: 'pk_test_d2981f741044e790b9c0babd864200547dc82bc8', // Replace with your public key
                email: document.getElementById("email-address").value,
                amount: document.getElementById("amount").value * 100,
                ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                // label: "Optional string that replaces customer email"
                onClose: function(){
                alert('Window closed.');
                },
                
                callback: function(response){
                let reference = response.reference;

                //verify payment
                $.ajax({
                type: "GET",
                url: "{{ URL::to('verify-paystack-payment')}}/"+reference,
               
                success: function(response){
                    if(response.status===true){
                        $('form').prepend(`
                            <h2>${response.message}</h2>
                        `)
                    }else{
                        $('form').prepend(`
                            <h2>Payment verification failed</h2>
                        `)
                    };
                }
            });
                }
            });

            handler.openIframe();
    }
</script>
@endsection
</body>


</html>