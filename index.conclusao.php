<!DOCTYPE html>

<head>
  <script src="index.js"></script>
  <body>
    <br><br><br><br>
    <h1 id="olar1"></h1><br>
    <h1 id="olar2"></h1>
    <div id="divisa">
    
    </div>
    <br><br>
    <button onclick="continuar()">?</button>
      <h2 style="color:white;font-family:georgia;"id="nomes"></h2>
    
    <button id="sim" onclick="seguir()">>></button>
      
   
    <script>
       sim.style.display="none";
          const nomeexibir1=localStorage.getItem("nome");
        
     
    document.getElementById("olar1").innerHTML="olar  "+nomeexibir1;
    
        </script>
    
<script>

      function  continuar(){
   
       const nomes=document.getElementById("nomes");
      nomes.innerHTML="DESEJA CONTINUAR         " 
        +nomeexibir1+ "      ?";
        
        const sim=document.getElementById("sim");
        
        sim.style.display="";
     
      }
    </script>
    <script>
    
       function seguir(){
    
        window.location="index.pag2.html";
      


       }
    
    
    
    </script>


<style>
       body{
                text-align:center;
                background-color:black;
 
       }h1{
         color:white;
         font-family:georgia;
         font-size:30px;
             }button{
              width: 100px;
              height:100px;
              border:solid 2px red;
              border-radius:10%;
              font-size:65px;
              background-color:transparent;
              color:red;
              
       
        }button:hover{
              transition: all 3s;
              background-color:red; 
              color:black;
              border-color:red;
            }
</style>
    
  </body>
</head>