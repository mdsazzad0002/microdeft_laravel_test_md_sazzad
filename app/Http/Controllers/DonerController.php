<?php

namespace App\Http\Controllers;

use App\Models\doner;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class DonerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $payment_mdthod = PaymentMethod::get();
        $doners  = doner::paginate(10);
        return view('welcome', compact('doners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $payment_mdthod = PaymentMethod::get();

        return view('donar_create', compact('payment_mdthod'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            ['name' => 'required'],
            ['phone' => 'required'],
            ['address' => 'required'],
            ['amount' => 'required'],
            ['payment_method_id' => 'required'],
        );


        $new_donar = new doner;
        $new_donar->name = $request->name;
        $new_donar->phone = $request->phone;
        $new_donar->address = $request->address;
        $new_donar->amount = $request->amount;
        $new_donar->payment_method_id = $request->payment_method_id;
        $new_donar->save();

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(doner $doner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(doner $doner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, doner $doner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(doner $doner)
    {
        //
    }

    public function show_by_method($show_by_method){
        $doners  = doner::where('payment_method_id', $show_by_method)->paginate(10);
        return view('view_by_method', compact('doners'));
    }
}
