<?php $__env->startSection('isi'); ?>
	 <!--Start of carousel-->
	<div class="wrapper">
		<table class="dynamic-table">
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Action</th>
			</tr>
			<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($d->name); ?></td>
				<td><a href="mailto:<?php echo e($d->email); ?>"><?php echo e($d->email); ?></a></td>
				<td><?php echo e($d->mobile_phone); ?></td>
				<td><button data-id="<?php echo e($d->id_result); ?>" class='delete btn btn-success btn-sm'>Delete</button></td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			
			<tr class="addition-row hidden">
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table><button class="btn btn-success btn-lg" id="interviewsess" type="submit"><a href="#popup1">Interview Session</a></button>
		<div class="overlay" id="popup1">
			<div class="popup">
				<div class="titleInter">
					Input Interview Session
				</div><br>
				<a class="close" href="#">&times;</a>
				<div class="content">
					<form method="post">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									Interview Date <input class="form-control input-md" id="indate" name="indate" type="date">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									Interview <select class="form-control input-md" id="inhour" name="inhour">
										<option hidden="" selected="selected" value="kosong">
										</option>
										<option value="lapan">
											08
										</option>
										<option value="lan">
											09
										</option>
										<option value="luh">
											10
										</option>
										<option value="las">
											11
										</option>
										<option value="was">
											12
										</option>
										<option value="gas">
											13
										</option>
										<option value="pas">
											14
										</option>
										<option value="mas">
											15
										</option>
										<option value="nas">
											16
										</option>
										<option value="jas">
											17
										</option>
									</select>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									Hour <select class="form-control input-md" id="inmin" name="inmin">
										<option hidden="" selected="selected" value="kosong">
										</option>
										<option value="dol">
											00
										</option>
										<option value="noma">
											05
										</option>
										<option value="luh">
											10
										</option>
										<option value="nomas">
											15
										</option>
										<option value="wuh">
											20
										</option>
										<option value="noduma">
											25
										</option>
										<option value="guh">
											30
										</option>
										<option value="nogama">
											35
										</option>
										<option value="puh">
											40
										</option>
										<option value="nopama">
											45
										</option>
										<option value="muh">
											50
										</option>
										<option value="nomama">
											55
										</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									Interview Place <input class="form-control input-md" id="inplace" name="place" type="text">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<button class="btn btn-success btn-md" id="insave" type="submit">Save</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>	
<script>
	//Deleting a row
	$(document).on("click", ".delete", function() {
		var row = $(this).parent().parent();
		//Getting the current row
		if (confirm("Do you want to delete?")) {
			
			   var id = $(this).data("id");
	   
			   $.ajax({
				   url : '<?php echo e(Url("/dodeleteresult")); ?>',
				   type : 'POST',
				   async :false,
				   data : {
					   _token:'<?php echo e(csrf_token()); ?>',
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
		} else {
			
		}
		event.preventDefault();
	});
</script>
	
<?php $__env->stopSection(); ?>









<?php echo $__env->make('layout.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>