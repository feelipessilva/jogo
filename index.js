function verificar(){
    const nome=document.getElementById("nome").value;
    
    if(nome.toLowerCase()!==""){
        
        localStorage.setItem("nome",nome);
        
        window.location="index.conclusao.php";
    }  
       
}