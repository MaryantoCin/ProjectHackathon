<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <thead>
        <th>Id</th>
        <th>isLeader</th>
        <th>Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Number</th>
        <th>Birth Place</th>
        <th>Birth Date</th>
        <th>Line ID</th>
        <th>Github ID</th>
    </thead>
    <tbody>
        @foreach($members as $member)
            <tr>
                <td>{{$member->id}}</td>
                <td>{{$member->isLeader}}</td>
                <td>{{$member->name}}</td>
                <td>{{$member->address}}</td>
                <td>{{$member->email}}</td>
                <td>{{$member->number}}</td>
                <td>{{$member->birth_place}}</td>
                <td>{{$member->birth_date}}</td>
                <td>{{$member->line_id}}</td>
                <td>{{$member->github_id}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
</body>
</html>