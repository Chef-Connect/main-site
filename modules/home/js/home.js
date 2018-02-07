
var header = document.getElementById('header');

window.addEventListener('scroll', function(e){
    console.log(document.documentElement.scrollTop);
    if (document.documentElement.scrollTop > 577 && document.documentElement.scrollTop < 1162){
        header.className = "header darken-header";
    }else if(document.documentElement.scrollTop < 577){
        header.className = "header";
    }else if(document.documentElement.scrollTop < 2050 && document.documentElement.scrollTop > 1162){
        header.className = "header";
    }else{ 
        header.className = "header darken-header";   
    }

});

var burgerContainer = document.getElementById('burger-container');

burgerContainer.addEventListener('click', function (){
    console.log('je passe par la');
     if (burgerContainer.classList.contains('show-burger') == true){
         burgerContainer.classList.remove('show-burger');
     }else{
        burgerContainer.classList.add('show-burger');
     }

});

var mainExploreJobsBtn = document.getElementById('main-explore-jobs');

mainExploreJobsBtn.addEventListener('click', scrollToJobs);


function scrollToJobs(){

    // Vérifier quelle est la section visible
    var jobAdSection = document.getElementById('job-ad-section');
    window.scroll({
        top:jobAdSection.offsetTop,
        left:0,
        behavior:"smooth"
    });
}
