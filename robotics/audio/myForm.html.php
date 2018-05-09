<!DOCTYPE html>
<html lang="en">
  <?php include '../header.footer/headerMain.php'; ?>
  <body>
    <h2 class="audioTitle">Audio Control</h2>
    <img id="tape" src="../images/tape.svg" alt="Tape Deck">
    <div id="audioControl">
      <div id="skip-backBtn">
        <i class="fa fa-fast-backward" alt="Skip Backwards"></i>
      </div>
      <div id="fast-backwardBtn">
        <i class="fa fa-backward" alt="Fast Backward"></i>
      </div>
      <div id="playBtn">
        <i class="fa fa-pause" alt="Pause"></i> <i class="fa fa-play" alt="Play"></i>
      </div>
      <div id="fast-forwardBtn">
        <i class="fa fa-forward" alt="Fast Forward"></i>
      </div>
      <div id="skip-forwardBtn">
        <i class="fa fa-fast-forward" alt="Skip Forward"></i>
      </div>
    </div>
    <?php include '../header.footer/footer.php'; ?>
  </body>
</html>
