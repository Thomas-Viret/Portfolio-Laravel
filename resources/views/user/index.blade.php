

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-2 offset-10">
                <a href="{{ route('user.create') }}" class="btn btn-info">Création d'un utilisateur</a>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Crée le</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)

                            <tr>
                                <td>{{$user['name']}}</td>
                                <td>{{$user['email']}}</td>
                                <td>{{$user['created_at']}}</td>
                                <td>
                                    <div class="row">
                                        <div class="col">
                                            <form action="{{ route('user.destroy',['user' => $user['id']]) }}" method="POST">
                                                @method('DELETE')
                                                @csrf()
                                                <input type="submit" class="btn btn-sm btn-danger" value="Supprimer">
                                            </form>
                                        </div>
                                        <div class="col">
                                            <a href="{{ route('user.password',['user' => $user['id']]) }}" class="btn btn-sm btn-info">Mot de passe</a>
                                        </div>
                                        <div class="col">
                                            <a href="{{ route('user.edit',['user' => $user['id']]) }}" class="btn btn-sm btn-warning">Modifier</a>
                                        </div>

                                    </div>

                                </td>
                            </tr>
                            @endforeach
                    </tbody>

                </table>
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection
