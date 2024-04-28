@extends('layout.main')

@section('content')

    <!-- category magagement -->

    <h3>Avalable Categories:</h3>

    @foreach($categories as $category)
        <div class="d-flex">
            <h2 class="mx-3">{{$category->title}}</h2>
            <a href="{{route('category.delete', ['id' => $category->id])}}"><button class="btn btn-danger">
                Delete
            </button></a>
        </div>

    @endforeach

    <h3>Add new Category</h3>
    <form action="{{route('category.add')}}" method="POST" class="">
        @csrf
        <input name="title" type="text" value="" placeholder="new category title" />
        <button type="submit">Add category</button>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection
