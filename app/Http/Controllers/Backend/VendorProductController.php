<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // index page
    public function containerDetailsView()
    {
        return view('admin.vender_product.container_details.index');
    }

    public function conventionalChargesView()
    {
        return view('admin.vender_product.conventional_charges.index');
    }
    public function additionalChargeView()
    {
        return view('admin.vender_product.additional_charge.index');
    }
    public function operationChargeView()
    {
        return view('admin.vender_product.operation_charges.index');
    }

    // create page
    public function containerDetailsCreate()
    {
        return view('admin.vender_product.container_details.create');
    }
    public function conventionalChargesCreate()
    {
        return view('admin.vender_product.conventional_charges.create');
    }
    public function additionalChargeCreate()
    {
        return view('admin.vender_product.additional_charge.create');
    }
    public function operationChargeCreate()
    {
        return view('admin.vender_product.operation_charges.create');
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
