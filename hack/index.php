<?php 
include("config.php");
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>PULSAR VOICE</title>
   <!-- <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
      
	 <!-- For Tool Tip-->
	  
	  <!--    <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
      <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
      <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	  
	   <script>
         $(function() {
            $("#tooltip-1").tooltip();
            $("#tooltip-2").tooltip();
         });
      </script>-->
	  
	  <!-- For Tool Tip-->
	  
  <style>
  html, body {
  margin: 0;
  height: 1400;
  width:1200;
  font-family: "roboto", helvetica;
  position: relative;
  height: 100%;
  font-size: 100%;
  line-height: 1.5;
  color: #444;
}
h2 {
  margin: 1.75em 0 0;
  font-size: 5vw;
}

h3 { font-size: 1.3em; }
.sky {
  height: 100%;
   width: 100%;
   background-repeat:repeat-y;
  background: #007fd5;
  position: relative;
  overflow: hidden;
  -webkit-animation: sky_background 50s ease-out infinite;
  -moz-animation: sky_background 50s ease-out infinite;
  -o-animation: sky_background 50s ease-out infinite;
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0)
}

.moon {
  background: url("images/moon.png");
   background-repeat: no-repeat; 
  position: absolute;
  left: 0;
  height: 100%;
  width: 300%;
  -webkit-animation: moon 50s linear infinite;
  -moz-animation: moon 50s linear infinite;
  -o-animation: moon 50s linear infinite;
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0)
}

.sun {
  background: url("images/moon.png");
  position: absolute;
  left: 0;
  height: 100%;
  width: 300%;
  -webkit-animation: moon 50s linear infinite;
  -moz-animation: moon 50s linear infinite;
  -o-animation: moon 50s linear infinite;
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0)
}

.clouds_one {
  background: url("images/cloud_one.png");
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 300%;
  -webkit-animation: cloud_one 50s linear infinite;
  -moz-animation: cloud_one 50s linear infinite;
  -o-animation: cloud_one 50s linear infinite;
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0)
}

.clouds_two {
  background: url("images/cloud_two.png");
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 300%;
  -webkit-animation: cloud_two 75s linear infinite;
  -moz-animation: cloud_two 75s linear infinite;
  -o-animation: cloud_two 75s linear infinite;
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0)
}

.clouds_three {
  background: url("images/cloud_three.png");
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 300%;
  -webkit-animation: cloud_three 100s linear infinite;
  -moz-animation: cloud_three 100s linear infinite;
  -o-animation: cloud_three 100s linear infinite;
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0)
}

@-webkit-keyframes sky_background {
  0% {
    background: #007fd5;
    color: #007fd5
  }
  50% {
    background: #000;
    color: #a3d9ff
  }
  100% {
    background: #007fd5;
    color: #007fd5
  }
}

@-webkit-keyframes moon {
  0% {
    opacity: 0;
    left: -200% -moz-transform: scale(0.5);
    -webkit-transform: scale(0.5);
  }
  50% {
    opacity: 1;
    -moz-transform: scale(1);
    left: 0% bottom: 250px;
    -webkit-transform: scale(1);
  }
  100% {
    opacity: 0;
    bottom: 500px;
    -moz-transform: scale(0.5);
    -webkit-transform: scale(0.5);
  }
}

@-webkit-keyframes cloud_one {
  0% {
    left: 0
  }
  100% {
    left: -200%
  }
}

@-webkit-keyframes cloud_two {
  0% {
    left: 0
  }
  100% {
    left: -200%
  }
}

@-webkit-keyframes cloud_three {
  0% {
    left: 0
  }
  100% {
    left: -200%
  }
}

@-moz-keyframes sky_background {
  0% {
    background: #007fd5;
    color: #007fd5
  }
  50% {
    background: #000;
    color: #a3d9ff
  }
  100% {
    background: #007fd5;
    color: #007fd5
  }
}

@-moz-keyframes moon {
  0% {
    opacity: 0;
    left: -200% -moz-transform: scale(0.5);
    -webkit-transform: scale(0.5);
  }
  50% {
    opacity: 1;
    -moz-transform: scale(1);
    left: 0% bottom: 250px;
    -webkit-transform: scale(1);
  }
  100% {
    opacity: 0;
    bottom: 500px;
    -moz-transform: scale(0.5);
    -webkit-transform: scale(0.5);
  }
}

