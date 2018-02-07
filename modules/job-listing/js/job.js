var header = document.getElementById('header');

window.addEventListener('scroll', function(e){
    console.log(document.documentElement.scrollTop);
    if (document.documentElement.scrollTop > 223){
        header.className = "header darken-header";
    }else if(document.documentElement.scrollTop < 223){
        header.className = "header";
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
var post = document.getElementById('position');
function position(element) {
    for (let i = 0; i < element.type.length; i++) {
      // film de type "Action" OU "Sci-Fi"
      if (element.type[i] == 'executive chef' || element.type[i] == 'sous chef') {
        return element;
      }
    }
  }
  