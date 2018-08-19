@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">

        <div class="col-md-4">
            @include('admin._side-menu')
        </div>

        <div class="col-md-8">
            <gallery></gallery>
        </div>

    </div>
</div>

@endsection
