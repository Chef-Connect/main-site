var blogContentInput;
var blogTitleInput;
var imageNameInput;
var validateButton;
var myForm;

blogContentInput = document.getElementById('blog_content');
blogTitleInput = document.getElementById('blog_title');
imageNameInput = document.getElementById('image_name');
validateButton = document.getElementById('submit-button');
myForm = document.getElementById('myForm');



myForm.addEventListener('submit', function(e){

    if (blogTitleInput.value == ""){
        alert("attention c'est vide !");   
        e.preventDefault();
        exit;
    }
    if (imageNameInput.value == ""){
        alert("attention c'est vide !");   
        e.preventDefault();
        exit;
    }
    if (blogContentInput.value == ""){
        alert("attention c'est vide !");   
        e.preventDefault();
        exit;
    }
});