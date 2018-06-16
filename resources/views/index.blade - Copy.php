@extends("layouts.master")

@section("content")
     <table>
        <thead>
          <tr>
              <th>Task</th>
              @isAdmin
              <th>Assign To</th>
              @endisAdmin
              <th>Edit</th>
              <th>Delete</th>
          </tr>
        </thead>

        <tbody>	          
          <tr>
            <td><a href="">Weight gain to 5 kg</a></td>
            @isAdmin
            <td>Thuzar</td>
            @endisAdmin
            <td><a title="edit" href=""><i class="small material-icons">edit</i></a></td>
            <td><a title="delete" href=""><i class="small material-icons">delete_forever</i></a></td>
          </tr>
          <tr>
            <td><a href="">Order Pizza</a></td>
            @isAdmin
            <td>Aye Thu</td>
            @endisAdmin
           
            <td><a title="edit" href=""><i class="small material-icons">edit</i></a></td>
            <td><a title="delete" href=""><i class="small material-icons">delete_forever</i></a></td>
          </tr>
          <tr>
            <td><a href=""><strike>Repair The Door Lock system</strike></a></td>
            @isAdmin
            <td>Aye Pa</td>
            @endisAdmin
            
            <td><a title="edit" href=""><i class="small material-icons">edit</i></a></td>
            <td><a title="delete" href=""><i class="small material-icons">delete_forever</i></a></td>
          </tr>
          <tr>
            <td><a href="">Clean the computer</a></td>
            @isAdmin
            <td>Zin Zin</td>
            @endisAdmin
            
            <td><a title="edit" href=""><i class="small material-icons">edit</i></a></td>
            <td><a title="delete" href=""><i class="small material-icons">delete_forever</i></a></td>
          </tr>
        </tbody>
      </table>

      <ul class="pagination">
	    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
	    <li class="active"><a href="#!">1</a></li>
	    <li class="waves-effect"><a href="#!">2</a></li>
	    <li class="waves-effect"><a href="#!">3</a></li>
	    <li class="waves-effect"><a href="#!">4</a></li>
	    <li class="waves-effect"><a href="#!">5</a></li>
	    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
      </ul>

      <form class="col s12">
      
      <div class="row">
        <div class="input-field col s12">
          <input id="task" type="text" class="validate">
          <label for="task">New Task</label>
        </div>
      </div>

      @include("partials.friends")

   <!--  -->
      
      <a class="waves-effect waves-light btn">Add Task</a>
    </form>

    @isFriend
    <br><br><br>
    <form action="" class="col s12">      
    <div class="input-field">
    <select>
      <option value="" disabled selected>Send Invitation to:</option>
      <option value="1">To myself</option>
      <option value="2">Aye Pa</option>
      <option value="3">Zin Zin</option>
      <option value="4">Aye Thu</option>
      <option value="5">Cho</option>
      <option value="6">Thiri</option>
    </select>
    <label>Send Invitation</label>
  </div>
    </form>
  @endisFriend

    @isAdmin
    <br><br><br>
    <ul class="collection with-header">
        <li class="collection-header"><h4>My Friends</h4></li>
        <li class="collection-item"><div>Aye Pa<a href="#!" class="secondary-content">delete</a></div></li>
        <li class="collection-item"><div>Zin Zin<a href="#!" class="secondary-content">delete</a></div></li>
        <li class="collection-item"><div>Thiri<a href="#!" class="secondary-content">delete</a></div></li>
        <li class="collection-item"><div>Aye Thu<a href="#!" class="secondary-content">delete</a></div></li>
        <li class="collection-item"><div>Cho<a href="#!" class="secondary-content">delete</a></div></li>	        
    </ul>
    @endisAdmin

@endsection       