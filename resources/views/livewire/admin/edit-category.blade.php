@include('layouts.app')

<center><h1>Edit Categories</h1></center><br><br><br><br><br><br><br><br>
<form action="{{route('update.category',$post->id)}}" method="POST">
    @csrf
<center>id<input name="id" value="{{$post->id}}"></center>
<center>slug<input name="slug" type="text" value="{{$post->slug}}"></center>
<center>name<input name="name" type="text" value="{{$post->name}}"></center>
<center><button type="submit">Done</button></center>
</form>