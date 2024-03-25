<div class=" mt-5" >
<div class="mt-5 "  style="margin-bottom:450px" >
    {{-- The best athlete wants his opponent at his best. --}}
    <p class="mt-5"></p>
    <h1 style="margin-top:100px"><center> Water Request status </center>  </h1>
    <table class=" container mt-5 table" style="margin-top:50px" >
  <thead>
    <tr>
      <th scope="col">Si. No</th>
      <th scope="col">Name</th>
      <th scope="col">Mail</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Payment Status</th>
      <th scope="col">Status</th>
      
    </tr>
  </thead>
  <tbody>
  @if ($waters->isNotEmpty())
    @foreach ($waters as $water)
    <tr>
      <th scope="row">{{ $water->id }}</th>
      <td>{{ $water->name }}</td>
      <td>{{ $water->email }}</td>
      <td>{{ $water->phone }}</td>
      <td>{{ $water->address }}</td>
      @if($water->payment == 'approved')
      <td> <button type="button" class="btn btn-success">{{ $water->payment }}</button></td>
      @else
      <td> <button type="button" class="btn btn-danger">{{ $water->payment }}</button></td>
      @endif 
      @if($water->status == 'approved')
      <td> <button type="button" class="btn btn-success">{{ $water->status }}</button></td>
      @else
      <td> <button type="button" class="btn btn-danger">{{ $water->status }}</button></td>
      @endif 
    </tr>
    @endforeach
    @endif
  </tbody>
</table>

</div>

</div>