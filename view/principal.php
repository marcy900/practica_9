<!DOCTYPE html>
<html>  
  <head>
    <script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script> 
    <script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
  </head>   

  <body>
    <a-scene embedded arjs>
      <a-entity scale=".2 .2 .2"> 
        <a-entity gltf-model="../img/este.glb" scale="3 3 3" crossOrigin="anonymous">
        </a-entity>
        <a-marker-camera type='panaderia' pattenUrl='../controllers/pattern-bon.patt'></a-marker-camera>
      
            <a-marker type='panaderia' pattenUrl='../controllers/pattern-bon.patt'></a-marker>
       
        </a-scene>
      </body>
    </html>