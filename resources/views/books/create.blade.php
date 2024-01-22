@extends('layout')

@section('page-content')

    <h1>New Book</h1>

    <form action="{{route('books.store')}}" method="post" class="mt-3">
        @csrf
        <div class="form-group">
            <label for="inputTitle">Title</label>
            <input type="text" class="form-control" name="title" value="{{old('title')}}"  placeholder="Enter Title">
            <div>{{$errors->first('title')}}</div>
        </div>

        <div class="form-group">
            <label for="inputAuthor">Author</label>
            <input type="text" class="form-control" name="author" value="{{old('author')}}"  placeholder="Enter Author's Name">
            <div>{{$errors->first('author')}}</div>
        </div>

        <div class="form-group">
            <label for="inputIsbn">ISBN</label>
            <input type="text" class="form-control" name="isbn" value="{{old('isbn')}}"  placeholder="Enter ISBN">
            <div>{{$errors->first('isbn')}}</div>
        </div>

        <div class="form-group">
            <label for="iputStock">Stock</label>
            <input type="text" class="form-control" name="stock" value="{{old('stock')}}"  placeholder="Enter Stock">
            <div>{{$errors->first('stock')}}</div>
        </div>

        <div class="form-group">
            <label for="inputPrice">Price</label>
            <input type="text" class="form-control" name="price" value="{{old('price')}}"  placeholder="Enter Price">
            <div>{{$errors->first('price')}}</div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('books.index')}}" class="btn btn-danger">Back</a>
    </form>

@endsection
