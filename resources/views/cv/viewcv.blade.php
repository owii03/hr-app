@extends('layout.template')



@section('isi')
	 <!--Start of carousel-->
 <div class="contentArea3">

	<button id="editcv" type="submit">Edit</button>
	
	<div class="boxcv">
		<div class="pimg">
			<!-- ambil profile image dari database--><img src="{{ Url('document') }}/{{ $data->photo }}" height="200px">
		</div>
		<div id="namacv">{{ $data->full_name }} <!-- ambil nama dari database--></div>
		<div id="pilar"><img src="images/pilar.jpg" width="1072px" height="6px">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<div class="emailcv"><i class="fa fa-envelope-o" aria-hidden="true"></i> {{ Auth::user()->email }}</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<div class="mobilecv"><i class="fa fa-mobile" aria-hidden="true"></i> {{ $data->mobile_number }}</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<div class="locationcv"><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $data->city }}, {{ $data->nationality }}</div>
					</div>
				</div>
			</div>
		</div>
		<div id="allof">
				<div class="sectiongens">GENERAL INFORMATION</div>
					<div class="informatif1">
						Fullname <span id="titikdua">:</span>  {{ ucwords($data->full_name) }}<br/>
						Identity Number <span id="titikdua2">:</span>{{ ucwords($data->identity_number) }} <br/>
						Gender <span id="titikdua3">:</span> {{ ucwords($data->gender) }}<br/>
						Blood Type <span id="titikdua4">:</span> {{ ucwords($data->blood_type) }}<br/>
						Birth Place <span id="titikdua5">:</span> {{ ucwords($data->birth_place) }}<br/>
						Birth Date <span id="titikdua6">:</span> {{ date("d-M-Y", strtotime($data->birth_date)) }}<br/>
						Marriage Status <span id="titikdua10">:</span> {{ ucwords($data->marriage_status) }}<br/>
						Religion <span id="titikdua7">:</span> {{ ucwords($data->religion) }}<br/>
						Nationality <span id="titikdua8">:</span> {{ ucwords($data->nationality) }}<br/>
						Address <span id="titikdua9">:</span> {{ ucwords($data->address) }}<br/>
					</div>
					
				<div class="sectiongens">LANGUAGE INFORMATION</div>
					<div class="informatif1">
						Toefl Type <span id="titikdua11">:</span> {{ ucwords($data->toefl_type) }} <!-- Ambil data dari db--><br/>
						Score <span id="titikdua12">:</span> {{ ucwords($data->score) }}<br/>
						Institution <span id="titikdua11">:</span> {{ ucwords($data->toefl_institution) }}<br/>
						Certificate <span id="titikdua13">:</span> {{ ucwords($data->certificate) }}<br/>
					</div>
				
				@if($work)
				<div class="sectiongens">WORK INFORMATION</div>
					<div class="informatif1">
						Work Place <span id="titikdua14">:</span>  {{ ucwords($work->place) }}<!-- Ambil data dari db--><br/>
						Position <span id="titikdua15">:</span> {{ ucwords($work->position) }}<br/>
						Year In <span id="titikdua16">:</span> {{ ucwords($work->year_in) }}<br/>
						Year Out <span id="titikdua17">:</span> {{ ucwords($work->year_out) }}<br/>
					</div>
				@endif	
				
			
			<div class="rightcorner">
				<div class="sectiongens">EDUCATION INFORMATION</div>
					<div class="informatif1">
						Grade <span id="titikdua18">: @if($education)	 
							{{ ucwords($education->grade) }} 
						@endif</span>  <!-- Ambil data dari db--><br/>
						Institution City <span id="titikdua19">:</span> @if($education) {{ ucwords($education->city) }} @endif<br/>
						Institution Name <span id="titikdua20">:</span> @if($education) {{ ucwords($education->name) }} @endif<br/>
						Major <span id="titikdua21">:</span> @if($education)  {{ ucwords($education->major) }}  @endif<br/>
						Focused Major <span id="titikdua19">:</span> @if($education)  {{ ucwords($education->focused_major) }} @endif<br/>
						GPA <span id="titikdua23">:</span> @if($education)  {{ ucwords($education->gpa) }} @endif<br/>
						GPA Transcript <span id="titikdua24">:</span> @if($education)  <a download href="{{ Url('document')}}/{{ $education->gpa_transcript }}">{{ ucwords($education->gpa_transcript) }}</a> @endif<br/>
						Diploma <span id="titikdua24">:</span> @if($education)  <a download href="{{ Url('document')}}/{{ $education->diploma }}">{{ ucwords($education->diploma) }}</a> @endif<br/>
					</div>
			</div>
		
			<div class="rightcorner2">
				<div class="sectiongens">OTHER INFORMATION</div>
					<div class="informatif1">
						First Priority <span id="titikdua26">:</span>  {{ ucwords($data->first_position) }}<!-- Ambil data dari db--><br/>
						Second Priority <span id="titikdua26">:</span> {{ ucwords($data->second_position) }}<br/>
						Portfolio <span id="titikdua">:</span> {{ ucwords($data->portfolio) }}<br/>
						Expected Salary <span id="titikdua29">:</span> {{ ($data->expected_salary) }}<br/>
					</div>
			</div>
		
		</div>
	</div>
</div>	
@endsection








