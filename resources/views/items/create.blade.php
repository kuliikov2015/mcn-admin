@extends('layouts.app')

@section('content')
<h1>Создаем новый товар</h1>
<form action="/items" method="post">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-sm-6 form-group">
            <label for="steel_type">Марка стали:</label>
            <select name="steel_type_id" id="steel_type" class="form-control">
                @foreach($steelTypes as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 form-group">
            <label for="roll_type">Тип проката:</label>
            <select name="roll_type_id" id="roll_type" class="form-control">
                @foreach($rollTypes as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <a href="/items" class="btn btn-danger">Назад</a>
        <input class="btn btn-primary" type="submit" value="Создать">
    </div>
</form>
@endsection