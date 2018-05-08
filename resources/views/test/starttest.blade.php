@extends('layout.template')



@section('isi')

	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular-sanitize.min.js"></script>


<div class="contentArea">
<div class="wow fadeInLeft animated" data-wow-delay=".5s">
    <div class="banner">
		@if($category == 'Coding')
			<div class="bans"><img src="images/codBanner.jpg"></div>
		@elseif($category == 'Design')
			<div class="bans"><img src="images/desBanner.jpg"></div>
		@elseif($category == 'QA')
			<div class="bans"><img src="images/qaBanner.jpg"></div>
		@elseif($category == 'Analytic')
			<div class="bans"><img src="images/anaBanner.jpg"></div>
		@endif
    </div>
</div>
<div class="timer"> 45:00 </div>
<section ng-app="ngQuiz" ng-controller="ngQuizController" class="quiz">
    <div class="progress" ng-if="quizProgress.inProgress && quizProgress.currentQuestion <= quizProgress.lastQuestion">
      <span ng-cloak class="counter">Question 1 of {{ $count }}</span>
      <div class="progress-bar" progress-bar></div>
    </div>
    <div class="content">
      
	  <!-- intro -->
      <section ng-cloak class="intro fade-in" ng-if="!quizProgress.loading && !quizProgress.inProgress && !quizProgress.finished">
        <div ng-cloak class="row">
          <div class="col-xs-6">
            <h1>@{{::quizMetadata.title}}</h1>
            <p>@{{::quizMetadata.intro}}</p>
          </div>
        </div>
        <div class="nextButton">
			  <button class="btn btn-success btn-lg btn-block" ng-click="startQuiz()" type="submit" >START</button>
		</div>
      </section>
	  
	  
      <!-- question list -->
      <section ng-cloak class="fade-in question" ng-if="quizProgress.inProgress && quizProgress.currentQuestion <= quizProgress.lastQuestion">
        <div animate-progression>
          <p class="question-content">@{{quizQuestions[quizProgress.currentQuestion].question}}</p>
          <div class="question-options">
            <div ng-repeat="option in quizQuestions[quizProgress.currentQuestion].options | orderBy: '-'">
              <div class="option" ng-class="{'wrong': quizQuestions[quizProgress.currentQuestion].answerChecked && option.selected && !option.correct, 'correct': option.correct && quizQuestions[quizProgress.currentQuestion].answerChecked, 'dim': quizQuestions[quizProgress.currentQuestion].answerChecked}">
                <input type="radio" name="option" id="@{{$index}}" ng-click="answerQuestion({selected: option.name})" ng-disabled="quizQuestions[quizProgress.currentQuestion].answerChecked">
                <label for="@{{$index}}">@{{option.name}}</label>
              </div>
              <div class="row feedback" ng-if="quizQuestions[quizProgress.currentQuestion].answerChecked && option.correct">
                <span ng-bind-html="quizQuestions[quizProgress.currentQuestion].feedback"></span>
              </div>
            </div>
          </div>

          <div class="row">
            <button ng-if="quizProgress.currentQuestion === -1" class="btn btn-primary" ng-click="startQuiz()">Start Quiz</button>
            <button ng-if="quizQuestions[quizProgress.currentQuestion].answerChecked && quizProgress.currentQuestionFriendly !== quizProgress.lastQuestion" class="btn btn-primary pull-right" ng-click="nextQuestion()">NEXT Question</button>
            <button ng-if="!quizQuestions[quizProgress.currentQuestion].answerChecked" ng-disabled="!quizQuestions[quizProgress.currentQuestion].answered" class="btn btn-primary pull-right" ng-click="checkAnswer()">Check Answer</button>
          </div>
        </div>

        <div class="get-my-results text-center" ng-if="quizProgress.currentQuestionFriendly === quizProgress.lastQuestion && quizQuestions[quizProgress.currentQuestion].answerChecked">
          <button class="btn btn-primary" ng-click="getScore()">DONE</button>
        </div>
      </section>

      <section class="loading" ng-if="quizProgress.loading || quizProgress.calculatingScore">
        <div class="loader"></div>
      </section>

      <section class="fade-in" ng-if="!quizProgress.calculatingScore && !quizProgress.inProgress && quizProgress.currentQuestionFriendly === quizProgress.lastQuestion">
        <div class="results">
          <div class="text-center">
            <h1>Your Score</h1>
            <h2 id="score">@{{score}}</h2>
			
          </div>
        </div>
      </section>
  </section>
	
</div>



<script>

angular.module('ngQuiz', ['ngSanitize'])

