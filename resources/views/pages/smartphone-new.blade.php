@extends ('layout.home-layout');

@section('content')

<h1>Create new Smartphone</h1>

  <form  action="{{route('smartphones.store')}}" method="post">
    @csrf

    <label>Brand</label><br>
    <input type="text" name="brand" value=""><br>
    <label>Model</label><br>
    <input type="text" name="model" value=""><br>
    <label>Display</label><br>
    <input type="text" name="display" value=""><br>
    <label>Mem_ext</label><br>
    <input type="text" name="mem_ext" value=""><br><br>
    <button type="submit" name="button">Create!</button>
  </form>
@stop
