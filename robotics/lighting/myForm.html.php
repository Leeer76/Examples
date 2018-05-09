<!DOCTYPE html>
<html lang="en">
  <?php include '../header.footer/headerMain.php'; ?>
  <body>
    <h2 class="Control">Lighting Control</h2>
    <div class="parent">
      <div class="lights">
          <img src="../images/light_bulb_off-02.svg" alt="" id="north">
          <label for="northLights">North Lights</label>
				      <input type="range" id="northLights" min="1" max="2" value="1" class="slider">
      </div>
      <div class="lights"><img src="../images/light_bulb_off-02.svg" alt="" id="south">
        <label for="southLights">South Lights</label>
            <input type="range" id="southLights" min="1" max="2" value="1" class="slider">
      </div>
      <div class="lights"><img src="../images/light_bulb_off-02.svg" id="east">
        <label for="eastLights">East Lights</label>
            <input type="range" id="eastLights" min="1" max="2" value="1" class="slider">
      </div>
      <div class="lights"><img src="../images/light_bulb_off-02.svg" alt="" id="west">
        <label for="westLights">West Lights</label>
            <input type="range" id="westLights" min="1" max="2" value="1" class="slider">
      </div>
      <div class="lights"><img src="../images/light_bulb_off-02.svg" alt="" id="all">
        <label for="allLights">All Lights</label>
            <input type="range" id="allLights" min="1" max="3" value="2" class="slider">
      </div>
    </div>
    <?php include '../header.footer/footer.php'; ?>
  </body>
</html>
