var waypoint = new Waypoint({
  element: document.getElementById('competences'),
  handler: function(direction) {
      
        var ctxthree = document.getElementById('progressbar-gra').getContext('2d');
        var althree = 0;
        var start = 4.72;
        var cw = ctxthree.canvas.width;
        var ch = ctxthree.canvas.height; 
        var diff;
        function progressSim(){
            diff = ((althree / 100) * Math.PI*2*10).toFixed(2);
            ctxthree.clearRect(0, 0, cw, ch);
            ctxthree.lineWidth = 10;
            ctxthree.fillStyle = '#A0A0A0';
            ctxthree.strokeStyle = "#7CC177";
            ctxthree.textAlign = 'center';
            ctxthree.fillText(althree+'%', cw*.5, ch*.5+2, cw);
            ctxthree.textBaseline = 'middle';
            ctxthree.font="35px Lato";
            ctxthree.beginPath();
            ctxthree.arc(91,99,82, start, diff/10+start, false);
            ctxthree.stroke();
            if(althree >= 65){
                clearTimeout(simthree);
                // Add scripting here that will run when progress completes
            }
            althree++;
        }
        var simthree = setInterval(progressSim, 20);
        
      this.destroy()
    }, offset: 300
});