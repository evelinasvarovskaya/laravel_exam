@extends('layouts.layout')
@section('content')

    <form method="post" action="/thing"> 
        @csrf

        <h1>Создание вещи</h1>
        <div>
            <br>
            <label for="description">Введите: Название</label><br>
            <input type="text" name="name" id="name" placeholder="Введите название"><br><br><br>
            <label for="description">Введите: Описание</label><br>
            <input type="text" name="description" id="description"><br><br><br>
            <label for="wrnt">Введите: Срок годности</label><br>
            <input type="text" name="wrnt" id="wrnt"><br><br><br>
        </div>

        <button type="submit">Отправить</button>
    </form>
@endsection