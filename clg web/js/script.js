// variables
var canvas, ctx;
var bPlay = true;
var iAngle = 90;
var sText = 'Tech-Fusion 2016 ';

// drawing functions
function clear() { // clear canvas function
    ctx.clearRect(0, 0, ctx.canvas.width, ctx.canvas.height);
}

function drawScene() { // main drawScene function
    if (bPlay == 1) {
        clear(); // clear canvas

        // fill background
        ctx.fillStyle = '#d7e8f1';
        ctx.fillRect(0, 0, ctx.canvas.width, ctx.canvas.height);

        // change angle
        iAngle+=0.005;

        // and draw text circle in center of canvas with radius = 200
        draw3DTextCircle(sText, canvas.width / 2, canvas.height / 2, 200, Math.PI / 2 - iAngle);
    }
}

function draw3DTextCircle(s, x, y, radius, iSAngle){

    // rarian per letter
    var fRadPerLetter = 2*Math.PI / s.length;

    // save context, translate and rotate it
    ctx.save();
    ctx.translate(x,y);
    ctx.rotate(iSAngle);

    // amount of extra bottom layers
    var iDepth = 4;

    // set dark green color for extra layers
    ctx.fillStyle = '#168d1e';

    // pass through each letter of our text
    for (var i=0; i<s.length; i++) {
        ctx.save();
        ctx.rotate(i*fRadPerLetter);

        // draw extra layers
        for (var n = 0; n < iDepth; n++) {
            ctx.fillText(s[i], n, n - radius);
        }

        // shadow params
        ctx.shadowColor = 'black';
        ctx.shadowBlur = 10;
        ctx.shadowOffsetX = iDepth + 2;
        ctx.shadowOffsetY = iDepth + 2;

        // draw letter
        ctx.fillText(s[i], 0, -radius);
        ctx.restore();
   }
   ctx.restore();
}

// binding onload event
if (window.attachEvent) {
    window.attachEvent('onload', main_init);
} else {
    if(window.onload) {
        var curronload = window.onload;
        var newonload = function() {
            curronload();
            main_init();
        };
        window.onload = newonload;
    } else {
        window.onload = main_init;
    }
}

function main_init() {

    // create canvas and context objects
    canvas = document.getElementById('panel');
    ctx = canvas.getContext('2d');

    // initial text settings
    ctx.font = '64px Verdana';
    ctx.textAlign = 'center';
    ctx.textBaseline = 'middle';

    // fill background
    
    
    // draw text circle in center of canvas with radius = 100
    draw3DTextCircle(sText, canvas.width / 2, canvas.height / 2, 100, Math.PI / 2 - iAngle);

    setInterval(drawScene, 40); // loop drawScene
}