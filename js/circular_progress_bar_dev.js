var ctxtwo = document.getElementById('progressbar-dev').getContext('2d');
var altwo = 0;
var start = 4.72;
var cw = ctxtwo.canvas.width;
var ch = ctxtwo.canvas.height; 
var diff;
function progressSim(){
    diff = ((altwo / 100) * Math.PI*2*10).toFixed(2);
    ctxtwo.clearRect(0, 0, cw, ch);
    ctxtwo.lineWidth = 10;
    ctxtwo.fillStyle = '#A0A0A0';
    ctxtwo.strokeStyle = "#4BB4EA";
    ctxtwo.textAlign = 'center';
    ctxtwo.fillText(altwo+'%', cw*.5, ch*.5+2, cw);
    ctxtwo.textBaseline = 'middle';
    ctxtwo.font="35px Lato";
    ctxtwo.beginPath();
    ctxtwo.arc(91,99,82, start, diff/10+start, false);
    ctxtwo.stroke();
    if(altwo >= 35){
        clearTimeout(simtwo);
        // Add scripting here that will run when progress completes
    }
    altwo++;
}
var simtwo = setInterval(progressSim, 20);