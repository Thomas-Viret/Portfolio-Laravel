@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <form action="{{ route('user.password_store',['user' => $user]) }}" method="post">
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Confirmation de Mot de passe</label>
                        <input type="password" name="confirm_password" id="password" class="form-control" required>
                    </div>
                    @csrf()
                    @method('PUT')
                    <input type="submit" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection
