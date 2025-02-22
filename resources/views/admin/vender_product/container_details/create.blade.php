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

{{-- vendor_product_menu --}}


<div class="container-fluid">


    <div class="row">
        <div class="col-sm-12">
            <div class="card">

                <div class="card-body">
                    <div class="horizontal-wizard-wrapper">
                        <div class="row g-3">

                            <div class="col-12 main-horizontal-header">
                                <div class="nav nav-pills horizontal-options" id="container-details" role="tablist" aria-orientation="vertical"><a class="nav-link active" id="wizard-info-tab" data-bs-toggle="pill" href="#wizard-info" role="tab" aria-controls="wizard-info" aria-selected="true">
                                        <div class="horizontal-wizard">
                                            <div class="stroke-icon-wizard"><i class="fa fa-user"></i></div>
                                            <div class="horizontal-wizard-content">
                                                <h6>Container details</h6>
                                            </div>
                                        </div>
                                    </a>

                                    <div class="horizontal-wizard-content">
                                        <a href="{{ route('containerDetailsView') }}" class="btn btn-md  btn-dark">Product</a>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="tab-content dark-field" id="container-details">
                                    <div class="tab-pane fade show active" id="wizard-info" role="tabpanel" aria-labelledby="wizard-info-tab">
                                        <div class="card-header pt-20">
                                            <h4>transit conventional details</h4>

                                        </div>
                                        <form class="theme-form row g-3 needs-validation custom-input" novalidate="">
                                            <div class="col-6">
                                                <label class="form-label">import shore handing</label>
                                                <select class="form-select" required="">
                                                    <option selected="" disabled="" value="">Choose...</option>
                                                    <option>kPA </option>
                                                    <option>shipping line </option>
                                                    <option>transporter</option>
                                                    <option>CFS</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a valid work out.</div>
                                                <div class="valid-feedback">
                                                    Looks's Good! </div>
                                            </div>
                                            <div class="col-6">
                                                <label class="col-sm-12 col-form-label">Price</label>
                                                <input class="form-control" type="text" placeholder="Price" required="">
                                                <div class="invalid-feedback">Please enter Price </div>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label">import wharfage</label>
                                                <select class="form-select" required="">
                                                    <option selected="" disabled="" value="">Choose...</option>
                                                    <option>KPA </option>
                                                    <option>Shipping line </option>
                                                    <option>Transporter</option>
                                                    <option>CFS</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a valid work out.</div>
                                                <div class="valid-feedback">
                                                    Looks's Good! </div>
                                            </div>
                                            <div class="col-6">
                                                <label class="col-sm-12 col-form-label">Price</label>
                                                <input class="form-control" type="text" placeholder="Price" required="">
                                                <div class="invalid-feedback">Please enter Price </div>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label">Northrn corridor levy</label>
                                                <select class="form-select" required="">
                                                    <option selected="" disabled="" value="">Choose...</option>
                                                    <option>KPA </option>
                                                    <option>Shipping line </option>
                                                    <option>Transporter</option>
                                                    <option>CFS</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a valid work out.</div>
                                                <div class="valid-feedback">
                                                    Looks's Good! </div>
                                            </div>
                                            <div class="col-6">
                                                <label class="col-sm-12 col-form-label">Price</label>
                                                <input class="form-control" type="text" placeholder="Price" required="">
                                                <div class="invalid-feedback">Please enter Price </div>
                                            </div>
                                            <div class="col-6">
                                                <label class="col-sm-12 col-form-label">Vat</label>
                                                <input class="form-control" type="text" placeholder="Vat" required="">
                                                <div class="invalid-feedback">Please enter your valid contact number</div>
                                            </div>



                                            <div class="card-header pb-0">
                                                <h4>import container details</h4>

                                            </div>


                                            <div class="col-6">
                                                <label class="form-label">import shore handing</label>
                                                <select class="form-select" required="">
                                                    <option selected="" disabled="" value="">Choose...</option>
                                                    <option>kPA </option>
                                                    <option>shipping line </option>
                                                    <option>transporter</option>
                                                    <option>CFS</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a valid work out.</div>
                                                <div class="valid-feedback">
                                                    Looks's Good! </div>
                                            </div>
                                            <div class="col-6">
                                                <label class="col-sm-12 col-form-label">Price</label>
                                                <input class="form-control" type="text" placeholder="Price" required="">
                                                <div class="invalid-feedback">Please enter Price </div>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label">import wharfage</label>
                                                <select class="form-select" required="">
                                                    <option selected="" disabled="" value="">Choose...</option>
                                                    <option>KPA </option>
                                                    <option>Shipping line </option>
                                                    <option>Transporter</option>
                                                    <option>CFS</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a valid work out.</div>
                                                <div class="valid-feedback">
                                                    Looks's Good! </div>
                                            </div>
                                            <div class="col-6">
                                                <label class="col-sm-12 col-form-label">Price</label>
                                                <input class="form-control" type="text" placeholder="Price" required="">
                                                <div class="invalid-feedback">Please enter Price </div>
                                            </div>
                                            <div class="col-6">
                                                <label class="col-sm-12 col-form-label">Price</label>
                                                <input class="form-control" type="text" placeholder="Price" required="">
                                                <div class="invalid-feedback">Please enter Price </div>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label">Northrn corridor levy</label>
                                                <select class="form-select" required="">
                                                    <option selected="" disabled="" value="">Choose...</option>
                                                    <option>KPA </option>
                                                    <option>Shipping line </option>
                                                    <option>Transporter</option>
                                                    <option>CFS</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a valid work out.</div>
                                                <div class="valid-feedback">
                                                    Looks's Good! </div>
                                            </div>
                                            <div class="col-6">
                                                <label class="col-sm-12 col-form-label">Vat</label>
                                                <input class="form-control" type="text" placeholder="Vat" required="">
                                                <div class="invalid-feedback">Please enter your valid contact number</div>
                                            </div>


                                            <div class="card-header pb-0">
                                                <h4>export container details</h4>

                                            </div>


                                            <div class="col-6">
                                                <label class="form-label">export shore handing</label>
                                                <select class="form-select" required="">
                                                    <option selected="" disabled="" value="">Choose...</option>
                                                    <option>kPA </option>
                                                    <option>shipping line </option>
                                                    <option>transporter</option>
                                                    <option>CFS</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a valid work out.</div>
                                                <div class="valid-feedback">
                                                    Looks's Good! </div>
                                            </div>
                                            <div class="col-6">
                                                <label class="col-sm-12 col-form-label">Price</label>
                                                <input class="form-control" type="text" placeholder="Price" required="">
                                                <div class="invalid-feedback">Please enter Price </div>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label">export wharfage</label>
                                                <select class="form-select" required="">
                                                    <option selected="" disabled="" value="">Choose...</option>
                                                    <option>KPA </option>
                                                    <option>Shipping line </option>
                                                    <option>Transporter</option>
                                                    <option>CFS</option>
                                                </select>
                                                <div class="invalid-feedback">Please select a valid work out.</div>
                                                <div class="valid-feedback">
                                                    Looks's Good! </div>
                                            </div>
                                            <div class="col-6">
                                                <label class="col-sm-12 col-form-label">Price</label>
                                                <input class="form-control" type="text" placeholder="Price" required="">
                                                <div class="invalid-feedback">Please enter Price </div>
                                            </div>
                                            <div class="col-6">
                                                <label class="col-sm-12 col-form-label">Vat</label>
                                                <input class="form-control" type="text" placeholder="Vat" required="">
                                                <div class="invalid-feedback">Please enter your valid contact number</div>
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
