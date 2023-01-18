@extends('layouts.app')

<!-- This view for creating new service. -->

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Class') }}</div>

                @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <strong>Error:</strong> {{ $errors->first() }}
                </div>

                @endif

                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                @endif


                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" id="name" action="{{  isset($class)?url('class/update/'.$class->id):route('create.class')}}">
                        @csrf
                        <div class="row">

                            <div class="col-2">
                                <label for="name">{{ __('Name') }}</label>
                            </div>

                            <div class="col-7">

                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $class->name??'' }}" required autocomplete="name" autofocus>
                                @error('name')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-3">
                                <button type="submit" class="btn btn-outline-primary" id="submit">@if(isset($class)) Update Class @else Create Class @endif</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection