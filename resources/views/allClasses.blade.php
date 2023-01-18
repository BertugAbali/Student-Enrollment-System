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

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Interaction</th>
    </tr>
  </thead>
  <tbody>
   
  @include('partials.classes')

  </tbody>
</table>

{!! $classes->links('pagination::bootstrap-5') !!}

@endsection