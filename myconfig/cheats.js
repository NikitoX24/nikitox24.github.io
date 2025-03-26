titulo = document.title;

export default function cheats(){

  // Frameworks & Librerías de INDEX
  function frameLibs(){
    let elementos = [];

    if (titulo == t_index || titulo == t_css || titulo == t_bs) {
      elementos.push( /*html*/`
        <a href="${bs_dir}">
          <table class="ch-${t_bs}" > <caption> BtSp </caption>
            <td><img src="${imgs_dir}bootstrap-icon.png"></td> 
          </table>
        </a>
      `);
    }
    if (titulo == t_index || titulo == t_js || titulo == t_php || titulo == t_sql) {
      elementos.push( /*html*/`
        <a href="${sql_dir}">
          <table class="ch-${t_sql}" > <caption> MySQL </caption>
            <td><img src="${imgs_dir}sql.png"></td> 
          </table>
        </a>
      `);
    }
    
    const div = /*html*/`
      <div class="iconosFlex icoFramLibs">
        ${elementos.join(" ")}
      </div>
    `;

    return elementos.length > 0 ? div : "";
  }
  return /*html*/`
    <div class="iconosFlex">
      <a href="${html_dir}">
        <table class="ch-${t_html}" > <caption> HTML </caption>
            <td><img src="${imgs_dir}html2.png"></td> 
        </table>
      </a>
      <a href="${css_dir}">
        <table class="ch-${t_css}" > <caption> CSS </caption>
            <td><img src="${imgs_dir}css2.png"></td> 
        </table>
      </a>
      <a href="${js_dir}">
        <table class="ch-${t_js}" > <caption> JS </caption>
            <td><img src="${imgs_dir}js2.png"></td> 
        </table>
      </a>
      <a href="${php_dir}">
        <table class="ch-${t_php}" > <caption> PHP </caption>
            <td><img src="${imgs_dir}php2.png"></td> 
        </table>
      </a>

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
      .iconosFlex a {
        color: inherit;
        text-decoration: none;
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
      caption {
        color: inherit;
      }
    </style>
  `
}