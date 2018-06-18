@if (Auth::user()->is_admin === 1)
<div class="input-field col s12">
    <select name="assignTo">
      <option value="" disabled selected>Assign to:</option>         
      <option value="{{ Auth::user()->id }}">To myself</option>

      @foreach($friends as $friend)
      @if(isset($task) && $friend->friend->id == $task->user->id)
        <option selected value="{{ $friend->friend->id }}">{{ $friend->friend->name }}</option>      
      @else      
        <option value="{{ $friend->friend->id }}">{{ $friend->friend->name }}</option>      
      @endif
      @endforeach
    </select>
    <label>Assign Task</label>
  </div>
@endif