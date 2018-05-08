@extends('layout.template')



@section('isi')
	 <!--Start of carousel-->
	<div class="wrapper">
		<div class="tab-frame">
			<input checked id="tab1" name="tab" type="radio"> <label for="tab1">Multiple choices</label> <input id="tab2" name="tab" type="radio"> <label for="tab2">Practices</label>
			<div class="tabso">
				<ul class="tabes">
					<li>
						<input checked id="tab5" name="taber" type="radio"> <label for="tab5">CODING</label>
						<div class="tab-contenty animated fadeIn" id="tab-content1">
							<table class="qvstable">
								<tr>
									<th>ID</th>
									<th>Question</th>
									<th>Right Answer</th>
									<th>Feedback</th>
									<th>Answer A</th>
									<th>Answer B</th>
									<th>Answer C</th>
									<th>Answer D</th>
									<th>Actions</th>
								</tr>				
														
								@foreach($datacoding as $d)
									@if($d->category == 'Coding')
										<tr>
											<td>{{ $loop->iteration }}</td>
											<td>{{ $d->question }}</td>
											<td>{{ $d->answer }}</td>
											<td>{{ $d->feedback }}</td>
											<td>{{ $d->answer_a }}</td>
											<td>{{ $d->answer_b }}</td>
											<td>{{ $d->answer_c }}</td>
											<td>{{ $d->answer_d }}</td>
											<td><button data-category="Coding"  data-id="{{ $d->id }}" class='edit btn btn-warning btn-sm'>Edit</button> <button data-id="{{ $d->id }}" class='delete btn btn-success btn-sm'>Delete</button></td>
										</tr>
									@endif
								@endforeach
								<tr class="addition-row">
									<td><button class="add-line btn-info btn-sm">+</button></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</table>
						</div>
					</li>
					<li>
						<input id="tab6" name="taber" type="radio"> <label for="tab6">DESIGN</label>
						<div class="tab-contenty animated fadeIn" id="tab-content2">
							<table class="qvstable">
								<tr>
									<th>ID</th>
									<th>Question</th>
									<th>Right Answer</th>
									<th>Feedback</th>
									<th>Answer A</th>
									<th>Answer B</th>
									<th>Answer C</th>
									<th>Answer D</th>
									<th>Actions</th>
								</tr>
								@foreach($datadesign as $d)
									@if($d->category == 'Design')
										<tr>
											<td>{{ $loop->iteration }}</td>
											<td>{{ $d->question }}</td>
											<td>{{ $d->answer }}</td>
											<td>{{ $d->feedback }}</td>
											<td>{{ $d->answer_a }}</td>
											<td>{{ $d->answer_b }}</td>
											<td>{{ $d->answer_c }}</td>
											<td>{{ $d->answer_d }}</td>
											<td><button data-category="Design" data-id="{{ $d->id }}" class='edit btn btn-warning btn-sm'>Edit</button> <button data-id="{{ $d->id }}" class='delete btn btn-success btn-sm'>Delete</button></td>
										</tr>
									@endif
								@endforeach
								<tr class="addition-row2">
									<td><button class="add-line2 btn-info btn-sm">+</button></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</table>
						</div>
					</li>
					<li>
						<input id="tab3" name="taber" type="radio"> <label for="tab3">QA</label>
						<div class="tab-contenty animated fadeIn" id="tab-content3">
							<table class="qvstable">
								<tr>
									<th>ID</th>
									<th>Question</th>
									<th>Right Answer</th>
									<th>Feedback</th>
									<th>Answer A</th>
									<th>Answer B</th>
									<th>Answer C</th>
									<th>Answer D</th>
									<th>Actions</th>
								</tr>
								@foreach($dataqa as $d)
									@if($d->category == 'QA')
										<tr>
											<td>{{ $loop->iteration }}</td>
											<td>{{ $d->question }}</td>
											<td>{{ $d->answer }}</td>
											<td>{{ $d->feedback }}</td>
											<td>{{ $d->answer_a }}</td>
											<td>{{ $d->answer_b }}</td>
											<td>{{ $d->answer_c }}</td>
											<td>{{ $d->answer_d }}</td>
											<td><button data-category="QA"  data-id="{{ $d->id }}" class='edit btn btn-warning btn-sm'>Edit</button> <button data-id="{{ $d->id }}" class='delete btn btn-success btn-sm'>Delete</button></td>
										</tr>
									@endif
								@endforeach
								<tr class="addition-row3">
									<td><button class="add-line3 btn-info btn-sm">+</button></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</table>
						</div>
					</li>
					<li>
						<input id="tab4" name="taber" type="radio"> <label for="tab4">ANALYTIC</label>
						<div class="tab-contenty animated fadeIn" id="tab-content4">
							<table class="qvstable">
								<tr>
									<th>ID</th>
									<th>Question</th>
									<th>Right Answer</th>
									<th>Feedback</th>
									<th>Answer A</th>
									<th>Answer B</th>
									<th>Answer C</th>
									<th>Answer D</th>
									<th>Actions</th>
								</tr>
								@foreach($dataanalytic as $d)
									@if($d->category == 'Analytic')
										<tr>
											<td>{{ $loop->iteration }}</td>
											<td>{{ $d->question }}</td>
											<td>{{ $d->answer }}</td>
											<td>{{ $d->feedback }}</td>
											<td>{{ $d->answer_a }}</td>
											<td>{{ $d->answer_b }}</td>
											<td>{{ $d->answer_c }}</td>
											<td>{{ $d->answer_d }}</td>
											<td><button data-category="Analytic"  data-id="{{ $d->id }}" class='edit btn btn-warning btn-sm'>Edit</button> <button data-id="{{ $d->id }}" class='delete btn btn-success btn-sm'>Delete</button></td>
										</tr>
									@endif
								@endforeach
								<tr class="addition-row4">
									<td><button class="add-line4 btn-info btn-sm">+</button></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</table>
						</div>
					</li>
				</ul>
			</div>
			<div class="tabso">
				<ul class="tabesi">
					<li>
						<input checked id="tab7" name="taberu" type="radio"> <label for="tab7">CODING</label>
						<div class="tab-contenty2 animated fadeIn" id="tab-content1">
							<table class="qvstable2">
								<tr>
									<th>ID</th>
									<th>Question</th>
									<th>Actions</th>
								</tr>
							@foreach($datapracticecoding as $d)
									@if($d->category == 'Coding')
								<tr>
									<td>{{ $loop->iteration }}</td>
									<td><a download href="{{ Url('practice') }}/{{ $d->file }}">{{ $d->file }}</td>
									<td> <button class='delete btn btn-success btn-sm'>Delete</button></td>
								</tr>
								@endif
							@endforeach
								<tr class="addition-row5">
									<td><button class="add-line5 btn-info btn-sm">+</button></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</table>
						</div>
					</li>
					<li>
						<input id="tab8" name="taberu" type="radio"> <label for="tab8">DESIGN</label>
						<div class="tab-contenty2 animated fadeIn" id="tab-content2">
							<table class="qvstable2">
								<tr>
									<th>ID</th>
									<th>Question</th>
									<th>Actions</th>
								</tr>
								@foreach($datapracticedesign as $d)
									@if($d->category == 'Design')
									<tr>
										<td>{{ $loop->iteration }}</td>
										<td><a download href="{{ Url('practice') }}/{{ $d->file }}">{{ $d->file }}</td>
										<td><button class='delete btn btn-success btn-sm'>Delete</button></td>
									</tr>
									@endif
								@endforeach
								<tr class="addition-row6">
									<td><button class="add-line6 btn-info btn-sm">+</button></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</table>
						</div>
					</li>
					<li>
						<input id="tab9" name="taberu" type="radio"> <label for="tab9">QA</label>
						<div class="tab-contenty2 animated fadeIn" id="tab-content3">
							<table class="qvstable2">
								<tr>
									<th>ID</th>
									<th>Question</th>
									<th>Actions</th>
								</tr>
								@foreach($datapracticeqa as $d)
									@if($d->category == 'QA')
									<tr>
										<td>{{ $loop->iteration }}</td>
										<td><a download href="{{ Url('practice') }}/{{ $d->file }}">{{ $d->file }}</td>
										<td><button class='delete btn btn-success btn-sm'>Delete</button></td>
									</tr>
									@endif
								@endforeach
								<tr class="addition-row7">
									<td><button class="add-line7 btn-info btn-sm">+</button></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</table>
						</div>
					</li>
					<li>
						<input id="tab10" name="taberu" type="radio"> <label for="tab10">ANALYTIC</label>
						<div class="tab-contenty2 animated fadeIn" id="tab-content4">
							<table class="qvstable2">
								<tr>
									<th>ID</th>
									<th>Question</th>
									<th>Actions</th>
								</tr>
								@foreach($datapracticeanalytic as $d)
									@if($d->category == 'Analytic')
									<tr>
										<td>{{ $loop->iteration }}</td>
										<td><a download href="{{ Url('practice') }}/{{ $d->file }}">{{ $d->file }}</td>
										<td> <button class='delete btn btn-success btn-sm'>Delete</button></td>
									</tr>
									@endif
								@endforeach
								<tr class="addition-row8">
									<td><button class="add-line8 btn-info btn-sm">+</button></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</table>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="paging">
			<ul class="pagination pagination">
				
			</ul>
		</div>
	</div>
