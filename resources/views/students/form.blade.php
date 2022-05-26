@extends('layouts.app', ['page' => __('User Profile'), 'pageSlug' => 'profile'])

@section('content')
<div class="row">
    <div class="col-md-8">
        <form class="form" method="post" action="{{ route('students.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card card-user">
                <div class="card-header">
                    <h5 class="title">{{ _('Edit Profile') }}</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">
                    <div class="author">
                        <div class="block block-one"></div>
                        <div class="block block-two"></div>
                        <div class="block block-three"></div>
                        <div class="block block-four"></div>
                        <a href="#">
                            @if(!is_null($student->profile_image))
                            <img src="{{ asset('storage/profile_images/'.$student->profile_image) }}" id="profile-image" height="150px" style="border: 5px solid #eee;border-bottom-color: transparent;">
                            @else
                            <img src="{{ asset('img/default-avatar.png') }}" id="profile-image" height="150px" style="border: 5px solid #eee;border-bottom-color: transparent;">
                            @endif
                            <h5 class="title mt-3" id="student-title">{{ $student->name_th ?? 'ชื่อ - นามสกุล' }}</h5>
                        </a>
                        <p class="description mb-3" id="student-position">
                            {{ $student->position ?? 'ตำแหน่ง' }}
                        </p>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">อัพโหลดรูปภาพ</label>
                            <input class="form-control" type="file" id="formFile" name="profile_image" accept="image/*">
                        </div>
                    </div>
                    </p>
                    @if(isset($student))<input type="hidden" name="id" value="{{ $student->id }}">@endif
                    <div class="form-group">
                        <label>กลุ่ม</label>
                        <select class="form-control" name="group_id">
                            @foreach($groups as $data)
                            <option value="{{ $data->id }}" @if(isset($student) && $student->group_id==$data->id) selected @endif>กลุ่มที่ {{ $data->id }} : {{ $data->name_th }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>รหัสประจำตัว</label>
                        <input type="text" class="form-control" name="student_code" value="{{ $student->student_code ?? '' }}" placeholder="1234" required>
                    </div>
                    <div class="form-group">
                        <label>ชื่อ - นามสกุล (ภาษาไทย)</label>
                        <input type="text" class="form-control" name="name_th" value="{{ $student->name_th ?? '' }}" placeholder="ภาษาไทย" required>
                    </div>
                    <div class="form-group">
                        <label>ชื่อ - นามสกุล (ภาษาอังกฤษ)</label>
                        <input type="text" class="form-control" name="name_eng" value="{{ $student->name_eng ?? '' }}" placeholder="ภาษาอังกฤษ" required>
                    </div>
                    <div class="form-group">
                        <label>ชื่อเล่น</label>
                        <input type="text" class="form-control" name="nick_name" value="{{ $student->nick_name ?? '' }}" placeholder="ชื่อเล่น" required>
                    </div>
                    <div class="form-group">
                        <label>วันเกิด (พศ)</label>
                        <input type="date" class="form-control" name="birth_date" value="{{ $student->birth_date ?? '' }}" placeholder="01/01/2500" pattern="\d{4}-\d{2}-\d{2}" required>
                    </div>
                    <div class="form-group">
                        <label>เบอร์โทร</label>
                        <input type="text" class="form-control" name="telephone" value="{{ $student->telephone ?? '' }}" placeholder="0123456789" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $student->email ?? '' }}" placeholder="email@example.com" required>
                    </div>
                    <div class="form-group">
                        <label>Facebook</label>
                        <input type="text" class="form-control" name="facebook" value="{{ $student->facebook ?? '' }}" placeholder="Name / Link">
                    </div>
                    <div class="form-group">
                        <label>Line ID</label>
                        <input type="text" class="form-control" name="line" value="{{ $student->line ?? '' }}" placeholder="Line ID">
                    </div>
                    <div class="form-group">
                        <label>สังกัด ( หน่วยงาน, องกรค์, บริษัท, มหาวิทยาลัย ฯลฯ )</label>
                        <input type="text" class="form-control" name="affiliation" value="{{ $student->affiliation ?? '' }}" placeholder="สังกัด" required>
                    </div>
                    <div class="form-group">
                        <label>ตำแหน่ง</label>
                        <input type="text" class="form-control" name="position" value="{{ $student->position ?? '' }}" placeholder="ตำแหน่ง" required>
                    </div>
                    <div class="form-group">
                        <label>ลักษณะงาน</label>
                        <textarea class="form-control summernote" placeholder="ลักษณะงาน" name="work_description" rows="10">{{ $student->work_description ?? '' }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>เปลี่ยน Password</label>
                        <input type="password" class="form-control" id="myPassword" value="{{ $student->password ?? '' }}" readonly>
                        <h4 class="mt-2 mb-2 text-primary" id="myPassword2">แตะเพี่อแสดง password</h4>
                        <label>Password ใหม่</label>
                        <input type="text" class="form-control" name="new_password" value="">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-lg mb-3">{{ _('อัพเดทข้อมูล') }}</button>
                    <a href="{{ route('students.index', ['id' => $student->id]) }}" class="btn btn-danger btn-lg mb-3">{{ _('กลับ') }}</a>
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

        $('#myPassword').hover(function show() {
                //Change the attribute to text  
                $('#myPassword').attr('type', 'text');
            },
            function() {
                //Change the attribute back to password  
                $('#myPassword').attr('type', 'password');
            });

        $('#myPassword2').hover(function show() {
                //Change the attribute to text  
                $('#myPassword').attr('type', 'text');
            },
            function() {
                //Change the attribute back to password  
                $('#myPassword').attr('type', 'password');
            });
    });
</script>
@endpush