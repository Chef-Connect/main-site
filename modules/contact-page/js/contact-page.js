var burgerContainer = document.getElementById('burger-container');

burgerContainer.addEventListener('click', function (){
    console.log('je passe par la');
     if (burgerContainer.classList.contains('show-burger') == true){
         burgerContainer.classList.remove('show-burger');
     }else{
        burgerContainer.classList.add('show-burger');
     }

});

var name = document.getElementById('name');
var email = document.getElementById('email');
var phoneNumber = document.getElementById('phone-number');
var subject = document.getElementById('subject');
var submit = document.getElementById('submit');
var noteContainer = document.getElementById('note-container');

submit.addEventListener('click', inputverify);

function inputverify(){


    if(name.value === ""){
        noteContainer.classList.add('show-warning');
    }else if(email.value === ""){
        noteContainer.classList.add('show-warning');
    }else if(phoneNumber.value === ""){
        noteContainer.classList.add('show-warning');
    }else if(subject.value === ""){
        noteContainer.classList.add('show-warning');
    }else{
        document.getElementById("myform").submit();
    }
}

    var submitBtn = document.getElementById('got-it');

    submitBtn.addEventListener('click', removePopup);

    function removePopup(){
        if (noteContainer.classList.contains('show-warning') == true){
            noteContainer.classList.remove('show-warning');
        }
    }