</div>	
<script>	
var idedit = -1;
	//Creating the form modification row
//Creating the form addition row
$(".add-line").click(function() {
	//Preventing double line addition
	if ($(".validate").length != 0) {
		alert("you already have one line waiting for validation !");
		return 0;
	}

	//creating a new DOM element from scratch
	var new_row = $("<tr></tr>");
	new_row.append("<td><button data-category='Coding' class='validate btn btn-warning btn-sm'>✓</button></td>");
	new_row.append("<td><input  id='question'/></td>");
	new_row.append("<td><input  id='answer'/></td>");
	new_row.append("<td><input  id='feedback'/></td>");
	new_row.append("<td><input  id='answer_a'/></td>");
	new_row.append("<td><input  id='answer_b'/></td>");
	new_row.append("<td><input  id='answer_c'/></td>");
	new_row.append("<td><input  id='answer_d'/></td>");
	new_row.append("<td><button class='delete btn btn-success btn-sm'>Delete</button></td>");

	$(".addition-row").before(new_row);
});

$(".add-line2").click(function() {
	//Preventing double line addition
	if ($(".validate").length != 0) {
		alert("you already have one line waiting for validation !");
		return 0;
	}

	//creating a new DOM element from scratch
	var new_row = $("<tr></tr>");
	new_row.append("<td><button data-category='Design' class='validate btn btn-warning btn-sm'>✓</button></td>");
	new_row.append("<td><input  id='question'/></td>");
	new_row.append("<td><input  id='answer'/></td>");
	new_row.append("<td><input  id='feedback'/></td>");
	new_row.append("<td><input  id='answer_a'/></td>");
	new_row.append("<td><input  id='answer_b'/></td>");
	new_row.append("<td><input  id='answer_c'/></td>");
	new_row.append("<td><input  id='answer_d'/></td>");
	new_row.append("<td><button class='delete btn btn-success btn-sm'>Delete</button></td>");

	$(".addition-row2").before(new_row);
});