@-moz-keyframes cloud_one {
  0% {
    left: 0
  }
  100% {
    left: -200%
  }
}

@-moz-keyframes cloud_two {
  0% {
    left: 0
  }
  100% {
    left: -200%
  }
}

@-moz-keyframes cloud_three {
  0% {
    left: 0
  }
  100% {
    left: -200%
  }
}


.gps_ring {
    
    -webkit-border-radius: 30px;
    height: 30px;
    width: 30px;
    position: absolute;
    -webkit-animation: pulsate 10s ease-out;
    -webkit-animation-iteration-count: infinite; 
    opacity: 0.0
}

.gps_ring2 {
    border: 5px solid #FF0000;
    -webkit-border-radius: 30px;
    height: 20px;
    width: 20px;
    position: absolute;
    right:200px;
    top:414px;
    -webkit-animation: pulsate 1s ease-out;
    -webkit-animation-iteration-count: infinite; 
    opacity: 0.0
}

.gps_ring3 {
    border: 5px solid #0000FF;
    -webkit-border-radius: 30px;
    height: 50px;
    width: 50px;
    position: absolute;
    right:300px;
    top:214px;
    -webkit-animation: pulsate 2s ease-out;
    -webkit-animation-iteration-count: infinite; 
    opacity: 0.0
}

.gps_ring4 {
    border: 5px solid #FF3333;
    -webkit-border-radius: 30px;
    height: 50px;
    width: 50px;
    position: absolute;
    right:400px;
    top:300px;
    -webkit-animation: pulsate 1s ease-out;
    -webkit-animation-iteration-count: infinite; 
    opacity: 0.0
}

@-webkit-keyframes pulsate {
    0% {-webkit-transform: scale(0.1, 0.1); opacity: 0.0;}
    50% {opacity: 1.0;}
    100% {-webkit-transform: scale(1.2, 1.2); opacity: 0.0;}
}

 
    </style>

    
        <script src="js/prefixfree.min.js"></script>

    

 
  <div class="sky">
    <div class="moon"></div>
    <div class="clouds_one"></div>
    <div class="clouds_two"></div>
    <div class="clouds_three"></div>
	 
  </div>
  
    <div id="state" class="grid_4 alpha">
             
			<?php
			$sel	=	"SELECT * FROM final_pulsar";
			$res	=	mysql_query($sel) or die(mysql_error());
			if(mysql_num_rows($res)>0){
			while($row = mysql_fetch_array($res)){
			?>
			 <div class="gps_ring" style=" left:<?php echo $row['xaxis'];?>px; top:<?php echo $row['yaxis'];?>px;
			  <?php if($row['kPc']<=5){?>  border: 5px solid #00FFFF;
			   <?php }	else  if($row['kPc']<=10){?> border: 5px solid #0000FF;
			  <?php }	else  if($row['kPc']<=20){?> border: 5px solid #FFFF00;
			  <?php }else  if($row['kPc']<=30){?> border: 5px solid #FF0000;
			  <?php }else{ ?> border: 5px solid #00FF00;<?php }?>" onMouseOver="startTone(<?php echo $row['playHz'];?>)" onMouseOut="stopTone()">  <a id="tooltip-2" title="<?php echo $row['label'];?>" href="#" > </a> </div>
			<?php
			}}
			?>	
          
            </div>

    
    
	  <div><h2 align="center">PULSAR VOICE</h2></div>
	  <table width="100%" border="0">
        <tr>
          <th width="61%" scope="col">Color represents distance from Earth </th>
          <th width="39%" scope="col">Light Blue : 0- 5 kPc <br>
            Blue: 5-10 kPc<br>
            Yellow: 10-20 kPc <br>
			Yellow: 20-30 kPc<br>
			<br>
			*1kPc = 3000 Light Years </th>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
	
  </body>
</html>

		<script>var beepOne = $("#beep-one")[0];
$(".gps_ring ")
	.mouseenter(function() {
		beepOne.play();
	});</script>

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> 
<script>
$(function(){

var appendthis =  ("<div class='modal-overlay js-modal-close'></div>");

	$('a[data-modal-id]').click(function(e) {
		e.preventDefault();
    $("body").append(appendthis);
    $(".modal-overlay").fadeTo(500, 0.7);
    //$(".js-modalbox").fadeIn(500);
		var modalBox = $(this).attr('data-modal-id');
		$('#'+modalBox).fadeIn($(this).data());
	});  
  
  
$(".js-modal-close, .modal-overlay").click(function() {
    $(".modal-box, .modal-overlay").fadeOut(500, function() {
        $(".modal-overlay").remove();
    });
 
});
 
$(window).resize(function() {
    $(".modal-box").css({
        top: ($(window).height() - $(".modal-box").outerHeight()) / 2,
        left: ($(window).width() - $(".modal-box").outerWidth()) / 2
    });
});
 
$(window).resize();
 
});
</script><style>


.modal-box {
  display: none;
  position: absolute;
  z-index: 1000;
  width: 98%;
  background: white;
  border-bottom: 1px solid #aaa;
  border-radius: 4px;
  box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  border: 1px solid rgba(0, 0, 0, 0.1);
  background-clip: padding-box;
}
@media (min-width: 32em) {

.modal-box { width: 70%; }
}

.modal-box header,
.modal-box .modal-header {
  padding: 1.25em 1.5em;
  border-bottom: 1px solid #ddd;
}

.modal-box header h3,
.modal-box header h4,
.modal-box .modal-header h3,
.modal-box .modal-header h4 { margin: 0; }

.modal-box .modal-body { padding: 2em 1.5em; }

.modal-box footer,
.modal-box .modal-footer {
  padding: 1em;
  border-top: 1px solid #ddd;
  background: rgba(0, 0, 0, 0.02);
  text-align: right;
}

.modal-overlay {
  opacity: 0;
  filter: alpha(opacity=0);
  position: absolute;
  top: 0;
  left: 0;
  z-index: 900;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.3) !important;
}

