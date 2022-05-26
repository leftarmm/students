@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header ">
                <h3 class="title d-inline"><img src="{{ asset('img/favicon.png') }}" width="30px" style="position:relative;top:-5px;">หลักสูตรนักบริหารการงบประมาณระดับสูง รุ่นที่ 9 ({{ count($students) }})</h3>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('dashboard') }}" id="group-form">
                    @csrf
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>กลุ่ม</label>
                                <select class="form-control" name="group_id" id="select-student-group">
                                    <option value="">ทั้งหมด</option>
                                    @foreach($groups as $data) <option value="{{ $data->id }}" @if(isset($group) && $group==$data->id) selected @endif>กลุ่มที่ {{ $data->id }} : {{ $data->name_th }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>ค้นหาจากชื่อ / ชื่อเล่น</label>
                                <input type="text" class="form-control" id="search-name" name="name">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>ค้นหาจากรหัส</label>
                                <input type="text" class="form-control" id="search-code" name="code">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default">Seacrh</button>
                    <a href="{{ route('dashboard') }}" class="btn btn-warning">Clear</a>
                </form>
            </div>
        </div>
    </div>
    @foreach($students as $data)
    <div class="col-sm-3 col-6 p-2">
        <a href="{{ route('students.index', ['id' => $data->id]) }}">
            <div class="card text-center h-95">
                <div class="card-header">
                    <h4 class="card-title title">{{ $data->student_code ?? '' }} @if(!is_null($data->nick_name)) {{ '- พี่'.$data->nick_name }} @endif</h4>
                </div>
                <div class="card-body">
                    {{--<h1 class="mt-3">#{{ $data->student_code ?? '' }}</h1>--}}
                    @if(!is_null($data->profile_image))
                    <img class="mb-3" src="{{ asset('storage/profile_images/'.$data->profile_image) }}" height="190px" />
                    @else
                    <img class="mb-3" src="{{ asset('img/default-avatar.png') }}" height="190px" />
                    @endif
                    {{--<h1 class="mt-3"><b>พี่{{ $data->nick_name ?? '' }}</b></h1>--}}
                    <h4 class="title">{{ $data->name_th ?? '' }}</h4>
                    <h4>{{ $data->affiliation ?? '' }}</h4>
                </div>
                <div class="card-footer bg-primary" style="color: {{$data->font_color($data->group_id)}} !important;background-color:{{$data->group_color($data->group_id)}} !important;">กลุ่ม {{ $data->group($data->group_id) ?? '' }}
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>
@endsection

@push('js')
<script>
    $(document).ready(function() {
        $('#select-student-group').on('change', function() {
            $('#group-form').submit();
        });
    });
</script>
@endpush