$(".add-line3").click(function() {
	//Preventing double line addition
	if ($(".validate").length != 0) {
		alert("you already have one line waiting for validation !");
		return 0;
	}

	//creating a new DOM element from scratch
	var new_row = $("<tr></tr>");
	new_row.append("<td><button data-category='QA' class='validate btn btn-warning btn-sm'>✓</button></td>");
	new_row.append("<td><input  id='question'/></td>");
	new_row.append("<td><input  id='answer'/></td>");
	new_row.append("<td><input  id='feedback'/></td>");
	new_row.append("<td><input  id='answer_a'/></td>");
	new_row.append("<td><input  id='answer_b'/></td>");
	new_row.append("<td><input  id='answer_c'/></td>");
	new_row.append("<td><input  id='answer_d'/></td>");
	new_row.append("<td><button class='delete btn btn-success btn-sm'>Delete</button></td>");

	$(".addition-row3").before(new_row);
});

$(".add-line4").click(function() {
	//Preventing double line addition
	if ($(".validate").length != 0) {
		alert("you already have one line waiting for validation !");
		return 0;
	}

	//creating a new DOM element from scratch
	var new_row = $("<tr></tr>");
	new_row.append("<td><button data-category='Analytic' class='validate btn btn-warning btn-sm'>✓</button></td>");
	new_row.append("<td><input  id='question'/></td>");
	new_row.append("<td><input  id='answer'/></td>");
	new_row.append("<td><input  id='feedback'/></td>");
	new_row.append("<td><input  id='answer_a'/></td>");
	new_row.append("<td><input  id='answer_b'/></td>");
	new_row.append("<td><input  id='answer_c'/></td>");
	new_row.append("<td><input  id='answer_d'/></td>");
	new_row.append("<td><button class='delete btn btn-success btn-sm'>Delete</button></td>");

	$(".addition-row4").before(new_row);
});


