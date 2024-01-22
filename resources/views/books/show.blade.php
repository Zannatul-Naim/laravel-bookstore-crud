@extends('layout')

@section('page-content')
    <h1>BookStore</h1>
    <table class="table table-striped">
        <tr>
            <td>ID</td>
            <td>{{$book->id}}</td>
        </tr>
        <tr>
            <td>Title</td>
            <td>{{$book->title}}</td>
        </tr>
        <tr>
            <td>Author</td>
            <td>{{$book->author}}</td>
        </tr>
        <tr>
            <td>ISBN</td>
            <td>{{$book->isbn}}</td>
        </tr>
        <tr>
            <td>Stock</td>
            <td>{{$book->stock}}</td>
        </tr>
        <tr>
            <td>Price</td>
            <td>{{$book->price}}</td>
        </tr>

    </table>
    <a href="{{route('books.index')}}">Go Back</a>
@endsection
