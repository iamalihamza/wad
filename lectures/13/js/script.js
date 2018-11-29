
var questions = [{
    question : "When a user views a page containing a JavaScript program, which machine actually executes the script?",
    choices : [ "The User's machine running a Web browser",
        "The Web server",
        "A central machine deep within Netscape's corporate offices",
        "None of the above"],
    correctAnswer : 0
},{
    question : "Which of the following can't be done with client-side JavaScript?",
    choices : [ "Validating a form",
        "Sending a form's contents by email",
        "Storing the form's contents to a database file on the server",
        "None of the above"],
    correctAnswer : 2
},{
    question : "Using _______ statement is how you test for a specific condition",
    choices : [ "select",
        "if",
        "for",
        "none of the above"],
    correctAnswer : 1
}];
var c=0;
var currentQuestion = 0;
var correctAnswers = 0;
var quizOver = false;
displayCurrentQuestion();
document.getElementById("quiz-message").style.display = 'none';
function displayNext()
{/*Write your code here */
    if(currentQuestion===2)
    {
        displayScore();
    }

    alert(correctAnswers);
    currentQuestion++;
   displayCurrentQuestion();


}

function displayCurrentQuestion() {
    /*Write your code here */

    var x = document.getElementById("question");
    x.innerText = questions[currentQuestion].question;
    var y = document.getElementById('choice-list');
    y.innerHTML = ' ';
    var i=0;
        y.innerHTML += '<li>' + '<input id="opt1" type="radio" name="checked" value="0">' + questions[currentQuestion].choices[i] + '</li>';
        i++;
        y.innerHTML += '<li>' + '<input id="opt2" type="radio" name="checked" value="1">' + questions[currentQuestion].choices[i] + '</li>';
        i++;
        y.innerHTML += '<li>' + '<input id="opt3" type="radio" name="checked" value="2">' + questions[currentQuestion].choices[i] + '</li>';
        i++;
        y.innerHTML += '<li>' + '<input id="opt4" type="radio" name="checked" value="3">' + questions[currentQuestion].choices[i] + '</li>';
    //var type = document.getElementsByName("radio");

    if(document.getElementById("opt1").checked)
     {
        if(questions[currentQuestion].correctAnswer === document.getElementById("opt1").value)
        {
            correctAnswers++;
        }

    }
    else if(document.getElementById("opt2").checked)
    {
        if(questions[currentQuestion].correctAnswer === document.getElementById("opt2").value)
        {
            correctAnswers++;
        }

    }
    else if(document.getElementById("opt3").checked)
    {
        if(questions[currentQuestion].correctAnswer === document.getElementById("opt3").value)
        {
            correctAnswers++;
        }
    }
    else if(document.getElementById("opt4").checked)
    {
        if(questions[currentQuestion].correctAnswer === document.getElementById("opt4").value)
        {
            correctAnswers++;
        }

    }
    else
    {
    }
}
function resetQuiz() {
    currentQuestion = 0;
    correctAnswers = 0;
    hideScore();
}
function displayScore() {
    document.getElementById("result").innerHTML = "you scored: " + correctAnswers + " out of: " + questions.length;
    document.getElementById("result").style.display = 'block';
}
function hideScore() {
    document.getElementById("result").style.display = 'none';
}