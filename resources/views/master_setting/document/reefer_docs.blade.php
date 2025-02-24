@extends('master_setting.layout.app')
@extends('admin.layout.footer')
@extends('admin.layout.header')
@extends('master_setting.layout.sidebar')
@section('title', 'vendor Reefer Document')
@extends('master_setting.component.document')
@section('master_contant')

<div class="container-fluid">
    <div class="row page-title">
        <div class="col-sm-6">
            <h3>upload vendor Reefer document</h3>
        </div>
        <div class="col-sm-6">
            <div class="text-end col-12 col-sm-6 col-md-12">

                <button class="btn m-1 btn-primary" data-bs-toggle="modal" data-bs-target="#adddepartment" type="button" data-bs-toggle="tooltip" title="btn btn-info">Add New document</button>
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
                        <h2>aadhar card</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
