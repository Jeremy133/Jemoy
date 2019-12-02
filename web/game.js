

// select all elements
const start = document.getElementById("start");
const quiz = document.getElementById("quiz");
const question = document.getElementById("question");
const qImg = document.getElementById("qImg");
const choiceA = document.getElementById("A");
const choiceB = document.getElementById("B");
const choiceC = document.getElementById("C");
const counter = document.getElementById("counter");
const timeGauge = document.getElementById("timeGauge");
const progress = document.getElementById("progress");
const scoreDiv = document.getElementById("scoreContainer");

// create our questions
var questions = [
 {
        question : "A Java keyword used to conduct a conditional test and execute a block of statements if the test evaluates to true.",
        imgSrc : "img/java.jpg",
        choiceA : "Int",
        choiceB : "If",
        choiceC : "Boolean",
        correct : "B"
    }, {
        question : "In a program, explanatory text that is ignored by the compiler. In programs written in the Java programming language, comments are delimited using // or /*... */.",
        imgSrc : "img/java.jpg",
        choiceA : "Comment",
        choiceB : "Default",
        choiceC : "Exception",
        correct : "A"
    },{
        question : "A C++ entity that is a sequence of statements. It has its own scope, accepts a set of argument values, and returns a value on completion.",
        imgSrc : "img/c++.jpg",
        choiceA : "Fundamental",
        choiceB : "Header File",
        choiceC : "Function",
        correct : "C"
    },{
        question : "Refers to the techniques involved in using graphics, along with a keyboard and a mouse, to provide an easy-to-use interface to some program.",
        imgSrc : "img/java.jpg",
        choiceA : "Hierarchy",
        choiceB : "GUI",
        choiceC : "Identifier",
        correct : "B"
    },{
        question : "The process by which a program written in some programming language is broken down into its syntactic elements.",
        imgSrc : "img/java.jpg",
        choiceA : "Parsing",
        choiceB : "Default",
        choiceC : "Exception",
        correct : "A"
    },{
        question : "A set of object files grouped together. A linker will search them repeatedly and use whatever object files are needed.",
        imgSrc : "img/c++.jpg",
        choiceA : "Library",
        choiceB : "Derived",
        choiceC : "Function",
        correct : "C"
    },{
        question : "An object that can be assigned to.",
        imgSrc : "img/java.jpg",
        choiceA : "Variable",
        choiceB : "GUI",
        choiceC : "Identifier",
        correct : "A"
    },{
        question : "A Java keyword used in method declarations to specify that the method does not return any value. void can also be used as a nonfunctional statement.",
        imgSrc : "img/java.jpg",
        choiceA : "Library",
        choiceB : "Native",
        choiceC : "Void",
        correct : "C"
    },{
        question : "C++ keyword used to declare an iteration statement.",
        imgSrc : "img/c++.jpg",
        choiceA : "Variable",
        choiceB : "While",
        choiceC : "Identifier",
        correct : "B"
    },{
        question : "Java sets aside words as keywords - these words are reserved by the language itself and therefore are not available as names for variables or methods.",
        imgSrc : "img/java.jpg",
        choiceA : "Lifetime",
        choiceB : "Linkage",
        choiceC : "Keyword",
        correct : "C"
    }

];
// create some variables

const lastQuestion = questions.length - 1;
let runningQuestion = Math.floor(Math.random()*(questions.length));
const questionTime = 15; // 10s
const gaugeWidth = 150; // 150px
const gaugeUnit = gaugeWidth / questionTime;
let count = 0;
let TIMER;
let score = 0;

var questionTracker = [];
var questionIdentifier = [];
 

// render a question
function renderQuestion(){
    let q = questions[runningQuestion];
    
    question.innerHTML = "<p>"+ q.question +"</p>";
    qImg.innerHTML = "<img src="+ q.imgSrc +">";
    choiceA.innerHTML = q.choiceA;
    choiceB.innerHTML = q.choiceB;
    choiceC.innerHTML = q.choiceC;

}

start.addEventListener("click",startQuiz);

// start quiz
function startQuiz(){
    questionTracker.push(runningQuestion);
    start.style.display = "none";
    renderQuestion();
    quiz.style.display = "block";
    renderProgress();
    renderCounter();
    TIMER = setInterval(renderCounter,1000); // 1000ms = 1s
}

// render progress
function renderProgress(){
    for(let qIndex = 0; qIndex <= lastQuestion; qIndex++){
        progress.innerHTML += "<div class='prog' id="+ qIndex +"></div>";
    }
}

// counter render

function renderCounter(){
    if(count <= questionTime){
        counter.innerHTML = count;
        timeGauge.style.width = count * gaugeUnit + "px";
        count++
    }else{
        count = 0;
        // change progress color to red
        answerIsWrong();
        if(runningQuestion < lastQuestion){
            runningQuestion++;
            renderQuestion();
        }else{
            // end the quiz and show the score
            clearInterval(TIMER);
            scoreRender();
        }
    }
}

// checkAnwer

function checkAnswer(answer){
    if( answer == questions[runningQuestion].correct){
        // answer is correct
        score++;
        // change progress color to green
        answerIsCorrect();
    }else{
        // answer is wrong
        // change progress color to red
        answerIsWrong();
    }
    count = 0;
      //=====================programmer start========================================================
        //=====================programmer start========================================================
    if(questionTracker.length - 1 < lastQuestion)
    {

    for (var i = 0; i < questions.length; i++) 
    {
    // Keep creating random numbers until the number is unique
    do 
    {
        runningQuestion = Math.floor(Math.random() * questions.length);
    } 
    while (QuestionChecker());


    }
        //==============================================
        renderQuestion();
        questionTracker.push(runningQuestion);
        questionIdentifier.push(runningQuestion);
    }
    //=====================programmer end========================================================
     //=====================programmer end======================================================== 
    else
    {
        // end the quiz and show the score
        clearInterval(TIMER);
        scoreRender();
    }
}
  //=====================programmer start========================================================
    //=====================programmer start========================================================
function QuestionChecker()
{   

 for (var i = 0; i < questionTracker.length; i++) {
    if (questionTracker[i] === runningQuestion) {
      return true;
    }
  }
  return false;

}
  //=====================programmer end========================================================
    //=====================programmer end========================================================

// answer is correct
function answerIsCorrect(){
    document.getElementById(questionIdentifier.length).style.backgroundColor = "#0f0";
}

// answer is Wrong
function answerIsWrong(){
    document.getElementById(questionIdentifier.length).style.backgroundColor = "#f00";
}

// score render
function scoreRender(){
    scoreDiv.style.display = "block";
    
    // calculate the amount of question percent answered by the user
    const scorePerCent = Math.round(100 * score/questions.length);
    
    // choose the image based on the scorePerCent
    let img = (scorePerCent >= 80) ? "img/5.png" :
              (scorePerCent >= 60) ? "img/4.png" :
              (scorePerCent >= 40) ? "img/3.png" :
              (scorePerCent >= 20) ? "img/2.png" :
              "img/1.png";
    
    scoreDiv.innerHTML = "<img src="+ img +">";
    scoreDiv.innerHTML += "<p>"+ scorePerCent +"%</p>";
}





















