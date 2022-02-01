@extends('layouts.layout')
@section('content')

    <form method="post" action="/thinggive"> 
        @csrf

        <h1>Передача вещи</h1>
        <div>
            <br>
            <label for="thing_id">Идентификатор вещи</label><br>
            <input type="number" name="thing_id" id="thing_id"><br><br><br>
            <label for="to_id">Идентификатор пользователя, кому передается вещь</label><br>
            <input type="number" name="to_id" id="to_id"><br><br><br>
        </div>
        <br>
        <button type="submit">Отправить</button>
    </form>
@endsection