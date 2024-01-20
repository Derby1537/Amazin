@extends('index')

@section('body')
    <h3>Sign up</h3>
    <form method="POST">
        @csrf
        <form method="POST">
            @csrf
            <label for="email">Email: </label>
            <input type="email" name="email"><br>
            <label for="username">Username: </label>
            <input type="text" name="username"><br>
            <label for="password">Password</label>
            <input type="password" name="password"><br>
            <label for="rep_password">Repeat password:</label>
            <input type="password" name="rep_password"><br>
            <label for="remember">Remember this device?</label>
            <input type="checkbox" name="remember"><br>
            <input type="submit" value="sign up">
        </form>
    </form>
@endsection