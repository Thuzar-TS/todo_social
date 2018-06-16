@if (Auth::user()->is_admin === 1)
<div class="input-field col s12">
    <select>
      <option value="" disabled selected>Assign to:</option>
      <option value="1">To myself</option>
      <option value="2">Aye Pa</option>
      <option value="3">Zin Zin</option>
      <option value="4">Aye Thu</option>
      <option value="5">Cho</option>
      <option value="6">Thiri</option>
    </select>
    <label>Assign Task</label>
  </div>
@endif