@extends('admin.layout.app')
@extends('admin.layout.footer')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')
@section('title', 'Vender')
@section('admin_main_content')


{{-- vendor menu --}}
<div class="col-sm-12 user-profile">
    <div class="card hovercard text-center">
      <div class="cardheader"></div>
      <div class="user-image">
        <div class="avatar"><img alt="" src="{{ asset('assets/images/avatar/1.jpg') }}"></div>
      </div>
      <div class="info">
        <div class="row">
          <div class="col-sm-6 col-lg-4 order-sm-1 order-xl-0">
          </div>
          <div class="col-sm-12 col-lg-4 order-sm-0 order-xl-1">
            <div class="user-designation">
              <div class="title"><a target="_blank" href="">Mark jecno</a></div>
            </div>
          </div>
        </div>
      </div>
       <div class="project-list" style="display:flex;justify-content:center">
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
            {{-- href ma aaya vender.show function aavse --}}
            <li class="nav-item"><a class="nav-link active"  href="vender-profile.php">
                <i class="icofont icon-user"></i>Profile</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('containerDetailsView') }}" role="tab">
               <i class="icofont icon-package"></i>Products</a></li>
            <li class="nav-item"><a class="nav-link"   href="{{ route('SCOContainersView') }}" >
                <i class="icofont icon-truck"></i>Shipping line</a></li>
            <li class="nav-item"><a class="nav-link"   href="{{ route('vender_transporter.index') }}" >
               <i class="icofont icofont-delivery-time"></i>Transporters</a></li>
              <li class="nav-item"><a class="nav-link" href="#top-contact">
                <i class="icofont icon-pencil"></i>Edit vendor</a></li>
              <li class="nav-item"><a class="nav-link"  href="#top-contact" >
                <i class="icofont icon-trash"></i>Delete vendor</a></li>
          </ul>
        </div>

      </div>
    </div>
    </div>
</div>
{{-- end vendor menu --}}




<div class="container-fluid">


    <div class="row">
        <div class="col-sm-12">
            <div class="card">

                <div class="card-body">
                    <div class="horizontal-wizard-wrapper">
                        <div class="row g-3">

                            <div class="col-12 main-horizontal-header">
                                <div class="nav nav-pills horizontal-options" id="container-details" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="inquiry-wizard-tab" data-bs-toggle="pill" href="#inquiry-wizard" role="tab" aria-controls="inquiry-wizard" aria-selected="false">
                                        <div class="horizontal-wizard">
                                            <div class="stroke-icon-wizard"><i class="fa-solid fa-people-group"></i></div>
                                            <div class="horizontal-wizard-content">
                                                <h6>Additional charge</h6>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="horizontal-wizard-content">
                                        <a href="{{ route('additionalChargeView') }}" class="btn btn-md  btn-dark">Product</a>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="tab-content dark-field" id="container-details">
                                        <form class="theme-form row g-3 needs-validation custom-input" novalidate="">
                                            <div class="col-12">
                                                <div class="formbox">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h3>Skilled staff</h3>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">container</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Day</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3"><select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Hours</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select></div>
                                                                <div class="col-md-3"><select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Price</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="formbox">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h3>Alteration Fees</h3>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">container</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Day</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3"><select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Hours</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select></div>
                                                                <div class="col-md-3"><select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Price</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="formbox">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h3>Certification Fees</h3>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">container</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Day</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3"><select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Hours</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select></div>
                                                                <div class="col-md-3"><select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Price</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="formbox">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h3>Cancellation Fees</h3>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">container</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Day</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3"><select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Hours</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select></div>
                                                                <div class="col-md-3"><select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Price</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="formbox">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h3>Printing per pages</h3>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">container</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Day</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3"><select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Hours</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select></div>
                                                                <div class="col-md-3"><select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Price</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="formbox">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h3>Alteration for Containers</h3>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">container</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Day</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3"><select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Hours</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select></div>
                                                                <div class="col-md-3"><select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Price</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="formbox">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h3>Quay side bagging by the consignee or agent</h3>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">container</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Day</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3"><select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Hours</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select></div>
                                                                <div class="col-md-3"><select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Price</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="formbox">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h3>Transfer within the Port Area at customer's request or shut-out containers not removed from the port</h3>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">container</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Day</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3"><select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Hours</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select></div>
                                                                <div class="col-md-3"><select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Price</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="formbox">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h3>Late Acceptance of Export cargo</h3>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">container</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Day</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3"><select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Hours</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select></div>
                                                                <div class="col-md-3"><select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Price</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="formbox">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h3>Remarshalling Charges</h3>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">container</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Day</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3"><select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Hours</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select></div>
                                                                <div class="col-md-3"><select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Price</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="formbox">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h3>Overnight Loaded Truck Charges</h3>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">container</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Day</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3"><select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Hours</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select></div>
                                                                <div class="col-md-3"><select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Price</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="formbox">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h3>Overnight Imported Motor Vehicles</h3>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">container</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Day</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3"><select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Hours</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select></div>
                                                                <div class="col-md-3"><select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Price</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="formbox">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h3>Management or supervisory staff</h3>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">container</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Day</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3"><select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Hours</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select></div>
                                                                <div class="col-md-3"><select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Price</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="formbox">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h3>Fire appliance inclusive of minimum crew for non operational activities</h3>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">container</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Day</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3"><select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Hours</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select></div>
                                                                <div class="col-md-3"><select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Price</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="formbox">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h3>Tier 1 Storage Charges Local</h3>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">container</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Day</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3"><select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Hours</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select></div>
                                                                <div class="col-md-3"><select class="form-select" required="">
                                                                        <option selected="" disabled="" value="">Price</option>
                                                                        <option>kPA </option>
                                                                        <option>shipping line </option>
                                                                        <option>transporter</option>
                                                                        <option>CFS</option>
                                                                    </select></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-primary" type="submit">Create Product</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
