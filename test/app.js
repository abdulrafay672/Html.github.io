const trigger=document.querySelector('#trigger');
const model_wrapper=document.querySelector('.model_wrapper');
const closebtn=document.querySelector('.close');

trigger.addEventListener('click',function(){{
   model_wrapper.classList.add('active')
}
});

closebtn.addEventListener('click',function(){{
   model_wrapper.classList.remove('active')
}
});
