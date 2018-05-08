@extends('layout.template')



@section('isi')
	 <!--Start of carousel-->
 <div class="contentArea4">
			<div class="announce">
				<h2>CONGRATULATION!</h2>
				<h3>Please come to the interview session on</h3>
				<div id="tanggalinter">[ {{ date("d-M-Y", strtotime("+2 days")) }} ]</div>
				<h3>At</h3><div id="tempatinter">[ Graha Lestari ]</div> <h3>On</h3> <div id="waktuinter">[ 14:00 ]</div>
				<h5>Please send your attendance confirmation (min D-2 from interview session) by email to <br/><u>yoona@trans-cosmos.com</u></h5>
			</div>

	<table class="restable">
  <tr>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
  </tr>
  @foreach($data as $d)
			<tr>
				<td>{{ $d->name }}</td>
				<td><a href="mailto:{{ $d->email }}">{{ $d->email }}</a></td>
				<td>{{ $d->mobile_phone }}</td>
				<td><button data-id="{{ $d->id_result }}" class='delete btn btn-success btn-sm'>Delete</button></td>
			</tr>
			@endforeach
  <tr class="addition-row hidden">
		<td></td>
		<td></td>
		<td></td>
  </tr>
 </table>

</div>
@endsection








