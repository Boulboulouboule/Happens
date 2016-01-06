@extends('layouts.master')
@section('title', 'Happens')
@section('content')
<div class="container">
<div class="col-md-12">
@foreach ($trends as $trend)
<div class="container profile">
    <div class="col-md-9">
        <div class="panel panel-profile">
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="profile-blog blog-border">
                        <img class="rounded-x" src="{{ $trend->user->profile_background_image_url}}" alt="">
                        <div class="name-location">
                            <strong>{{ $trend->user->name }}</strong>
                            <span><i class="fa fa-map-marker"></i> {{ $trend->user->location }}</span>
                        </div>
                        <div class="clearfix margin-bottom-20"></div>
                        <p>{{ $trend->text }}</p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

@endforeach
</div>
</div>

@endsection
