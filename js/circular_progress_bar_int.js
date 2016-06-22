var waypoint = new Waypoint({
  element: document.getElementById('competences'),
  handler: function(direction) {
      
        var ctx = document.getElementById('progressbar-int').getContext('2d');
        var al = 0;
        var start = 4.72;
        var cw = ctx.canvas.width;
        var ch = ctx.canvas.height; 
        var diff;
        function progressSim(){
            diff = ((al / 100) * Math.PI*2*10).toFixed(2);
            ctx.clearRect(0, 0, cw, ch);
            ctx.lineWidth = 10;
            ctx.fillStyle = '#A0A0A0';
            ctx.strokeStyle = "#F5AD12";
            ctx.textAlign = 'center';
            ctx.fillText(al+'%', cw*.5, ch*.5+2, cw);
            ctx.textBaseline = 'middle';
            ctx.font="35px Lato";
            ctx.beginPath();
            ctx.arc(91,99,82, start, diff/10+start, false);
            ctx.stroke();
            if(al >= 75){
                clearTimeout(sim);
                // Add scripting here that will run when progress completes
            }
            al++;
        }
        var sim = setInterval(progressSim, 20);
        this.destroy()
    }, offset: 300
});