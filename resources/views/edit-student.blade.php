<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar estudiante</title>
</head>
<body>
    <form action="{{route('students.update',$student->id_student)}}" method="post">
        @csrf
        @method('put')
        <input type="text" name="student_name" value="{{$student->name_student}}">
        @error('name_student')
        {{$message}}
        @enderror
        <button type="submit">Editar</button>
        </form>
</body>
</html>