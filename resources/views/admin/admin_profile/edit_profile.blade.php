@extends('admin.layout.app')
@extends('admin.layout.footer')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')

@section('title', 'Profile')
@section('admin_main_content')

<div class="container-fluid">
    <div class="row page-title">
        <div class="col-sm-6">
            <h3> {{ slugTitle('admin profile') }} </h3>
        </div>
        <div class="col-sm-6">
            <nav>
                <ol class="breadcrumb justify-content-sm-end align-items-center">
                    <li class="breadcrumb-item"> <a href="{{ route('vender.index') }}">
                            <svg class="svg-color">
                                <use href="assets/svg/iconly-sprite.svg#Home"></use>
                            </svg></a></li>

                            <li class= "{{ request()->is('vender.index') ? 'breadcrumb-item active' : 'breadcrumb-item' }}">
                                <a href="{{ route('vender.index') }}">{{ slugTitle('Vender') }}</a>
                            </li>
                            <li class= "{{ request()->is('vender.create') ? 'breadcrumb-item active' : 'breadcrumb-item' }}">
                                <a href="{{ route('vender.create') }}">{{ slugTitle('Vender card') }}</a>
                            </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body checkbox-checked">
                <form href="{{ url('admin_profile_update',$admin_profile->id) }}" class="theme-form row g-3 needs-validation custom-input" novalidate="" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-6">
                        <label class="form-label" for="inputCompany1">Company name</label>
                        <input class="form-control" id="inputCompany1" type="text" name="company_name" value="{{ checkEdit($admin_profile->company_name)  }}" placeholder="Company name" required="">
                        @error('company_name') <span class="error_class">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-6">
                        <label class="col-sm-12 col-form-label" for="inputMobile1">Contact number</label>
                        <input class="form-control" id="inputMobile1" type="text" name="mobile" placeholder="Conact Number" required="" value="{{ checkEdit($admin_profile->mobile)  }}">
                        @error('mobile') <span class="error_class">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-6">
                        <label class="col-sm-12 col-form-label" for="inputEmail">Mail ID</label>
                        <input class="form-control" id="inputEmail" type="text" placeholder="xyz@gmail.com" name="email" required=""  value="{{ checkEdit($admin_profile->email)  }}">
                        @error('email') <span class="error_class">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-6">
                        <label class="col-sm-12 col-form-label" for="inputWebsite1">Website</label>
                        <input class="form-control" id="inputWebsite1" type="text" placeholder="www.test.com" name="website" required=""  value="{{ checkEdit($admin_profile->website)  }}">

                    </div>

                    <div class="col-12">
                        <label class="col-sm-12 col-form-label" for="inputWebsite1">Address</label>
                        <textarea name="address" id="address" class="form-control">{{ checkEdit($admin_profile->address)  }}</textarea>
                    </div>
                    <div class="col-6">
                        <label class="col-sm-12 col-form-label" for="inputImage">Profile Image</label>
                        <input class="form-control" id="inputImage" type="file" name="user_image" placeholder="Mail id" required="" value="{{ checkEdit($admin_profile->user_image)  }}" accept=".jpg,.jpeg,.png">
                        @error('user_image') <span class="error_class">{{ $message }}</span> @enderror

                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Update Profile</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
