<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudiantes</title>
</head>
<body>
    <h1>Lista de estudiantes</h1>
    <table>
    @foreach ($students as $student)
        <tr>
            <td>
                {{ $student->name_student}}
            </td>
            <td>
                {{ $student->lastname_student}}
            </td>
            <td>
                {{ $student->id_student}}
            </td>
            <td><a href="{{ route('students.show', $student->id) }}">Ver detalles</a></td>
            <td><a href="{{ route('students.edit', $student->id) }}">Editar</a></td>
        </tr>
    @endforeach
    </table>
    <div>
        {{$students->links()}}
    </div>
    <form action="{{url('students')}}" method="post" style="margin-top: 10px">
        @csrf
        <input type="text" name="name_student" placeholder="Nombre"/>
        @error('name_student')
            <div>{{$message}}</div>
        @enderror
        <input type="text" name="lastname_student" placeholder="Apellido"/>
        @error('lastname_student')
            <div>{{$message}}</div>
        @enderror
        <input type="number" name="id_student" placeholder="Matricula"/>
        @error('id_student')
            <div>{{$message}}</div>
        @enderror
        <input type="date" name="birthday" placeholder="Cumpleaños"/>
        @error('birthday')
            <div>{{$message}}</div>
        @enderror
        <input type="text" name="comments" placeholder="Comentarios"/>
        @error('comments')
            <div>{{$message}}</div>
        @enderror
        <button type="submit">Enviar</button>
    </form>
</body>
</html>