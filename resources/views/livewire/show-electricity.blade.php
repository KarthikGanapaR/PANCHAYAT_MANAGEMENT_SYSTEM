<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <section class="mt-5" style="margin-bottom:500px" >
    <p class="mt-5"></p>
    <h1 style="margin-top:100px"><center> Electricity Request status </center>  </h1>
    <table class=" container mt-5 table" style="margin-top:50px" >
  <thead>
    <tr>
      <th scope="col">SI. No</th>
      <th scope="col">Name</th>
      <th scope="col">Mail</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Type</th>
      <th scope="col">Voltage</th>
      <th scope="col">Meter</th>
      <th scope="col">Payment Status</th>
      <th scope="col">Status</th>
      
    </tr>
  </thead>
  <tbody>
  @if ($electricities->isNotEmpty())
    @foreach ($electricities as $electricity)
    <tr>
      <th scope="row">{{ $electricity->id }}</th>
      <td>{{ $electricity->name }}</td>
      <td>{{ $electricity->email }}</td>
      <td>{{ $electricity->phone }}</td>
      <td>{{ $electricity->address }}</td>
      <td>{{ $electricity->type }}</td>

      @if($electricity->voltage == 'low(475V)')
      <td> <button type="button" class="btn btn-info">{{$electricity->voltage }}</button></td>
      @elseif($electricity->voltage == 'high(11000V)')
      <td> <button type="button" class="btn btn-warning">{{ $electricity->voltage }}</button></td>
      @else
      <td> <button type="button" class="btn btn-danger">{{ $electricity->voltage }}</button></td>
      @endif

      @if($electricity->meter == 'single phase')
      <td> <button type="button" class="btn btn-info">{{$electricity->meter }}</button></td>
      @elseif($electricity->meter == 'Three phase')
      <td> <button type="button" class="btn btn-warning">{{ $electricity->meter }}</button></td>
      @else
      <td> <button type="button" class="btn btn-danger">{{ $electricity->meter }}</button></td>
      @endif

      @if($electricity->payment == 'approved')
      <td> <button type="button" class="btn btn-success">{{ $electricity->payment }}</button></td>
      @else
      <td> <button type="button" class="btn btn-danger">{{ $electricity->payment }}</button></td>
      @endif

      @if($electricity->status == 'approved')
      <td> <button type="button" class="btn btn-success">{{ $electricity->status }}</button></td>
      @else
      <td> <button type="button" class="btn btn-danger">{{ $electricity->status }}</button></td>
      @endif 

    </tr>
    @endforeach
    @endif
  </tbody>
</table>

</section>
</div>
