<!DOCTYPE html>
<html lang="en">
  <?php include '../header.footer/headerMain.php'; ?>
  <body>
    <form id="linkPost" action="#" method="POST">
    <select class="link" name="link">
      <option selected="selected" value="1"><a href="../logs">Today</a></option>
      <option value="2"><a href="../logsWeek">This Week</a></option>
      <option value="3"><a href="../logsAll">All Logs</a></option>
    </select>
    <input id="submit" type="submit" name="submit" value="GO">
  </form>
  <h2 class="Control">Student Logs</h2>
  <?php  if ($logs != NULL) { ?>
    <table class="log_data">
      <tr>
        <th>Name</th>
        <th>Arr. Date</th>
        <th>Arr. Time</th>
        <th>Dep. Date</th>
        <th>Dep. Time</th>
      </tr>
      <?php foreach($logs as $log): ?>
        <tr>
          <td><?php echo $log['name']; ?></td>
          <td><?php echo $log['arrival_log_date']; ?></td>
          <td><?php echo $log['arrival_log_time']; ?></td>
          <td><?php echo $log['exit_log_date']; ?></td>
          <td><?php echo $log['exit_log_time']; ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  <?php }else { ?>
    <p id="logToday">There are no Logs for today.</p><?php }; ?>
  <?php include '../header.footer/footer.php'; ?>
  </body>
</html>
