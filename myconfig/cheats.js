titulo = document.title;

export default function cheats(){

  // Frameworks & Librerias de INDEX
  function frameLibs(){
    if (titulo == t_index || titulo == t_css) {
      return( /*html*/`
        <div class="iconosFlex icoFramLibs">
          <table class="ch-${t_bs}" onclick="loadBS()"> <caption> BtSp </caption>
            <td><img src="${imgs_dir}bootstrap-icon.png"></td>
          </table>
        </div>
      `);
    }
    else return ""
  }
  return /*html*/`
    <div class="iconosFlex"> 
      <table class="ch-${t_html}" onclick="loadHTML()"> <caption> HTML </caption> 
        <td><img src="${imgs_dir}html2.png"></td> </table>

      <table class="ch-${t_css}" onclick="loadCSS()">   <caption> CSS </caption> 
        <td><img src="${imgs_dir}css2.png"></td> </table>

      <table class="ch-${t_js}" onclick="loadJS()">     <caption> JS </caption> 
        <td><img src="${imgs_dir}js2.png"></td> </table>

      <table class="ch-${t_php}" onclick="loadPHP()">   <caption> PHP </caption> 
        <td><img src="${imgs_dir}php2.png"></td> </table>

    </div>
    
    ${frameLibs()}

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
        cursor: default !important;
        filter: blur(0) grayscale(0) drop-shadow(0 0 10px black) !important;
        animation: iconAnim 2s infinite linear;
      }
      @keyframes iconAnim {
        0% { transform: scale(1); }
        50% { transform: scale(1.1); }
        100% { transform: scale(1); }  
      }
    </style>
  `
}