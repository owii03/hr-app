<?php $__env->startSection('isi'); ?>
	 <!--Start of carousel-->
 <div class="contentArea3">

	<button id="editcv" type="submit">Edit</button>
	
	<div class="boxcv">
		<div class="pimg">
			<!-- ambil profile image dari database--><img src="<?php echo e(Url('document')); ?>/<?php echo e($data->photo); ?>" height="200px">
		</div>
		<div id="namacv"><?php echo e($data->full_name); ?> <!-- ambil nama dari database--></div>
		<div id="pilar"><img src="images/pilar.jpg" width="1072px" height="6px">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<div class="emailcv"><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php echo e(Auth::user()->email); ?></div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<div class="mobilecv"><i class="fa fa-mobile" aria-hidden="true"></i> <?php echo e($data->mobile_number); ?></div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<div class="locationcv"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo e($data->city); ?>, <?php echo e($data->nationality); ?></div>
					</div>
				</div>
			</div>
		</div>
		<div id="allof">
				<div class="sectiongens">GENERAL INFORMATION</div>
					<div class="informatif1">
						Fullname <span id="titikdua">:</span>  <?php echo e(ucwords($data->full_name)); ?><br/>
						Identity Number <span id="titikdua2">:</span><?php echo e(ucwords($data->identity_number)); ?> <br/>
						Gender <span id="titikdua3">:</span> <?php echo e(ucwords($data->gender)); ?><br/>
						Blood Type <span id="titikdua4">:</span> <?php echo e(ucwords($data->blood_type)); ?><br/>
						Birth Place <span id="titikdua5">:</span> <?php echo e(ucwords($data->birth_place)); ?><br/>
						Birth Date <span id="titikdua6">:</span> <?php echo e(date("d-M-Y", strtotime($data->birth_date))); ?><br/>
						Marriage Status <span id="titikdua10">:</span> <?php echo e(ucwords($data->marriage_status)); ?><br/>
						Religion <span id="titikdua7">:</span> <?php echo e(ucwords($data->religion)); ?><br/>
						Nationality <span id="titikdua8">:</span> <?php echo e(ucwords($data->nationality)); ?><br/>
						Address <span id="titikdua9">:</span> <?php echo e(ucwords($data->address)); ?><br/>
					</div>
					
				<div class="sectiongens">LANGUAGE INFORMATION</div>
					<div class="informatif1">
						Toefl Type <span id="titikdua11">:</span> <?php echo e(ucwords($data->toefl_type)); ?> <!-- Ambil data dari db--><br/>
						Score <span id="titikdua12">:</span> <?php echo e(ucwords($data->score)); ?><br/>
						Institution <span id="titikdua11">:</span> <?php echo e(ucwords($data->toefl_institution)); ?><br/>
						Certificate <span id="titikdua13">:</span> <?php echo e(ucwords($data->certificate)); ?><br/>
					</div>
				
				<?php if($work): ?>
				<div class="sectiongens">WORK INFORMATION</div>
					<div class="informatif1">
						Work Place <span id="titikdua14">:</span>  <?php echo e(ucwords($work->place)); ?><!-- Ambil data dari db--><br/>
						Position <span id="titikdua15">:</span> <?php echo e(ucwords($work->position)); ?><br/>
						Year In <span id="titikdua16">:</span> <?php echo e(ucwords($work->year_in)); ?><br/>
						Year Out <span id="titikdua17">:</span> <?php echo e(ucwords($work->year_out)); ?><br/>
					</div>
				<?php endif; ?>	
				
			
			<div class="rightcorner">
				<div class="sectiongens">EDUCATION INFORMATION</div>
					<div class="informatif1">
						Grade <span id="titikdua18">: <?php if($education): ?>	 
							<?php echo e(ucwords($education->grade)); ?> 
						<?php endif; ?></span>  <!-- Ambil data dari db--><br/>
						Institution City <span id="titikdua19">:</span> <?php if($education): ?> <?php echo e(ucwords($education->city)); ?> <?php endif; ?><br/>
						Institution Name <span id="titikdua20">:</span> <?php if($education): ?> <?php echo e(ucwords($education->name)); ?> <?php endif; ?><br/>
						Major <span id="titikdua21">:</span> <?php if($education): ?>  <?php echo e(ucwords($education->major)); ?>  <?php endif; ?><br/>
						Focused Major <span id="titikdua19">:</span> <?php if($education): ?>  <?php echo e(ucwords($education->focused_major)); ?> <?php endif; ?><br/>
						GPA <span id="titikdua23">:</span> <?php if($education): ?>  <?php echo e(ucwords($education->gpa)); ?> <?php endif; ?><br/>
						GPA Transcript <span id="titikdua24">:</span> <?php if($education): ?>  <a download href="<?php echo e(Url('document')); ?>/<?php echo e($education->gpa_transcript); ?>"><?php echo e(ucwords($education->gpa_transcript)); ?></a> <?php endif; ?><br/>
						Diploma <span id="titikdua24">:</span> <?php if($education): ?>  <a download href="<?php echo e(Url('document')); ?>/<?php echo e($education->diploma); ?>"><?php echo e(ucwords($education->diploma)); ?></a> <?php endif; ?><br/>
					</div>
			</div>
		
			<div class="rightcorner2">
				<div class="sectiongens">OTHER INFORMATION</div>
					<div class="informatif1">
						First Priority <span id="titikdua26">:</span>  <?php echo e(ucwords($data->first_position)); ?><!-- Ambil data dari db--><br/>
						Second Priority <span id="titikdua26">:</span> <?php echo e(ucwords($data->second_position)); ?><br/>
						Portfolio <span id="titikdua">:</span> <?php echo e(ucwords($data->portfolio)); ?><br/>
						Expected Salary <span id="titikdua29">:</span> <?php echo e(($data->expected_salary)); ?><br/>
					</div>
			</div>
		
		</div>
	</div>
</div>	
<?php $__env->stopSection(); ?>









<?php echo $__env->make('layout.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>