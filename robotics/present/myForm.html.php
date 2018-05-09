<!DOCTYPE html>
<html lang="en">
<?php include '../header.footer/headerMain.php'; ?>
  <body>
    <h2 class="Control">Present Students</h2>
    <div id="present_students">
        <?php if($present != NULL){ foreach($present as $attendance): ?>
        <span class="student_data">
          <img src="<?php echo $prefix . $attendance['photo']; ?>"><br>
          <?php echo $attendance['fullname']; ?><br>
          Arrival time: <?php echo $attendance['arrival_log_time']; ?>
        </span>
      <?php endforeach;}else {?>
        <p class="Control"><?php echo "No Students Present";} ?></p>
   </div>
    <?php include '../header.footer/footer.php'; ?>
  </body>
</html>
