<script language="javascript" type="text/javascript">
var MAP_WIDTH = 1000;
var MAP_HEIGHT = 446;

function convert(lat, lon){
    var y = ((-1 * lat) + 90) * (MAP_HEIGHT / 180);
    var x = (lon + 180) * (MAP_WIDTH / 360);
    return x;
}

var ss = convert(40.7560540, -73.9869510);
alert(ss);
</script>


<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>jQuery UI Tooltip functionality</title>
      <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
      <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
      <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
   
      <!-- Javascript -->
      <script>
         $(function() {
            $("#tooltip-1").tooltip();
            $("#tooltip-2").tooltip();
         });
      </script>
   </head>
   <body>
      <!-- HTML --> 
         <label for="name">Name:</label>
         <input id="tooltip-1" title="Enter You name">
         <p><a id="tooltip-2" href="#" title="Nice tooltip">
            I also have a tooltip
         </a></p>
   </body>
</html>


<!DOCTYPE html>
<html>
  <head>
    <title>JavaScript Audio Write Example</title>
  </head>
  <body>
    <input type="text" size="4" id="freq" value="440"><label for="hz">Hz</label>
    <button onclick="start()">play</button>
    <button onclick="stop()">stop</button>

    <script type="text/javascript">      
      function AudioDataDestination(sampleRate, readFn) {
        // Initialize the audio output.
        var audio = new Audio();
        audio.mozSetup(1, sampleRate);

        var currentWritePosition = 0;
        var prebufferSize = sampleRate / 2; // buffer 500ms
        var tail = null;

        // The function called with regular interval to populate 
        // the audio output buffer.
        setInterval(function() {
          var written;
          // Check if some data was not written in previous attempts.
          if(tail) {  
            written = audio.mozWriteAudio(tail);
            currentWritePosition += written;
            if(written < tail.length) {
              // Not all the data was written, saving the tail...
              tail = tail.subarray(written);
              return; // ... and exit the function.
            }
            tail = null;
          }

          // Check if we need add some data to the audio output.
          var currentPosition = audio.mozCurrentSampleOffset();
          var available = currentPosition + prebufferSize - currentWritePosition;
          if(available > 0) {
            // Request some sound data from the callback function.
            var soundData = new Float32Array(parseFloat(available));
            readFn(soundData);

            // Writing the data.
            written = audio.mozWriteAudio(soundData);
            if(written < soundData.length) {
              // Not all the data was written, saving the tail.
              tail = soundData.slice(written);
            }
            currentWritePosition += written;
          }
        }, 100);
      }

      // Control and generate the sound.

      var frequency = 0, currentSoundSample;
      var sampleRate = 44100;

      function requestSoundData(soundData) {
        if (!frequency) { 
          return; // no sound selected
        }

        var k = 2* Math.PI * frequency / sampleRate;
        for (var i=0, size=soundData.length; i<size; i++) {
          soundData[i] = Math.sin(k * currentSoundSample++);
        }        
      }

      var audioDestination = new AudioDataDestination(sampleRate, requestSoundData);

      function start() {
        currentSoundSample = 0;
        frequency = parseFloat(document.getElementById("freq").value);
      }

      function stop() {
        frequency = 0;
      }
  </script>
  </body>
</html>