
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.css')}}">
</head>
<body>
    <div class="container">

        <form action="/student_update/{{$students->id }}" method="POST">@csrf
            <div class="form-grou">
                <label for="name">Nom</label>
                <input type="text" class="form-control" name="name" id="name" value="{{$students->name}}">
            </div>
            <div class="form-group">
                <button type="submit">Modifier</button>
                {{-- <input type="submit" class="form-control" name="envoyer" id="envoyer"> --}}
            </div>

        </form>
    </div>
</body>
</html>
