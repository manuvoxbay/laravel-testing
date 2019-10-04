@extends('layouts.layouts')
@section('title',"Register Page")
@section('content')
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="middle">
                <div>
              <a href="{{url('signin')}}"><h3><b><button id="signin" class="btn btn-success">SignUp</button></b></h3></a>
                </div>
                <div>
                    <h3><b><button id="signup" class="btn btn-primary">SignIn</button></b></h3>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
@endsection