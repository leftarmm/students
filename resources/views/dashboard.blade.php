@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
    <div class="row">
        @foreach($students as $data)
        <div class="col-sm-2">
            <div class="card">
                <!-- <div class="card-header">
                    <h5 class="card-category">Total Shipments</h5>
                    <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> 763,215</h3>
                </div> -->
                <div class="card-body text-center">
                    <img class="mb-3" src="{{ rand(0,1) == 1 ? asset('img/anime3.png') : asset('img/anime6.png') }}" />
                    <p><b>{{ $data->name_th }}</b></p>
                    <p>{{ $data->affiliation }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
        });
    </script>
@endpush
