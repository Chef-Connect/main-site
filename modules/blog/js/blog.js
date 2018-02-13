var burgerContainer = document.getElementById('burger-container');

burgerContainer.addEventListener('click', function (){
    
     if (burgerContainer.classList.contains('show-burger') == true){
         burgerContainer.classList.remove('show-burger');
     }else{
        burgerContainer.classList.add('show-burger');
     }

});