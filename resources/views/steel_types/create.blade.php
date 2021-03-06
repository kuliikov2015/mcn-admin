@extends('layouts.app')

@section('content')
<h1>Добавляем марку стали</h1>

<form action="/steel_types" method="post">
    {{ csrf_field() }}
    <div class="row">
        <div class="form-group col-sm-6">
            <label for="name">Name: </label>
            <input class="form-control" type="text" name="name" id="name" required>
        </div>
    </div>
    <a href="/steel_types" class="btn btn-danger">Назад</a>
    <input class="btn btn-primary" type="submit" value="Создать">
</form>
@endsection