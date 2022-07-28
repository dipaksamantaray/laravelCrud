<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">SureName</th>
                <th scope="col">FathersName</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lists as $list)
                <tr>
                    <td scope="row">{{ $list->id }}</td>
                    <td>{{ $list->name }}</td>
                    <td>{{ $list->surename }}</td>
                    <td>{{ $list->fathersname }}</td>
                    <td><a href='{{ url('/edit', $list->id) }}'>Edit</a>||<a
                            onclick="return confirm('are you sure want to delete')"
                            href="{{ url('/delete', $list->id) }}">Delete
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

</body>

</html>
