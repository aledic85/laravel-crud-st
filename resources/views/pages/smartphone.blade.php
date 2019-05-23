@extends ('layout.home-layout');

@section('content')

  <h1>Hello</h1>

  <table>

    <tr>
      <th>Id</th>
      <th>Brand</th>
      <th>Model</th>
      <th>Display</th>
      <th>Mem ext</th>
      <th>Edit</th>
    </tr>
    @foreach ($smartphones as $smartphone)

    <tr>
      <td>{{$smartphone->id}}</td>
      <td>{{$smartphone->brand}}</td>
      <td>{{$smartphone->model}}</td>
      <td>{{$smartphone->display}}</td>
      <td>{{$smartphone->mem_ext}}</td>
      <td><a href="{{route('smartphones.edit', $smartphone->id)}}"><i class="fas fa-edit"></i></a></td>
      <td>
        <form action="{{route('smartphones.destroy', $smartphone->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" name="button"><i class="fas fa-trash-alt"></i></button>
        </form>
      </td>

    </tr>

    @endforeach
  </table>

  <a href="{{route('smartphones.create')}}">Create new Smartphone!</a>

  @stop
