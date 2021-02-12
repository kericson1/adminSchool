@extends('layout')
@section('content')
<div class="container">
    <h1>Welcome</h1>
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
    <h2><a href="{{ url('create') }}">Ajouter un nouveau membres</a></h2>

    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif
<h1 class="text-center">Liste des membres</h1>

    <table id="sections" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>URL</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach($students as $student)
            <tr>
                <td> {{ $student->id }} </td>
                <td>{{ $student->nom }}</td>

                <td>{{ $student->prenom }}</td>
                <td>
                    <form action="{{route('student.destroy', $student->id)}}">
                        <a class="btn btn-primary" href="{{route('student.edit, $student->id')}}">Editer</a>
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input type="submit" class="btn btn-danger" value="delete">
                    </form>
                </td>
            </tr>
            @endforeach --}}
        </tbody>
    </table>
</div>
@endsection
