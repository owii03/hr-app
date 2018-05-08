@extends('layout.template')



@section('isi')
	 <!--Start of carousel-->
 <div class="contentArea2">
		<div class="wrapimage pulse">
			<img src="images/info.jpg" alt="info" style="width:700px; height:242px;" id="attention">
			<a href="{{ Url('/viewuserresult') }} " class="btn btn-success btn-lg btn-block2">View Result</a>
		</div>
		<div class="titleInfo2 info2">CURRICULUM VITAE</div>
		<div class="container">
			<section>
			<div class="wizard">
				<div class="wizard-inner">
					<div class="connecting-line"></div>
					<ul class="nav nav-tabs" role="tablist">
						<li role="cv" class="active">
							<a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
							<span class="round-tab">
							<i class="glyphicon glyphicon-user"></i>
							</span>
							</a>
						</li>
						<li role="cv" class="disabled">
							<a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
							<span class="round-tab">
							<i class="glyphicon glyphicon-grain"></i>
							</span>
							</a>
						</li>
						<li role="cv" class="disabled">
							<a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
							<span class="round-tab">
							<i class="glyphicon glyphicon-education"></i>
							</span>
							</a>
						</li>
						<li role="cv" class="disabled">
							<a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="Step 4">
							<span class="round-tab">
							<i class="glyphicon glyphicon-briefcase"></i>
							</span>
							</a>
						</li>
						<li role="cv" class="disabled">
							<a href="#step5" data-toggle="tab" aria-controls="step 5" role="tab" title="Step 5">
							<span class="round-tab">
							<i class="glyphicon glyphicon-paperclip"></i>
							</span>
							</a>
						</li>
					</ul>
				</div>
				<form role="form" enctype="multipart/form-data" name="cvForm2" id="cvForm2" action="{{ Url('/dofillcv') }}" method="post">
					<input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}"/>
					<div class="insider">
						<div class="tab-content">
							<div class="tab-pane active" role="tabpanel" id="step1">
								<div class="titleInfo clt">General Information</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<b>Full Name (Based On ID) <b style="color:red;">*</b></b>
											<input type="text" name="name" id="name" class="form-control input-lg" tabindex="1" maxlength="20" required="">
											 <div class="errmsg hidden">Please only input letters</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<b>Identity Number/Passport <b style="color:red;">*</b></b>
											<input type="text" name="idNumb" id="idNumb" class="form-control input-lg" tabindex="2" required="">
											<div class="errmsg hidden">Please only input Number</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<b>Gender <b style="color:red;">*</b></b>
											<div class="radGender input-lg" required="" tabindex="3">
												<label class="radio-inline"><input checked type="radio" name="gender" value="male">Male</label>
												<label class="radio-inline"><input type="radio" name="gender" value="female">Female</label>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<b>Blood Type <b style="color:red;">*</b></b>
											<div class="radBlood input-lg" required="" tabindex="4">
												<label class="radio-inline"><input checked type="radio" name="blood" value="a">A</label>
												<label class="radio-inline"><input type="radio" name="blood" value="b">B</label>
												<label class="radio-inline"><input type="radio" name="blood" value="ab">AB</label>
												<label class="radio-inline"><input type="radio" name="blood" value="o">O</label>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<b>Birth Place <b style="color:red;">*</b></b>
											<input type="text" name="bornplace" id="bornplace" class="form-control input-lg" tabindex="5" required="">
											<div class="errmsg hidden">Please only input letters</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<b>Birth Date <b style="color:red;">*</b></b>
											<input type="date" name="dob" id="dob" class="form-control input-lg" tabindex="6" max="1999-12-31" min="1947-12-31" required="">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<b>Marriage Status <b style="color:red;">*</b></b>
												<select name="marriage" class="form-control input-lg" required="" tabindex="7" id="marriage">
													<option name="blank" value="kosong" hidden selected="selected"></option>
													<option value="alone">Single</option>
													<option value="merit">Married</option>
													<option value="widow">Widowed</option>
													<option value="divorce">Divorced</option>
												</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<b>Religion <b style="color:red;">*</b></b>
												<select name="religi" class="form-control input-lg" required="" tabindex="8" id="religi">
													<option value="kosong" hidden selected="selected"></option>
													<option value="kristen">Christian</option>
													<option value="katolik">Catholic</option>
													<option value="islam">Islam</option>
													<option value="budha">Buddha</option>
													<option value="hindu">Hindu</option>
													<option value="khonghucu">Khonghucu</option>
												</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<b>Nationality <b style="color:red;">*</b></b>
											<br/>
											<div class="radNasional input-lg" required="" tabindex="3">
												<label class="radio-inline"><input type="radio" name="nasional" checked value="wni">WNI</label>
												<label class="radio-inline"><input type="radio" name="nasional" value="wna">WNA</label>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<b>Address <b style="color:red;">*</b></b>
											<textarea id="addr" name="addr" class="form-control input-lg" required="" tabindex="10"></textarea>
											<div class="errmsg hidden">Address must at least 10 characters</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<b>City <b style="color:red;">*</b></b>
											<input id="city" name="city" type="text" class="form-control input-lg" tabindex="11" required="" autocomplete="on">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<b>Postal Code <b style="color:red;">*</b></b>
											<input id="pos" name="pos" type="text" class="form-control input-lg" tabindex="12" maxlength="5" required="">
											<div class="errmsg hidden">Please only input numbers and length should be 5 characters</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<b>Mobile Number <b style="color:red;">*</b></b>
											<input type="text" name="phone" id="phone" class="form-control input-lg" tabindex="13" maxlength="12" required="">
											<div class="errmsg hidden">Please follow the example : 082122021915</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<b>Email</b>
											<input id="mail" value="{{ Auth::user()->email }}" type="text" class="form-control input-lg" required="" readonly disabled></div>
									</div>
								</div>
								<div class="row">
									<div class="downSection"></div>
								</div>
								<br/>
								<div class="row">
									<div class="form-group">
										<div class="col-md-6">
											<div class="file-upload">
												<button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Upload Image</button>
												<div class="image-upload-wrap col-md-12">
													<input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/jpeg" id="formalfoto" name="formalfoto" required="" />
													<div class="drag-text">
														<h4>Add Image here<br/>(.jpg) <b style="color:red;">*</b></h4>
													</div>
												</div>
											</div>
											<div class="file-upload-content">
												<img class="file-upload-image" src="#" alt="your image"/>
												<div class="image-title-wrap">
													<button type="button" onclick="removeUpload()" class="remove-image">Remove</button>
													<div class="errmsg hidden">Please only upload .jpg file</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<img src="images/notes.jpg" width="350" height="180" alt="notes">
										</div>
										<button class="btn btn-success btn-lg saver" id="save" type="submit" disabled="disabled">Save</button>
									</div>
								</div>
							</div>
							<div class="tab-pane" role="tabpanel" id="step2">
								<div class="titleInfo clt">Language</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<b>Toefl Type</b>
											<div class="radLang input-lg" tabindex="1">
												<label class="radio-inline"><input type="radio" checked name="inggris" value="toefl">TOEFL</label>
												<label class="radio-inline"><input type="radio" name="inggris" value="ielts">IELTS</label>
												<label class="radio-inline"><input type="radio" name="inggris" value="toeic">TOEIC</label>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<b>Score</b>
											<input type="text" name="score" id="score" class="form-control input-lg" tabindex="2">
											<div class="errmsg hidden">Please only input numbers</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<b>Certificate .pdf</b>
											<input type="file" name="certi" accept="application/pdf" id="certi" tabindex="4">
											<div class="errmsg hidden">Please only upload .pdf file</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<b>Toefl Institution Name</b>
											<input type="text" name="tfname" id="tfname" class="form-control input-lg" tabindex="3">
											<div class="errmsg hidden">Please only input letters</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<button class="btn btn-success btn-lg" id="fsave" type="submit" >Save</button>
									</div>
								</div>
							</div>
							<div class="tab-pane" role="tabpanel" id="step3">
								<div class="titleInfo clt">Education Information</div>
								<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<b>Grade <b style="color:red;">*</b></b>
													<select required name="grader[]" class="form-control input-lg grader" required="" tabindex="1" id="sel3">
														<option value="" hidden selected="selected"></option>
														<option value="D3">D3</option>
														<option value="S1">S1</option>
														<option value="S2">S2</option>
														<option value="S3">S3</option>
													</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<b>Institution City <b style="color:red;">*</b></b>
												<input type="text" name="institusiloc1[]" id="institusiloc1" class="form-control input-lg institusiloc1" tabindex="2" required="">
												<div class="errmsg hidden">Please only input letters</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<b>Institution Name <b style="color:red;">*</b></b>
												<input type="text" name="institusiname1[]" id="institusiname1" class="form-control input-lg institusiname1" tabindex="2" required="">
												<div class="errmsg hidden">Please only input letters</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<b>Major <b style="color:red;">*</b></b>
												<input type="text" name="major1[]" id="major1" class="form-control input-lg major1" tabindex="2" required="">
												<div class="errmsg hidden">Please only input letters</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<b>Focused Major <b style="color:red;">*</b></b>
												<input type="text" name="fmajor1[]" id="fmajor1" class="form-control input-lg fmajor1" tabindex="2" required="">
												<div class="errmsg hidden">Please only input letters</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<b>GPA <b style="color:red;">*</b></b>
												<input type="text" name="gpa1[]" id="gpa1" class="form-control input-lg gpa1" tabindex="2" maxlength="4" required="">
												<div class="errmsg hidden">Please follow the example : 3.20</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<b>Diploma (.pdf) <b style="color:red;">*</b></b>
												<input type="file" accept="application/pdf" name="diploma1[]" class="diploma1" id="diploma1" tabindex="2" required="">
												<div class="errmsg hidden">Please only upload .pdf file</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<b>GPA Transcript (.pdf) <b style="color:red;">*</b></b>
												<input type="file" accept="application/pdf" name="trans1[]" id="trans1" class="trans1" tabindex="2" required="">
												<div class="errmsg hidden">Please only upload .pdf file</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="downSection"></div>
									</div>
									<br/>
								
								<div class="first">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<b>Grade</b>
													<select required name="grader[]" class="form-control input-lg grader" tabindex="1" id="sel4">
														<option value="" hidden selected="selected"></option>
														<option value="d3">D3</option>
														<option value="s1">S1</option>
														<option value="s2">S2</option>
														<option value="s3">S3</option>
													</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<b>Institution City</b>
												<input type="text" name="institusiloc[]" id="institusiloc" class="form-control input-lg institusiloc1" tabindex="2">
												<div class="errmsg hidden">Please only input letters</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<b>Institution Name</b>
												<input type="text" name="institusiname[]" id="institusiname" class="form-control input-lg institusiname1" tabindex="2">
												<div class="errmsg hidden">Please only input letters</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<b>Major</b>
												<input type="text" name="major[]" id="major" class="form-control input-lg major1" tabindex="2">
												<div class="errmsg hidden">Please only input letters</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<b>Focused Major</b>
												<input type="text" name="fmajor[]" id="fmajor" class="form-control input-lg fmajor1" tabindex="2">
												<div class="errmsg hidden">Please only input letters</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<b>GPA</b>
												<input type="text" name="gpa[]" id="gpa" class="form-control input-lg gpa1" tabindex="2" maxlength="4">
												<div class="errmsg hidden">Please follow the example : 3.20</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<b>Diploma (.pdf)</b>
												<input type="file" accept="application/pdf" name="diploma[]" id="diploma" class="diploma1" tabindex="2">
												<div class="errmsg hidden">Please only upload .pdf file</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<b>GPA Transcript (.pdf)</b>
												<input type="file" accept="application/pdf" name="trans[]" id="trans" class="trans1" tabindex="2">
												<div class="errmsg hidden">Please only upload .pdf file</div><a href="" id="remove">Delete</a>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="downSection"></div>
									</div>
									<br/>
								</div>
								<div class="row final">
									<div class="col-md-6">
										<div class="form-group">
											<button class="btn btn-success btn-lg add" id="addedu" disabled="disabled">Add</button>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<button class="btn btn-success btn-lg esaver" id="esave" type="submit" disabled="disabled">Save</button>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane" role="tabpanel" id="step4">
								<div class="titleInfo clt">Work Experience Information</div>
								<div class="workers">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<b>Work Place</b>
												<input type="text" name="wplace[]" id="wplace" class="form-control input-lg place" tabindex="1">
												<div class="errmsg hidden">Please only input letters</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<b>Position</b>
												<input type="text" name="posisi[]" id="posisi" class="form-control input-lg position" tabindex="2">
												<div class="errmsg hidden">Please only input letters</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<b>Year In</b>
												<input type="text" name="yin[]" id="yin" class="form-control input-lg year_in" tabindex="3" maxlength="4">
												<div class="errmsg hidden">Please follow the example : 2003</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<b>Year Out</b>
												<input type="text" name="yout[]" id="yout" class="form-control input-lg year_out" tabindex="4" maxlength="4">
												<div class="errmsg hidden">Please follow the example : 2008</div> <a href="" id="removal">Delete</a>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="downSection"></div>
									</div>
									</br>
								</div>
								<div class="row nope">
									<div class="col-md-6">
										<div class="form-group">
											<button class="btn btn-success btn-lg" id="addwork" disabled="disabled">Add</button>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<button class="btn btn-success btn-lg" id="wsave" type="submit" >Save</button>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane" role="tabpanel" id="step5">
								<div class="titleInfo clt">Others Information</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<b>First Position Priority <b style="color:red;">*</b></b>
												<select name="prio" class="form-control input-lg" required="" tabindex="1" id="sel5">
													<option value="kosong" hidden selected="selected"></option>
													<option value="coding">Coding</option>
													<option value="design">Design</option>
													<option value="qa">Quality Assurance</option>
													<option value="analytic">Analytic</option>
												</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<b>Second Position Priority <b style="color:red;">*</b></b>
												<select name="prio2" class="form-control input-lg" required="" tabindex="2" id="sel6">
													<option value="kosong" hidden selected="selected"></option>
													<option value="coding1">Coding</option>
													<option value="design1">Design</option>
													<option value="qa1">Quality Assurance</option>
													<option value="analytic1">Analytic</option>
												</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<b>Expected Salary (in Rupiah) <b style="color:red;">*</b></b>
												<select name="salary" class="form-control input-lg" required="" tabindex="4" id="sel7">
													<option value="kosong" hidden selected="selected"></option>
													<option value="1jt">1.000.000 - 5.000.000</option>
													<option value="6jt">6.000.000 - 10.000.000</option>
													<option value="11jt">>10.000.000</option>
												</select>
											</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<b>Portfolio (.pdf) <b style="color:red;">*</b></b>
											<input type="file" accept="application/pdf" name="prt" id="prt" tabindex="3" required="">
											<div class="errmsg hidden">Please only upload .pdf file</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<button class="btn btn-success btn-lg" id="lastsave" type="submit" >Save</button>
											
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</form>
			</div>
			</section>
		</div>
	</div>
	<script>
	$(function(){
		var autocomplete;
		var geocoder;
		var input = document.getElementById('city');
		var options = {
			componentRestrictions: {'country':'idn'},
			types: ['(regions)'] // (cities)
		};
		
		autocomplete = new google.maps.places.Autocomplete(input,options);
		$('#go').click(function(){
			var location = autocomplete.getPlace();
			geocoder = new google.maps.Geocoder();
			console.log(location['geometry'])
			lat = location['geometry']['location'].lat();
			lng = location['geometry']['location'].lng();
			var latlng = new google.maps.LatLng(lat,lng);
		});
	});
	</script>

	<script>
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e) {
					$('.image-upload-wrap').hide();
					$('.file-upload-image').attr('src', e.target.result);
					$('.file-upload-content').show();
				};
				reader.readAsDataURL(input.files[0]);
			}
				else {
						removeUpload();
				}
		}
		function removeUpload() {
			$('.file-upload-input').replaceWith($('.file-upload-input').clone());
			$('.file-upload-content').hide();
			$('.image-upload-wrap').show();
		}
			$('.image-upload-wrap').bind('dragover', function () {
			$('.image-upload-wrap').addClass('image-dropping');
		});
			$('.image-upload-wrap').bind('dragleave', function () {
			$('.image-upload-wrap').removeClass('image-dropping');
	});
	</script>

	<script>
		jQuery(function($){
			var row = $(".first").clone();
			var del = $(".del");
			var removeTr = function(e){
				e.preventDefault();
				$(this).closest('.first').remove();
			}
				$('#remove').click(removeTr);
				$(".add").click(function(){
			var newRow = row.clone().insertBefore(".final");
			newRow.find('#remove').on('click', removeTr);
		});
	});
	</script>

	<script>
		jQuery(function($){
			var rowl = $(".workers").clone();
			var dell = $(".del");
			var removeTr = function(e){
				e.preventDefault();
				$(this).closest('.workers').remove();
			}
				$('#removal').click(removeTr);
				$("#addwork").click(function(){
			var newRow = rowl.clone().insertBefore(".nope");
			newRow.find('#removal').on('click', removeTr);
		});
	});
	</script>


	<script>
		$("#name").on("keyup", function(){
		if($(this).val() != "" && $("#name").val() != "" && $("#idNumb").val() != "" && $("input[name='gender']").is(":checked") == true && $("input[name='blood']").is(":checked") == true && $("#bornplace").val() != "" && $("#dob").val() != "" &&  $("input[name='nasional']").is(":checked") == true && $("#sel1").val() != "kosong" && $("#sel2").val() != "kosong" && $("#addr").val() != "" && $("#city").val() != "" && $("#pos").val() != "" && $("#phone").val() != "" && $("#formalfoto").val() != "" ){
			$(".saver").attr("disabled", false);
			}else{
			$(".saver").attr("disabled", true);
		}
	});


	$("#idNumb").on("keyup", function(){
	   if($(this).val() != "" && $("#name").val() != "" && $("#idNumb").val() != "" && $("input[name='gender']").is(":checked") == true && $("input[name='blood']").is(":checked") == true && $("#bornplace").val() != "" && $("#dob").val() != "" &&  $("input[name='nasional']").is(":checked") == true && $("#sel1").val() != "kosong" && $("#sel2").val() != "kosong" && $("#addr").val() != "" && $("#city").val() != "" && $("#pos").val() != "" && $("#phone").val() != "" && $("#formalfoto").val() != "" ){
		   $(".saver").attr("disabled", false);
		}else{
			$(".saver").attr("disabled", true);
		}
	});

	$("input[name='gender']").on("change", function(){
	   if($(this).val() != "" && $("#name").val() != "" && $("#idNumb").val() != "" && $("input[name='gender']").is(":checked") == true && $("input[name='blood']").is(":checked") == true && $("#bornplace").val() != "" && $("#dob").val() != "" &&  $("input[name='nasional']").is(":checked") == true && $("#sel1").val() != "kosong" && $("#sel2").val() != "kosong" && $("#addr").val() != "" && $("#city").val() != "" && $("#pos").val() != "" && $("#phone").val() != "" && $("#formalfoto").val() != "" ){
			$(".saver").attr("disabled", false);
		}else{
			$(".saver").attr("disabled", true);
		}
	});

	$("input[name='blood']").on("change", function(){
	  if($(this).val() != "" && $("#name").val() != "" && $("#idNumb").val() != "" && $("input[name='gender']").is(":checked") == true && $("input[name='blood']").is(":checked") == true && $("#bornplace").val() != "" && $("#dob").val() != "" &&  $("input[name='nasional']").is(":checked") == true && $("#sel1").val() != "kosong" && $("#sel2").val() != "kosong" && $("#addr").val() != "" && $("#city").val() != "" && $("#pos").val() != "" && $("#phone").val() != "" && $("#formalfoto").val() != "" ){
		   $(".saver").attr("disabled", false);
		}else{
			$(".saver").attr("disabled", true);
		}
	});

	$("#bornplace").on("keyup", function(){
	  if($(this).val() != "" && $("#name").val() != "" && $("#idNumb").val() != "" && $("input[name='gender']").is(":checked") == true && $("input[name='blood']").is(":checked") == true && $("#bornplace").val() != "" && $("#dob").val() != "" &&  $("input[name='nasional']").is(":checked") == true && $("#sel1").val() != "kosong" && $("#sel2").val() != "kosong" && $("#addr").val() != "" && $("#city").val() != "" && $("#pos").val() != "" && $("#phone").val() != "" && $("#formalfoto").val() != "" ){
			$(".saver").attr("disabled", false);
		}else{
			$(".saver").attr("disabled", true);
		}
	});


	$("#dob").on("change", function(){
	   if($(this).val() != "" && $("#name").val() != "" && $("#idNumb").val() != "" && $("input[name='gender']").is(":checked") == true && $("input[name='blood']").is(":checked") == true && $("#bornplace").val() != "" && $("#dob").val() != "" &&  $("input[name='nasional']").is(":checked") == true && $("#sel1").val() != "kosong" && $("#sel2").val() != "kosong" && $("#addr").val() != "" && $("#city").val() != "" && $("#pos").val() != "" && $("#phone").val() != "" && $("#formalfoto").val() != "" ){
		   $(".saver").attr("disabled", false);
		}else{
			$(".saver").attr("disabled", true);
		}
	});


	$("input[name='nasional']").on("change", function(){
	   if($(this).val() != "" && $("#name").val() != "" && $("#idNumb").val() != "" && $("input[name='gender']").is(":checked") == true && $("input[name='blood']").is(":checked") == true && $("#bornplace").val() != "" && $("#dob").val() != "" &&  $("input[name='nasional']").is(":checked") == true && $("#sel1").val() != "kosong" && $("#sel2").val() != "kosong" && $("#addr").val() != "" && $("#city").val() != "" && $("#pos").val() != "" && $("#phone").val() != "" && $("#formalfoto").val() != "" ){
			$(".saver").attr("disabled", false);
		}else{
			$(".saver").attr("disabled", true);
		}
	});


	$("#sel1").on("change", function(){
	   if($(this).val() != "" && $("#name").val() != "" && $("#idNumb").val() != "" && $("input[name='gender']").is(":checked") == true && $("input[name='blood']").is(":checked") == true && $("#bornplace").val() != "" && $("#dob").val() != "" &&  $("input[name='nasional']").is(":checked") == true && $("#sel1").val() != "kosong" && $("#sel2").val() != "kosong" && $("#addr").val() != "" && $("#city").val() != "" && $("#pos").val() != "" && $("#phone").val() != "" && $("#formalfoto").val() != "" ){
			$(".saver").attr("disabled", false);
		}else{
			$(".saver").attr("disabled", true);
		}
	});

	$("#sel2").on("change", function(){
	   if($(this).val() != "" && $("#name").val() != "" && $("#idNumb").val() != "" && $("input[name='gender']").is(":checked") == true && $("input[name='blood']").is(":checked") == true && $("#bornplace").val() != "" && $("#dob").val() != "" &&  $("input[name='nasional']").is(":checked") == true && $("#sel1").val() != "kosong" && $("#sel2").val() != "kosong" && $("#addr").val() != "" && $("#city").val() != "" && $("#pos").val() != "" && $("#phone").val() != "" && $("#formalfoto").val() != "" ){
			$(".saver").attr("disabled", false);
		}else{
			$(".saver").attr("disabled", true);
		}
	});


	$("#addr").on("keyup", function(){
	   if($(this).val() != "" && $("#name").val() != "" && $("#idNumb").val() != "" && $("input[name='gender']").is(":checked") == true && $("input[name='blood']").is(":checked") == true && $("#bornplace").val() != "" && $("#dob").val() != "" &&  $("input[name='nasional']").is(":checked") == true && $("#sel1").val() != "kosong" && $("#sel2").val() != "kosong" && $("#addr").val() != "" && $("#city").val() != "" && $("#pos").val() != "" && $("#phone").val() != "" && $("#formalfoto").val() != "" ){
		   $(".saver").attr("disabled", false);
		}else{
			$(".saver").attr("disabled", true);
		}
	});

	$("#city").on("keyup", function(){
	   if($(this).val() != "" && $("#name").val() != "" && $("#idNumb").val() != "" && $("input[name='gender']").is(":checked") == true && $("input[name='blood']").is(":checked") == true && $("#bornplace").val() != "" && $("#dob").val() != "" &&  $("input[name='nasional']").is(":checked") == true && $("#sel1").val() != "kosong" && $("#sel2").val() != "kosong" && $("#addr").val() != "" && $("#city").val() != "" && $("#pos").val() != "" && $("#phone").val() != "" && $("#formalfoto").val() != "" ){
			$(".saver").attr("disabled", false);
		}else{
			$(".saver").attr("disabled", true);
		}
	});

	$("#pos").on("keyup", function(){
	   if($(this).val() != "" && $("#name").val() != "" && $("#idNumb").val() != "" && $("input[name='gender']").is(":checked") == true && $("input[name='blood']").is(":checked") == true && $("#bornplace").val() != "" && $("#dob").val() != "" &&  $("input[name='nasional']").is(":checked") == true && $("#sel1").val() != "kosong" && $("#sel2").val() != "kosong" && $("#addr").val() != "" && $("#city").val() != "" && $("#pos").val() != "" && $("#phone").val() != "" && $("#formalfoto").val() != "" ){
			$(".saver").attr("disabled", false);
		}else{
			$(".saver").attr("disabled", true);
		}
	});

	$("#phone").on("keyup", function(){
	   if($(this).val() != "" && $("#name").val() != "" && $("#idNumb").val() != "" && $("input[name='gender']").is(":checked") == true && $("input[name='blood']").is(":checked") == true && $("#bornplace").val() != "" && $("#dob").val() != "" &&  $("input[name='nasional']").is(":checked") == true && $("#sel1").val() != "kosong" && $("#sel2").val() != "kosong" && $("#addr").val() != "" && $("#city").val() != "" && $("#pos").val() != "" && $("#phone").val() != "" && $("#formalfoto").val() != "" ){
			$(".saver").attr("disabled", false);
		}else{
			$(".saver").attr("disabled", true);
		}
	});

	$("#formalfoto").on("change", function(){
	   if($(this).val() != "" && $("#name").val() != "" && $("#idNumb").val() != "" && $("input[name='gender']").is(":checked") == true && $("input[name='blood']").is(":checked") == true && $("#bornplace").val() != "" && $("#dob").val() != "" &&  $("input[name='nasional']").is(":checked") == true && $("#sel1").val() != "kosong" && $("#sel2").val() != "kosong" && $("#addr").val() != "" && $("#city").val() != "" && $("#pos").val() != "" && $("#phone").val() != "" && $("#formalfoto").val() != "" ){
			$(".saver").attr("disabled", false);
		}else{
			$(".saver").attr("disabled", true);
		}
	});

	</script>

	<script>
	var $regexname=/^[a-zA-Z\s]*$/;
	$('#name').on('keyup',function(){
		  if (!$(this).val().match($regexname)) 
		  {
			  // there is a mismatch, hence show the error message

			   $(this).parent().find('.errmsg').removeClass('hidden');
			   $(this).parent().find('.errmsg').show();

		  }else{
				 // else, do not display message
				$('.errmsg').addClass('hidden');
		  }
	});

	var $regexnumb=/^\d*[0-9](|.\d*[0-9]|,\d*[0-9])?$/;
	$('#idNumb').on('keyup',function(){
		  if (!$(this).val().match($regexnumb)) 
		  {
			  // there is a mismatch, hence show the error message

			   $(this).parent().find('.errmsg').removeClass('hidden');
			   $(this).parent().find('.errmsg').show();

		  }else{
				 // else, do not display message
				$('.errmsg').addClass('hidden');
		  }
	});

	$('#bornplace').on('keyup',function(){
		  if (!$(this).val().match($regexname)) 
		  {
			  // there is a mismatch, hence show the error message

			   $(this).parent().find('.errmsg').removeClass('hidden');
			   $(this).parent().find('.errmsg').show();

		  }else{
				 // else, do not display message
				$('.errmsg').addClass('hidden');
		  }
	});

	$('#addr').on('keyup',function(){
		  if ($(this).val().length < 10) 
		  {
			  // there is a mismatch, hence show the error message

			   $(this).parent().find('.errmsg').removeClass('hidden');
			   $(this).parent().find('.errmsg').show();

		  }else{
				 // else, do not display message
				$('.errmsg').addClass('hidden');
		  }
	});

	$('#pos').on('keyup',function(){
		  if (!$(this).val().match($regexnumb)) 
		  {
			  // there is a mismatch, hence show the error message

			   $(this).parent().find('.errmsg').removeClass('hidden');
			   $(this).parent().find('.errmsg').show();

		  }else{
				 // else, do not display message
				$('.errmsg').addClass('hidden');
		  }
	});

	$('#pos').on('keyup',function(){
		  if ($(this).val().length != 5) 
		  {
			  // there is a mismatch, hence show the error message

			   $(this).parent().find('.errmsg').removeClass('hidden');
			   $(this).parent().find('.errmsg').show();

		  }else{
				 // else, do not display message
				$('.errmsg').addClass('hidden');
		  }
	});

	var $regexphone = /^\d{11}(\d{1})?$/;

	$('#phone').on('keyup',function(){
		  if (!$(this).val().match($regexphone)) 
		  {
			  // there is a mismatch, hence show the error message

			   $(this).parent().find('.errmsg').removeClass('hidden');
			   $(this).parent().find('.errmsg').show();

		  }else{
				 // else, do not display message
				$('.errmsg').addClass('hidden');
		  }
	});


	$('#score').on('keyup',function(){
		  if (!$(this).val().match($regexnumb)) 
		  {
			  // there is a mismatch, hence show the error message

			   $(this).parent().find('.errmsg').removeClass('hidden');
			   $(this).parent().find('.errmsg').show();

		  }else{
				 // else, do not display message
				$('.errmsg').addClass('hidden');
		  }
	});

	$("#certi").change(function () {
			var fileExtension = ['pdf'];
			if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
				$(this).parent().find('.errmsg').removeClass('hidden');
				$(this).parent().find('.errmsg').show();;
			}else{
				$('.errmsg').addClass('hidden');
			}
		}); 
		
	$("#formalfoto").change(function () {
		var fileExtension = ['jpg'];
		if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
			$(this).parent().find('.errmsg').removeClass('hidden');
			$(this).parent().find('.errmsg').show();;
		}else{
			$('.errmsg').addClass('hidden');
		}
	}); 
		 
	$('#tfname').on('keyup',function(){
		  if (!$(this).val().match($regexname)) 
		  {
			  // there is a mismatch, hence show the error message

			   $(this).parent().find('.errmsg').removeClass('hidden');
			   $(this).parent().find('.errmsg').show();

		  }else{
				 // else, do not display message
				$('.errmsg').addClass('hidden');
		  }
	});

	$('#institusiloc').on('keyup',function(){
		  if (!$(this).val().match($regexname)) 
		  {
			  // there is a mismatch, hence show the error message

			   $(this).parent().find('.errmsg').removeClass('hidden');
			   $(this).parent().find('.errmsg').show();

		  }else{
				 // else, do not display message
				$('.errmsg').addClass('hidden');
		  }
	});

	$('#institusiloc1').on('keyup',function(){
		  if (!$(this).val().match($regexname)) 
		  {
			  // there is a mismatch, hence show the error message

			   $(this).parent().find('.errmsg').removeClass('hidden');
			   $(this).parent().find('.errmsg').show();

		  }else{
				 // else, do not display message
				$('.errmsg').addClass('hidden');
		  }
	});

	$('#institusiname').on('keyup',function(){
		  if (!$(this).val().match($regexname)) 
		  {
			  // there is a mismatch, hence show the error message

			   $(this).parent().find('.errmsg').removeClass('hidden');
			   $(this).parent().find('.errmsg').show();

		  }else{
				 // else, do not display message
				$('.errmsg').addClass('hidden');
		  }
	});

	$('#institusiname1').on('keyup',function(){
		  if (!$(this).val().match($regexname)) 
		  {
			  // there is a mismatch, hence show the error message

			   $(this).parent().find('.errmsg').removeClass('hidden');
			   $(this).parent().find('.errmsg').show();

		  }else{
				 // else, do not display message
				$('.errmsg').addClass('hidden');
		  }
	});

	$('#major').on('keyup',function(){
		  if (!$(this).val().match($regexname)) 
		  {
			  // there is a mismatch, hence show the error message

			   $(this).parent().find('.errmsg').removeClass('hidden');
			   $(this).parent().find('.errmsg').show();

		  }else{
				 // else, do not display message
				$('.errmsg').addClass('hidden');
		  }
	});

	$('#major1').on('keyup',function(){
		  if (!$(this).val().match($regexname)) 
		  {
			  // there is a mismatch, hence show the error message

			   $(this).parent().find('.errmsg').removeClass('hidden');
			   $(this).parent().find('.errmsg').show();

		  }else{
				 // else, do not display message
				$('.errmsg').addClass('hidden');
		  }
	});

	$('#fmajor').on('keyup',function(){
		  if (!$(this).val().match($regexname)) 
		  {
			  // there is a mismatch, hence show the error message

			   $(this).parent().find('.errmsg').removeClass('hidden');
			   $(this).parent().find('.errmsg').show();

		  }else{
				 // else, do not display message
				$('.errmsg').addClass('hidden');
		  }
	});

	$('#fmajor1').on('keyup',function(){
		  if (!$(this).val().match($regexname)) 
		  {
			  // there is a mismatch, hence show the error message

			   $(this).parent().find('.errmsg').removeClass('hidden');
			   $(this).parent().find('.errmsg').show();

		  }else{
				 // else, do not display message
				$('.errmsg').addClass('hidden');
		  }
	});

	$('#gpa').on('keyup',function(){
		  if (!$(this).val().match($regexnumb)) 
		  {
			  // there is a mismatch, hence show the error message

			   $(this).parent().find('.errmsg').removeClass('hidden');
			   $(this).parent().find('.errmsg').show();

		  }else{
				 // else, do not display message
				$('.errmsg').addClass('hidden');
		  }
	});

	$('#gpa1').on('keyup',function(){
		  if (!$(this).val().match($regexnumb)) 
		  {
			  // there is a mismatch, hence show the error message

			   $(this).parent().find('.errmsg').removeClass('hidden');
			   $(this).parent().find('.errmsg').show();

		  }else{
				 // else, do not display message
				$('.errmsg').addClass('hidden');
		  }
	});

	$("#diploma").change(function () {
			var fileExtension = ['pdf'];
			if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
				$(this).parent().find('.errmsg').removeClass('hidden');
				$(this).parent().find('.errmsg').show();;
			}else{
				$('.errmsg').addClass('hidden');
			}
		});
		
	$("#diploma1").change(function () {
		var fileExtension = ['pdf'];
		if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
			$(this).parent().find('.errmsg').removeClass('hidden');
			$(this).parent().find('.errmsg').show();;
		}else{
			$('.errmsg').addClass('hidden');
		}
	});

	$("#trans").change(function () {
		var fileExtension = ['pdf'];
		if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
			$(this).parent().find('.errmsg').removeClass('hidden');
			$(this).parent().find('.errmsg').show();;
		}else{
			$('.errmsg').addClass('hidden');
		}
	});

	$("#trans1").change(function () {
		var fileExtension = ['pdf'];
		if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
			$(this).parent().find('.errmsg').removeClass('hidden');
			$(this).parent().find('.errmsg').show();;
		}else{
			$('.errmsg').addClass('hidden');
		}
	});

	$('#wplace').on('keyup',function(){
		  if (!$(this).val().match($regexname)) 
		  {
			  // there is a mismatch, hence show the error message

			   $(this).parent().find('.errmsg').removeClass('hidden');
			   $(this).parent().find('.errmsg').show();

		  }else{
				 // else, do not display message
				$('.errmsg').addClass('hidden');
		  }
	});

	$('#posisi').on('keyup',function(){
		  if (!$(this).val().match($regexname)) 
		  {
			  // there is a mismatch, hence show the error message

			   $(this).parent().find('.errmsg').removeClass('hidden');
			   $(this).parent().find('.errmsg').show();

		  }else{
				 // else, do not display message
				$('.errmsg').addClass('hidden');
		  }
	});

	$('#yin').on('keyup',function(){
		  if (!$(this).val().match($regexnumb)) 
		  {
			  // there is a mismatch, hence show the error message

			   $(this).parent().find('.errmsg').removeClass('hidden');
			   $(this).parent().find('.errmsg').show();

		  }else{
				 // else, do not display message
				$('.errmsg').addClass('hidden');
		  }
	});

	$('#yin').on('keyup',function(){
		  if ($(this).val().length != 4) 
		  {
			  // there is a mismatch, hence show the error message

			   $(this).parent().find('.errmsg').removeClass('hidden');
			   $(this).parent().find('.errmsg').show();

		  }else{
				 // else, do not display message
				$('.errmsg').addClass('hidden');
		  }
	});

	$('#yout').on('keyup',function(){
		  if (!$(this).val().match($regexnumb)) 
		  {
			  // there is a mismatch, hence show the error message

			   $(this).parent().find('.errmsg').removeClass('hidden');
			   $(this).parent().find('.errmsg').show();

		  }else{
				 // else, do not display message
				$('.errmsg').addClass('hidden');
		  }
	});

	$('#yout').on('keyup',function(){
		  if ($(this).val().length != 4) 
		  {
			  // there is a mismatch, hence show the error message

			   $(this).parent().find('.errmsg').removeClass('hidden');
			   $(this).parent().find('.errmsg').show();

		  }else{
				 // else, do not display message
				$('.errmsg').addClass('hidden');
		  }
	});

	var $regexgpa= /^[0]|[0-3]\.(\d?\d?)|[4].[0]$/;
	$('#gpa').on('keyup',function(){
		  if (!$(this).val().match($regexgpa)) 
		  {
			  // there is a mismatch, hence show the error message

			   $(this).parent().find('.errmsg').removeClass('hidden');
			   $(this).parent().find('.errmsg').show();

		  }else{
				 // else, do not display message
				$('.errmsg').addClass('hidden');
		  }
	});

	var $regexgpa= /^[0]|[0-3]\.(\d?\d?)|[4].[0]$/;
	$('#gpa1').on('keyup',function(){
		  if (!$(this).val().match($regexgpa)) 
		  {
			  // there is a mismatch, hence show the error message

			   $(this).parent().find('.errmsg').removeClass('hidden');
			   $(this).parent().find('.errmsg').show();

		  }else{
				 // else, do not display message
				$('.errmsg').addClass('hidden');
		  }
	});

	</script>

	<script>
	$("#sel3").on("change", function(){
		if($(this).val() != "" && $("#sel3").val() != "" && $("#sel3").val() != "blank" && $("#institusiloc1").val() != "" && $("#institusiname1").val() != "" && $("#major1").val() != "" && $("#major1").val() != "" && $("#gpa1").val() != "" && $("#diploma1").val() != "" && $("#trans1").val() != "" ){
			$(".esaver").attr("disabled", false);
			}else{
			$(".esaver").attr("disabled", true);
		}
	});

	$("#institusiloc1").on("keyup", function(){
		if($(this).val() != "" && $("#sel3").val() != "" && $("#sel3").val() != "blank" && $("#institusiloc1").val() != "" && $("#institusiname1").val() != "" && $("#major1").val() != "" && $("#major1").val() != "" && $("#gpa1").val() != "" && $("#diploma1").val() != "" && $("#trans1").val() != "" ){
			$(".esaver").attr("disabled", false);
			}else{
			$(".esaver").attr("disabled", true);
		}
	});

	$("#institusiname1").on("keyup", function(){
		if($(this).val() != "" && $("#sel3").val() != "" && $("#sel3").val() != "blank" && $("#institusiloc1").val() != "" && $("#institusiname1").val() != "" && $("#major1").val() != "" && $("#major1").val() != "" && $("#gpa1").val() != "" && $("#diploma1").val() != "" && $("#trans1").val() != "" ){
			$(".esaver").attr("disabled", false);
			}else{
			$(".esaver").attr("disabled", true);
		}
	});

	$("#major1").on("keyup", function(){
		if($(this).val() != "" && $("#sel3").val() != "" && $("#sel3").val() != "blank" && $("#institusiloc1").val() != "" && $("#institusiname1").val() != "" && $("#major1").val() != "" && $("#major1").val() != "" && $("#gpa1").val() != "" && $("#diploma1").val() != "" && $("#trans1").val() != "" ){
			$(".esaver").attr("disabled", false);
			}else{
			$(".esaver").attr("disabled", true);
		}
	});

	$("#fmajor1").on("keyup", function(){
	   if($(this).val() != "" && $("#sel3").val() != "" && $("#sel3").val() != "blank" && $("#institusiloc1").val() != "" && $("#institusiname1").val() != "" && $("#major1").val() != "" && $("#major1").val() != "" && $("#gpa1").val() != "" && $("#diploma1").val() != "" && $("#trans1").val() != "" ){
			$(".esaver").attr("disabled", false);
			}else{
			$(".esaver").attr("disabled", true);
		}
	});

	$("#gpa1").on("keyup", function(){
		if($(this).val() != "" && $("#sel3").val() != "" && $("#sel3").val() != "blank" && $("#institusiloc1").val() != "" && $("#institusiname1").val() != "" && $("#major1").val() != "" && $("#major1").val() != "" && $("#gpa1").val() != "" && $("#diploma1").val() != "" && $("#trans1").val() != "" ){
			$(".esaver").attr("disabled", false);
			}else{
			$(".esaver").attr("disabled", true);
		}
	});

	$("#diploma1").on("change", function(){
		if($(this).val() != "" && $("#sel3").val() != "" && $("#sel3").val() != "blank" && $("#institusiloc1").val() != "" && $("#institusiname1").val() != "" && $("#major1").val() != "" && $("#major1").val() != "" && $("#gpa1").val() != "" && $("#diploma1").val() != "" && $("#trans1").val() != "" ){
			$(".esaver").attr("disabled", false);
			}else{
			$(".esaver").attr("disabled", true);
		}
	});

	$("#trans1").on("change", function(){
		if($(this).val() != "" && $("#sel3").val() != "" && $("#sel3").val() != "blank" && $("#institusiloc1").val() != "" && $("#institusiname1").val() != "" && $("#major1").val() != "" && $("#major1").val() != "" && $("#gpa1").val() != "" && $("#diploma1").val() != "" && $("#trans1").val() != "" ){
			$(".esaver").attr("disabled", false);
			}else{
			$(".esaver").attr("disabled", true);
		}
	});

	</script>

	<script>
	$("#sel3").on("change", function(){
		if(($(this).val() != "" && $("#sel3").val() != "" && $("#sel3").val() != "blank" && $("#institusiloc1").val() != "" && $("#institusiname1").val() != "" && $("#major1").val() != "" && $("#major1").val() != "" && $("#gpa1").val() != "" && $("#diploma1").val() != "" && $("#trans1").val() != "") || ($("#sel4").val() != "kosong" && $("#institusiloc").val() != "" && $("#institusiname").val() != "" && $("#major").val() != "" && $("#major").val() != "" && $("#gpa").val() != "" && $("#diploma").val() != "" && $("#trans").val() != "" )){
			$("#addedu").attr("disabled", false);
			}else{
			$("#addedu").attr("disabled", true);
		}
	});

	$("#institusiloc1").on("keyup", function(){
		if(($(this).val() != "" && $("#sel3").val() != "" && $("#sel3").val() != "blank" && $("#institusiloc1").val() != "" && $("#institusiname1").val() != "" && $("#major1").val() != "" && $("#major1").val() != "" && $("#gpa1").val() != "" && $("#diploma1").val() != "" && $("#trans1").val() != "") || ($("#sel4").val() != "kosong" && $("#institusiloc").val() != "" && $("#institusiname").val() != "" && $("#major").val() != "" && $("#major").val() != "" && $("#gpa").val() != "" && $("#diploma").val() != "" && $("#trans").val() != "" )){
			$("#addedu").attr("disabled", false);
			}else{
			$("#addedu").attr("disabled", true);
		}
	});

	$("#institusiname1").on("keyup", function(){
		if(($(this).val() != "" && $("#sel3").val() != "" && $("#sel3").val() != "blank" && $("#institusiloc1").val() != "" && $("#institusiname1").val() != "" && $("#major1").val() != "" && $("#major1").val() != "" && $("#gpa1").val() != "" && $("#diploma1").val() != "" && $("#trans1").val() != "") || ($("#sel4").val() != "kosong" && $("#institusiloc").val() != "" && $("#institusiname").val() != "" && $("#major").val() != "" && $("#major").val() != "" && $("#gpa").val() != "" && $("#diploma").val() != "" && $("#trans").val() != "" )){
			$("#addedu").attr("disabled", false);
			}else{
			$("#addedu").attr("disabled", true);
		}
	});

	$("#major1").on("keyup", function(){
		if(($(this).val() != "" && $("#sel3").val() != "" && $("#sel3").val() != "blank" && $("#institusiloc1").val() != "" && $("#institusiname1").val() != "" && $("#major1").val() != "" && $("#major1").val() != "" && $("#gpa1").val() != "" && $("#diploma1").val() != "" && $("#trans1").val() != "") || ($("#sel4").val() != "kosong" && $("#institusiloc").val() != "" && $("#institusiname").val() != "" && $("#major").val() != "" && $("#major").val() != "" && $("#gpa").val() != "" && $("#diploma").val() != "" && $("#trans").val() != "" )){
			$("#addedu").attr("disabled", false);
			}else{
			$("#addedu").attr("disabled", true);
		}
	});

	$("#fmajor1").on("keyup", function(){
		if(($(this).val() != "" && $("#sel3").val() != "" && $("#sel3").val() != "blank" && $("#institusiloc1").val() != "" && $("#institusiname1").val() != "" && $("#major1").val() != "" && $("#major1").val() != "" && $("#gpa1").val() != "" && $("#diploma1").val() != "" && $("#trans1").val() != "") || ($("#sel4").val() != "kosong" && $("#institusiloc").val() != "" && $("#institusiname").val() != "" && $("#major").val() != "" && $("#major").val() != "" && $("#gpa").val() != "" && $("#diploma").val() != "" && $("#trans").val() != "" )){
			$("#addedu").attr("disabled", false);
			}else{
			$("#addedu").attr("disabled", true);
		}
	});

	$("#gpa1").on("keyup", function(){
		if(($(this).val() != "" && $("#sel3").val() != "" && $("#sel3").val() != "blank" && $("#institusiloc1").val() != "" && $("#institusiname1").val() != "" && $("#major1").val() != "" && $("#major1").val() != "" && $("#gpa1").val() != "" && $("#diploma1").val() != "" && $("#trans1").val() != "") || ($("#sel4").val() != "kosong" && $("#institusiloc").val() != "" && $("#institusiname").val() != "" && $("#major").val() != "" && $("#major").val() != "" && $("#gpa").val() != "" && $("#diploma").val() != "" && $("#trans").val() != "" )){
			$("#addedu").attr("disabled", false);
			}else{
			$("#addedu").attr("disabled", true);
		}
	});

	$("#diploma1").on("change", function(){
		if(($(this).val() != "" && $("#sel3").val() != "" && $("#sel3").val() != "blank" && $("#institusiloc1").val() != "" && $("#institusiname1").val() != "" && $("#major1").val() != "" && $("#major1").val() != "" && $("#gpa1").val() != "" && $("#diploma1").val() != "" && $("#trans1").val() != "") || ($("#sel4").val() != "kosong" && $("#institusiloc").val() != "" && $("#institusiname").val() != "" && $("#major").val() != "" && $("#major").val() != "" && $("#gpa").val() != "" && $("#diploma").val() != "" && $("#trans").val() != "" )){
			$("#addedu").attr("disabled", false);
			}else{
			$("#addedu").attr("disabled", true);
		}
	});

	$("#trans1").on("change", function(){
		if(($(this).val() != "" && $("#sel3").val() != "" && $("#sel3").val() != "blank" && $("#institusiloc1").val() != "" && $("#institusiname1").val() != "" && $("#major1").val() != "" && $("#major1").val() != "" && $("#gpa1").val() != "" && $("#diploma1").val() != "" && $("#trans1").val() != "") || ($("#sel4").val() != "kosong" && $("#institusiloc").val() != "" && $("#institusiname").val() != "" && $("#major").val() != "" && $("#major").val() != "" && $("#gpa").val() != "" && $("#diploma").val() != "" && $("#trans").val() != "" )){
			$("#addedu").attr("disabled", false);
			}else{
			$("#addedu").attr("disabled", true);
		}
	});

	$("#sel4").on("change", function(){
		if(($(this).val() != "" && $("#sel3").val() != "" && $("#sel3").val() != "blank" && $("#institusiloc1").val() != "" && $("#institusiname1").val() != "" && $("#major1").val() != "" && $("#major1").val() != "" && $("#gpa1").val() != "" && $("#diploma1").val() != "" && $("#trans1").val() != "") || ($("#sel4").val() != "kosong" && $("#institusiloc").val() != "" && $("#institusiname").val() != "" && $("#major").val() != "" && $("#major").val() != "" && $("#gpa").val() != "" && $("#diploma").val() != "" && $("#trans").val() != "" )){
			$("#addedu").attr("disabled", false);
			}else{
			$("#addedu").attr("disabled", true);
		}
	});

	$("#institusiloc").on("keyup", function(){
		if(($(this).val() != "" && $("#sel3").val() != "" && $("#sel3").val() != "blank" && $("#institusiloc1").val() != "" && $("#institusiname1").val() != "" && $("#major1").val() != "" && $("#major1").val() != "" && $("#gpa1").val() != "" && $("#diploma1").val() != "" && $("#trans1").val() != "") || ($("#sel4").val() != "kosong" && $("#institusiloc").val() != "" && $("#institusiname").val() != "" && $("#major").val() != "" && $("#major").val() != "" && $("#gpa").val() != "" && $("#diploma").val() != "" && $("#trans").val() != "" )){
			$("#addedu").attr("disabled", false);
			}else{
			$("#addedu").attr("disabled", true);
		}
	});

	$("#institusiname").on("keyup", function(){
		if(($(this).val() != "" && $("#sel3").val() != "" && $("#sel3").val() != "blank" && $("#institusiloc1").val() != "" && $("#institusiname1").val() != "" && $("#major1").val() != "" && $("#major1").val() != "" && $("#gpa1").val() != "" && $("#diploma1").val() != "" && $("#trans1").val() != "") || ($("#sel4").val() != "kosong" && $("#institusiloc").val() != "" && $("#institusiname").val() != "" && $("#major").val() != "" && $("#major").val() != "" && $("#gpa").val() != "" && $("#diploma").val() != "" && $("#trans").val() != "" )){
			$("#addedu").attr("disabled", false);
			}else{
			$("#addedu").attr("disabled", true);
		}
	});

	$("#major").on("keyup", function(){
		if(($(this).val() != "" && $("#sel3").val() != "" && $("#sel3").val() != "blank" && $("#institusiloc1").val() != "" && $("#institusiname1").val() != "" && $("#major1").val() != "" && $("#major1").val() != "" && $("#gpa1").val() != "" && $("#diploma1").val() != "" && $("#trans1").val() != "") || ($("#sel4").val() != "kosong" && $("#institusiloc").val() != "" && $("#institusiname").val() != "" && $("#major").val() != "" && $("#major").val() != "" && $("#gpa").val() != "" && $("#diploma").val() != "" && $("#trans").val() != "" )){
			$("#addedu").attr("disabled", false);
			}else{
			$("#addedu").attr("disabled", true);
		}
	});

	$("#fmajor").on("keyup", function(){
		if(($(this).val() != "" && $("#sel3").val() != "" && $("#sel3").val() != "blank" && $("#institusiloc1").val() != "" && $("#institusiname1").val() != "" && $("#major1").val() != "" && $("#major1").val() != "" && $("#gpa1").val() != "" && $("#diploma1").val() != "" && $("#trans1").val() != "") || ($("#sel4").val() != "kosong" && $("#institusiloc").val() != "" && $("#institusiname").val() != "" && $("#major").val() != "" && $("#major").val() != "" && $("#gpa").val() != "" && $("#diploma").val() != "" && $("#trans").val() != "" )){
			$("#addedu").attr("disabled", false);
			}else{
			$("#addedu").attr("disabled", true);
		}
	});

	$("#gpa").on("keyup", function(){
		if(($(this).val() != "" && $("#sel3").val() != "" && $("#sel3").val() != "blank" && $("#institusiloc1").val() != "" && $("#institusiname1").val() != "" && $("#major1").val() != "" && $("#major1").val() != "" && $("#gpa1").val() != "" && $("#diploma1").val() != "" && $("#trans1").val() != "") || ($("#sel4").val() != "kosong" && $("#institusiloc").val() != "" && $("#institusiname").val() != "" && $("#major").val() != "" && $("#major").val() != "" && $("#gpa").val() != "" && $("#diploma").val() != "" && $("#trans").val() != "" )){
			$("#addedu").attr("disabled", false);
			}else{
			$("#addedu").attr("disabled", true);
		}
	});

	$("#diploma").on("change", function(){
		if(($(this).val() != "" && $("#sel3").val() != "" && $("#sel3").val() != "blank" && $("#institusiloc1").val() != "" && $("#institusiname1").val() != "" && $("#major1").val() != "" && $("#major1").val() != "" && $("#gpa1").val() != "" && $("#diploma1").val() != "" && $("#trans1").val() != "") || ($("#sel4").val() != "kosong" && $("#institusiloc").val() != "" && $("#institusiname").val() != "" && $("#major").val() != "" && $("#major").val() != "" && $("#gpa").val() != "" && $("#diploma").val() != "" && $("#trans").val() != "" )){
			$("#addedu").attr("disabled", false);
			}else{
			$("#addedu").attr("disabled", true);
		}
	});

	$("#trans").on("change", function(){
	   if(($(this).val() != "" && $("#sel3").val() != "" && $("#sel3").val() != "blank" && $("#institusiloc1").val() != "" && $("#institusiname1").val() != "" && $("#major1").val() != "" && $("#major1").val() != "" && $("#gpa1").val() != "" && $("#diploma1").val() != "" && $("#trans1").val() != "") || ($("#sel4").val() != "kosong" && $("#institusiloc").val() != "" && $("#institusiname").val() != "" && $("#major").val() != "" && $("#major").val() != "" && $("#gpa").val() != "" && $("#diploma").val() != "" && $("#trans").val() != "" )){
			$("#addedu").attr("disabled", false);
			}else{
			$("#addedu").attr("disabled", true);
		}
	});

	</script>

	<script>
	$("#wplace").on("change", function(){
		if($(this).val() != "" && $("#wplace").val() != "" && $("#posisi").val() != "" && $("#yin").val() != "" && $("#yout").val() != "" ){
			$("#addwork").attr("disabled", false);
			}else{
			$("#addwork").attr("disabled", true);
		}
	});

	$("#posisi").on("keyup", function(){
		if($(this).val() != "" && $("#wplace").val() != "" && $("#posisi").val() != "" && $("#yin").val() != "" && $("#yout").val() != "" ){
			$("#addwork").attr("disabled", false);
			}else{
			$("#addwork").attr("disabled", true);
		}
	});

	$("#yin").on("keyup", function(){
		if($(this).val() != "" && $("#wplace").val() != "" && $("#posisi").val() != "" && $("#yin").val() != "" && $("#yout").val() != "" ){
			$("#addwork").attr("disabled", false);
			}else{
			$("#addwork").attr("disabled", true);
		}
	});

	$("#yout").on("keyup", function(){
		if($(this).val() != "" && $("#wplace").val() != "" && $("#posisi").val() != "" && $("#yin").val() != "" && $("#yout").val() != "" ){
			$("#addwork").attr("disabled", false);
			}else{
			$("#addwork").attr("disabled", true);
		}
	});

	</script>

	<script>
	$("#sel5").on("change", function(){
		
	   if($(this).val() != "" && $("#sel5").val() != "kosong" && $("#sel6").val() != "kosong" && $("#sel7").val() != "kosong" ){
		 			
			$("#lastsave").removeAttr("disabled");
		}else{
			
			$("#lastsave").attr("disabled", true);
		}
	});

	$("#sel6").on("change", function(){
	   if($(this).val() != "" && $("#sel5").val() != "kosong" && $("#sel6").val() != "kosong" && $("#sel7").val() != "kosong" ){
		
			$("#lastsave").removeAttr("disabled");
		}else{
			$("#lastsave").attr("disabled", true);
		}
	});

	$("#sel7").on("change", function(){
	   if($(this).val() != "" && $("#sel5").val() != "kosong" && $("#sel6").val() != "kosong" && $("#sel7").val() != "kosong" ){
			
			$("#lastsave").removeAttr("disabled");
		}else{
			$("#lastsave").attr("disabled", true);
		}
	});

	</script>


	<script type="text/javascript">
		$(document).ready(function () {
		//Initialize tooltips
		$('.nav-tabs > li a[title]').tooltip();
		
		//Wizard
		$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

			var $target = $(e.target);
		
			if ($target.parent().hasClass('disabled')) {
				return false;
			}
		});

		$(".saver").click(function (e) {

			var $active = $('.wizard .nav-tabs li.active');
			$active.next().removeClass('disabled');
			nextTab($active);
		});
	});

	function nextTab(elem) {
		$(elem).next().find('a[data-toggle="tab"]').click();
	}

	</script>

	<script type="text/javascript">
		$(document).ready(function () {
		//Initialize tooltips
		$('.nav-tabs > li a[title]').tooltip();
		
		//Wizard
		$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

			var $target = $(e.target);
		
			if ($target.parent().hasClass('disabled')) {
				return false;
			}
		});

		$("#fsave").click(function (e) {

			var $active = $('.wizard .nav-tabs li.active');
			$active.next().removeClass('disabled');
			nextTab($active);
		});
	});

	function nextTab(elem) {
		$(elem).next().find('a[data-toggle="tab"]').click();
	}

	</script>

	<script type="text/javascript">
		$(document).ready(function () {
		//Initialize tooltips
		$('.nav-tabs > li a[title]').tooltip();
		
		//Wizard
		$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

			var $target = $(e.target);
		
			if ($target.parent().hasClass('disabled')) {
				return false;
			}
		});

		$(".esaver").click(function (e) {

			var $active = $('.wizard .nav-tabs li.active');
			$active.next().removeClass('disabled');
			nextTab($active);
		});
	});

	function nextTab(elem) {
		$(elem).next().find('a[data-toggle="tab"]').click();
	}
	</script>

	<script type="text/javascript">
		$(document).ready(function () {
		//Initialize tooltips
		$('.nav-tabs > li a[title]').tooltip();
		
		//Wizard
		$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

			var $target = $(e.target);
		
			if ($target.parent().hasClass('disabled')) {
				return false;
			}
		});

		$("#wsave").click(function (e) {

			var $active = $('.wizard .nav-tabs li.active');
			$active.next().removeClass('disabled');
			nextTab($active);
		});
	});

	function nextTab(elem) {
		$(elem).next().find('a[data-toggle="tab"]').click();
	}
	
	$("#lastsave").click(function(){				
			var formData = new FormData();
			formData.append("full_name", $("#name").val());
			
			formData.append("identity_number", $("#idNumb").val());
			formData.append("gender", $('input[name=gender]:checked').val());
			formData.append("blood_type", $('input[name=blood]:checked').val());
			formData.append("birth_place", $("#bornplace").val());
			formData.append("birth_date", $("#dob").val());
			formData.append("marriage_status", $("#marriage").val());
			formData.append("religion", $("#religi").val());
			formData.append("nationality", $('input[name=nasional]:checked').val());
			formData.append("address", $("#addr").val());
			formData.append("city", $("#city").val());
			formData.append("postal_code", $("#pos").val());
			formData.append("mobile_number", $("#phone").val());			
			formData.append('photo', $('#formalfoto')[0].files[0]);
			
			formData.append("toefl_type", $('input[name=inggris]:checked').val());
			formData.append("certificate", $('#certi')[0].files[0]);
			formData.append("score", $("#score").val());
			formData.append("toefl_institution", $("#tfname").val());
			
			formData.append("first_position", $("#sel5").val());
			formData.append("second_position", $("#sel6").val());
			formData.append("expected_salary", $("#sel7").val());
			formData.append("portfolio", $('#prt')[0].files[0]);
			
			formData.append("_token", $("#_token").val());
			
			var grader = new Array();
			$(".grader").each(function(){
				var val = $(this).val();
				if(val != "")
				{
					grader.push(val);
				}
			});
										
			var institusiloc1 = new Array();
			$(".institusiloc1").each(function(){
				var val = $(this).val();
				if(val != "")
				{
					institusiloc1.push(val);
				}
			});
			
			
			var institusiname1 = new Array();
			$(".institusiname1").each(function(){
				var val = $(this).val();
				if(val != "")
				{
					institusiname1.push(val);
				}
			});
			
			
			var major1 = new Array();
			$(".major1").each(function(){
				var val = $(this).val();
				if(val != "")
				{
					major1.push(val);
				}
			});
			
			
			var fmajor1 = new Array();
			$(".fmajor1").each(function(){
				var val = $(this).val();
				if(val != "")
				{
					fmajor1.push(val);
				}
			});
			
			
			var gpa1 = new Array();
			$(".gpa1").each(function(){
				var val = $(this).val();
				if(val != "")
				{
					gpa1.push(val);
				}
			});
			
			
			var diploma1 = new Array();
			$(".diploma1").each(function(){
				var val = $(this)[0].files[0];
				
				if(val != "")
				{
					diploma1.push(val);
				}
			});
			
			
			var trans1 = new Array();
			$(".trans1").each(function(){
				var val = $(this)[0].files[0];
				if(val != "")
				{
					trans1.push(val);
				}
			});
			
			var place = new Array();
			$(".place").each(function(){
				var val = $(this).val();
				if(val != "")
				{
					place.push(val);
				}
			});
			
			var position = new Array();
			$(".position").each(function(){
				var val = $(this).val();
				if(val != "")
				{
					position.push(val);
				}
			});
			
			var year_in = new Array();
			$(".year_in").each(function(){
				var val = $(this).val();
				if(val != "")
				{
					year_in.push(val);
				}
			});
			
			var year_out = new Array();
			$(".year_out").each(function(){
				var val = $(this).val();
				if(val != "")
				{
					year_out.push(val);
				}
			});
			

			$.ajax({
				   url : '{{ Url("/dofillcv") }}',
				   type : 'POST',
				   dataType: "json",
				   data : formData,
				   processData: false,  // tell jQuery not to process the data
				   contentType: false,  // tell jQuery not to set contentType
				   success : function(data) {
					   var uc = data["unique_code"];
					   var data = data["id"];					   
					 
					   if(data > 0)
					   {						   
						   for (var i = 0; i < grader.length; i++) {
							   formData = new FormData();
							   formData.append("id_cv", data);
							   formData.append("_token", $("#_token").val());
							   formData.append("grader", grader[i]);
							   formData.append("institusiloc1", institusiloc1[i]);
							   formData.append("institusiname1", institusiname1[i]);
							   formData.append("major1", major1[i]);
							   formData.append("fmajor1", fmajor1[i]);
							   formData.append("gpa1", gpa1[i]);
							   formData.append("diploma1", diploma1[i]);
							   formData.append("trans1", trans1[i]);
							   
							   $.ajax({
								   url : '{{ Url("/dofilleducation") }}',
								   type : 'POST',
								   async :false,
								   data : formData,
								   processData: false,  // tell jQuery not to process the data
								   contentType: false,  // tell jQuery not to set contentType
								   success : function(data) {									   
								   },
								   error:function(err) {
										swal('Error', 'Fail to submit CV Education', 'warning');
										return false;
								   },
							   });
						   }
						   for (var i = 0; i < place.length; i++) {
							   formData = new FormData();
							   formData.append("id_cv", data);
							   formData.append("_token", $("#_token").val());
							   formData.append("place", place[i]);
							   formData.append("position", position[i]);
							   formData.append("institusiname1", institusiname1[i]);
							   formData.append("year_in", year_in[i]);
							   formData.append("year_out", year_out[i]);
							 
							   $.ajax({
								   url : '{{ Url("/dofillwork") }}',
								   type : 'POST',
								   async :false,
								   data : formData,
								   processData: false,  // tell jQuery not to process the data
								   contentType: false,  // tell jQuery not to set contentType
								   success : function(data) {									   
								   },
								   error:function(err) {
										swal('Error', 'Fail to submit CV Work', 'warning');
										return false;
								   },
							   });
						   }
					   }
					   swal('Success', 'CV Has been submitted, Your unique code is : ' + uc, 'success');
					
				   },
				   error:function(err) {
						swal('Error', 'Fail to submit CV', 'warning');
				   },
			});
			return false;
	});
	</script>
	
@endsection








