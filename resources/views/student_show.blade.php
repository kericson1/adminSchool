<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.css')}}">
</head>
<body>
    <div class=" container flex-center position-ref full-height">
        <h1><a href="student_create">Ajouter</a></h1>
        <p class="alert alert-success">{{session('msg')}}</p>
        <h1>Liste</h1>
        <table id="sections" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Date de creation</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td> {{ $student->id }} </td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->created_at}}</td>
                    <td>
                        <a href="student_delete/{{$student->id}}">Supprimer</a>
                        <a href="student_edit/{{$student->id}}">Modifier</a>
                        {{-- <form action="{{route('student.destroy', $student->id)}}">
                            <a class="btn btn-primary" href="{{route('student.edit, $student->id')}}">Editer</a>
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <input type="submit" class="btn btn-danger" value="delete">
                        </form> --}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
