let button = document.querySelectorAll('.btn-card')
let card = document.querySelectorAll('.card')




card.forEach(( card,indexC)=>{
button.forEach((item, index)=>{

       item.addEventListener('click', ()=>{
         if(index === indexC){

            if(card.classList.contains('ativo')){
                card.classList.remove('ativo')
            }else{
                card.classList.add('ativo')
            }
         }
       })
    })
})

