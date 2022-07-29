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

        <div class="main">
            <form  method="POST">
                @csrf
                {{-- <div>
                  Your order is ₦54,600
                </div> --}}
               <div class="row">
                <h6>Make Payment using FlutterWave</h6>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="{{ $user->name }}" disabled id="name" required placeholder="Enter Full name" class="form-control">
                            <span class="err_name text-danger"></span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="{{ $user->email }}" disabled id="email" required placeholder="Enter Full Email" class="form-control">
                            <span class="err_email text-danger"></span>
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="amount">Amount</label>
                        <input type="number" name="amount" placeholder="Enter Amount" id="amount" class="form-control">
                        <span class="err_amount text-danger"></span>
                    </div>
                    <div class="col-6">
                        <label for="number">Phone Number</label>
                        <input type="number" name="number" placeholder="Enter Number" id="number" class="form-control">
                        <span class="err_number text-danger"></span>
                    </div>
               </div>
                <div class="for-group mt-2">
                    <button class="btn btn-primary" id="makePaymentForm" type="button">Pay Now</button>
                </div>
              </form>
        </div>
    </div>

    


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://checkout.flutterwave.com/v3.js"></script>
    @include('request')
    @include('validateModule')
<script>
    // $(function(){
    //     $("#makePaymentForm").submit(function(e){
    //         e.preventDefault();
            

    //         //make a payment
    //         makePayment(amount,email,phone,name);
    //     });
    // });
    $(document).on('click', '#makePaymentForm', function(){
        makePayment($(this))
    })
  async function makePayment(a) {

    const mainText = $(a).html();

    var name = $("#name").val();
    var email = $("#email").val();
    var number = $("#number").val();
    var amount = $("#amount").val();

    $(a).html('Loading.....').attr({'disabled':true});
    const returnedData = await thePostRequest('{{ route('storeDetails') }}', JSON.stringify({name, email, amount, number}));
    const {status, message, data} = returnedData;

    $(a).html(mainText).attr({'disabled':false});
    if(status === false){
        return validateModule.handleErrorStatement(message, '../login', 'on');
    }

    FlutterwaveCheckout({
      public_key: "FLWPUBK_TEST-3a13a07705641afd4d33283df01dddcf-X",
      tx_ref: data.unique_id,
      amount:amount,
      currency: "NGN",
      payment_options:" ",
      customer: {
        email:email,
        phone_number:number,
        name:name,
      },

      callback: function(data){
            var transaction_id = data.transaction_id;
            
            //make ajax request
            var _token = $("input[name = '_token']").val();
             $.ajax({
                type: "POST",
                url: "{{ URL::to('verify_payment') }}",
                data: {
                    transaction_id,
                    _token
                },
                //dataType: "dataType",
                success: function(response){
                    console.log(response);

                }
             });
      },

      onclose: function(){

      },

      customizations: {
        title: "The Titanic Store",
        description: "Payment for an awesome cruise",
        logo: "https://www.logolynx.com/images/logolynx/22/2239ca38f5505fbfce7e55bbc0604386.jpeg",
      },
    });
  }
</script>

@endsection
</body>


</html>