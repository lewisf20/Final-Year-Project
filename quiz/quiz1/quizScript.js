const beginBtn = document.getElementById('beginBtn')
const nextBtn = document.getElementById('nextBtn')
const questionCounter = document.getElementById('questionCounter')
const questionContainerElem = document.getElementById('questionContainer')
const questionElem = document.getElementById('question')
const answerButtonsElement = document.getElementById('answerButtons')
const questionsCorrect = document.getElementById('correctAnswers')

let qCount = 1;
let correctAns = 0;
let randomizeQuestions, indexThisQuestion



//start game when begin button is pressed
beginBtn.addEventListener('click', startGame)

//Go to next question if next button is pressed, increase index and question count
nextBtn.addEventListener('click', () => {
    indexThisQuestion++
    qCount++;

    setNextQuestion()
})


function startGame() {
    //Hide the begin button
    beginBtn.classList.add('hide')
    

    //Randomize the order of the questions
    randomizeQuestions = questions.sort(() => Math.random() - .5)

    //index of first question starts at 0
    indexThisQuestion = 0

    //Counter keeping track of which question the user is on, for display to the user
    questionCounter.innerText = 1;

    //Show the question container by removing the hide status
    questionContainerElem.classList.remove('hide')

    questionsCorrect.classList.add('hide')

    setNextQuestion()
}

function setNextQuestion() {
    //Reset the state to original colors - get rid of the green or red which shows for a right or wrong answer
    resetState()
    //Send the current question object to show question
    showQuestion(randomizeQuestions[indexThisQuestion])
    //Update the question count
    questionCounter.innerText = qCount;
    
    
}

function showQuestion(question) {
    //Show the question by getting the question property of the object
    questionElem.innerText = question.question
    //For each potential answer, map that to the buttons that the user can press
    question.answers.forEach(answer => {
        const button = document.createElement('button')
        button.innerText = answer.text
        button.classList.add('btn')
        //Remove the questionsCorrect element from displaying during the game
        questionsCorrect.innerText = "";
        
        //set one button to the correct answer
        if (answer.correct) {
            button.dataset.correct = answer.correct
            
        }
        button.addEventListener('click', selectAnswer)
        answerButtonsElement.appendChild(button)
    })
}

//Reset state of the game
function resetState() {
    clearStatusClass(document.body)
    nextBtn.classList.add('hide')
    while (answerButtonsElement.firstChild) {
        answerButtonsElement.removeChild(answerButtonsElement.firstChild)
    }
}

function selectAnswer(e) {
    const selectedButton = e.target
    const correct = selectedButton.dataset.correct
    //If user pressed the correct answer, increase correct count
    if(correct) correctAns++;
    //set status of class correct or not, from what user answered
    setStatusClass(document.body, correct)
    //Map to each button the status class
    Array.from(answerButtonsElement.children).forEach(button => {
        setStatusClass(button, button.dataset.correct)
    })
    //if amount of questions is bigger than current index plus 1, show the next button
    if (randomizeQuestions.length > indexThisQuestion + 1) {
        nextBtn.classList.remove('hide')
    } 
    //Else reset the game
    else {
        beginBtn.innerText = 'Back to learning';
        //Send back to last page when clicked
        beginBtn.setAttribute("href", "javascript:history.back()");
       
        questionsCorrect.innerText = "Correct Answers: " + correctAns + "/" + questions.length;
        questionsCorrect.classList.remove('hide');
        //Set value of questions correct to use in php
        questionsCorrect.setAttribute("value", correctAns);
        
        
        correctAns = 0;
        qCount = 1;
    }
}

//Sets the status class for whether answer was rightt or not - The status classes have different
//color codes - red for wrong - green for correct
function setStatusClass(element, correct) {
    clearStatusClass(element)
    if (correct) {
        element.classList.add('correct')
        
        
    } else {
        element.classList.add('wrong')
    }
}

//reset the status classes to their original state
function clearStatusClass(element) {
    element.classList.remove('correct')
    element.classList.remove('wrong')
}

//array of questions to ask the user
const questions = [
    {
        question: 'What does HTML stand for?',
        answers: [
            { text: 'HyperText Markup Linguistic', correct: false },
            { text: 'Hyper Marking Language', correct: false },
            { text: 'HyperText Marko Language', correct: false },
            { text: 'HyperText Markup Language', correct: true },
        ]
    },
    {
        question: 'What do markup languages consist of?',
        answers: [
            { text: 'Tags', correct: true },
            { text: 'Marks', correct: false }
        ]
    },
    {
        question: 'You can create a HTML file using notepad.',
        answers: [
            { text: 'False', correct: false },
            { text: 'True', correct: true }
        ]
    },
    {
        question: 'Tags are used to?',
        answers: [
            { text: 'Identify elements', correct: false },
            { text: 'Structure a webpage', correct: false },
            { text: 'Both', correct: true }
        ]
    },
    {
        question: 'The browser...',
        answers: [
            { text: 'displays content.', correct: true },
            { text: 'automatically marksup your content.', correct: false },
            { text: 'doesn\'t display content.', correct: false },
            
        ]
    },

]