@extends("layouts.master")

@section("content")
     <table>
        <thead>
          <tr>
              <th>Task</th>
              @if (Auth::user()->is_admin === 1) 
              <th>Assign To</th>
              @endif
              <th>Edit</th>
              <th>Delete</th>
          </tr>
        </thead>

        <tbody>	
        @foreach($tasks as $task)          
          <tr>
            <td><a href="{{ route('updateStatus',$task->id) }}">
            @if(!$task->status)
            {{ $task->content }}
            @else
            <strike class="grey-text">{{ $task->content }}</strike>
            @endif
            </a></td>
            @if (Auth::user()->is_admin === 1)
            <td>{{ $task->user->name }}</td>
            @endif
            <td><a title="edit" href="{{ route('edit',$task->id) }}"><i class="small material-icons">edit</i></a></td>
            <td><a title="delete" onclick="return confirm('Delete?');" href="{{ route('delete',$task->id) }}"><i class="small material-icons">delete_forever</i></a></td>
          </tr>
        @endforeach        
        </tbody>
      </table>

      {{$tasks->links('vendor.pagination.materialize')}}
      <!-- <ul class="pagination">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="active"><a href="#!">1</a></li>
            <li class="waves-effect"><a href="#!">2</a></li>
            <li class="waves-effect"><a href="#!">3</a></li>
            <li class="waves-effect"><a href="#!">4</a></li>
            <li class="waves-effect"><a href="#!">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
      </ul> -->

      <form method="POST" action="{{ route('store') }}" class="col s12">
      
      <div class="row">
        <div class="input-field col s12">
          <input name="task" id="task" type="text" class="validate">
          <label for="task">New Task</label>
        </div>
      </div>
      <input type="hidden" name="_token" value="<?= csrf_token() ?>">
      @include("partials.friends")

      <button type="submit" class="waves-effect waves-light btn">Add Task</button>
      
    </form>

    @if (Auth::user()->is_admin === 0)
    <br><br><br>
    <form method="POST" action="{{ route('sendInvitation') }}" class="col s12">      
    <div class="input-field">
    <select name="admin">
      <option value="" disabled selected>Send Invitation to:</option>
      @foreach($friends as $friend)
      <option value="{{ $friend->id }}">{{ $friend->name }}{{ $friend->id }}</option>
      @endforeach
    </select>
    <label>Send Invitation</label>
  </div>
  <button type="submit" class="waves-effect waves-light btn">Send Invitation</button>
  <input type="hidden" name="_token" value="<?= csrf_token() ?>">
    </form>
  @endif

    @if (Auth::user()->is_admin === 1)
    <br><br><br>
    <ul class="collection with-header">
        <li class="collection-header"><h4>My Friends</h4></li>
        <li class="collection-item"><div>Aye Pa<a href="#!" class="secondary-content">delete</a></div></li>
        <li class="collection-item"><div>Zin Zin<a href="#!" class="secondary-content">delete</a></div></li>
        <li class="collection-item"><div>Thiri<a href="#!" class="secondary-content">delete</a></div></li>
        <li class="collection-item"><div>Aye Thu<a href="#!" class="secondary-content">delete</a></div></li>
        <li class="collection-item"><div>Cho<a href="#!" class="secondary-content">delete</a></div></li>	        
    </ul>
    @endif

@endsection       