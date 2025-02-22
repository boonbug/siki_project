@extends('admin.layout.app')
@extends('admin.layout.footer')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')

@section('title', 'Vender')
@section('admin_main_content')

<div class="container-fluid">
    <div class="row page-title">
        <div class="col-sm-6">
            <h3> {{ slugTitle('Create new vender') }} </h3>
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
            <div class="card-header pb-0">
                <h4>vendor details</h4>

            </div>
            <div class="card-body checkbox-checked">
                <form class="theme-form row g-3 needs-validation custom-input" novalidate="">
                    <div class="col-6">
                        <label class="form-label" for="validationCustom01">First name</label>
                        <input class="form-control" id="validationCustom01" type="text" placeholder="First name" required="">
                        <div class="invalid-feedback">Please enter your valid </div>
                        <div class="valid-feedback">
                            Looks's Good!</div>
                    </div>
                    <div class="col-6">
                        <label class="col-sm-12 col-form-label" for="inputPassword1">Pin number</label>
                        <input class="form-control" id="inputPassword1" type="text" placeholder="Pin number" required="">
                        <div class="invalid-feedback">Please enter your valid pin number </div>
                    </div>
                    <div class="col-6">
                        <label class="col-sm-12 col-form-label" for="inputPassword1">VAT number</label>
                        <input class="form-control" id="inputPassword1" type="text" placeholder="VAT number" required="">
                        <div class="invalid-feedback">Please enter your valid VAT number</div>
                    </div>
                    <div class="col-6">
                        <label class="col-sm-12 col-form-label" for="inputPassword1">contact number</label>
                        <input class="form-control" id="inputPassword1" type="text" placeholder="contact number" required="">
                        <div class="invalid-feedback">Please enter your valid contact number</div>
                    </div>
                    <div class="col-6">
                        <label class="col-sm-12 col-form-label" for="inputPassword1">Mail id</label>
                        <input class="form-control" id="inputPassword1" type="text" placeholder="Mail id" required="">
                        <div class="invalid-feedback">Please enter your valid Mail id</div>
                    </div>
                    <div class="col-6">
                        <label class="col-sm-12 col-form-label" for="inputPassword1">Address</label>
                        <input class="form-control" id="inputPassword1" type="text" placeholder="Address" required="">
                        <div class="invalid-feedback">Please enter your Address</div>
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="formFile1">Choose profile image</label>
                        <input class="form-control" id="formFile1" type="file" aria-label="file example" required="">
                        <div class="invalid-feedback">Invalid form file selected</div>
                    </div>
                    <div class="card-header pb-0">
                        <h4>vendor company details</h4>

                    </div>

                    <div class="col-6">
                        <label class="col-sm-12 col-form-label" for="inputPassword1">Company name</label>
                        <input class="form-control" id="inputPassword1" type="text" placeholder="Company name" required="">
                        <div class="invalid-feedback">Please enter your Company name</div>
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="validationCustom04">work out</label>
                        <select class="form-select" id="validationCustom04" required="">
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
                        <label class="col-sm-12 col-form-label" for="inputPassword1">Contact Numbar</label>
                        <input class="form-control" id="inputPassword1" type="text" placeholder="Contact Numba" required="">
                        <div class="invalid-feedback">Please enter your Contact Numba</div>
                    </div>
                    <div class="col-6">
                        <label class="col-sm-12 col-form-label" for="inputPassword1">website</label>
                        <input class="form-control" id="inputPassword1" type="text" placeholder="website" required="">
                        <div class="invalid-feedback">Please enter your web site</div>
                    </div>
                    <div class="col-6">
                        <label class="col-sm-12 col-form-label" for="inputPassword1">Mail id 1</label>
                        <input class="form-control" id="inputPassword1" type="text" placeholder="Mail id 1" required="">
                        <div class="invalid-feedback">Please enter your valid Mail id</div>
                    </div>
                    <div class="col-6">
                        <label class="col-sm-12 col-form-label" for="inputPassword1">Mail id 2</label>
                        <input class="form-control" id="inputPassword1" type="text" placeholder="Mail id 2" required="">
                        <div class="invalid-feedback">Please enter your valid Mail id 2</div>
                    </div>
                    <div class="col-6">
                        <label class="col-sm-12 col-form-label" for="inputPassword1">Mail id 3</label>
                        <input class="form-control" id="inputPassword1" type="text" placeholder="Mail id 3" required="">
                        <div class="invalid-feedback">Please enter your valid Mail id 3</div>
                    </div>

                    <div class="col-6">
                        <label class="col-sm-12 col-form-label" for="inputPassword1">Address</label>
                        <input class="form-control" id="inputPassword1" type="text" placeholder="C Address" required="">
                        <div class="invalid-feedback">Please enter your Address</div>
                    </div>

                    <div class="card-header pb-3">
                        <h4>vendor Document</h4>

                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h4>Tin certificate</h4>

                                </div>
                                <div class="card-body">
                                    <input class="no-preview" type="file">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h4>registration</h4>

                                </div>
                                <div class="card-body">
                                    <input class="no-preview" type="file">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h4>iD document</h4>

                                </div>
                                <div class="card-body">
                                    <input class="no-preview" type="file">
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Create Vender</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
