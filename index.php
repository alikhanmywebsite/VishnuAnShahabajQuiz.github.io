

<html>
<head>
<title>Quiz</title>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab" rel="stylesheet">
<link href="quiz.css" rel="stylesheet">

</head>
<body>

<div id="quizContainer" class="container">
<div class="title">Core Java Quiz Test</div>
<div id="question" class="question"></div>
<label class="option"><input type="radio" name="option" value="1"/><span id="opt1"></span></label>
<label class="option"><input type="radio" name="option" value="2"/><span id="opt2"></span></label>
<label class="option"><input type="radio" name="option" value="3"/><span id="opt3"></span></label>  
<label class="option"><input type="radio" name="option" value="4"/><span id="opt4"></span></label>
<button id="nextButton" class="next-btn" onclick="loadNextQuestion();">Next Question<button> 
</div>
<div id="result" class="container result" style="display:none;" >
</div>
<script src="question.js"></script>
<script src="quize-script.js"></script>
</body>
</html>