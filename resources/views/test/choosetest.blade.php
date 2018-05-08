@extends('layout.template')



@section('isi')


  <!--End of logo and navigation-->
  <div class="contentfull">
    <div class="wow fadeInLeft animated" data-wow-delay=".5s">
      <div class="onlineKV2">
        <img src="images/Onlinetest_02.jpg" alt="" width="1366" height="294">
      </div>
    </div>
    
    <div class="wraps">
      <div class="wow fadeInUp animated" data-wow-delay=".5s">
        <div class="centertest">
          <div class="redBox">
            <p class="whiteFont pt20">DESIGN
            </p>
            <p class="whiteFont">TEST
            </p>
            <p class="whiteFont2 pt14">45 Minutes
            </p>
            <p class="whiteFont2">{{ $a }} Questions
            </p>
			<center> <form method="post" action="{{ Url('starttest') }}">
		  <input type="hidden" name="category" value="Design"/>
		 <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
          <button class="btn btn-success btn-lg" id="desStartxxxx" type="submit">START
          </button>
		  </form>
		  </center>
          </div>
         
        </div>
        <div class="centertest">
          <div class="redBox">
            <p class="whiteFont pt20">CODING
            </p>
            <p class="whiteFont">TEST
            </p>
            <p class="whiteFont2 pt14">45 Minutes
            </p>
            <p class="whiteFont2">{{ $b }} Questions
            </p>
          </div>
        <center>  <form method="post" action="{{ Url('starttest') }}">
		 <input type="hidden" name="category" value="Coding"/>
		 <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
          <button class="btn btn-success btn-lg" id="desStartxxx" type="submit">START
          </button>
		  </form></center>
        </div>
      </div>
      <div class="wow fadeInUp animated" data-wow-delay=".5s">
        <div class="centertest">
          <div class="redBox">
            <p class="whiteFont pt20">QUALITY ASSURANCE
            </p>
            <p class="whiteFont">TEST
            </p>
            <p class="whiteFont2 pt14">15 Minutes
            </p>
            <p class="whiteFont2">{{ $c }} Questions
            </p>
          </div>
         <center> <form method="post" action="{{ Url('starttest') }}">
		 <input type="hidden" name="category" value="QA"/>
		 <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
          <button class="btn btn-success btn-lg" id="desStartxx" type="submit">START
          </button>
		  </form></center>
        </div>
        <div class="centertest">
          <div class="redBox">
            <p class="whiteFont pt20">ANALYTIC
            </p>
            <p class="whiteFont">TEST
            </p>
            <p class="whiteFont2 pt14">15 Minutes
            </p>
            <p class="whiteFont2">{{ $d }} Questions
            </p>
          </div>
		 <center>  <form method="post" action="{{ Url('starttest') }}">
		  <input type="hidden" name="category" value="Analytic"/>
		 <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
          <button class="btn btn-success btn-lg" id="desStartx" type="submit">START
          </button>
		  </form></center>
        </div>
      </div>
     <!-- <button class="btn btn-success btn-lg" id="done" type="submit" disabled="disabled">DONE
      </button>-->
    </div>
@endsection
	