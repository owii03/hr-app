<?php $__env->startSection('isi'); ?>
	 <!--Start of carousel-->
 <div class="contentArea4">
			<div class="announce">
				<h2>CONGRATULATION!</h2>
				<h3>Please come to the interview session on</h3>
				<div id="tanggalinter">[ <?php echo e(date("d-M-Y", strtotime("+2 days"))); ?> ]</div>
				<h3>At</h3><div id="tempatinter">[ Graha Lestari ]</div> <h3>On</h3> <div id="waktuinter">[ 14:00 ]</div>
				<h5>Please send your attendance confirmation (min D-2 from interview session) by email to <br/><u>yoona@trans-cosmos.com</u></h5>
			</div>

	<table class="restable">
  <tr>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
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
  </tr>
 </table>

</div>
<?php $__env->stopSection(); ?>









<?php echo $__env->make('layout.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>