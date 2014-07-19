@extends('users.create')

@section('content')
<table>
  <thead>
    <th>Name</th>
    <th>Date Of Birth</th>
    <th>Gender</th>
  </thead>
  <tbody>
    <tr>{{$user->names}}</tr>
    <tr>{{$user->dob}}</tr>
    <tr>{{$user->gender}}</tr>
  </tbody>
</table>

<a href="{{route('users.index')}}">All Users</a>
@stop