<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>
    <form action="tags" method="post">
        @csrf
        <input type="text" name="name" id="">
        <input type="submit" value="Agregar">
    </form>
    <h4>Listado de etiquetas</h4>
    <table>
        @forelse( $tags as $tag )
            <tr>
                <td>{{ $tag->name }}</td>
                <td>
                    <form action="tags/{{$tag->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Borrar">
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td>
                    <p>No hay etiquetas</p>
                </td>
            </tr>
        @endforelse
    </table>
</body>
</html>