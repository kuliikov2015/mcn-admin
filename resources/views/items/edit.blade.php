@extends('layouts.app')

@section('content')
<h1>Изменяем товар</h1>
<form action="/items/{{  $item->id }}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PATCH">
    <div class="row">
        <div class="col-sm-6 form-group">
            <label for="steel_type">Марка стали:</label>
            <select name="steel_type_id" id="steel_type" class="form-control">
                @foreach($steelTypes as $type)
                    <option value="{{ $type->id }}"
                        @if($type->id === $item->steel_type_id) selected @endif
                        >
                    {{ $type->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 form-group">
            <label for="roll_type">Тип проката:</label>
            <select name="roll_type_id" id="roll_type" class="form-control">
                @foreach($rollTypes as $type)
                    <option value="{{ $type->id }}"
                        @if($type->id === $item->roll_type_id) selected @endif
                        >
                    {{ $type->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 form-group">
            <label for="size">Размер:</label>
            <input type="text" class="form-control" name="size" id="size" value="{{ $item->size }}">
        </div>
    </div>
    <div class="form-group">
        <a href="/items" class="btn btn-danger">Назад</a>
        <input class="btn btn-primary" type="submit" value="Сохранить">
    </div>
</form>
@endsection