.controller('ngQuizController', function($scope, $timeout, quizProgress, scoreKeeper) {
  $scope.quizProgress = quizProgress;

  $scope.quizData = {
    "quizMetadata": {
      "title": "{{$category}} Test",
      "intro": "You have 45 minutes to complete this test. It contains {{$count}} questions. Good Luck!",
    },
	
	
	
    "quizQuestions": [
	@foreach($a as $aa)
	{
      "question": "{{ $aa->question }}",
      "feedback": "{{ $aa->feedback }} ",
      "options": [{
        "name": "{{ $aa->answer_a }}",
        "correct": @if($aa->answer == 'a') true @else false @endif
      }, {
        "name": "{{ $aa->answer_b }}",
        "correct": @if($aa->answer == 'b') true @else false @endif
      }, {
        "name": "{{ $aa->answer_c }}",
        "correct": @if($aa->answer == 'c') true @else false @endif
      }, {
        "name": "{{ $aa->answer_d }}",
        "correct": @if($aa->answer == 'd') true @else false @endif
      }]
    },
	@endforeach
	]
  };

  $scope.quizQuestions = $scope.quizData.quizQuestions;
  $scope.quizMetadata = $scope.quizData.quizMetadata;
  quizProgress.lastQuestion = $scope.quizQuestions.length;
  
  quizProgress.loading = false;

  $scope.startQuiz = function() {
    quizProgress.inProgress = true;
    quizProgress.currentQuestion = 0;
    quizProgress.imageToPreload = 1;
  };

  $scope.nextQuestion = function() {
    if (quizProgress.currentQuestion < quizProgress.lastQuestion) {
      quizProgress.currentQuestion = quizProgress.currentQuestion + 1;
      quizProgress.currentQuestionFriendly = quizProgress.currentQuestionFriendly + 1;
      quizProgress.imageToPreload = quizProgress.imageToPreload + 1;
    }
  };

  $scope.answerQuestion = function(data) {
    $scope.quizQuestions[quizProgress.currentQuestion].answered = true;
    angular.forEach($scope.quizQuestions[quizProgress.currentQuestion].options, function(obj) {
      if (obj.name === data.selected) {
        obj.selected = true;
      } else {
        obj.selected = false;
      }
    });
  };

  $scope.checkAnswer = function() {
    $scope.quizQuestions[quizProgress.currentQuestion].answerChecked = true;

    angular.forEach($scope.quizQuestions[quizProgress.currentQuestion].options, function(obj) {
      if (obj.selected) {
        if (obj.correct) {
          $scope.quizQuestions[quizProgress.currentQuestion].answerWasRight = true;
        } else {
          $scope.quizQuestions[quizProgress.currentQuestion].answerWasRight = false;
        }
      }
    });
  };

  $scope.getScore = function() {
    quizProgress.inProgress = false;
    quizProgress.finished = true;
    quizProgress.calculatingScore = true;
    $scope.score = scoreKeeper.calculateScore($scope.quizQuestions);

    $timeout(function() {
	  $.ajax({
			url : '{{ Url("/dosaveresult") }}',
		    type : 'POST',
		    dataType: "json",
			data:{
				'_token':'{{ csrf_token() }}',
				'category':'{{ $category }}',
				'score':$scope.score,
			},
			success:function()
			{
				location.href="{{ Url('/choosetest') }}";
			}
			
	  });
      quizProgress.calculatingScore = false;
    }, 1500);
  };

  $scope.startOver = function() {
    angular.forEach($scope.quizQuestions, function(obj) {
      obj.answered = false;
      obj.answerWasRight = false;
      obj.answerChecked = false;

      angular.forEach(obj.options, function(option) {
        option.selected = false;
      });
    });

    quizProgress.inProgress = true;
    quizProgress.finished = false;
    quizProgress.currentQuestion = 0;
    quizProgress.currentQuestionFriendly = 1;
  };
})

.factory('quizProgress', function() {
  return {
    currentQuestion: 0,
    imageToPreload: 0,
    currentQuestionFriendly: 1,
    lastQuestion: 0,
    loading: true,
    inProgress: false,
    finished: false,
    calculatingScore: false
  };
})

.service('scoreKeeper', function() {
  this.calculateScore = function(quizQuestions) {
    var rightAnswers = 0;
    angular.forEach(quizQuestions, function(obj) {
      if (obj.answerWasRight) {
        rightAnswers += 1;
      }
    });

    return ((rightAnswers / quizQuestions.length) * 100).toFixed() + '%';
  };
})

.directive('progressBar', function(quizProgress) {
  return {
    restrict: 'A',
    link: function(scope, element, attrs) {
      scope.$watch('quizProgress', function(newVal, oldVal) {
        if (newVal) {
          element.css('width', ((quizProgress.currentQuestionFriendly / quizProgress.lastQuestion) * 100 + '%'));
        }
      }, true);
    }
  };
})


.directive('animateProgression', function(quizProgress, $timeout) {
  return {
    restrict: 'A',
    link: function(scope, element, attrs) {
      scope.$watch('quizProgress.currentQuestion', function(newVal, oldVal) {
        if (newVal) {
          element.addClass('question-animate');
          $timeout(function() {
            element.removeClass('question-animate');
          }, 1500);
        }
      });
    }
  };
});

</script>
@endsection