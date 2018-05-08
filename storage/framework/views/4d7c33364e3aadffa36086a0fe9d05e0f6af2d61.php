<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
	
    <title>Transcosmos Indonesia Recruitment</title>
    
	<!-- CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" >
    <link rel="stylesheet" type="text/css" href="http://tristanedwards.me/u/SweetAlert//lib/sweet-alert.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">	
    
	<!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
   
   <!-- Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!--<script src="js/bootstrap-confirm-delete.js"></script>-->
    
	<!-- JS -->
    <script src="http://tristanedwards.me/u/SweetAlert//lib/sweet-alert.js"></script>

    <script src="js/modernizr.custom.js"></script>
    
	<!-- MAPS -->
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAkj5Yaf_iGp6vqtCdu8sc3qYaPJv6G4GU "></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <!--animation-effect-->
    <link rel="stylesheet" href="css/animate.min.css" >
    <script src="js/wow.min.js"></script>
    <script>new WOW().init();</script>

	<!--start-smooth-scrolling-->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>

	<script type = "text/javascript">
	jQuery(document).ready(function($) {
    	$(".scroll").click(function(event) {
    		event.preventDefault();
    		$('html,body').animate({
    			scrollTop: $(this.hash).offset().top
    		}, 1000);
    	});
    }); 
</script>
    <!--//end-smooth-scrolling-->
	
</head>
<body>
  <!--Logo dan navigation-->
  <div class="wrapper">
    <div class="wow fadeInLeft animated" data-wow-delay=".5s">
      <div class="topSection clearfix">
        <div class="logo">
          <a href="<?php echo e(Url('/')); ?>">
            <img src="images/logo.png" width="196" height="70" alt="Logo Transcosmos">
          </a>
        </div>
        <div class="navBar clearfix">
          <ul>
            <li class="mr70">
              <a class="<?php if(!isset($selected))
							echo 'active';?>" href="<?php echo e(Url('/')); ?>">HOME
              </a>
            </li>
			<?php if(!Auth::check()): ?>
				<li class="mr70">
				  <a href="<?php echo e(Url('/login')); ?>">LOGIN
				  </a>
				</li>
			<?php else: ?>
		
				<?php if(Auth::user()->role == 'Member'): ?>
					<li class="mr70">
						<a class='<?php if(isset($selected) && $selected == 'Fill CV')
							echo 'active';?>' href="<?php echo e(Url('/fillcv')); ?>">FILL CV</a>
					</li>
					<li class="mr70">
						<a class='<?php if(isset($selected) && $selected == 'View CV')
							echo 'active';?>' href="<?php echo e(Url('/viewcv')); ?>">VIEW CV</a>
					</li>
					<li class="mr70">
						<a class='<?php if(isset($selected) && $selected == 'Online Test')
							echo 'active';?>' href="<?php echo e(Url('/onlinetest')); ?>">ONLINE TEST</a>
					</li>
				<?php else: ?>
					<li class="mr70">
						<a class="<?php if(isset($selected) && $selected == 'Applicant Selection')
							echo 'active';?>"
						href="<?php echo e(Url('/applicantselection')); ?>">APPLICANT SELECTION</a>
					</li>
					<li class="mr70">
						<a class="<?php if(isset($selected) && $selected == 'Selection Result')
							echo 'active';?>" href="<?php echo e(Url('/selectionresult')); ?>">SELECTION RESULT</a>
					</li>
					<li class="mr70">
						<a class="<?php if(isset($selected) && $selected == 'Modify Test')
							echo 'active';?>" href="<?php echo e(Url('/modifytest')); ?>">MODIFY TEST</a>
					</li>
				<?php endif; ?>
				<li class="mr70">
				  <a href="<?php echo e(Url('/password')); ?>">CHANGE PASSWORD
				  </a>
				</li>
				<li class="mr70">
				  <a href="<?php echo e(Url('/logout')); ?>">SIGN OUT
				  </a>
				</li>
			<?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="wrapper2">
	<div class="wow fadeInLeft animated" data-wow-delay=".5s">
		<?php echo $__env->yieldContent("isi"); ?>
  <div class="wow fadeInUp animated" data-wow-delay=".5s">
    <div class="footer">
      <p>
        &copy; 
        <b>PowerPuffGirl 2018. All Right Reserved.
        </b>
      </p>
    </div>
  </div>
  </div>
</div>
<?php if(Session::has('pesan')): ?>
	<script type="text/javascript">
		//swal("Test", "Hello");
		swal("<?php echo e(Session::get('title')); ?>", "<?php echo Session::get('pesan'); ?>", "<?php echo e(Session::get('alert')); ?>");
	</script>
<?php endif; ?>
</body>

</html>