var header = document.getElementById('header');

window.addEventListener('scroll', function(e){
    

    if (document.documentElement.scrollTop > 210 && document.documentElement.scrollTop < 760){
        header.className = "header darken-header";
    }else if (document.documentElement.scrollTop > 1642 && document.documentElement.scrollTop < 1957){
        header.className = "header darken-header";
    }else{
        header.className = "header";
    }
});



var burgerContainer = document.getElementById('burger-container');

burgerContainer.addEventListener('click', function (){
    
     if (burgerContainer.classList.contains('show-burger') == true){
         burgerContainer.classList.remove('show-burger');
     }else{
        burgerContainer.classList.add('show-burger');
     }

});

var position = document.getElementById('position');
var salary = document.getElementById('salary');
var name = document.getElementById('name');
var businessName = document.getElementById('business-name');
var email = document.getElementById('email');
var phoneNumber = document.getElementById('phone-number');
var submit = document.getElementById('submit');
var noteContainer = document.getElementById('note-container');

submit.addEventListener('click', inputverify);

function inputverify(){


    if(position.value === ""){
        noteContainer.classList.add('show-warning');
    }else if(salary.value === ""){
        noteContainer.classList.add('show-warning');
    }else if(name.value === ""){
        noteContainer.classList.add('show-warning');
    }else if(businessName.value === ""){
        noteContainer.classList.add('show-warning');
    }else if(email.value === ""){
        noteContainer.classList.add('show-warning');
    }else if(phoneNumber.value === ""){
        noteContainer.classList.add('show-warning');
    }else{
        document.getElementById('myform').submit();
    }
}

    var submitBtn = document.getElementById('got-it');

    submitBtn.addEventListener('click', removePopup);

    function removePopup(){
        if (noteContainer.classList.contains('show-warning') == true){
            noteContainer.classList.remove('show-warning');
        }
    }


