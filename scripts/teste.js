const pLogin=document.querySelector("#login");
console.log(pLogin);
pLogin.addEventListener("click",function(e){
    e.preventDefault();
    const pSenha=document.querySelector("#senha");
    const pRA=document.querySelector("#ra");
    
    const valueR = pRA.value, valueS = pSenha.value;
    console.log(valueR);
    console.log(valueS);
})
const jsonData= require('arqJson/teste.json'); 
console.log(jsonData);
    function loadJSON(url, callback) { 	   
        let xobj = new XMLHttpRequest();      
       xobj.overrideMimeType('arqJson/teste.json'); 	
       xobj.open('GET', url, true); 	
       xobj.onreadystatechange = () => { 		
       if (xobj.readyState == 4 && xobj.status == '200') 
            callback(xobj.responseText); 	}; 
            xobj.send(null); }
    
    //Utilizando o método
    
   /* getJSON("arqJson/teste.json", function(err, data) {
      if (err !== null) {
        console.log('Ocorreu um erro' + err);
      } else {
        //Aqui você manipula os dados e pode percorrer e jogar no HTML 
        //da forma que achar mais adequada.
        console.log(data);
      }
    });*/
fetch("arqJson/teste.json")
  .then(response => response.json())
  .then(json => console.log(json));

    async function printJSON() {
        const response = await fetch("arqJson/teste.json");
        const json = await response.json();
        console.log(response.json());
    }

    
   