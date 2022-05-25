@extends('layouts.frontend', ['pageSlug' => 'form'])

@section('content')
<div class="col-md-10 text-center ml-auto mr-auto">
    <div class="card card-login card-white">
        <div class="card-body text-center">
            <h1 class="mt-3 text-success"><i class="tim-icons icon-satisfied"></i></h1>
            <h1>Thank you</h1>
            <h3 class="mb-5">ขอบคุณสำหรับการบันทึกข้อมูล</h3>
        </div>
    </div>
    <a class="btn btn-success mt-2 text-white mr-3" href="{{ route('login') }}"></i> หน้า Login</a>
    <a class="btn btn-info mt-2 text-white" href="{{ route('form') }}"><i class="text-white tim-icons icon-cloud-download-93 mr-1"></i> หน้าบันทึกข้อมูล</a>
</div>
@endsection