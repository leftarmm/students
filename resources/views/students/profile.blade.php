@extends('layouts.app', ['page' => __('User Profile'), 'pageSlug' => 'profile'])

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="title">{{ _('Profile') }}</h5>
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
                        <img class="mb-3" src="{{ asset('storage/profile_images/'.$student->profile_image) }}" height="200px" style="border: 5px solid #eee;border-bottom-color: transparent;" />
                        @else
                        <img class="mb-3" src="{{ asset('img/default-avatar.png') }}" id="profile-image" height="200px" style="border: 5px solid #eee;border-bottom-color: transparent;">
                        @endif
                        <h4 class="title">{{ $student->name_th ?? '' }}</h4>
                    </a>
                    <p class="description">
                        {{ $student->position ?? '' }}
                    </p>
                    {{--<a href="{{ route('students.edit', ['student' => $student]) }}" class="btn btn-sm btn-info">แก้ไขข้อมูล</a>--}}
                    <a href="#" id="btn-edit-info" class="btn btn-sm btn-info" data-id="{{ $student->id }}">แก้ไขข้อมูล</a>
                </div>
                </p>
                <div class="typography-line mt-5">
                    <h4>
                        <span>กลุ่ม</span>{{ $student->group($student->group_id) ?? '' }}
                    </h4>
                </div>
                <div class="typography-line">
                    <h4>
                        <span>รหัสประจำตัว</span>{{ $student->student_code ?? '-' }}
                    </h4>
                </div>
                <div class="typography-line">
                    <h4>
                        <span>ชื่อ (TH)</span>{{ $student->name_th ?? '-' }}
                    </h4>
                </div>
                <div class="typography-line">
                    <h4>
                        <span>ชื่อ (ENG)</span>{{ $student->name_eng ?? '-' }}
                    </h4>
                </div>
                <div class="typography-line">
                    <h4>
                        <span>ชื่อเล่น</span>{{ $student->nick_name ?? '-' }}
                    </h4>
                </div>
                <div class="typography-line">
                    <h4>
                        <span>วันเกิด</span>{{ date('d/m/Y', strtotime($student->birth_date)) ?? '-' }}
                    </h4>
                </div>
                <div class="typography-line">
                    <h4>
                        <span>เบอร์โทร</span>{{ $student->telephone ?? '-' }}
                    </h4>
                </div>
                <div class="typography-line">
                    <h4>
                        <span>Email</span>{{ $student->email ?? '-' }}
                    </h4>
                </div>
                <div class="typography-line">
                    <h4>
                        <span>Facebook</span>{{ $student->facebook ?? '-' }}
                    </h4>
                </div>
                <div class="typography-line">
                    <h4>
                        <span>Line ID</span>{{ $student->line ?? '-' }}
                    </h4>
                </div>
                <div class="typography-line">
                    <h4>
                        <span>สังกัด</span>{{ $student->affiliation ?? '-' }}
                    </h4>
                </div>
                <div class="typography-line">
                    <h4>
                        <span>ตำแหน่ง</span>{{ $student->position ?? '-' }}
                    </h4>
                </div>
                <h4 style="color:#c0c1c2;">
                    ลักษณะงาน
                </h4>
                <h4>{!! $student->work_description ?? '-' !!}</h4>
            </div>
            <div class="card-footer">
                <!-- <button type="submit" href="" class="btn btn-primary btn-lg btn-block mb-3">{{ _('บันทึกข้อมูล') }}</button> -->
                <a href="{{ route('dashboard') }}" class="btn btn-primary btn-lg btn-block mb-3">กลับ</a>
            </div>
        </div>
    </div>
</div>
@endsection


@push('js')
<script>
    $(document).ready(function() {
        $('#btn-edit-info').click(function() {
            var id = $(this).data('id');
            Swal.fire({
                title: "Authentication",
                text: "Please input password",
                input: 'text',
                showCancelButton: true,
                allowOutsideClick: false,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Verify'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "{{ route('students.check_password') }}",
                        type: "post",
                        data: {
                            '_token': '{{ Session::token() }}',
                            'id': id,
                            'password': result.value
                        },
                        success: function(response) {
                            console.log(response);
                            if (response != true) {
                                toastr.error('Authentication failed');
                                $('#btn-edit-info').click();
                            } else {
                                toastr.success('Authentication successful');
                                setInterval(function() {
                                    window.location = "{{ route('students.edit', ['student' => $student, 'verify' => $student->password.$student->student_code]) }}";
                                }, 1000);
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.log(textStatus, errorThrown);
                        }
                    });
                }
            });
        });
    });
</script>
@endpush