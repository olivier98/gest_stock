@extends('layouts.app')



@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Modifier Utilisateur</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a>Utilisateur</a>
                </li>
                <li class="active">
                    Modifier <strong>{{$user->name}}</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="card-body">
                <div class="panel">
                    <div class="panel-body">
                        <h3 class="title-hero">
                        Modifier <strong>{{$user->name}}</strong>
                        </h3>
                    </div>
                    <form action="{{route('admin.users.update', $user)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        @foreach ($roles as $role)
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" name="roles[]" value="{{$role->id}}" id="
                                {{$role->id}}" @foreach ($user->roles as $userRole) @if ($userRole->id === $role->id)
                                    checked
                                @endif

                                @endforeach>
                                <label for="{{$role->id}}" class="form-check-labe">{{$role->name}}</label>
                            </div>
                        @endforeach
                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>













@endsection
