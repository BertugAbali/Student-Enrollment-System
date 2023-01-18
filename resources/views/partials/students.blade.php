@foreach ($students as $student)
<tr>
    <th scope="row">{{$loop->index + 1}}</th>
    <td>{{$student->name}}</td>
    <td>{{$student->class??'None'}}</td>
    <td>

    <div class="row">
    <form method="POST" enctype="multipart/form-data" id="edit" action="{{  url('student/edit/'.$student->id)}}">
            @csrf

            <button type="submit" class="btn btn-outline-primary mr-3" id="submit">Edit</button>

        </form>

        @if(!$student->class)

        <form method="POST" enctype="multipart/form-data" id="enroll" action="{{ url('enroll/'.$student->id)}}">
            @csrf
            <button type="submit" class="btn btn-outline-success mr-3" id="submit">Enroll</button>

        </form>

        @else

        <form method="POST" enctype="multipart/form-data" id="transfer" action="{{ url('enroll/'.$student->id)}}">
            @csrf
            <button type="submit" class="btn btn-outline-success mr-3" id="submit">Transfer</button>

        </form>

        @endif

     

        <form method="POST" enctype="multipart/form-data" id="delete" action="{{ url('student/destroy/'.$student->id)}}">
            @csrf
            <button type="submit" class="btn btn-outline-danger" id="submit">Delete</button>

        </form>

    </div>



    </td>
</tr>

@endforeach