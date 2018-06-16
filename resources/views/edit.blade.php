@extends("layouts.master")

@section("content")
   
    <form method="POST" action="{{ route('update',['id'=>$task->id]) }}" class="col s12">	      
      <div class="row">
        <div class="input-field col s12">
          <input name="task" value="{{$task->content}}" id="task2" type="text" class="validate">
          <label for="task2">Edit Task</label>
        </div>
      </div>	      

      @include("partials.friends")
      
      <button type="submit" class="waves-effect waves-light btn">Edit Task</button>
      <input type="hidden" name="_token" value="<?= csrf_token() ?>">
    </form>

@endsection       