var burgerContainer = document.getElementById('burger-container');

burgerContainer.addEventListener('click', function (){
    console.log('je passe par la');
     if (burgerContainer.classList.contains('show-burger') == true){
         burgerContainer.classList.remove('show-burger');
     }else{
        burgerContainer.classList.add('show-burger');
     }

});

var resume = document.getElementById('resume');
var cover = document.getElementById('cover');
var boxCover = document.getElementById('box-cover');
var boxResume = document.getElementById('box-resume');
var warningText = document.getElementById('warning-text');

resume.addEventListener('change', putOKresume);
cover.addEventListener('change', putOKcover);

function putOKresume(){

    if(resume.value !== ''){

        // Verify file type
        var filetype = resume.value.substr(-4); 

        if(filetype !== "docx" && filetype !== ".pdf"){
            noteContainer.classList.add('show-warning');
            warningText.innerText="you need pdf or word document";
            
        }else if(resume.files.item(0).size > 2000000){
            noteContainer.classList.add('show-warning');
            warningText.innerText="le fichier doit être inférieur à 2MO";
            
        }else if(boxResume.classList.contains('show-status') == true){
            boxResume.classList.remove('show-status');
        }else{
            boxResume.classList.add('show-status');
        }
    }else{

        if(boxResume.classList.contains('show-status') == true){
            boxResume.classList.remove('show-status');
        }
    }

}
function putOKcover(){
    
    if(cover.value!== ''){

        var fileTypes = cover.value.substr(-4); 
        if(fileTypes !== ".pdf" && fileTypes !== "docx"){
            noteContainer.classList.add('show-warning');
            warningText.innerText = "you need pdf or word document";
            boxCover.classList.remove('show-status');
        }else if(cover.files.item(0).size > 2000000){
            noteContainer.classList.add('show-warning');
            warningText.innerText="le fichier doit être inférieur à 2MO";
            boxCover.classList.remove('show-status');
        }else if(boxCover.classList.contains('show-status') == true){
            boxCover.classList.remove('show-status');
        }else{
            boxCover.classList.add('show-status');
        }
    
    }else{
        if(boxCover.classList.contains('show-status') == true){
            boxCover.classList.remove('show-status');
        }
    }




}
var name = document.getElementById('name');
var nationality = document.getElementById('nationality');
var australiaRights = document.getElementById('Working-rights');
var date = document.getElementById('Start-date');
var email = document.getElementById('email');
var phoneNumber = document.getElementById('phone-number');
var submit = document.getElementById('submit');
var noteContainer = document.getElementById('note-container');
var resume = document.getElementById('resume');

submit.addEventListener('click', inputverify);

function inputverify(){
    
    if(name.value === ""){
        noteContainer.classList.add('show-warning');
        warningText.innerText="you need to fill in all the sections";
    }else if(nationality.value === ""){
        noteContainer.classList.add('show-warning');
        warningText.innerText="you need to fill in all the sections";
    }else if(australiaRights.value === ""){
        noteContainer.classList.add('show-warning');
        warningText.innerText="you need to fill in all the sections";
    }else if(date.value === ""){
        noteContainer.classList.add('show-warning');
        warningText.innerText="you need to fill in all the sections";
    }else if(email.value === ""){
        noteContainer.classList.add('show-warning');
        warningText.innerText="you need to fill in all the sections";
    }else if(phoneNumber.value === ""){
        noteContainer.classList.add('show-warning');
        warningText.innerText="you need to fill in all the sections";
    }else if(resume.value === ""){
        noteContainer.classList.add('show-warning');
        warningText.innerText="you need to fill in all the sections";
    }else{
        document.getElementById("myForm").submit();
    }
}

    var submitBtn = document.getElementById('got-it');

    submitBtn.addEventListener('click', removePopup);

    function removePopup(){
        if (noteContainer.classList.contains('show-warning') == true){
            noteContainer.classList.remove('show-warning');
        }
    }
