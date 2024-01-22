@extends('layout')

@section('page-content')
    <h1>BookStore</h1>
    <div class="row mb-2">
        <div class="col-lg-10">
            <form action="{{route('books.index')}}" method="get">

                <div class="row">
                    <div class="col-8">
                        <input type="text" name="search" id="search" class="form-control" placeholder="Search Here" value="{{request('search')}}">
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn btn-info">Search</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-2">
            <a href="{{route('books.create')}}" class="btn btn-primary">New Book</a>
            {{-- <button type="submit" onsubmit="{{route('books.create')}}" class="btn btn-primary mb-2">New Book</button> --}}
        </div>
    </div>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>ISBN</th>
            <th>Stock</th>
            <th>Price</th>
            <th colspan="3">Actions</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{$book['id']}}</td>
            <td>{{$book['title']}}</td>
            <td>{{$book['author']}}</td>
            <td>{{$book['isbn']}}</td>
            <td>{{$book['stock']}}</td>
            <td>{{$book['price']}}</td>
            <td><a href="{{route('books.show', $book->id)}}" class="link-offset-2 link-underline link-underline-opacity-0">View</a></td>
            <td><a href="{{route('books.edit', $book->id)}}" class="link-offset-2 link-underline link-underline-opacity-0">Update</a></td>
            <td>
                <form  method="post" action="{{route('books.destroy')}}" onsubmit=" return confirm('Are You Sure?')">
                    @csrf
                    <input type="hidden" name="id" value="{{$book->id}}">
                    <input type="submit" style="padding: 0; margin: 0" value="Delete" class="btn btn-link text-danger"/>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{$books->links()}}
@endsection
