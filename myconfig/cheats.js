titulo = document.title;

document.write(/*html*/`
  <div class="iconosFlex"> 
    <table class="ch-${t_html}" onclick="loadHTML()"> <caption> HTML </caption> 
      <td><img src="${imgs_dir}HTML2.png"></td> </table>

    <table class="ch-${t_css}" onclick="loadCSS()">   <caption> CSS </caption> 
      <td><img src="${imgs_dir}CSS2.png"></td> </table>

    <table class="ch-${t_js}" onclick="loadJS()">     <caption> JS </caption> 
      <td><img src="${imgs_dir}JS2.png"></td> </table>

    <table class="ch-${t_php}" onclick="loadPHP()">   <caption> PHP </caption> 
      <td><img src="${imgs_dir}PHP2.png"></td> </table>
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

// Frameworks & Librerias de INDEX
if (titulo == "Index") {
  document.write(/*html*/`
    <div class="iconosFlex">
      <table class="ch-BS" onclick="loadBS()"> <caption> BtSp </caption> 
        <td><img src="${imgs_dir}bootstrap-icon.png"></td>
      </table>
    </div>
  `);
}