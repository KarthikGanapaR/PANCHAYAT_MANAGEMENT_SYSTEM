<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div>
    <section class="mt-5" style="margin-bottom:450px" >
    <p class="mt-5"></p>
    <h1 style="margin-top:100px"><center> Plot Survey Request status </center>  </h1>
    <table class=" container mt-5 table" style="margin-top:50px" >
  <thead>
    <tr>
      <th scope="col">SI. No</th>
      <th scope="col">Name</th>
      <th scope="col">Mail</th>
      <th scope="col">Phone</th>
      <th scope="col">Plot Address</th>
      <th scope="col">Date Alloted</th>
      <th scope="col">Officier Verification</th>
      <th scope="col">Affidavit</th>
      <th scope="col">Payment Status</th>
      <th scope="col">Status</th>
      
    </tr>
  </thead>
  <tbody>
  @if ($surveys->isNotEmpty())
    @foreach ($surveys as $survey)
    <tr>
      <th scope="row">{{ $survey->id }}</th>
      <td>{{ $survey->name }}</td>
      <td>{{ $survey->email }}</td>
      <td>{{ $survey->phone }}</td>
      <td>{{ $survey->address }}</td>
      
        
      @if($survey->date == '')
      <td> Not Alloted </td>
      @else
      <td> {{ $survey->date }}</td>
      @endif

      @if($survey->officer == 'verified')
      <td> <button type="button" class="btn btn-success">{{$survey->officer }}</button></td>
      @else
      <td> <button type="button" class="btn btn-danger">{{ $survey->officer }}</button></td>
      @endif

      @if($survey->affidavit == 'provided')
      <td> <button type="button" class="btn btn-success">{{$survey->affidavit }}</button></td>
      @else
      <td> <button type="button" class="btn btn-danger">{{ $survey->affidavit }}</button></td>
      @endif

      @if($survey->payment == 'approved')
      <td> <button type="button" class="btn btn-success">{{ $survey->payment }}</button></td>
      @else
      <td> <button type="button" class="btn btn-danger">{{ $survey->payment }}</button></td>
      @endif

      @if($survey->status == 'approved')
      <td> <button type="button" class="btn btn-success">{{ $survey->status }}</button></td>
      @else
      <td> <button type="button" class="btn btn-danger">{{ $survey->status }}</button></td>
      @endif 

    </tr>
    @endforeach
    @endif
  </tbody>
</table>

</section>
</div>


</div>
