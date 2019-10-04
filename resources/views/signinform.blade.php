@extends('layouts.layouts')
@section('title',"SignIn")
@section('content')
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form name="frm" method="post" action="{{route('signup_action')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" placeholder="Enter first name" id="first_name" class="form-control">
                    @if($errors->has('first_name'))
                        <font color=red size=2>{{$errors->first('first_name')}}</font>
                    @endif
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" placeholder="Enter last name" id="last_name" class="form-control">
                    @if($errors->has('last_name'))
                        <font color=red size=2>{{$errors->first('last_name')}}</font>
                    @endif
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Enter email" id="email" class="form-control">
                </div>
                @if($errors->has('email'))
                    <font color=red size=2>{{$errors->first('email')}}</font>
                @endif
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Enter password" id="password" class="form-control">
                    @if($errors->has('password'))
                        <font color=red size=2>{{$errors->first('password')}}</font>
                    @endif
                </div>
                <div class="form-group">
                    <label for="confirm_password">Password</label>
                    <input type="password" name="confirm_password" placeholder="Re Enter password" id="confirm_password" class="form-control">
                    @if($errors->has('confirm_password'))
                        <font color=red size=2>{{$errors->first('confirm_password')}}</font>
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success" id="submit">Save</button>
                </div>  
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
@endsection