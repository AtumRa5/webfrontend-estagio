
const box = document.querySelector(".box");
const pLogin=document.querySelector("#login");
const pCad=document.querySelector("#cad");

pCad.addEventListener("click",function(c){
  c.preventDefault();
  window.location.href = "cadastro.php"; //Redireciona para a página cadastro
})

/*
pLogin.addEventListener("click",function(e){
    e.preventDefault();
    
    const pSenha=document.querySelector("#senha");
    const pRA=document.querySelector("#ra");
    const valueR = pRA.value, valueS = pSenha.value;
    //procurar no php o json

    console.log(valueR);
    console.log(valueS);
    //Animação de erro
    const fields = [...document.querySelectorAll(".box input")];
    fields.forEach(field =>{
      if(field.value =="") box.classList.add("validate-error");
    });
    const formERROR = document.querySelector(".validate-error");
      if (formERROR) {
        formERROR.addEventListener("animationend",event => {
          if(event.animationName == "incorreto_tremer"){
            formERROR.classList.remove("validate-error")
          }
        });
        
      }else{
        box.classList.add("form-hide");
      }
    
    if(valueR!="" && valueS!=""){
      window.location.href = "index.html"; //Redireciona para página index caso a senha esteja correta
    }
})
*/


    
   