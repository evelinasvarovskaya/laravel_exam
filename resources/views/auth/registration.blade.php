@extends('layouts.layout')
@section('content')

<h3>Регистрация</h3>

<form action="/api/reg" method="post">
    @csrf
    <div><br>
        <label for="name">Введите: Имя пользователя</label><br>
        <input type="text" name="name" id="name"><br>
        <label>Введите: Почту</label><br>
        <input type="email" name="email" id="email" placeholder="Введите e-mail"><br>
        <label>Придумайте пароль (не менее 3 символов)</label><br>
        <input type="password" name="password" id="password"> <br>
        
        <button type="submit">Зарегстрироваться</button><br>
    </div>
    @if($errors->has('email'))
        <span>{{ $errors->first('email')}}</span>
    @endif
</form>
@endsection