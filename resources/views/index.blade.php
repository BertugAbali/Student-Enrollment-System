@extends('layouts.app')

@section('title')
Laravel Programming Lab. | Index Page
@endsection

@section('content')


@if(session()->has('success'))
<div class="alert alert-success">
  {{ session()->get('success') }}
</div>
@endif

@if(isset($class))
<h4 class="text-center">Enrolled Students To {{$class->name }}</h4>
@endif

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Class</th>
      <th scope="col">Interaction</th>
    </tr>
  </thead>
  <tbody>

    @include('partials.students')

  </tbody>
</table>

{!! $students->links('pagination::bootstrap-5') !!}

@endsection