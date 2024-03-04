const keys = [];
Keys();
base();

function Keys(){
  keys[65]="A";
  keys[66]="B";
  keys[67]="C";
  keys[68]="D";
  keys[69]="E";
  keys[70]="F";
  keys[71]="G";
  keys[72]="H";
  keys[73]="I";
  keys[74]="J";
  keys[75]="K";
  keys[76]="L";
  keys[77]="M";
  keys[78]="N";
  keys[79]="O";
  keys[80]="P";
  keys[81]="Q";
  keys[82]="R";
  keys[83]="S";
  keys[84]="T";
  keys[85]="U";
  keys[86]="V";
  keys[87]="W";
  keys[88]="X";
  keys[89]="Y";
  keys[90]="Z";
}

function randomNumber(min, max) {
  return Math.floor(Math.random() * (max - min)) + min;
}

function base(){
  // Base
  ctx2.moveTo(basex, basey);
  ctx2.lineTo(basex*2, basey);
  ctx2.stroke();

  // Palo
  ctx2.lineWidth = baseS;
  ctx2.moveTo(basex*1.5, basey);
  ctx2.lineTo(basex*1.5, basey-150);
  
  ctx2.moveTo(basex*1.45, basey-150);
  ctx2.lineTo(basex*2.7, basey-150);
  ctx2.stroke();
  
  // Cuerda
  ctx2.lineWidth = baseS-2.5;
  ctx2.moveTo(basex*2.6, basey-120);
  ctx2.lineTo(basex*2.6, basey-150);
  ctx2.stroke();
}

function cuerpo(){
  ctx2.lineWidth = 1.5;

  // cabeza
  if(errores == 1){
    ctx2.beginPath();
    ctx2.arc(cabezaX, cabezaY, 15, 0, 2 * Math.PI);
    ctx2.stroke();
  }
    
    // cuerpo
  if(errores == 2){
    ctx2.moveTo(cabezaX, cabezaY+15);
    ctx2.lineTo(cabezaX, cabezaY+60);
    ctx2.stroke();
  }
    
    // Brazo Der
  if(errores == 3){
    ctx2.moveTo(cabezaX, cabezaY+15);
    ctx2.lineTo(cabezaX+25, cabezaY+50);
    ctx2.stroke();
  }
    
    // Brazo Izq
  if(errores == 4){
    ctx2.moveTo(cabezaX, cabezaY+15);
    ctx2.lineTo(cabezaX-25, cabezaY+50);
    ctx2.stroke();
  }
    
    // Pie Der
  if(errores == 5){
    ctx2.moveTo(cabezaX, cabezaY+60);
    ctx2.lineTo(cabezaX+10, cabezaY+90);
    ctx2.stroke();
    
  }
    // Pie Iqz
  if(errores == 6){
    ctx2.moveTo(cabezaX, cabezaY+60);
    ctx2.lineTo(cabezaX-10, cabezaY+90);
    ctx2.stroke();
  }
}

