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

                            <div class="col-12">
                                <div class="tab-content dark-field" id="container-details">
                                    <div class="tab-pane fade show active" id="wizard-info" role="tabpanel" aria-labelledby="wizard-info-tab">
                                        <div class="card-header pt-20">
                                                <h4>Transit conventional details</h4>
                                                <a href="{{ route('SCOContainersView') }}" class="btn btn-primary float-end" style="margin-top:-35px;">SCO Containers</a>
                                        </div>
                                        <form class="theme-form row g-3 needs-validation custom-input" novalidate="">
                                            <div class="col-3">

                                                <select class="form-select" required="">
                                                    <option selected="" disabled="" value="">Delivery Order - Destination</option>
                                                    <option>kPA </option>
                                                    <option>shipping line </option>
                                                    <option>transporter</option>
                                                    <option>CFS</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a valid work out.</div>
                                                <div class="valid-feedback">
                                                    Looks's Good! </div>
                                            </div>
                                            <div class="col-3">

                                                <input class="form-control" type="text" placeholder="Price" required="">
                                                <div class="invalid-feedback">Please enter Price </div>
                                            </div>
                                            <div class="col-3">

                                                <select class="form-select" required="">
                                                    <option selected="" disabled="" value="">Cleaning Charges - Destination</option>
                                                    <option>KPA </option>
                                                    <option>Shipping line </option>
                                                    <option>Transporter</option>
                                                    <option>CFS</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a valid work out.</div>
                                                <div class="valid-feedback">
                                                    Looks's Good! </div>
                                            </div>
                                            <div class="col-3">

                                                <input class="form-control" type="text" placeholder="Price" required="">
                                                <div class="invalid-feedback">Please enter Price </div>
                                            </div>
                                            <div class="col-3">
                                                <select class="form-select" required="">
                                                    <option selected="" disabled="" value="">Terminal Security - Destination</option>
                                                    <option>kPA </option>
                                                    <option>shipping line </option>
                                                    <option>transporter</option>
                                                    <option>CFS</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a valid work out.</div>
                                                <div class="valid-feedback">
                                                    Looks's Good! </div>
                                            </div>
                                            <div class="col-3">
                                                <input class="form-control" type="text" placeholder="Price" required="">
                                                <div class="invalid-feedback">Please enter Price </div>
                                            </div>
                                            <div class="col-3">
                                                <select class="form-select" required="">
                                                    <option selected="" disabled="" value="">Admin Fee - Destination</option>
                                                    <option>KPA </option>
                                                    <option>Shipping line </option>
                                                    <option>Transporter</option>
                                                    <option>CFS</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a valid work out.</div>
                                                <div class="valid-feedback">
                                                    Looks's Good! </div>
                                            </div>
                                            <div class="col-3">
                                                <input class="form-control" type="text" placeholder="Price" required="">
                                                <div class="invalid-feedback">Please enter Price </div>
                                            </div>
                                            <div class="col-3">
                                                <select class="form-select" required="">
                                                    <option selected="" disabled="" value="">THC - Destination</option>
                                                    <option>kPA </option>
                                                    <option>shipping line </option>
                                                    <option>transporter</option>
                                                    <option>CFS</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a valid work out.</div>
                                                <div class="valid-feedback">
                                                    Looks's Good! </div>
                                            </div>
                                            <div class="col-3">
                                                <input class="form-control" type="text" placeholder="Price" required="">
                                                <div class="invalid-feedback">Please enter Price </div>
                                            </div>
                                            <div class="col-3">
                                                <select class="form-select" required="">
                                                    <option selected="" disabled="" value="">Equipment Maintenance Fee</option>
                                                    <option>KPA </option>
                                                    <option>Shipping line </option>
                                                    <option>Transporter</option>
                                                    <option>CFS</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a valid work out.</div>
                                                <div class="valid-feedback">
                                                    Looks's Good! </div>
                                            </div>
                                            <div class="col-3">
                                                <input class="form-control" type="text" placeholder="Price" required="">
                                                <div class="invalid-feedback">Please enter Price </div>
                                            </div>
                                            <div class="col-3">
                                                <select class="form-select" required="">
                                                    <option selected="" disabled="" value="">Lift On / Off - Destination</option>
                                                    <option>KPA </option>
                                                    <option>Shipping line </option>
                                                    <option>Transporter</option>
                                                    <option>CFS</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a valid work out.</div>
                                                <div class="valid-feedback">
                                                    Looks's Good! </div>
                                            </div>
                                            <div class="col-3">
                                                <input class="form-control" type="text" placeholder="Price" required="">
                                                <div class="invalid-feedback">Please enter Price </div>
                                            </div>
                                            <div class="col-3">
                                                <select class="form-select" required="">
                                                    <option selected="" disabled="" value="">Vat %</option>
                                                    <option>20%</option>
                                                    <option>25%</option>
                                                    <option>30%</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a valid work out.</div>
                                                <div class="valid-feedback">
                                                    Looks's Good! </div>
                                            </div>
                                            <div class="card-header pb-0">
                                                <h4>import container details</h4>
                                            </div>
                                          <div class="col-3">
                                                <select class="form-select" required="">
                                                    <option selected="" disabled="" value="">Delivery Order - Destination</option>
                                                    <option>kPA </option>
                                                    <option>shipping line </option>
                                                    <option>transporter</option>
                                                    <option>CFS</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a valid work out.</div>
                                                <div class="valid-feedback">
                                                    Looks's Good! </div>
                                            </div>
                                            <div class="col-3">
                                                <input class="form-control" type="text" placeholder="Price" required="">
                                                <div class="invalid-feedback">Please enter Price </div>
                                            </div>
                                            <div class="col-3">
                                                <select class="form-select" required="">
                                                    <option selected="" disabled="" value="">Cleaning Charges - Destination</option>
                                                    <option>KPA </option>
                                                    <option>Shipping line </option>
                                                    <option>Transporter</option>
                                                    <option>CFS</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a valid work out.</div>
                                                <div class="valid-feedback">
                                                    Looks's Good! </div>
                                            </div>
                                            <div class="col-3">
                                                <input class="form-control" type="text" placeholder="Price" required="">
                                                <div class="invalid-feedback">Please enter Price </div>
                                            </div>
                                            <div class="col-3">
                                                <select class="form-select" required="">
                                                    <option selected="" disabled="" value="">Terminal Security - Destination</option>
                                                    <option>kPA </option>
                                                    <option>shipping line </option>
                                                    <option>transporter</option>
                                                    <option>CFS</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a valid work out.</div>
                                                <div class="valid-feedback">
                                                    Looks's Good! </div>
                                            </div>
                                            <div class="col-3">
                                                <input class="form-control" type="text" placeholder="Price" required="">
                                                <div class="invalid-feedback">Please enter Price </div>
                                            </div>
                                            <div class="col-3">
                                                <select class="form-select" required="">
                                                    <option selected="" disabled="" value="">Admin Fee - Destination</option>
                                                    <option>KPA </option>
                                                    <option>Shipping line </option>
                                                    <option>Transporter</option>
                                                    <option>CFS</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a valid work out.</div>
                                                <div class="valid-feedback">
                                                    Looks's Good! </div>
                                            </div>
                                            <div class="col-3">
                                                <input class="form-control" type="text" placeholder="Price" required="">
                                                <div class="invalid-feedback">Please enter Price </div>
                                            </div>
                                            <div class="col-3">
                                                <select class="form-select" required="">
                                                    <option selected="" disabled="" value="">THC - Destination</option>
                                                    <option>kPA </option>
                                                    <option>shipping line </option>
                                                    <option>transporter</option>
                                                    <option>CFS</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a valid work out.</div>
                                                <div class="valid-feedback">
                                                    Looks's Good! </div>
                                            </div>
                                            <div class="col-3">
                                                <input class="form-control" type="text" placeholder="Price" required="">
                                                <div class="invalid-feedback">Please enter Price </div>
                                            </div>
                                            <div class="col-3">
                                                <select class="form-select" required="">
                                                    <option selected="" disabled="" value="">Equipment Maintenance Fee</option>
                                                    <option>KPA </option>
                                                    <option>Shipping line </option>
                                                    <option>Transporter</option>
                                                    <option>CFS</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a valid work out.</div>
                                                <div class="valid-feedback">
                                                    Looks's Good! </div>
                                            </div>
                                            <div class="col-3">
                                                <input class="form-control" type="text" placeholder="Price" required="">
                                                <div class="invalid-feedback">Please enter Price </div>
                                            </div>
                                            <div class="col-3">
                                                <select class="form-select" required="">
                                                    <option selected="" disabled="" value="">Lift On / Off - Destination</option>
                                                    <option>KPA </option>
                                                    <option>Shipping line </option>
                                                    <option>Transporter</option>
                                                    <option>CFS</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a valid work out.</div>
                                                <div class="valid-feedback">
                                                    Looks's Good! </div>
                                            </div>
                                            <div class="col-3">
                                                <input class="form-control" type="text" placeholder="Price" required="">
                                                <div class="invalid-feedback">Please enter Price </div>
                                            </div>
                                            <div class="col-3">
                                                <select class="form-select" required="">
                                                    <option selected="" disabled="" value="">Vat %</option>
                                                    <option>20%</option>
                                                    <option>25%</option>
                                                    <option>30%</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a valid work out.</div>
                                                <div class="valid-feedback">
                                                    Looks's Good! </div>
                                            </div>
                                            <div class="card-header pb-0">
                                                <h4>Transit container details</h4>

                                            </div>
                                         <div class="col-3">
                                                <select class="form-select" required="">
                                                    <option selected="" disabled="" value="">B/L Issuance fees</option>
                                                    <option>KPA </option>
                                                    <option>Shipping line </option>
                                                    <option>Transporter</option>
                                                    <option>CFS</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a valid work out.</div>
                                                <div class="valid-feedback">
                                                    Looks's Good! </div>
                                            </div>
                                            <div class="col-3">
                                                <input class="form-control" type="text" placeholder="Price" required="">
                                                <div class="invalid-feedback">Please enter Price </div>
                                            </div>
                                         <div class="col-3">
                                                <select class="form-select" required="">
                                                    <option selected="" disabled="" value="">Telex Fees</option>
                                                    <option>KPA </option>
                                                    <option>Shipping line </option>
                                                    <option>Transporter</option>
                                                    <option>CFS</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a valid work out.</div>
                                                <div class="valid-feedback">
                                                    Looks's Good! </div>
                                            </div>
                                            <div class="col-3">
                                                <input class="form-control" type="text" placeholder="Price" required="">
                                                <div class="invalid-feedback">Please enter Price </div>
                                            </div>
                                             <div class="col-3">
                                                <select class="form-select" required="">
                                                    <option selected="" disabled="" value="">Vat %</option>
                                                    <option>20%</option>
                                                    <option>25%</option>
                                                    <option>30%</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a valid work out.</div>
                                                <div class="valid-feedback">
                                                    Looks's Good! </div>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-primary" type="submit">Edit Product</button>
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
