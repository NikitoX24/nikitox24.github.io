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
      
            
      .iconosFlex{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 150px;
      }
      .iconosFlex table{
        transition: all 200ms;
        /* filter: blur(1.5px); */
      }
      /* hover */
      .iconosFlex table:hover{
        filter: none;
        filter: drop-shadow(0 0 10px black);
        transform: scale(1.2);
        cursor: pointer; 
      }
      /* text icon */
      .iconosFlex table caption{
        caption-side: top;
        text-align: center;
        font-family: Georgia;
        font-size: 1.5em;
        font-weight: 900;
        text-transform: uppercase;
      }
      /* icon */
      .iconosFlex table td img{
        height: 85px;
      }
      .icoFramLibs{
        height: 80px;
        transform: scale(0.7);
        -webkit-transform: scale(0.7);
        -moz-transform: scale(0.7);
        -ms-transform: scale(0.7);
        -o-transform: scale(0.7);
      }
    </style>
  `
}