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
<div class="col-md-12 project-list">
    <div class="card">
      <div class="row">
        <div class="col-md-6">
          <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
            <li class="nav-item"><a class="nav-link "  href="{{ route('containerDetailsView') }}">
                Container details</a></li>
            <li class="nav-item"><a class="nav-link "  href="{{ route('conventChargeView') }}">
                Conventional Charges</a></li>
            <li class="nav-item">
                <a class="nav-link" id="contact-top-tab"  href="{{ route('additionalChargeView') }}">
                Additional charge</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-top-tab"  href="{{ route('OperationChargesView')}}">
                Operation charges</a>
              </li>
          </ul>
        </div>
        <div class="col-md-6 d-md-block d-none">
          <div class="form-group mb-0 me-0"> </div>
          <a class="btn btn-danger d-flex align-items-center" href="#">
             <i class="icofont icon-pencil"></i>&nbsp;{{ slugTitle('delete additional charge') }} </a>
          <a class="btn btn-dark d-flex align-items-center" href="">
             <i class="icofont icon-pencil"></i>&nbsp;{{ slugTitle('edit additional charge') }} </a>
          <a class="btn btn-primary d-flex align-items-center" href="{{ route('additionalChargeCreate') }}">
             <i class="icofont icon-pencil"></i>&nbsp;{{ slugTitle('add additional charge') }} </a>
        </div>
      </div>
    </div>
</div>

{{-- main code --}}
<div class="container-fluid">
    <div class="row">
    <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="pb-3">Additional Charge</h4>
          </div>
          <div class="card-block row">
            <div class="col-sm-12 col-lg-12 col-xl-12">
              <div class="table-responsive">
                <table class="table table-responsive-sm table-lg">
                  <thead class="bg-primary ">
                    <tr>
                      <th scope="col" class="text-white">Additional Charge Details</th>
                      <th scope="col" class="text-white">Container</th>
                      <th scope="col" class="text-white">Day</th>
                      <th scope="col" class="text-white">hours</th>
                      <th scope="col" class="text-white">Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Skilled staff</td>
                      <td>20Ft</td>
                      <td>5 To 7 Days</td>
                      <td>4</td>
                      <td>&#x24; 20</td>
                    </tr>
                      <tr>
                      <td>Skilled staff</td>
                      <td>20Ft</td>
                      <td>5 To 7 Days</td>
                      <td>4</td>
                      <td>&#x24; 20</td>
                    </tr>
                      <tr>
                      <td>Skilled staff</td>
                      <td>20Ft</td>
                      <td>5 To 7 Days</td>
                      <td>4</td>
                      <td>&#x24; 20</td>
                    </tr>
                      <tr>
                      <td>Skilled staff</td>
                      <td>20Ft</td>
                      <td>5 To 7 Days</td>
                      <td>4</td>
                      <td>&#x24; 20</td>
                    </tr>
                      <tr>
                      <td>Skilled staff</td>
                      <td>20Ft</td>
                      <td>5 To 7 Days</td>
                      <td>4</td>
                      <td>&#x24; 20</td>
                    </tr>
                      <tr>
                      <td>Skilled staff</td>
                      <td>20Ft</td>
                      <td>5 To 7 Days</td>
                      <td>4</td>
                      <td>&#x24; 20</td>
                    </tr>
                      <tr>
                      <td>Skilled staff</td>
                      <td>20Ft</td>
                      <td>5 To 7 Days</td>
                      <td>4</td>
                      <td>&#x24; 20</td>
                    </tr>
                      <tr>
                      <td>Skilled staff</td>
                      <td>20Ft</td>
                      <td>5 To 7 Days</td>
                      <td>4</td>
                      <td>&#x24; 20</td>
                    </tr>
                      <tr>
                      <td>Skilled staff</td>
                      <td>20Ft</td>
                      <td>5 To 7 Days</td>
                      <td>4</td>
                      <td>&#x24; 20</td>
                    </tr>
                      <tr>
                      <td>Skilled staff</td>
                      <td>20Ft</td>
                      <td>5 To 7 Days</td>
                      <td>4</td>
                      <td>&#x24; 20</td>
                    </tr>
                      <tr>
                      <td>Skilled staff</td>
                      <td>20Ft</td>
                      <td>5 To 7 Days</td>
                      <td>4</td>
                      <td>&#x24; 20</td>
                    </tr>
                  </tbody>
                    <thead class="bg-primary">
                    <tr>
                      <th scope="col" class="text-white">Promotional Storage tier charge </th>
                      <th scope="col" class="text-white">Container</th>
                      <th scope="col" class="text-white">Day</th>
                      <th scope="col" class="text-white">hours</th>
                      <th scope="col" class="text-white">Price</th>
                    </tr>
                  </thead>
                     <tbody>
                         <tr>
                      <td>Skilled staff</td>
                      <td>20Ft</td>
                      <td>5 To 7 Days</td>
                      <td>4</td>
                      <td>&#x24; 20</td>
                    </tr>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
