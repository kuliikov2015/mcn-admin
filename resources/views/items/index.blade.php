@extends('layouts.app')

@section('content')
    <h1>Все товары</h1>
    <p>
        <a class="btn btn-danger" href="/">Назад</a>
        <a class="btn btn-primary" href="/items/create">Добавить товар</a>
    </p>
    <table class="table table-striped table-bordered">
        <tr>
            <th>ID</th>
            <th>Тип проката</th>
            <th>Тип стали</th>
            <th>Действие</th>
        </tr>
        @foreach($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->rollType->name }}</td>
                <td>{{ $item->steelType->name }}</td>
                <td>
                    <form class="form-inline" action="items/{{ $item->id }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="delete">
                        <button class="btn btn-default"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection