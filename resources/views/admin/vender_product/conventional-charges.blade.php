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
            <li class="nav-item"><a class="nav-link" href="{{ route('vender_product.index') }}" role="tab">
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
<div class="col-md-12 project-list">
    <div class="card">
      <div class="row">
        <div class="col-md-6">
          <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
            <li class="nav-item"><a class="nav-link "  href="{{ route('vender_product.index') }}">
                Container details</a></li>
            <li class="nav-item"><a class="nav-link" href="">
                Conventional Charges</a></li>
            <li class="nav-item">
                <a class="nav-link" id="contact-top-tab"  href="additional-charge.php">
                Additional charge</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-top-tab"  href="operation-charges.php">
                Operation charges</a>
              </li>
          </ul>
        </div>
        <div class="col-md-6 d-md-block d-none">
          <div class="form-group mb-0 me-0"> </div>
          <a class="btn btn-danger d-flex align-items-center" href="{{ route('vender_product.create') }}">
             <i class="icofont icon-pencil"></i>&nbsp;{{ slugTitle('delete product') }} </a>
          <a class="btn btn-dark d-flex align-items-center" href="{{ route('vender_product.create') }}">
             <i class="icofont icon-pencil"></i>&nbsp;{{ slugTitle('edit product') }} </a>
          <a class="btn btn-primary d-flex align-items-center" href="{{ route('vender_product.create') }}">
             <i class="icofont icon-pencil"></i>&nbsp;{{ slugTitle('add product') }} </a>
        </div>
      </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
      <div class="col-xl-6">
        <!-- Default Card-->
        <div class="card shadow-none solid-border height_equal">
          <div class="card-header pb-3">
            <h4 class="text-center bg-primary pb-2 pt-2">Transit Container Details</h4>
          </div>
          <div class="card-body">
            <div class="row">

                <div class="col-md-6">
                    <div class="card_box">
                   <h5 class="f-w-300">import shore handing:  </h5>
                    <h4 class="f-w-600">20 ft reffer</h4>
                        </div>
                </div>
                <div class="col-md-6">
                    <div class="card_box">
                   <h5 class="f-w-300">price: </h5>
                    <h4 class="f-w-600">&#x24; 20</h4>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card_box">
                   <h5 class="f-w-300">import wharfage: </h5>
                    <h4 class="f-w-600">20ft</h4>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card_box">
                   <h5 class="f-w-300">price: </h5>
                    <h4 class="f-w-600">&#x24; 20</h4>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card_box">
                   <h5 class="f-w-300">northern corridor levy: </h5>
                    <h4 class="f-w-600">20ft</h4>
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="card_box">
                   <h5 class="f-w-300">price: </h5>
                    <h4 class="f-w-600">&#x24; 20</h4>
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="card_box">
                   <h5 class="f-w-300">Vat: </h5>
                    <h4 class="f-w-600">&#x24;0 %</h4>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
         <div class="col-xl-6">
        <!-- Default Card-->
        <div class="card shadow-none solid-border height_equal">
          <div class="card-header pb-3">
            <h4 class="text-center bg-primary pb-2 pt-2">import container details</h4>
          </div>
          <div class="card-body">
            <div class="row">

                <div class="col-md-6">
                    <div class="card_box">
                   <h5 class="f-w-300">import shore handing:  </h5>
                    <h4 class="f-w-600">20 ft reffer</h4>
                        </div>
                </div>
                <div class="col-md-6">
                    <div class="card_box">
                   <h5 class="f-w-300">price: </h5>
                    <h4 class="f-w-600">&#x24; 20</h4>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card_box">
                   <h5 class="f-w-300">import wharfage: </h5>
                    <h4 class="f-w-600">20ft</h4>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card_box">
                   <h5 class="f-w-300">price: </h5>
                    <h4 class="f-w-600">&#x24; 20</h4>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card_box">
                   <h5 class="f-w-300">northern corridor levy: </h5>
                    <h4 class="f-w-600">20ft</h4>
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="card_box">
                   <h5 class="f-w-300">price: </h5>
                    <h4 class="f-w-600">&#x24; 20</h4>
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="card_box">
                   <h5 class="f-w-300">Vat: </h5>
                    <h4 class="f-w-600">&#x24;0 %</h4>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
        <div class="col-xl-6">
        <!-- Default Card-->
        <div class="card shadow-none solid-border height_equal">
          <div class="card-header pb-3">
            <h4 class="text-center bg-primary pb-2 pt-2">Export container details</h4>
          </div>
          <div class="card-body">
            <div class="row">

                <div class="col-md-6">
                    <div class="card_box">
                   <h5 class="f-w-300">Export shore handing:  </h5>
                    <h4 class="f-w-600">20 ft reffer</h4>
                        </div>
                </div>
                <div class="col-md-6">
                    <div class="card_box">
                   <h5 class="f-w-300">price: </h5>
                    <h4 class="f-w-600">&#x24; 20</h4>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card_box">
                   <h5 class="f-w-300">Export wharfage: </h5>
                    <h4 class="f-w-600">20ft</h4>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card_box">
                   <h5 class="f-w-300">price: </h5>
                    <h4 class="f-w-600">&#x24; 20</h4>
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="card_box">
                   <h5 class="f-w-300">Vat: </h5>
                    <h4 class="f-w-600">&#x24;0 %</h4>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
