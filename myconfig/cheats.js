// titulo de la pag
let titulo = document.title;

document.write(/*html*/`
  <div class="iconosFlex"> 
    <table class="ch-HTML" onclick="loadHTML()"> <caption> HTML </caption> 
      <td><img src="../Imgs/HTML2.png"></td> </table>

    <table class="ch-CSS" onclick="loadCSS()">   <caption> CSS </caption> 
      <td><img src="../Imgs/CSS2.png"></td> </table>

    <table class="ch-JS" onclick="loadJS()">     <caption> JS </caption> 
      <td><img src="../Imgs/JS2.png"></td> </table>

    <table class="ch-PHP" onclick="loadPHP()">   <caption> PHP </caption> 
      <td><img src="../Imgs/PHP2.png"></td> </table>
  </div>
  


  <style>
    /* section color */
    section {
      background-color: ${back_color};
      box-shadow: inset 0 40px 0 0 ${shadow1}, 4px 4px 15px 5px ${shadow2};
    }
    @media screen and (max-width: 767px){
      section { box-shadow: inset 0 27px 0 0 ${shadow1} !important; }
    }

    /* icon actual */
    .ch-${titulo}{
      filter: blur(0) grayscale(0) drop-shadow(0 0 10px black) !important;
      transform: scale(1.1);
    }
    
  </style>
`);