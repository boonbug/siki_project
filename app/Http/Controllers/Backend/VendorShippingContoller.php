<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorShippingContoller extends Controller
{
    // index
    public function SCOContainersView()
    {
        return view('admin.vender_shipping.sco_containers.index');
    }
    public function SCOConventionalCargoView()
    {
        return view('admin.vender_shipping.sco_conventional_cargo.index');
    }
    public function SCOAdditionalDemmurageView()
    {
        return view('admin.vender_shipping.sco_additional_demmurage.index');
    }

    // create
    public function SCOContainersCreate()
    {
        return view('admin.vender_shipping.sco_containers.create');
    }
    public function SCOConventionalCargoCreate()
    {
        return view('admin.vender_shipping.sco_conventional_cargo.create');
    }
    public function SCOAdditionalDemmurageCreate()
    {
        return view('admin.vender_shipping.sco_additional_demmurage.create');
    }
}
