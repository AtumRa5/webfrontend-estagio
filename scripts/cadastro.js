var cad = document.getElementById("cadastrar");
const pVoltar=document.querySelector("#voltar");

pVoltar.addEventListener("click",function(v){
    v.preventDefault();
    window.location.href = "login.php"; //Redireciona para a página login
})

/*
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
    //guardar os resultados no json
    if(valuesCRA!="" && valuesCRI!="" && valuesCO!="")//utilazar o json
    window.location.href = "index.html";//NÃO MEXER

})
*/