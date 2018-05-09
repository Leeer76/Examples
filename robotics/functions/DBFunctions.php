<?php
include '../model/DBAdapter.php';

  function validUser($username, $password){
    global $connection;

    $user = 'Robot Overlord';
    $pass = 'Skynetisreal';
    if ($username==$user and $password==$pass) {
      return true;
    }else {
      return false;
    }
  }

function getPresent(){
  global $connection;

  $sql = "SELECT photo, CONCAT(first_name, ' ', last_name) AS fullname, arrival_log_time
              FROM student s JOIN arrival_log al
                ON s.studentID = al.studentID
                JOIN exit_log el
                ON al.entry_stamp = el.exit_stamp
                WHERE arrival_log_date = CURDATE() AND exit_log_time IS NULL
              ORDER BY last_name";
  $result = $connection->query($sql);
$presentStudents = "";
if($result != NULL){
  while ($presentStudent = $result->fetch())
 {
    $presentStudents[] = $presentStudent;
  }
      return $presentStudents;
}
}

function getStudentLog(){
  global $connection;

  $sql = "SELECT CONCAT(first_name, ' ', last_name) AS name, arrival_log_date, arrival_log_time, exit_log_date, exit_log_time
              FROM student s JOIN arrival_log al ON s.studentID = al.studentID
              JOIN exit_log el ON el.exit_stamp = al.entry_stamp
              WHERE arrival_log_date = CURDATE()
              ORDER BY arrival_log_date, arrival_log_time, last_name";

  $results = $connection->query($sql);
  $logs = "";
if($results != NULL){
  while ($log = $results->fetch())
   {
    $logs[] = $log;
  }
  return $logs;
}
}

function getStudentLogAll(){
  global $connection;
  $sql = "SELECT CONCAT(first_name, ' ', last_name) AS name, arrival_log_date, arrival_log_time, exit_log_date, exit_log_time
              FROM student s JOIN arrival_log al ON s.studentID = al.studentID
              JOIN exit_log el ON el.exit_stamp = al.entry_stamp
              ORDER BY arrival_log_date, arrival_log_time, last_name";

  $results = $connection->query($sql);

  if($results != NULL){
    while ($log = $results->fetch())
     {
      $logs[] = $log;
    }
    return $logs;
  }
}

function getStudentLogWeek(){
  global $connection;

  $sql = "SELECT CONCAT(first_name, ' ', last_name) AS name, arrival_log_date, arrival_log_time, exit_log_date, exit_log_time
              FROM student s JOIN arrival_log al ON s.studentID = al.studentID
              JOIN exit_log el ON el.exit_stamp = al.entry_stamp
              WHERE arrival_log_date >= CURDATE()-7
              ORDER BY arrival_log_date, arrival_log_time, last_name";

  $results = $connection->query($sql);

  if($results != NULL){
    while ($log = $results->fetch())
     {
      $logs[] = $log;
    }
    return $logs;
  }
}

?>
