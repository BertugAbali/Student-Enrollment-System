@extends('layouts.app')

<!-- This view for creating new service. -->

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Enroll Student') }}</div>

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
                    <form method="POST" enctype="multipart/form-data" id="name" action="{{ url('student/enroll/'.$student->id)}}">
                        @csrf
                        <div class="row">

                            <div class="col-2">
                                <label for="name">{{ $student->name }}</label>
                            </div>

                            <div class="col-7">

                            <select class="form-select" aria-label="Default select example" id="class"  name="class">
                                    @foreach ($classes as $class)
                                    <option value="{{$class->name}}">{{$class->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-3">
                                <button type="submit" class="btn btn-outline-primary" id="submit">Enroll Student</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection