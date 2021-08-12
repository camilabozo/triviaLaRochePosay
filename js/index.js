var form                            = document.getElementById("form");
var affirmative_btn__question1      = document.getElementById("affirmative_btn__question1");
var negative_btn__question1         = document.getElementById("negative_btn__question1");
var affirmative_btn__question2      = document.getElementById("affirmative_btn__question2");
var negative_btn__question2         = document.getElementById("negative_btn__question2");
var affirmative_btn__question3      = document.getElementById("affirmative_btn__question3");
var negative_btn__question3         = document.getElementById("negative_btn__question3");
var finish_trivia_button__container = document.getElementById("finish_trivia_button__container");
var finishButton                    = document.getElementById("finish_trivia__button");
var startButton                     = document.getElementById("button__start");
var remainingQuestions = 3;
var correctAnswers = 0;
var startTime;
var endTime;

// RESPUESTAS CORRECTAS
negative_btn__question1.addEventListener("click", correctAnswer);
affirmative_btn__question2.addEventListener("click", correctAnswer);
affirmative_btn__question3.addEventListener("click", correctAnswer);

//RESPUESTAS INCORRECTAS
affirmative_btn__question1.addEventListener("click", incorrectAnswer);
negative_btn__question2.addEventListener("click", incorrectAnswer);
negative_btn__question3.addEventListener("click", incorrectAnswer);

startButton.addEventListener("click", saveCurrentDate);
finishButton.addEventListener("click", finishTrivia);
window.addEventListener("resize", relocateFinishButton);

$(document).ready(function(){
    $("#button__start").click(function(){
        if(validate()){
            $('.trivia_main__container').show(1000);
            $('#form_main__container').hide();
        }
    });
    
    $('#affirmative_btn__question1').click(function(){
        $('#first__question').replaceWith($('#first__answer').hide().fadeIn('slow'));
        $('.overlay1').toggle(1000);
        $('#first_question__result').html("¡INCORRECTO!");
        $('#first_question__icon').attr("src", "./assets/img/redbtn.png");
    });
    $('#negative_btn__question1').click(function(){
        $('#first__question').replaceWith($('#first__answer').hide().fadeIn('slow'));
        $('.overlay1').toggle(1000);
        $('#first_question__result').html("¡CORRECTO!");
        $('#first_question__icon').attr("src", "./assets/img/greenbtn.png");
    });

    $('#affirmative_btn__question2').click(function(){
        $('#second__question').replaceWith($('#second__answer').hide().fadeIn('slow'));
        $('.overlay2').toggle(1000);
        $('#second_question__result').html("¡CORRECTO!");
        $('#second_question__icon').attr("src", "./assets/img/greenbtn.png");
    });
    $('#negative_btn__question2').click(function(){
        $('#second__question').replaceWith($('#second__answer').hide().fadeIn('slow'));
        $('.overlay2').toggle(1000);
        $('#second_question__result').html("¡INCORRECTO!");
        $('#second_question__icon').attr("src", "./assets/img/redbtn.png");
    });

    $('#affirmative_btn__question3').click(function(){
        $('#third__question').replaceWith($('#third__answer').hide().fadeIn('slow'));
        $('#third_question__result').html("¡CORRECTO!");
        $('#third_question__icon').attr("src", "./assets/img/greenbtn.png");
    });

    $('#negative_btn__question3').click(function(){
        $('#third__question').replaceWith($('#third__answer').hide().fadeIn('slow'));
        $('#third_question__result').html("¡INCORRECTO!");
        $('#third_question__icon').attr("src", "./assets/img/redbtn.png");
    });
});

relocateFinishButton();

function validate(){
    let isValid = false;
    var userName = document.forms["form"]["userName"];
    //var userEmail = document.forms[form]["userEmail"];
    const errorMessage = document.getElementById('error__message');
    // input.willValidate = false;
    const max = 35;
    const pattern = new RegExp(/^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/g);
    
    if(!userName.value) {
        isValid = false;
    }else if(userName.value.length > max) {    
        isValid = false;
    }else if(!pattern.test(userName.value)){   
        // Si queremos agregar letras acentuadas y/o letra ñ debemos usar
        // codigos de Unicode (ejemplo: Ñ: \u00D1  ñ: \u00F1)
        isValid = false;
    }else{
        isValid = true;
    }

    if(!isValid) {
        userName.style.borderColor = 'red';
        errorMessage.hidden = false;
    }

    return isValid;
}

