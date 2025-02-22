@extends('admin.layout.app')
@extends('admin.layout.footer')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')

@section('title', 'Vender')
@section('admin_main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3> {{ slugTitle('vender') }} </h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item active">  Vender</li>
                        <li class="breadcrumb-item active">Vender Cards</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    {{-- search -  new vener --}}
    <div class="container-fluid commone">
        <div class="row">
            <div class="col-sm-4">

                <form class="theme-form">
                    <div class="input-group m-0 flex-nowrap">
                        <input class="form-control-plaintext" type="search" placeholder="vende .."><span class="btn bg-primary input-group-text">Search</span>
                    </div>
                </form>

            </div>
            <div class="col-sm-8">

                <div class="text-end col-12 col-sm-6 col-md-12">
                    <a href="{{ route('vender.create') }}">
                    <button class="btn m-1 btn-info" type="button" data-bs-toggle="tooltip" title="btn btn-info">Add New Vender</button></a>
                </div>
            </div>

        </div>
    </div>

    <!-- Container-fluid starts-->
    <div class="container-fluid user-profile">

        <div class="row">

            <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                <div class="card social-profile">

                    <div class="card-body">
                        <div class="social-img-wrap">
                            <div class="social-img"><img src="{{ asset('assets/images/avatar/1.jpg') }}" alt="profile"></div>
                            <div class="edit-icon">
                                <svg class="feather stroke-primary">
                                    <use href="{{ asset('assets/svg/feather-icons/dist/feather-sprite.svg#check-circle') }}"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="social-details">
                            <h4 class="mb-1"><a class="f-20" href="vender-profile.php">Brooklyn Simmons</a></h4>
                        </div>
                        <div class="personal-details">
                            <p><i class="fa-solid fa-building fa-fw"></i>company name</p>
                            <p><i class="fa-solid fa-phone fa-fw"></i>1234567890</p>
                            <p><i class="fa-solid fa-location-dot fa-fw"></i>127 Narara Valley Drive, Gosford, New South Wales, 2250, Australia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