$(".add-line5").click(function() {
	//Preventing double line addition
	if ($(".validate").length != 0) {
		alert("you already have one line waiting for validation !");
		return 0;
	}

	//creating a new DOM element from scratch
	var new_row = $("<tr></tr>");
	new_row.append("<td><button data-category='Coding' class='validate2 btn btn-warning btn-sm'>✓</button></td>");
	new_row.append("<td><input type='file' id='question' name='question'/></td>");
	new_row.append("<td><button class='delete btn btn-success btn-sm'>Delete</button></td>");

	$(".addition-row5").before(new_row);
});

$(".add-line6").click(function() {
	//Preventing double line addition
	if ($(".validate").length != 0) {
		alert("you already have one line waiting for validation !");
		return 0;
	}

	//creating a new DOM element from scratch
	var new_row = $("<tr></tr>");
	new_row.append("<td><button data-category='Design' class='validate2 btn btn-warning btn-sm'>✓</button></td>");
	new_row.append("<td><input type='file' id='question' name='question'/></td>");
	new_row.append("<td><button class='delete btn btn-success btn-sm'>Delete</button></td>");

	$(".addition-row6").before(new_row);
});

$(".add-line7").click(function() {
	//Preventing double line addition
	if ($(".validate").length != 0) {
		alert("you already have one line waiting for validation !");
		return 0;
	}

	//creating a new DOM element from scratch
	var new_row = $("<tr></tr>");
	new_row.append("<td><button data-category='QA' class='validate2 btn btn-warning btn-sm'>✓</button></td>");
	new_row.append("<td><input type='file' id='question' name='question'/></td>");
	new_row.append("<td><button class='delete btn btn-success btn-sm'>Delete</button></td>");

	$(".addition-row7").before(new_row);
});

$(".add-line8").click(function() {
	//Preventing double line addition
	if ($(".validate").length != 0) {
		alert("you already have one line waiting for validation !");
		return 0;
	}

	//creating a new DOM element from scratch
	var new_row = $("<tr></tr>");
	new_row.append("<td><button data-category='Analytic' class='validate2 btn btn-warning btn-sm'>✓</button></td>");
	new_row.append("<td><input type='file' id='question' name='question'/></td>");
	new_row.append("<td><button class='delete btn btn-success btn-sm'>Delete</button></td>");

	$(".addition-row8").before(new_row);
});


