@extends('admin.layouts.default')

@section('content')
    <section class="container" id="listAccount">
        @if(session()->has('info'))
            <div class="row justify-content-center">
                <div class="notification is-success col-6">
                    {{ session('info') }}
                </div>
            </div>
        @endif
        <div class="row align-items-center title">
            <hr class="col-1">
            <h1 class="col-9">Liste des membres</h1>
        </div>
        <div class="row">
            <table class="table table-dark col-12">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Membres</th>
                    <th>Rôles</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr @if ($user->deleted_at) class="deletedAt" @endif>
                        <td>{{ $user->id }}</td>
                        <td><span class="bold">{{ $user->name }}</span></td>
                        <td>
                            @foreach($user->roles as $role)
                                <span class="role {{$role->role}}">{{$role->role}}</span>
                            @endforeach
                        </td>
                        <td>
                            @if($user->deleted_at !== null)
                                <form action="{{ route('account.restore', $user->name) }}" method="POST">
                                    @csrf
                                    <button class="btn btn-purple" type="submit">Restaurer</button>
                                </form>
                            @else
                                <a class="btn btn-purple" href="{{ route('account.show', $user->name) }}">Voir</a>
                            @endif
                        </td>
                        <td>
                            <form @if($user->deleted_at !== null)
                                  action="{{ route('account.force.destroy', $user->name) }}"
                                  @else
                                  action="{{ route('account.destroy', $user->name) }}"
                                  @endif
                                  method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-warning" type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
