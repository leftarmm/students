@extends('layouts.frontend', ['pageSlug' => 'form'])

@section('content')
<div class="row">
    <div class="col-md-12">
        <form class="form" method="post" action="{{ route('student_store') }}" enctype="multipart/form-data">
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
                            <img src="{{ asset('img/default-avatar.png') }}" id="profile-image" height="200px" style="border: 5px solid #eee;border-bottom-color: transparent;">
                            <h5 class="title mt-3" id="student-title">ชื่อ - นามสกุล</h5>
                        </a>
                        <p class="description mb-3" id="student-position">
                            ตำแหน่ง
                        </p>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">อัพโหลดรูปภาพ</label>
                            <input class="form-control" type="file" id="formFile" name="profile_image" accept="image/*" required>
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
                        <label>รหัสประจำตัว</label>
                        <input type="text" class="form-control" name="student_code" placeholder="1234" required>
                    </div>
                    <div class="form-group">
                        <label>ชื่อ - นามสกุล (ภาษาไทย)</label>
                        <input type="text" class="form-control" name="name_th" placeholder="ภาษาไทย" required>
                    </div>
                    <div class="form-group">
                        <label>ชื่อ - นามสกุล (ภาษาอังกฤษ)</label>
                        <input type="text" class="form-control" name="name_eng" placeholder="ภาษาอังกฤษ" required>
                    </div>
                    <div class="form-group">
                        <label>ชื่อเล่น</label>
                        <input type="text" class="form-control" name="nick_name" placeholder="ชื่อเล่น" required>
                    </div>
                    <div class="form-group">
                        <label>วันเกิด (พศ)</label>
                        <input type="date" class="form-control" name="birth_date" placeholder="01/01/2500" pattern="\d{4}-\d{2}-\d{2}" required>
                    </div>
                    <div class="form-group">
                        <label>เบอร์โทร</label>
                        <input type="text" class="form-control" name="telephone" placeholder="0123456789" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="email@example.com" required>
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
                        <input type="text" class="form-control" name="affiliation" placeholder="สังกัด" required>
                    </div>
                    <div class="form-group">
                        <label>ตำแหน่ง</label>
                        <input type="text" class="form-control" name="position" placeholder="ตำแหน่ง" required>
                    </div>
                    <div class="form-group">
                        <label>ลักษณะงาน</label>
                        <textarea class="form-control summernote" placeholder="ลักษณะงาน" name="work_description" rows="10"></textarea>
                </div>
                <div class="card-footer">
                    <button type="submit" href="" class="btn btn-primary btn-lg btn-block mb-3">{{ _('บันทึกข้อมูล') }}</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('js')
<script>
    $(document).ready(function() {
        $('input[name=name_th]').change(function() {
            $('#student-title').html($(this).val());
        });

        $('input[name=position]').change(function() {
            $('#student-position').html($(this).val());
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#profile-image').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#formFile").change(function() {
            readURL(this);
        });
    });
</script>
@endpush