@extends('index')
@section('body')
    <h1>Login</h1>
    <form method="POST">
        @csrf
        <label for="username">Username: </label>
        <input type="text" name="username"><br>
        <label for="password">Password</label>
        <input type="password" name="password"><br>
        <label for="remember">Remember this device?</label>
        <input type="checkbox" name="remember"><br>
        <input type="submit" value="log in"> <button type="button" onclick="window.location.href='/signup'">sign up</button>
    </form>
@endsection