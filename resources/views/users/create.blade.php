@extends('layout')

@section('title', 'Nuevo usuario')

@section('content')
    @card
        @slot('header', 'Crear nuevo usuario')
        @include('shared._errors')

        <form method="post" action="{{ route('users.store') }}">
            @include('users._fields')

            <div class="form-group mt-4">
                <button type="submit" class="btn btn-primary">Crear usuario</button>
                <a href="{{ route('users.index') }}" class="btn btn-link">Regresar al listado de usuarios</a>
            </div>
        </form>
    @endcard
@endsection
