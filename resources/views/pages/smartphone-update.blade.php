@extends ('layout.home-layout');

@section('content')

<h1>Create new Smartphone</h1>

  <form  action="{{route('smartphones.update', $smartphone->id)}}" method="post">
    @csrf
    @method('PATCH')

    <label>Brand</label><br>
    <input type="text" name="brand" value="{{$smartphone->brand}}"><br>
    <label>Model</label><br>
    <input type="text" name="model" value="{{$smartphone->model}}"><br>
    <label>Display</label><br>
    <input type="text" name="display" value="{{$smartphone->display}}"><br>
    <label>Mem_ext</label><br>
    <input type="text" name="mem_ext" value="{{$smartphone->mem_ext}}"><br><br>
    <button type="submit" name="button">Update!</button>
  </form>
@stop
