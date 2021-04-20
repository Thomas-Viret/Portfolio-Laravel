@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <form action="{{ route('user.store') }}" method="post">
                    <div class="form-group">
                        <label for="name">UserName</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="mail">Email</label>
                        <input type="email" name="email" id="mail" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    @csrf()
                    <input type="submit" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection
