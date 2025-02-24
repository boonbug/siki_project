@extends('admin.layout.app')
@extends('admin.layout.footer')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')

@section('title', 'Profile')
@section('admin_main_content')
<div class="col-sm-12 user-profile">
    <div class="card hovercard text-center">
      <div class="cardheader"></div>
      <div class="user-image">
        <div class="avatar">


            @if(Auth::user()->user_image != "")
            <img src="{{ asset('storage/Admin_profile/' . Auth::user()->user_image) }}" alt="User Image">
            @else
            <img alt="" src="{{ asset('assets/images/avatar/1.jpg') }}"><
            @endif
        </div>
      </div>
      <div class="info">
        <div class="row">
          <div class="col-sm-6 col-lg-4 order-sm-1 order-xl-0">
          </div>
          <div class="col-sm-12 col-lg-4 order-sm-0 order-xl-1">
            <div class="user-designation">
              <div class="title"><a target="_blank" href="">{{  defaultName(slugTitle(Auth::user()->company_name), slugTitle("Profile Name")) }}</a></div>
            </div>
          </div>
        </div>
      </div>
       <div class="project-list" style="display:flex;justify-content:center">
    </div>
    </div>
</div>

<div class="col-md-12 project-list">
    <div class="card">
        <div class="col-md-12 d-md-block d-none">

          <a class="btn btn-primary d-flex align-items-center" href="{{ url('admin_profile_edit', base64_encode(Auth::user()->id)) }}">

             <i class="icofont icon-pencil"></i>&nbsp;{{ slugTitle('edit admin profile') }} </a>
        </div>
    </div>
    <div class="card">
        <div class="row">
            <div class="col-md-6 ">

                <div class="col-md-12 ">
                    <h3> {{ slugTitle('Admin Profile') }} </h3>

                    <div class="row">
                        <div class="col-sm-5">
                            <h6 class="p6">Company Name</h6>
                            <h6 class="p6">{{ defaultName(Auth::user()->company_name, "Company Name")  }}</h6>
                        </div>
                        <div class="col-sm-7">
                            <h6 class="p6">Company Contact Number</h6>
                            <h6 class="p6">{{ defaultName(Auth::user()->mobile, "Company Mobile")  }}</h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-5">
                            <h6 class="p6">Mail ID</h6>
                            <h6 class="p6">{{ defaultName(Auth::user()->email, "Company Email")  }}</h6>
                        </div>
                        <div class="col-sm-7">
                            <h6 class="p6">Company Website</h6>
                            <h6 class="p6">{{ Auth::user()->website  }}</h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <h6 class="p6">Address</h6>
                            <h6 class="p6">{{Auth::user()->address  }}</h6>
                        </div>

                    </div>


                </div>


            </div>
            <div class="col-md-4 ">

                <div class="col-md-12 ">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card" style="width: 24rem;">
                                <div class="card-body">
                                    <h4>Client : <span class="ml-40"> 0 </span</h4>

                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card" style="width: 24rem;">
                                <div class="card-body">
                                    <h4>Vendor : <span class="ml-40"> 0 </span</h4>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card" style="width: 24rem;">
                                <div class="card-body">
                                    <h4>Staff : <span class="ml-40"> 0 </span</h4>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card" style="width: 24rem;">
                                <div class="card-body">
                                    <h4>Total Shipping : <span class="ml-40"> 0 </span</h4>
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


@section('script')
<script type="text/javascript">
    @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
    @endif
    @if(Session::has('error'))
        toastr.error("{{ Session::get('error') }}");
    @endif
</script>
@endsection
