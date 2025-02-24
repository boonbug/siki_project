@extends('admin.layout.app')
@extends('admin.layout.footer')
@extends('admin.layout.header')
@extends('admin.layout.sidebar')
@section('title', 'Dashboard')
@section('admin_main_content')
<div class="container-fluid">
    <div class="row page-title">
        <div class="col-sm-6">
            <h3> {{ slugTitle('dashboard') }} </h3>
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
