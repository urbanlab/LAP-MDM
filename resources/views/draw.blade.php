@extends('layouts.app')

@section('head')
<script src="{{ asset('js/fabric.min.js') }}" defer></script>

<script>
$(function () {
  var canvas;
  var drawMode = document.getElementById('drawing-mode');
  var drawColor = document.getElementById('drawing-color');
  var drawOptions = document.getElementById('drawing-mode-options');
  var w = window.innerWidth;
  var h = window.innerHeight;

  //redimensionner l'ecran de manière dynamique
  window.addEventListener('resize', resizeMe);
  function resizeMe(){
    w = window.innerWidth;
    h = window.innerHeight;
    canvas.setDimensions({width: w, height: h});
  }
  //Mode édition
  drawMode.addEventListener('click', function() {
    canvas.isDrawingMode = !canvas.isDrawingMode;
    if (canvas.isDrawingMode) {
      drawOptions.style.display = '';
    }
    else {
      drawOptions.style.display = 'none';
    }
  });

  canvas  = new fabric.Canvas('canvas');  //ecrire dans le canvas
  canvas.setDimensions({width: w, height: h});
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
    drawColor.onchange = function() {
    canvas.freeDrawingBrush.color = drawColor.value;
  };
  //rectangle pour faire joli
  var rect = new fabric.Rect({
      top : 100,
      left : 100,
      width : 60,
      height : 70,
      fill : 'orange'
  });
  canvas.add(rect);

  var picto1 = document.getElementById('picto1');
  var picto2 = document.getElementById('picto2');
  var picto3 = document.getElementById('picto3');
  $("#picto1").click(function(){
       canvas.add(new fabric.Image(picto1, {
       left: 400,
       top: 500,
     }));
  });
  $("#picto2").click(function(){
       canvas.add(new fabric.Image(picto2, {
       left: 550,
       top: 500,
     }));
  });
  $("#picto3").click(function(){
       canvas.add(new fabric.Image(picto3, {
       left: 650,
       top: 500,
     }));
  });
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

@section('content')
<div id="draw-blade">
    <!-- Canvas -->
    <canvas id="canvas"></canvas>

    <div id="top-col">
      <div id="icon-bank" class="align-item">
        <i id="icon-bank-element" class="material-icons">keyboard_arrow_left</i>

        <img src="{{ asset('media/picto1.png')}}" id="picto1"/>

        <img src="{{ asset('media/picto2.png')}}" id="picto2"/>

        <img src="{{ asset('media/picto3.png')}}" id="picto3"/>



        <i id="icon-bank-element" class="material-icons">keyboard_arrow_right</i>
      </div>
        <!-- <button type="button" onclick="saveImage()">enregistrer le canvas</button> -->
        <button id="drawing-mode" class="btn-floating btn-large btn-info align-item"><i class="material-icons right">edit</i></button>
        <div style="display: none;" id="drawing-mode-options">
          <label for="drawing-color">Couleur du trait :</label>
          <input type="color" value="#000080" id="drawing-color"><br>

          <div id="colorwidth">
            <label>Taille du trait :</label>
            <input type="range" min="1" max="30" value="15" class="slider" id="myRange">
          </div>
        </div>
        <button class="btn-floating btn-large btn-info align-item"><i class="material-icons right">undo</i></button>
      </div>

    <div id="bottom-col">
      <button id="send-btn" class="btn-floating btn-large align-item" type="submit" name="action"><i class="material-icons right">send</i></button>
      <button id="save-btn" class="btn-floating btn-large align-item" onclick="saveImage()"><i class="material-icons right">save</i></button>
    </div>
</div><!-- end draw blade div -->
@endsection
