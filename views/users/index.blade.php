@extends('layouts.master')

@section('content')
<!-- Create Profile button -->
<a href="{{route('users.create')}}" class="btn btn-default">Create Profile</a>

<table>
  <thead>
    <th>Names</th>
    <th>Date of Birth</th>
    <th>Gender</th>
    <th>Phone</th>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <td>{{$user->name}}</td>
      <td>{{$user->dob}}</td> {{-- This needs to be better formatted}}
      <td>{{$user->gender}}</td>
      <td>{{$user->phone}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@stop