a.close {
  line-height: 1;
  font-size: 1.5em;
  position: absolute;
  top: 5%;
  right: 2%;
  text-decoration: none;
  color: #bbb;
}

a.close:hover {
  color: #222;
  -webkit-transition: color 1s ease;
  -moz-transition: color 1s ease;
  transition: color 1s ease;
}
</style>

<script type="text/javascript">

// Example showing how to produce a tone using Web Audio API.
// Load the file webaudio_tools.js before loading this file.
// This code will write to a DIV with an id="soundStatus".
var oscillator;
var amp;

// Create an oscillator and an amplifier.
function initAudio()
{
	// Use audioContext from webaudio_tools.js
	if( audioContext )
	{
		oscillator = audioContext.createOscillator();
		fixOscillator(oscillator);
		oscillator.frequency.value = 440;
		amp = audioContext.createGain();
		amp.gain.value = 0;
	
		// Connect oscillator to amp and amp to the mixer of the audioContext.
		// This is like connecting cables between jacks on a modular synth.
		oscillator.connect(amp);
		amp.connect(audioContext.destination);
		oscillator.start(0);
		writeMessageToID( "soundStatus", "<p>Audio initialized.</p>");
	}
}

// Set the frequency of the oscillator and start it running.
function startTone( frequency )
{
	var now = audioContext.currentTime;
	
	oscillator.frequency.setValueAtTime(frequency, now);
	
	// Ramp up the gain so we can hear the sound.
	// We can ramp smoothly to the desired value.
	// First we should cancel any previous scheduled events that might interfere.
	amp.gain.cancelScheduledValues(now);
	// Anchor beginning of ramp at current value.
	amp.gain.setValueAtTime(amp.gain.value, now);
	amp.gain.linearRampToValueAtTime(0.5, audioContext.currentTime + 0.1);
	
	writeMessageToID( "soundStatus", "<p>Play tone at frequency = " + frequency  + "</p>");
}

function stopTone()
{
	var now = audioContext.currentTime;
	amp.gain.cancelScheduledValues(now);
	amp.gain.setValueAtTime(amp.gain.value, now);
	amp.gain.linearRampToValueAtTime(0.0, audioContext.currentTime + 1.0);
	writeMessageToID( "soundStatus", "<p>Stop tone.</p>");
}

// init once the page has finished loading.
window.onload = initAudio;



</script>

<script type="text/javascript">


/*
 * Common tools for use with WebAudio.
 * 
 * This code was based on original code by Boris Smus
 * from: http://www.webaudioapi.com/
 *
 * with extensions and modifications by Phil Burk
 * from http://www.softsynth.com/webaudio/
 */
