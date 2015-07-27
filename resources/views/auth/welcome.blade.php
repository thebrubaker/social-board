@extends('main.layout')

@section('title', ' - Welcome')

@section('content')
<div id="welcome">
    <div class="container">
        <div class="content">
            <div class="title">Social Board</div>
            <form action="{{url('auth/login')}}" method="POST" class="form-register">
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                {!! csrf_field() !!}
                <div class="form-group form-inline">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email" class="form-control">

                    <label for="password" class="sr-only">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" class="form-control">

                    <button type="submit" class="btn btn-primary form-control">Sign in</button>
                </div>
                <div class="form-group form-inline">
                    <div class="checkbox">
                        <label><input type="checkbox"> Remember Me</label>
                    </div>
                </div>
            </form>
            <p><a href="{{url('auth/register')}}">Create New Account</a></p>
            <p><a href="">Forgot Your Password?</a></p>
        </div>
    </div>
</div>
@stop