function correctAnswer(){
    correctAnswers++;
    remainingQuestions--;
    if(remainingQuestions == 0){
        enableFinishButton();
    }
}

function incorrectAnswer(){
    remainingQuestions--;
    if(remainingQuestions == 0){
        enableFinishButton();
    }
}

function saveCurrentDate(){
    startTime = new Date();
}

function relocateFinishButton(){
    if(window.matchMedia("(min-width: 980px)").matches){
        document.getElementById("main_title__container").appendChild(finish_trivia_button__container);
    }else{
        document.getElementById("trivia_main__container").appendChild(finish_trivia_button__container);
    }
}

function enableFinishButton(){
    finishButton.style.backgroundColor = "#46B7E8";
    finishButton.style.transform = "scale(1)";
    finishButton.style.animation = "pulseA 2s infinite";
    finishButton.style.cursor = "pointer";
    finishButton.disabled = false;
}

function finishTrivia(){
    var correctAnswersInput = document.createElement('input');
    correctAnswersInput.name = 'correct_answers';
    correctAnswersInput.type = 'hidden';
    correctAnswersInput.value = correctAnswers;    
    form.appendChild(correctAnswersInput);

    var employedTimeInput = document.createElement('input');
    employedTimeInput.name = 'employed_time';
    employedTimeInput.type = 'hidden';
    employedTimeInput.value = getElapsedTime();
    form.appendChild(employedTimeInput); 
    endTime = formatDate(endTime);

    var endTimeInput = document.createElement('input');
    endTimeInput.name = 'end_time';
    endTimeInput.type = 'hidden';
    endTimeInput.value = endTime;
    form.appendChild(endTimeInput);

    form.submit();
}

function formatDate(date){
    Number.prototype.padLeft = function(base,chr){
        var  len = (String(base || 10).length - String(this).length)+1;
        return len > 0? new Array(len).join(chr || '0')+this : this;
    }
    
    return [date.getHours().padLeft(),
            date.getMinutes().padLeft(),
            date.getSeconds().padLeft()].join(':'); //=> dateformat => 00:00:00
}

function getElapsedTime(){
    endTime = new Date();                                           // Registrar la hora de finalización
    var timeDiff =  endTime.getTime() - startTime.getTime();        // Calcular la diferencia de tiempo en milisegundos
    timeDiff = timeDiff / 1000;                                     // Convertir la diferencia de tiempo de milisegundos a segundos
    let seconds = Math.floor (timeDiff % 60);                       // Extrae los segundos enteros que no forman un minuto usando %
    let secondsAsString = seconds < 10 ? "0" + seconds : seconds;   // Rellena los segundos con un cero (si es necesario) y conviértelos en una cadena
    timeDiff = Math.floor (timeDiff / 60);                          // Convierta la diferencia de tiempo de segundos a minutos usando %
    let minutes = timeDiff % 60;                                    // Extract integer minutes that don't form an hour using %
    let minutesAsString = minutes < 10 ? "0" + minutes : minutes;   // Pad minutes with a zero (if necessary) and convert to string
    timeDiff = Math.floor(timeDiff / 60);                           // Convert time difference from minutes to hours
    let hours = timeDiff % 24;                                      // Extract integer hours that don't form a day using %
    timeDiff = Math.floor(timeDiff / 24);                           // Convert time difference from hours to days
    let days = timeDiff;                                            // The rest of timeDiff is number of days
    let totalHours = hours + (days * 24);                           // add days to hours
    let totalHoursAsString = totalHours < 10 ? "0" + totalHours : totalHours;

    if (totalHoursAsString === "00") {
        return minutesAsString + ":" + secondsAsString;
    } else {
        return totalHoursAsString + ":" + minutesAsString + ":" + secondsAsString;
    }
}