var cad = document.getElementById("cadastrar");

console.log(cad);
cad.addEventListener("click",function(c){
    c.preventDefault();
    const cRa = document.querySelector("#ra");
    const criSenha = document.querySelector("#criarsenha");
    const cofSenha = document.querySelector("#confirmarsenha");
    const valuesCRA = cRa.value , valuesCRI = criSenha.value , valuesCO = cofSenha.value;
    console.log(valuesCRA);
    console.log(valuesCRI);
    console.log(valuesCO);
    

})