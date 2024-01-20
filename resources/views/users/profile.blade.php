@extends('index')
@section('body')
    <h3>Profile</h3>
    <p>
        Username: {{$user->name}}
    </p>
    <p>
        Email: {{$user->email}}
    </p>
    <p>
        password: *** <button>change password</button>
    </p>
    <button onclick="window.location.href='/orders/{{$user->id}}'">orders</button>
@endsection