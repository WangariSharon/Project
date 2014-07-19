@extends('layouts.master')

@section('content')
<!-- Create Profile button -->
<a href="{{route('users.create')}}" class="btn btn-default">Create Profile</a>
@stop
