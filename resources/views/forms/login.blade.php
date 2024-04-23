@extends('layout.main')

@section('content')
    <form action="{{route('auth.login')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Login</label>
            <input name="login" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="loginHelp" placeholder="Enter login">
            <small id="loginHelp" class="form-text text-muted">We'll never share your login with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
@endsection
