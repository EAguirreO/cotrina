@extends('layouts.main-layout')

@section('styles')
<link href="{{ asset('css/home.css') }}" rel="stylesheet" />
<link href="{{ asset('css/library/slick.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="section_general">
    <div class="section-1" style="background-color: black; width: 100%; height: 900px">
        
    </div>

    <div class="section-2">

    </div>

    <div class="section-3">
        
    </div>

    <div class="section-4">

    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/slick.min.js') }}"></script>
@endpush
