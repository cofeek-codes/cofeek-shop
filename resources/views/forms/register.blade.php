@extends('layout.main')

@section('content')
    <form action="{{route('auth.register')}}" method="POST">
        @csrf

        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="loginHelp" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Surname</label>
            <input name="surname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="loginHelp" placeholder="Enter surname">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Patronomyc</label>
            <input name="patronomyc" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="loginHelp" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Login</label>
            <input name="login" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="loginHelp" placeholder="Enter surname">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="loginHelp" placeholder="Enter login">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" name="rules" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Terms of service</label>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
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
