@extends('layouts.app')

@section('content')
<!-- Chargement des librairies -->
<script src="{{ asset('js/fabric.min.js') }}" defer></script>

<!-- Canvas -->
  <canvas id="canvas" width="500" height="500"></canvas>
<!-- Boutons -->
  <button type="button" onclick="saveImage()">enregistrer le canvas</button>
  <br><br>
  <button id="drawing-mode" class="btn btn-info">mode édition</button><br>
  <div style="display: none;" id="drawing-mode-options">

    <label for="drawing-color">Couleur du trait :</label>
    <input type="color" value="#005E7A" id="drawing-color"><br>

    <div id="colorwidth">
      <label>Taille du trait :</label>
      <input type="range" min="1" max="30" value="15" class="slider" id="myRange">
    </div>
  </div>

<style>
  #canvas{
    stroke : 5;

  }

</style>
<script>
var canvas;
var drawingColor = document.getElementById('drawing-color');
var drawingModeEl = document.getElementById('drawing-mode');
var drawingOptionsEl = document.getElementById('drawing-mode-options');

      /*Bouton pour dessiner ou non*/
      drawingModeEl.onclick = function() {
        canvas.isDrawingMode = !canvas.isDrawingMode;
        if (canvas.isDrawingMode) {
          drawingModeEl.innerHTML = 'Cancel drawing mode';
          drawingOptionsEl.style.display = '';
        }
        else {
          drawingModeEl.innerHTML = 'Enter drawing mode';
          drawingOptionsEl.style.display = 'none';
        }
      };

$(function () {
    canvas  = new fabric.Canvas('canvas');  //ecrire dans le canvas
    canvas.backgroundColor = '#efefef';
    canvas.isDrawingMode = 0;                //on peut ecrire
    canvas.freeDrawingBrush.color = "purple";
    canvas.freeDrawingBrush.width = 10;
    canvas.renderAll();

    //taille du trait
   document.getElementById('colorwidth').addEventListener('click', function (e) {
        console.log(e.target.value);
        canvas.freeDrawingBrush.width = e.target.value;
    });
    /*couleur du trait*/
      drawingColor.onchange = function() {
      canvas.freeDrawingBrush.color = drawingColor.value;
    };
    var rect = new fabric.Rect({
        top : 100,
        left : 100,
        width : 60,
        height : 70,
        fill : 'orange'
    });
    canvas.add(rect);
});

/* sauvegarder canvas V-1*/
function saveImage() {
    window.location.href=canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");

    // transforme en png que pour chrome
    var link = document.createElement('a');
    link.download = "schema-sauvegarde.png";
    link.href = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");;
    link.click();
};
</script>

@endsection