//Creating the form modification row
$(document).on("click",".edit",function() {
	//Preventing double line addition
	if ($(".validate").length != 0) {
		alert("you already have one line waiting for validation !");
		return 0;
	}
	idedit = $(this).data("id");
	var row = $(this).parent().parent(); //Getting the current row

	//creating a new DOM element from scratch
	var new_row = $("<tr></tr>");
	new_row.append("<td><button class='validate btn btn-warning btn-sm'>✓</button></td>");
	new_row.append("<td><input id='question' name='question' value='"+ row.children("td:nth-child(2)").html()+ "'/></td>");
	new_row.append("<td><input id='answer' name='answer' value='"+ row.children("td:nth-child(3)").html()+ "'/></td>");
	new_row.append("<td><input id='feedback' name='feedback' value='"+ row.children("td:nth-child(4)").html()+ "'/></td>");
	new_row.append("<td><input id='answer_a' name='answer' value='"+ row.children("td:nth-child(5)").html()+ "'/></td>");
	new_row.append("<td><input id='answer_b' name='answer' value='"+ row.children("td:nth-child(6)").html()+ "'/></td>");
	new_row.append("<td><input id='answer_c' name='answer' value='"+ row.children("td:nth-child(7)").html()+ "'/></td>");			
	new_row.append("<td><input id='answer_d' name='answer' value='"+ row.children("td:nth-child(8)").html()+ "'/></td>");		
	//new_row.append("<td><button class='delete btn btn-success btn-sm'>Delete</button></td>");

	row.before(new_row);
	row.remove();
});


$(document).on("click",".edits",function() {
	//Preventing double line addition
	if ($(".validate").length != 0) {
		alert("you already have one line waiting for validation !");
		return 0;
	}
	
	
	

	//creating a new DOM element from scratch
	var new_row = $("<tr></tr>");
	new_row.append("<td><button class='validate btn btn-warning btn-sm'>✓</button></td>");
	new_row.append("<td><input type='file' id='question' name='question' value='"+ row.children("td:nth-child(2)").html()+ "'/></td>");				
	new_row.append("<td><button class='delete btn btn-success btn-sm'>Delete</button></td>");

	row.before(new_row);
	row.remove();
});

$(document).on("click", ".validate2", function() {
	//Validation function call (not needed for the exemple here)
	if (!validation_function("dummy_param")) {
		alert("error message");
		return 0;
	}

	var row = $(this).parent().parent(); //Getting the current row	
	var question = row.children("td").find("#question")[0].files[0];
	var category = $(this).data('category');	
	var formData = new FormData();
	formData.append('category', category);
	formData.append('_token', '{{ csrf_token() }}');
	formData.append('file', row.children("td").find("#question")[0].files[0]);
	$.ajax({
	   url : '{{ Url("/doaddpractice") }}',
	   type : 'POST',
	   dataType: "json",
	   data : formData,
	   processData: false,  // tell jQuery not to process the data
	   contentType: false,  // tell jQuery not to set contentType
	   success : function(data) {		  
		   location.reload();		
	   },
	   error:function(err) {
			swal('Error', 'Fail to submit CV', 'warning');
	   },
	});
	
	//Getting the last Id of the table or 1 if there are no lines / editing first line
	var new_id = 1;
	if (row.prev().children("td:first-child").length)
		new_id = parseInt(row.prev().children("td:first-child").html()) + 1;

	//Updating row with fields values
	row.find("td:first-child").html(new_id);
	row.children("td").each(function() {
		$(this).html($(this).children("input").val());
		
		
	});
	
	
	
	
	
	row
		.find("td:last-child")
		.html(
			"<button class='edit btn btn-warning btn-sm'>Edit</button> <button class='delete btn btn-success btn-sm'>Delete</button>"
		);
});

