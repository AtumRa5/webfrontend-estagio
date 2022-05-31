import 'scripts/require.js';

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
const jsonData= require('arqJson/user.json'); 
console.log(jsonData);
    function loadJSON(url, callback) { 	   
        let xobj = new XMLHttpRequest();      
       xobj.overrideMimeType('arqJson/user.json'); 	
       xobj.open('GET', url, true); 	
       xobj.onreadystatechange = () => { 		
       if (xobj.readyState == 4 && xobj.status == '200') 
            callback(xobj.responseText); 	}; 
            xobj.send(null); }
    
    //Utilizando o método
    
   /* getJSON("arqJson/user.json", function(err, data) {
      if (err !== null) {
        console.log('Ocorreu um erro' + err);
      } else {
        //Aqui você manipula os dados e pode percorrer e jogar no HTML 
        //da forma que achar mais adequada.
        console.log(data);
      }
    });*/
fetch("arqJson/user.json")
  .then(response => response.json())
  .then(json => console.log(json));

    async function printJSON() {
        const response = await fetch("arqJson/user.json");
        const json = await response.json();
        console.log(response.json());
    }

    
   