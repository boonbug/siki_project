@extends('master_setting.layout.app')
@extends('admin.layout.footer')
@extends('admin.layout.header')
@extends('master_setting.layout.sidebar')
@section('title', 'Additional Charge')
@extends('master_setting.component.add_additional')
@section('master_contant')

<div class="container-fluid">
    <div class="row page-title">
        <div class="col-sm-6">
            <h3>Additional Charge</h3>
        </div>
        <div class="col-sm-6">
            <div class="text-end col-12 col-sm-6 col-md-12">

                <button class="btn m-1 btn-primary" data-bs-toggle="modal" data-bs-target="#adddepartment" type="button" data-bs-toggle="tooltip" title="btn btn-info">Add New</button>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-xxl-12 col-xl-12 box-col-12">
            <div class="email-right-aside">
                <div class="card email-body email-list">
                    <div class="mail-header-wrapper">
                        <div class="mail-header">
                            <div class="form-check form-check-inline">

                                <ul class="email-tabs nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="{{ route('first_tier_local.index') }}">
                                            <span>Tier 1 local</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('second_tier_local.index') }}">
                                            <span>Tier 2 local</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('first_tier_transit.index') }}">
                                            <span>Tier 1 transit</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('second_tier_transit.index') }}">
                                            <span>Tier 2 transit</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid general-widget">
    <div class="row">
        <div class="col-sm-6 col-xl-3">
            <!-- Schedule menu-->
            <div class="card schedule-card">
                <div class="card-header pb-0">

                    <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle" id="userdropdown05" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown05"><a class="dropdown-item sweet-5" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-5']);">Delete</a>
                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editdepartment">Edit</a>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="card_det">
                        <h2>5 to 7 day</h2>
                        <h2>$ 20</h2>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

@endsection
