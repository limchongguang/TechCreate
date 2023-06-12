
<p class="Headertext sizepadding2"><b style="color:#2D96D0;">Our</b> Presence</p>
<!--<div class="image-zoom-container">
    <img src="img/maps.svg" alt="Global Presence" width="80%">
</div>-->


<style>
  #scale-element {
  display: block;
  max-width: 80%;
  margin: 1rem auto;
  touch-action: none;
}

#scale-element.reset {
  transition: transform 0.3s ease-in-out;
}
</style>

<div id="gesture-area">
  <img src="img/maps.svg" alt="sample image" id="scale-element">
</div>


<script>
  var angleScale = {
  angle: 0,
  scale: 1
}
var gestureArea = document.getElementById('gesture-area')
var scaleElement = document.getElementById('scale-element')
var resetTimeout

interact(gestureArea)
  .gesturable({
    listeners: {
      start (event) {
        angleScale.angle -= event.angle

        clearTimeout(resetTimeout)
        scaleElement.classList.remove('reset')
      },
      move (event) {
        // document.body.appendChild(new Text(event.scale))
        var currentAngle = event.angle + angleScale.angle
        var currentScale = event.scale * angleScale.scale

        scaleElement.style.transform =
          'rotate(' + currentAngle + 'deg)' + 'scale(' + currentScale + ')'

        // uses the dragMoveListener from the draggable demo above
        dragMoveListener(event)
      },
      end (event) {
        angleScale.angle = angleScale.angle + event.angle
        angleScale.scale = angleScale.scale * event.scale

        resetTimeout = setTimeout(reset, 1000)
        scaleElement.classList.add('reset')
      }
    }
  })
  .draggable({
    listeners: { move: dragMoveListener }
  })

function reset () {
  scaleElement.style.transform = 'scale(1)'

  angleScale.angle = 0
  angleScale.scale = 1
}
</script>







<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-12 md-4">
            <img src="img/legend1.svg" class="entity" alt="Entity" width="50%" height="auto">
        </div>
        <div class="col-lg-6 col-md-12 md-4">
            <img src="img/legend2.svg" class="partnership" alt="Partnership" width="50%" height="auto">
        </div>
    </div>
</div>