<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div>
   
    <section class="mt-5" style="margin-bottom:450px" >
    <p class="mt-5"></p>
    <h1 style="margin-top:100px"><center> Ward Details </center>  </h1>
    <table class=" container mt-5 table" style="margin-top:50px" >
  <thead>
    <tr>
      <th scope="col">Ward No.</th>
      <th scope="col">Area Name</th>
      <th scope="col">No. of Families</th>
      <th scope="col">No. of Voters</th>
      <th scope="col">Councillor Name</th>
      <th scope="col">Councillor Number</th>
    </tr>
  </thead>
  <tbody>
  @if ($wards->isNotEmpty())
    @foreach ($wards as $ward)
    <tr>
      <th scope="row">{{ $ward->ward_no }}</th>
      <td>{{ $ward->area_name }}</td>
      <td>{{ $ward->families }}</td>
      <td>{{ $ward->voters }}</td>
      <td>{{ $ward->councillor_name }}</td>
      <td>{{ $ward->councillor_number }}</td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>

</section>
</div>

</div>
