<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{url('create')}}" method="POST">
    @csrf
    <label>Is Leader?</label>
    <input type="checkbox" name="isLeader" id="isLeader">
    <label>Nama</label>
    <input type="text" name="name"/>
    {{$errors->first('name')}}
    <label>Address</label>
    <input type="text" name="address"/>
    {{$errors->first('address')}}
    <label>Email</label>
    <input type="text" name="email"/>
    {{$errors->first('email')}}
    <label>Number</label>
    <input type="text" name="number"/>
    {{$errors->first('number')}}
    <label>Birthplace</label>
    <input type="text" name="birth_place"/>
    {{$errors->first('birth_place')}}
    <label>Birthdate</label>
    <input type="date" name="birth_date" id="birth_date">
    {{$errors->first('birth_date')}}
    <label>Line ID</label>
    <input type="text" name="line_id"/>
    {{$errors->first('line_id')}}
    <label>Github ID</label>
    <input type="text" name="github_id"/>
    {{$errors->first('github_id')}}
</form>
</body>
</html>