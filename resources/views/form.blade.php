@extends('layouts.frontend', ['pageSlug' => 'form'])

@section('content')
<div class="row">
    <div class="col-md-12">
        <form class="form" method="post" action="{{ route('students.store') }}">
            @csrf
            <div class="card card-user">
                <div class="card-body">
                    <div class="card-description text-center mb-5">
                        <h4>หลักสูตรนักบริหารการงบประมาณระดับสูง</h4>
                    </div>
                    <p class="card-text">
                    <div class="author">
                        <div class="block block-one"></div>
                        <div class="block block-two"></div>
                        <div class="block block-three"></div>
                        <div class="block block-four"></div>
                        <a href="#">
                            <img class="avatar" src="{{ asset('img/emilyz.jpg') }}" id="profile-image" alt="">
                            <h5 class="title">ชื่อ - นามสกุล</h5>
                        </a>
                        <p class="description">
                            ตำแหน่ง
                        </p>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">อัพโหลดรูปภาพ</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                    </div>
                    </p>
                    <div class="form-group">
                        <label>กลุ่ม</label>
                        <select class="form-control" name="group_id">
                            @foreach($groups as $data)
                            <option value="{{ $data->id }}">กลุ่มที่ {{ $data->id }} : {{ $data->name_th }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-lg">ชื่อ - นามสกุล (ภาษาไทย)</label>
                        <input type="text" class="form-control" name="name_th" placeholder="ภาษาไทย">
                    </div>
                    <div class="form-group">
                        <label>ชื่อ - นามสกุล (ภาษาอังกฤษ)</label>
                        <input type="text" class="form-control" name="name_eng" placeholder="ภาษาอังกฤษ">
                    </div>
                    <div class="form-group">
                        <label>ชื่อเล่น</label>
                        <input type="text" class="form-control" name="nick_name" placeholder="ชื่อเล่น">
                    </div>
                    <div class="form-group">
                        <label>วันเกิด</label>
                        <input type="text" class="form-control" name="birth_date" placeholder="01/01/2500">
                    </div>
                    <div class="form-group">
                        <label>เบอร์โทร</label>
                        <input type="text" class="form-control" name="telephone" placeholder="0123456789">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" placeholder="email@example.com">
                    </div>
                    <div class="form-group">
                        <label>Facebook</label>
                        <input type="text" class="form-control" name="facebook" placeholder="Name / Link">
                    </div>
                    <div class="form-group">
                        <label>Line ID</label>
                        <input type="text" class="form-control" name="line" placeholder="Line ID">
                    </div>
                    <div class="form-group">
                        <label>สังกัด ( หน่วยงาน, องกรค์, บริษัท, มหาวิทยาลัย ฯลฯ )</label>
                        <input type="text" class="form-control" name="affiliation" placeholder="สังกัด">
                    </div>
                    <div class="form-group">
                        <label>ตำแหน่ง</label>
                        <input type="text" class="form-control" name="position" placeholder="ตำแหน่ง">
                    </div>
                    <div class="form-group">
                        <label>ลักษณะงาน</label>
                        <textarea class="form-control" placeholder="ลักษณะงาน" name="work_description" rows="10" style="border: 1px solid rgba(29, 37, 59, 0.2);"></textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" href="" class="btn btn-primary btn-lg btn-block mb-3">{{ _('บันทึกข้อมูล') }}</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection