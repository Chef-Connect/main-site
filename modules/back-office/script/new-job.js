var descriptionInput;
var validateButton;
var myForm;

descriptionInput = document.getElementById('description');
responsabilitiesInput = document.getElementById('responsabilities');
requirementsInput = document.getElementById('requirements');
durationInput = document.getElementById('duration');
locationInput = document.getElementById('location');
positionInput = document.getElementById('position');
salaryInput = document.getElementById('salary');
employer_nameInput = document.getElementById('employer_name');
image_nameInput = document.getElementById('image_name');
validateButton = document.getElementById('submit-button');
myForm = document.getElementById('myForm');



myForm.addEventListener('submit', function(e){
    
    if (descriptionInput.value == ""){
        alert("attention c'est vide !");   
        e.preventDefault();
        exit;
    }
    if (responsabilitiesInput.value == ""){
        alert("attention c'est vide !");   
        e.preventDefault();
        exit;
    }
    if (requirementsInput.value == ""){
        alert("attention c'est vide !");   
        e.preventDefault();
        exit;
    }
    if (durationInput.value == ""){
        alert("attention c'est vide !");   
        e.preventDefault();
        exit;
    }
    if (locationInput.value == ""){
        alert("attention c'est vide !");   
        e.preventDefault();
        exit;
    }
    if (positionInput.value == ""){
        alert("attention c'est vide !");   
        e.preventDefault();
        exit;
    }  
    if (salaryInput.value == ""){
        alert("attention c'est vide !");   
        e.preventDefault();
        exit;
    }  
    if (employer_nameInput.value == ""){
        alert("attention c'est vide !");   
        e.preventDefault();
        exit;
    }  
    if (image_nameInput.value == ""){
        alert("attention c'est vide !");   
        e.preventDefault();
        exit;
    }  
});



