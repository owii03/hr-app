<?php $__env->startSection('isi'); ?>
	 <!--Start of carousel-->
  <div class="wrapper">
    <div class="courseBox clearfix">
      <div class="courseLeft">
        <div class="design">
          <img src="images/cdpk.jpg" height="250" width="309">
          <p id="jumlah"><?php echo e($a); ?>

          </p>
        </div>
        <div class="coding">
          <img src="images/copk.jpg" height="250" width="309">
          <p id="jumlah"><?php echo e($b); ?>

          </p>
          </a> 
      </div>
    </div>
    <div class="courseRight">
      <div class="qa">
        <img src="images/qapk.jpg" height="250" width="309">
        <p id="jumlah"><?php echo e($c); ?>

        </p>
      </div>
      <div class="analytic">
        <img src="images/anapk.jpg" height="250" width="309">
        <p id="jumlah"><?php echo e($d); ?>

        </p>
      </div>
    </div>
  </div>
  <div class="containerBoss">
    <form method="get" action="<?php echo e(Url('/applicantselection')); ?> ">
      <div class="containerMain clearfix">
        <div class="container2">
          <div class="row">
            <div class="col-sm-1 wd5 padding-0">
              <p>Search
              </p>
            </div>
            <div class="col-sm-6 padding-0">
              <div id="imaginary_container">
                <div class="input-group stylish-input-group wdSearch">
                  <input type="text" class="form-control" value="<?php if(isset($_GET['search'])) echo $_GET['search'];?>" name="search" placeholder="Search.." >
                  <span class="input-group-addon">
                    <button type="submit"> 
                      <span class="glyphicon glyphicon-search">
                      </span> 
                    </button>
                  </span> 
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container3">
          <div class="col-sm-2 wd5 padding-0">
            <p class="lH">Sort By 
            </p>
          </div>
          <div class="col-sm-9 padding-0 wdFilter">
            <div class="form-group">
              <select class="form-control" name="sort" id="sel1">
                <option>Highest-Lowest GPA
                </option>
                <option>Lowest-Highest GPA
                </option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="containerSecondary">
        <div class="row">
          <div class="col-sm-1 wd5 padding-0">
            <p>Filter By
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-1 wd5 padding-0">
            <p>GPA
            </p>
          </div>
          <div class="col-sm-4 padding-0 wdFilter">
            <div class="form-group">
              <select class="form-control" name="gpa" id="sel1">
                <option>>3.5
                </option>
                <option>>3.3
                </option>
                <option>>3.0
                </option>
                <option>>=2.75
                </option>
              </select>
            </div>
          </div>
          <div class="col-sm-1 wd5 padding-0">
            <p class="mL">Priority
            </p>
          </div>
          <div class="col-sm-4 padding-0 wdFilter">
            <div class="form-group">
              <select class="form-control" name="priority" id="sel1">
                <option>Design
                </option>
                <option>Coding
                </option>
                <option>Analytics
                </option>
                <option>QA
                </option>
              </select>
            </div>
          </div>
          <div class="col-sm-1 wd5 padding-0">
            <p class="mL">TOEFL
            </p>
          </div>
          <div class="col-sm-4 padding-0 wdFilter">
            <div class="form-group">
              <select class="form-control" id="sel1">
                <option>>600
                </option>
                <option>>550
                </option>
                <option>>500
                </option>
                <option>>450
                </option>
              </select>
            </div>
          </div>
          <div class="col-sm-1 wd5 padding-0">
            <p class="mL">Work Exp
            </p>
          </div>
          <div class="col-sm-4 padding-0 wdFilter">
            <div class="form-group">
              <select class="form-control" id="sel1">
                <option>Experienced
                </option>
                <option>Not experienced
                </option>
              </select>
            </div>
          </div>
          <div class="col-sm-1 wd5 padding-0">
            <p class="mL">Age
            </p>
          </div>
          <div class="col-sm-4 padding-0 wdFilter">
            <select class="form-control" id="sel1">
              <option>&ge; 36
              </option>
              <option>26 - 35
              </option>
              <option>20 - 25
              </option>
              <option>&lt; 20
              </option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-1 wd5 padding-0">
            <p>Score
            </p>
          </div>
          <div class="col-sm-4 padding-0 wdFilter">
            <div class="form-group">
              <select class="form-control" id="sel1">
                <option>>90
                </option>
                <option>>80
                </option>
                <option>>74
                </option>
              </select>
            </div>
          </div>
          <div class="col-sm-1 wd5 padding-0">
            <p class="mL">Coding
            </p>
          </div>
          <div class="col-sm-4 padding-0 wdFilter">
            <div class="form-group">
              <select class="form-control" id="sel1">
                <option>>90
                </option>
                <option>>80
                </option>
                <option>>74
                </option>
              </select>
            </div>
          </div>
          <div class="col-sm-1 wd5 padding-0">
            <p class="mL">Design
            </p>
          </div>
          <div class="col-sm-4 padding-0 wdFilter">
            <div class="form-group">
              <select class="form-control" id="sel1">
                <option>>90
                </option>
                <option>>80
                </option>
                <option>>74
                </option>
              </select>
            </div>
          </div>
          <div class="col-sm-1 wd5 padding-0">
            <p class="mL">Analytics
            </p>
          </div>
          <div class="col-sm-4 padding-0 wdFilter">
            <div class="form-group">
              <select class="form-control" id="sel1">
                <option>>90
                </option>
                <option>>80
                </option>
                <option>>74
                </option>
              </select>
            </div>
          </div>
          <div class="col-sm-1 wd5 padding-0">
            <p class="mL">QA
            </p>
          </div>
          <div class="col-sm-4 padding-0 wdFilter">
            <div class="form-group">
              <select class="form-control" id="sel1">
                <option>>90
                </option>
                <option>>80
                </option>
                <option>>74
                </option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
  <div class="candidateText"> 
    <span class="line">
      <h2>
        <span>CANDIDATE
        </span>
      </h2>
    </span>
  </div>
  <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="boxCandidate">
    <div class="boxImgcan">
      <!--Ambil image candidate-->
      <img src="images/pace.jpg" width="295px" height="300px">
    </div>
    <div class="infoCandidate">
      <div class="namecan">
        <!--Ambil nama candidate--> <?php echo e($m->full_name); ?>

      </div>
	  <?php
	  
			$education = App\Education::where("id_cv", "=", $m->id)->first();
			$work = App\Work::where("id_cv", "=", $m->id)->first();
	  ?>
	  <div class="padL">
	  <?php if($education): ?>
		Degree
        <span id="gelar" class="jawab">
		
          <!--Ambil gelar candidate--><?php echo e($education->grade); ?>

        </span>
        <br/>
        University
        <span id="kampus" class="jawab2">
          <!--Ambil gelar candidate--><?php echo e($education->name); ?>

        </span>
        <br/>
        Major
        <span id="jurusan" class="jawab3">
          <!--Ambil gelar candidate--><?php echo e($education->major); ?>

        </span>
        <br/>		
        GPA
        <span id="jipia" class="jawab4">
          <!--Ambil gelar candidate--><?php echo e($education->gpa); ?>

        </span>
	<?php endif; ?>
        <br/>
        TOEFL
        <span id="tupel" class="jawab5">
          <!--Ambil gelar candidate--><?php echo e($m->score); ?>

        </span>
        <br/>
	<?php if($work): ?>
        Work
        <span id="kerja" class="jawab6">
          <!--Ambil gelar candidate--><?php echo e($work->position); ?>

        </span>
	
        <br/>
        <br/>	
	<?php endif; ?>
        First Priority
        <span id="fp" class="jawab7">
          <!--Ambil gelar candidate--><?php echo e($m->first_position); ?>

        </span>
        <br/>		
        Second Priority
        <span id="sp" class="jawab8">
          <!--Ambil gelar candidate--><?php echo e($m->second_position); ?>

        </span>
        <br/>		
      </div>
      
    </div>
    <div class="btn-group btn-group-vertical" data-toggle="buttons">
      <label class="btn">
        <input type="checkbox" name='gotcha'>
        <i class="fa fa-square-o fa-2x">
        </i>
        <i class="fa fa-check-square-o fa-2x">
        </i> 
        <span> Passed
        </span>
      </label>
    </div>
    <button class="btn btn-warning btn-md" id="ditel" type="submit">
      <a href="#popup2">Detail
      </a>
    </button>
    <div id="popup2" class="overlays">
      <div class="popupsec">
        <div class="titleInter">Curiculum Vitae
        </div>
        <br/>
        <a class="close" href="#">&times;
        </a>
        <div class="content">
          <div class="boxcv">
            <div class="pimg">
              <!-- ambil profile image dari database-->
            </div>
            <div id="namacv">JOHN DOE 
              <!-- ambil nama dari database-->
            </div>
            <div id="pilar">
              <img src="images/pilar.jpg" width="1072px" height="6px">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="emailcv">
                      <i class="fa fa-envelope-o" aria-hidden="true">
                      </i> leviosa@gmail.com
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <div class="mobilecv">
                      <i class="fa fa-mobile" aria-hidden="true">
                      </i> 082122021915
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <div class="locationcv">
                      <i class="fa fa-map-marker" aria-hidden="true">
                      </i> Jakarta, Indonesia
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="allof">
              <div class="sectiongens">GENERAL INFORMATION
              </div>
              <div class="informatif1">
                Fullname 
                <span id="titikdua">:
                </span>  
                <!-- Ambil data dari db-->
                <br/>
                Identity Number 
                <span id="titikdua2">:
                </span> 
                <br/>
                Gender 
                <span id="titikdua3">:
                </span> 
                <br/>
                Blood Type 
                <span id="titikdua4">:
                </span> 
                <br/>
                Birth Place 
                <span id="titikdua5">:
                </span> 
                <br/>
                Birth Date 
                <span id="titikdua6">:
                </span> 
                <br/>
                Marriage Status 
                <span id="titikdua10">:
                </span> 
                <br/>
                Religion 
                <span id="titikdua7">:
                </span> 
                <br/>
                Nationality 
                <span id="titikdua8">:
                </span> 
                <br/>
                Address 
                <span id="titikdua9">:
                </span> 
                <br/>
              </div>
              <div class="sectiongens">LANGUAGE INFORMATION
              </div>
              <div class="informatif1">
                Toefl Type 
                <span id="titikdua11">:
                </span>  
                <!-- Ambil data dari db-->
                <br/>
                Score 
                <span id="titikdua12">:
                </span> 
                <br/>
                Institution 
                <span id="titikdua11">:
                </span> 
                <br/>
                Certificate 
                <span id="titikdua13">:
                </span> 
                <br/>
              </div>
              <div class="sectiongens">WORK INFORMATION
              </div>
              <div class="informatif1">
                Work Place 
                <span id="titikdua14">:
                </span>  
                <!-- Ambil data dari db-->
                <br/>
                Position 
                <span id="titikdua15">:
                </span> 
                <br/>
                Year In 
                <span id="titikdua16">:
                </span> 
                <br/>
                Year Out 
                <span id="titikdua17">:
                </span> 
                <br/>
              </div>
              <div class="rightcorner">
                <div class="sectiongens">EDUCATION INFORMATION
                </div>
                <div class="informatif1">
                  Grade 
                  <span id="titikdua18">:
                  </span>  
                  <!-- Ambil data dari db-->
                  <br/>
                  Institution City 
                  <span id="titikdua19">:
                  </span> 
                  <br/>
                  Institution Name 
                  <span id="titikdua20">:
                  </span> 
                  <br/>
                  Major 
                  <span id="titikdua21">:
                  </span> 
                  <br/>
                  Focused Major 
                  <span id="titikdua19">:
                  </span> 
                  <br/>
                  GPA 
                  <span id="titikdua23">:
                  </span> 
                  <br/>
                  GPA Transcript 
                  <span id="titikdua24">:
                  </span> 
                  <br/>
                  Diploma 
                  <span id="titikdua15">:
                  </span> 
                  <br/>
                </div>
              </div>
              <div class="rightcorner2">
                <div class="sectiongens">OTHER INFORMATION
                </div>
                <div class="informatif1">
                  First Priority 
                  <span id="titikdua26">:
                  </span>  
                  <!-- Ambil data dari db-->
                  <br/>
                  First Priority 
                  <span id="titikdua26">:
                  </span> 
                  <br/>
                  Portfolio 
                  <span id="titikdua">:
                  </span> 
                  <br/>
                  Expected Salary 
                  <span id="titikdua29">:
                  </span> 
                  <br/>
                </div>
              </div>
            </div>
          </div>	
        </div>
      </div>
    </div>
  </div>
  <button class="btn btn-success btn-lg" id="addcandidate" type="submit">Add Candidate
  </button>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>

	
	
	
<?php $__env->stopSection(); ?>









<?php echo $__env->make('layout.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>