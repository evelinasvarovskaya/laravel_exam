@extends('layouts.layout')
@section('content')

<h3>Авторизация</h3>

<form action="/custom-login" method="post">
    @csrf
    <div><br><br>
    <label>Введите: Имя пользователя</label><br>
        <input type="email" name="email" id="email" placeholder="Введите e-mail"><br><br>
        <label>Введите: Пароль</label><br>
        <input type="password" name="password" id="password"><br>        
        
        <button type="submit">Войти</button>
    </div>
</form>
@endsection