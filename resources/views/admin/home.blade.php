@extends('layouts.admin')

@section('content')
    <div class="wrapper-dashboard d-flex justify-content-around align-items-center my-4 flex-wrap">
        <div class="highlights-box d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-laptop-code"></i>
            <div><span class="fw-semibold">{{ $projects_tot }}</span> projects</div>
        </div>

        <div class="highlights-box d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-layer-group"></i>
            <div><span class="fw-semibold">{{ $types_tot }}</span> types</div>
        </div>

        <div class="highlights-box d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-robot"></i>
            <div><span class="fw-semibold">{{ $technologies_tot }}</span> technologies</div>
        </div>
    </div>
@endsection
