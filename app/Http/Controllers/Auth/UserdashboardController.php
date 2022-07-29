<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\FlutterPayment;

class UserdashboardController extends Controller
{
    function __construct(User $user, FlutterPayment $flutterPayment)
    {
        $this->user = $user;
        $this->flutterPayment = $flutterPayment;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        


        $loggedInUser = $this->user::where([
            ['unique_id', '=',auth()->user()->unique_id]
        ])->first();

        $userTransactions = $this->flutterPayment::where([
            ['user_unique_id', '=', auth()->user()->unique_id]
        ])->orderBy('id', 'desc')->get();


        $userTransactionsTotal = $this->flutterPayment::where([
            ['user_unique_id', '=', auth()->user()->unique_id]
        ])->sum('amount');

        

        return view('userDashboard', ['loggedInUser' => $loggedInUser, 'userTransactions' => $userTransactions, 'userTransactionsTotal'=> $userTransactionsTotal]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
