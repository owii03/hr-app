<?php $__env->startSection('isi'); ?>
	 <!--Start of carousel-->
  <div class="contentArea2">
    <div class="wow fadeInLeft animated" data-wow-delay=".5s">
      <div class="onlineKV">
        <img src="images/Onlinetest_02.jpg" alt="" width="1366" height="294">
      </div>
    </div>
    <div class="wow fadeInUp animated" data-wow-delay=".5s">
      <div class="wrapperbox">
        <div class="contentBox">
          <div class="onlineTitle">Rules & Regulation
          </div>
          <div class="onlineInfo">
            <p style="color:#cf152c;">
              <b>Online Test Instruction :
              </b>
            </p>
            &nbsp;&nbsp;&nbsp;1.&nbsp;&nbsp;Complete your CV data to get the unique code to enter the online test
            <br/>
            &nbsp;&nbsp;&nbsp;2.&nbsp;&nbsp;Choose the online test section which you want to finish first. Please make sure that your internet connection is stable
            <br/>
            &nbsp;&nbsp;&nbsp;3.&nbsp;&nbsp;You 
            <b>CAN NOT
            </b> retake the test. If the time runs out, then the test is automatically finished and the data will be stored
            <br/>
            &nbsp;&nbsp;&nbsp;4.&nbsp;&nbsp;
            <b>DO NOT
            </b> refresh the online page during the test. Your data will automatically stored and the test counted as finish
            <br/>
            &nbsp;&nbsp;&nbsp;5.&nbsp;&nbsp;Every test have their own time limit. So read carefully and always check the timer during the test
            <br/>
            &nbsp;&nbsp;&nbsp;6.&nbsp;&nbsp;We 
            <b>WILL NOT
            </b> tolerate any 
            <b>PLAGIARISM
            </b> or another 
            <b>CHEATING
            </b> method to finish the test
            <br/>
            &nbsp;&nbsp;&nbsp;7.&nbsp;&nbsp;Make sure you are ready to start the online test. You may take a break after you finished every section
            <br/>
            &nbsp;&nbsp;&nbsp;8.&nbsp;&nbsp;The given unique code will be expired after 24 hour since you enter the test. Make sure you already finished all the test within 24 hour
            <br/>
            &nbsp;&nbsp;&nbsp;9.&nbsp;&nbsp;Enjoy the test and 
            <b>GOODLUCK!
            </b>
            <br/>
          </div>
        </div>
      </div>
    </div>
    <div class="contentBox2">
      <div class="onlineTitle">
        <b>ENTER THE UNIQUE CODE
        </b>
        <form method="post" action="<?php echo e(Url('doonlinetest')); ?> ">
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
          <input class="input-lg2" autofocus required type="text" id="ucode" name="ucode" class="ucode" maxlength="8">
       
        <div class="form-group">
         <button class="btn btn-success btn-lg btn-block3" type="submit" >START THE TEST
          </button>
        </div>
		 </form>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>









<?php echo $__env->make('layout.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>