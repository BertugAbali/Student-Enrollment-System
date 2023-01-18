@foreach ($classes as $class)
<tr>
    <th scope="row">{{$loop->index + 1}}</th>
    <td>{{$class->name}}</td>
    <td>

    <div class="row">
    <form method="POST" enctype="multipart/form-data" id="edit" action="{{  url('class/edit/'.$class->id)}}">
            @csrf

            <button type="submit" class="btn btn-outline-primary mr-3" id="submit">Edit</button>

        </form>

        <form method="POST" enctype="multipart/form-data" id="delete" action="{{ url('class/destroy/'.$class->id)}}">
            @csrf
            <button type="submit" class="btn btn-outline-danger mr-3" id="submit">Delete</button>

        </form>

        <form method="POST" enctype="multipart/form-data" id="show" action="{{ url('class/show/'.$class->id)}}">
            @csrf
            <button type="submit" class="btn btn-outline-success" id="submit">Show</button>

        </form>

    </div>

      




    </td>
</tr>

@endforeach