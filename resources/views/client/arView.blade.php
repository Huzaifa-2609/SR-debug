<!DOCTYPE html> 
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://aframe.io/releases/1.4.2/aframe.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/mind-ar@1.2.2/dist/mindar-face-aframe.prod.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const list = ["glasses2"];
        const visibles = [true];
        const setVisible = (button, entities, visible) => {
          if (visible) {
            button.classList.add("selected");
          } else {
            button.classList.remove("selected");
          }
          entities.forEach((entity) => {
            entity.setAttribute("visible", visible);
          });
        };
        list.forEach((item, index) => {
          const button = document.querySelector("#" + item);
          const entities = document.querySelectorAll("." + item + "-entity");
          setVisible(button, entities, visibles[index]);
          button.addEventListener("click", () => {
            visibles[index] = !visibles[index];
            setVisible(button, entities, visibles[index]);
          });
        });
      });
    </script>
    <style>
      body {
        margin: 0;
      }
      .example-container {
        overflow: hidden;
        position: absolute;
        width: 100%;
        height: 100%;
      }
      .options-panel {
        position: fixed;
        left: 0;
        top: 0;
        z-index: 2;
      }
      .options-panel img {
        border: solid 2px;
        width: 50px;
        height: 50px;
        object-fit: cover;
        cursor: pointer;
      }
      .options-panel img.selected {
        border-color: green;
      }
    </style>
  </head>
  <body>
    <div class="example-container">
      <a-scene
        mindar-face
        embedded
        color-space="sRGB"
        renderer="colorManagement: true, physicallyCorrectLights"
        vr-mode-ui="enabled: false"
        device-orientation-permission-ui="enabled: false"
      >
        <a-assets>
          <a-asset-item
            id="glassesModel2"
            src="https://cdn.jsdelivr.net/gh/hiukim/mind-ar-js@1.2.2/examples/face-tracking/assets/glasses2/scene.gltf"
          ></a-asset-item>
        </a-assets>
        <a-camera active="false" position="0 0 0"></a-camera>
        <a-entity mindar-face-target="anchorIndex: 168">
          <a-gltf-model
            rotation="0 -90 0"
            position="0 -0.3 0"
            scale="0.6 0.6 0.6"
            src="#glassesModel2"
            class="glasses2-entity"
            visible="true"
          ></a-gltf-model>
        </a-entity>
      </a-scene>
    </div>
  </body>
</html>