//Creating the new row
$(document).on("click", ".validate", function() {
	//Validation function call (not needed for the exemple here)
	if (!validation_function("dummy_param")) {
		alert("error message");
		return 0;
	}

	var row = $(this).parent().parent(); //Getting the current row	
	var question = row.children("td").find("#question").val();
	var answer = row.children("td").find("#answer").val();
	var feedback = row.children("td").find("#feedback").val();
	var answer_a = row.children("td").find("#answer_a").val();
	var answer_b = row.children("td").find("#answer_b").val();
	var answer_c = row.children("td").find("#answer_c").val();
	var answer_d = row.children("td").find("#answer_d").val();
	var category = $(this).data('category');
	if(idedit == -1){	
		$.ajax({
		   url : '{{ Url("/doaddtest") }}',
		   type : 'POST',
		   async :false,
		   data : {
			   _token:'{{ csrf_token() }}',
			   category:category,		   
			   question:question,
			   answer:answer,
			   feedback:feedback,
			   answer_a:answer_a,
			   answer_b:answer_b,
			   answer_c:answer_c,
			   answer_d:answer_d,
		   },
			success : function(data) {		
				location.reload();		
		   },
		   error:function(err) {
				swal('Error', 'Fail to submit Test', 'warning');
				return false;
		   },
	   });
	}
	else{
	
		$.ajax({
		   url : '{{ Url("/doedittest") }}',
		   type : 'POST',
		   async :false,
		   data : {
			   id:idedit,
			   _token:'{{ csrf_token() }}',
			   category:category,		   
			   question:question,
			   answer:answer,
			   feedback:feedback,
			   answer_a:answer_a,
			   answer_b:answer_b,
			   answer_c:answer_c,
			   answer_d:answer_d,
		   },
			success : function(data) {		
				location.reload();		
		   },
		   error:function(err) {
				idedit = -1;
				swal('Error', 'Fail to submit Test', 'warning');
				return false;
		   },
	   });
		return;
	}
	
	//Getting the last Id of the table or 1 if there are no lines / editing first line
	var new_id = 1;
	if (row.prev().children("td:first-child").length)
		new_id = parseInt(row.prev().children("td:first-child").html()) + 1;

	//Updating row with fields values
	row.find("td:first-child").html(new_id);
	row.children("td").each(function() {
		$(this).html($(this).children("input").val());
		
		
	});
	
	
	
	
	
	row
		.find("td:last-child")
		.html(
			"<button class='edit btn btn-warning btn-sm'>Edit</button> <button class='delete btn btn-success btn-sm'>Delete</button>"
		);
});

//Deleting a row
$(document).on("click", ".delete", function() {
	var row = $(this).parent().parent(); //Getting the current row
	if(confirm("Do you want to delete?")) {
		this.click;
       var id = $(this).data("id");
	   
	   $.ajax({
	   url : '{{ Url("/dodeletetest") }}',
	   type : 'POST',
	   async :false,
	   data : {
		   _token:'{{ csrf_token() }}',
		   id:id,		   
		  
	   },
	    success : function(data) {		
			location.reload();	
	   },
	   error:function(err) {
			swal('Error', 'Fail to submit Test', 'warning');
			return false;
	   },
   });
	   
   }else
   {
       
   }       
   event.preventDefault();
	update_ids();
});

//Updates the Ids of the table
function update_ids(){
	for(var i=2;i < $(".dynamic-table tr").length;i++){
		$(".dynamic-table tr:nth-child(" + i + ") td:first-child").html(i-1);
	}
}

//Binding enter key press on input to line validation
$(document).keypress(function (e) {
 var key = e.which;
 if(key == 13)  // the enter key code
  {
    $('.validate').click();
    return false;  
  }
});  

//Binding double click to line selection
$(document).on("dblclick","tr",function () {
	console.log($(this).find(".edit").html());
	if($(this).find("td").length)
   	$(this).find(".edit").click();
});  

function validation_function(args) {
	//Perform input values validation here
	return true;
}

function deletion_function(args) {
	//Perform row deletion validation here
	return true;
}
</script>
@endsection