/*
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

function createAudioContext()
{
	var contextClass = (window.AudioContext ||
			window.webkitAudioContext ||
			window.mozAudioContext ||
			window.oAudioContext);
	if (contextClass) {
		return new contextClass();
	} else {
		alert("Sorry. WebAudio API not supported. Try using the Google Chrome or Safari browser.");
		return null;
	}
}

// Start off by initializing a new audioContext.
var audioContext =  createAudioContext();

// shim layer with setTimeout fallback
window.requestAnimFrame = (function() {
	return  window.requestAnimationFrame       || 
	  window.webkitRequestAnimationFrame || 
	  window.mozRequestAnimationFrame    || 
	  window.oRequestAnimationFrame      || 
	  window.msRequestAnimationFrame     || 
	  function( callback ){
	  window.setTimeout(callback, 1000 / 60);
	};
})();


// Add missing functions to make the oscillator compatible with the later standard.
function fixOscillator(osc)
{
	if (typeof osc.start == 'undefined') {
		osc.start = function(when) {
			osc.noteOn(when);
		}
	}
	if (typeof osc.stop == 'undefined') {
		osc.stop = function(when) {
			osc.noteOff(when);
		}
	}
}

// Change HTML in a DIV or other element for debugging
function writeMessageToID(id,message)
{
	// Voodoo for browser compatibility.
	d = document;
	re = d.all ? d.all[id] : d.getElementById(id);
	if (re) {
		re.innerHTML = message;
	}
}

function AudioVisualizer(width, height)
{
  this.analyser = audioContext.createAnalyser();

  this.width = width;
  this.height = height;
  this.analyser.connect(audioContext.destination);
  this.analyser.minDecibels = -140;
  this.analyser.maxDecibels = 0;
  this.fft_smoothing = 0.6;
  this.fft_size = 1024;
  
  this.freqs = new Uint8Array(this.analyser.frequencyBinCount);
  this.times = new Uint8Array(this.analyser.frequencyBinCount);
  this.isPlaying = false;
  this.drawCounter = 0;
}

AudioVisualizer.prototype.startAnimation = function()
{
	this.isPlaying = true;
    // Start visualizer.
    requestAnimFrame(this.draw.bind(this));
}

AudioVisualizer.prototype.drawSpectrum = function(drawContext)
{
  this.analyser.smoothingTimeConstant = this.fft_smoothing;
  this.analyser.fftSize = this.fft_size;

  // Get the frequency data from the currently playing music
  this.analyser.getByteFrequencyData(this.freqs);

  var width = Math.floor(1/this.freqs.length, 10);

  drawContext.fillStyle = 'hsl(200, 100%, 50%)';
  // Draw the frequency domain chart.
  for (var i = 0; i < this.analyser.frequencyBinCount; i++) {
    var value = this.freqs[i];
    var percent = value / 256;
    var height = this.height * percent;
    var offset = this.height - height - 1;
    var barWidth = this.width/this.analyser.frequencyBinCount;
    drawContext.fillRect(i * barWidth, offset, barWidth, height);
  }
}

AudioVisualizer.prototype.draw = function()
{
  var canvas = document.querySelector('canvas');
  var drawContext = canvas.getContext('2d');
  canvas.width = this.width;
  canvas.height = this.height;
  
  this.drawSpectrum(drawContext);
  
  if ((this.drawCounter & 15) == 0) {
  	this.analyser.getByteTimeDomainData(this.times);
  }
  
  // Draw the time domain chart.
  //drawContext.beginPath();
  drawContext.fillStyle = 'black';
  drawContext.moveTo(0, this.height/2);
  var barWidth = this.width/this.analyser.frequencyBinCount;
  for (var i = 0; i < this.analyser.frequencyBinCount; i++) {
	var value = this.times[i];
	var percent = value / 256;
	var height = this.height * percent;
	var ypos = this.height - height - 1;
	var xpos = i * barWidth;
	drawContext.lineTo(xpos, ypos);
  }
  //drawContext.closePath();
  drawContext.stroke();

  this.drawCounter += 1;
  
  if (this.isPlaying) {
    requestAnimFrame(this.draw.bind(this));
  }
}

AudioVisualizer.prototype.getFrequencyValue = function(freq) {
  var nyquist = audioContext.sampleRate/2;
  var index = Math.round(freq/nyquist * this.freqs.length);
  return this.freqs[index];
}


</script>