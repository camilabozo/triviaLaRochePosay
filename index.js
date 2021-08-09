// var boton = document.getElementById("button__enviar");
// var trivia = document.getElementById("trivia_main__container");
// var formulario = document.getElementById("form_main__container");


// // boton.addEventListener('click', ocultarElementos);

// function ocultarElementos(){
//     if(trivia.style.display === 'none'){
//         trivia.style.display = 'flex';
//         // formulario.style.display = 'none';
//     }else{
//         trivia.style.display = 'none';
//         console.log("tendria que funcionar");
//     }
// }

// var a;

// function ocultarElementos(){
//     if(a == 1){
//         document.querySelector("trivia_main__container").style.display = "flex";

//         return a = 0;
//     }else{
//         document.querySelector("trivia_main__container").style.display = "none";
//         return a = 1;
//     }
// }


// $(document).ready(function(){
//     $("#button__enviar").click(function(){
//         $("#trivia_main__container").show();
//     });
// });

var affirmative_btn__question1 = document.getElementById("affirmative_btn__question1");
var negative_btn__question1 = document.getElementById("negative_btn__question1");
var affirmative_btn__question2 = document.getElementById("affirmative_btn__question2");
var negative_btn__question2 = document.getElementById("negative_btn__question2");
var affirmative_btn__question3 = document.getElementById("affirmative_btn__question3");
var negative_btn__question3 = document.getElementById("negative_btn__question3");
var form = document.getElementById("form");
var correctAnswers = 0;
var answeredQuestions = 3;

// RESPUESTAS CORRECTAS
negative_btn__question1.addEventListener("click", affirmativeAnswer);
affirmative_btn__question2.addEventListener("click", affirmativeAnswer);
affirmative_btn__question3.addEventListener("click", affirmativeAnswer);

//RESPUESTAS INCORRECTAS
affirmative_btn__question1.addEventListener("click", negativeAnswer);
negative_btn__question2.addEventListener("click", negativeAnswer);
negative_btn__question3.addEventListener("click", negativeAnswer);

function submitForm(){
    var correctAnswersInput = document.createElement('input');
    correctAnswersInput.name = 'correct_answers';
    correctAnswersInput.type = 'hidden';
    correctAnswersInput.value = correctAnswers;    
    form.appendChild(correctAnswersInput); 
    form.submit();
    console.log(correctAnswersInput);
}

function affirmativeAnswer(){
    correctAnswers++;
    console.log("Se contestó correctamente. Respuestas correctas hasta el momento: " + correctAnswers);
    answeredQuestions--;
    if(triviaIsFinished()){
        submitForm();
    }
}

function negativeAnswer(){
    console.log("Se contestó incorrectamente. Respuestas correctas hasta el momento: " + correctAnswers);
    answeredQuestions--;
    if(triviaIsFinished()){
        submitForm();
    }
}

function triviaIsFinished(){
    return answeredQuestions == 0;
}

$(document).ready(function(){
    $("#button__enviar").click(function(){
        $('.trivia_main__container').show(1000);
        $('#form_main__container').hide();
    });
});