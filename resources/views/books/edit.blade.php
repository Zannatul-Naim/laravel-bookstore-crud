@extends('layout')

@section('page-content')

    <form action="{{route('books.update')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$book->id}}">
        <div class="form-group">
            <label for="inputTitile">Title</label>
            <input class="form-control"  type="text" name="title" value="{{old('title', $book->title)}}" id="" placeholder="Enter Title">
            <div>{{$errors->first('title')}}</div>
        </div>
        <div class="form-group">
            <label for="inputAuthor">Author</label>
            <input class="form-control"  type="text" name="author" value="{{old('author', $book->author)}}" id="" placeholder="Enter Author's Name">
            <div>{{$errors->first('author')}}</div>
        </div>
        <div class="form-group">
            <label for="inputIsbn">ISBN</label>
            <input class="form-control"  type="text" name="isbn" value="{{old('isbn', $book->isbn)}}" id="" placeholder="Enter ISBN">
            <div>{{$errors->first('isbn')}}</div>
        </div>
        <div class="form-group">
            <label for="inputStock">Stock</label>
            <input class="form-control" type="text" name="stock" value="{{old('stock', $book->stock)}}" id="" placeholder="Enter Stock">
            <div>{{$errors->first('stock')}}</div>
        </div>
        <div class="form-group">
            <label for="inputPrice">Price</label>
            <input class="form-control" type="text" name="price" value="{{old('price', $book->price)}}" id="" placeholder="Enter Price">
            <div>{{$errors->first('price')}}</div>
        </div>
        <div class="form-group">
            <button type="submit" class='btn btn-primary mt-3'>Submit</button>
        </div>
    </form>

@endsection
