  <?php
  session_start();
  echo 'Hello, ';
  echo $_POST['n_suf'], ' ';
  echo $_POST['fname'], ' ';
  echo $_POST['mname'], ' ';
  echo $_POST['lname'], '!';
  echo "<br>";
  echo $_POST['dob'];
  echo "<br>";
  $_SESSION['ses_n_suf'] = $_POST['n_suf'];
  $_SESSION['ses_fname'] = $_POST['fname'];
  $_SESSION['ses_mname'] = $_POST['mname'];
  $_SESSION['ses_lname'] = $_POST['lname'];
  $_SESSION['ses_dob'] = $_POST['dob'];
  echo $_SESSION['ses_n_suf'], ' ';
  echo $_SESSION['ses_fname'], ' ';
  echo $_SESSION['ses_mname'], ' ';
  echo $_SESSION['ses_lname'], '!';
  echo "<br>";
  echo $_SESSION['ses_dob'], ' ';
    echo "<br>";
    //   function sess_open($sess_path, $sess_name) {
    //     print "Session opened.\n";
    //     print "Sess_path: $sess_path\n";
    //     print "Sess_name: $sess_name\n\n";
    //     return true;
    // }

    //   function sess_close() {
    //     print "Session closed.\n";
    //     return true;
    // }

    // function sess_read($sess_id) {
    //     print "Session read.\n";
    //     print "Sess_ID: $sess_id\n";
    //     return '';
    // }

    // function sess_write($sess_id, $data) {
    //     print "Session value written.\n";
    //     print "Sess_ID: $sess_id\n";
    //     print "Data: $data\n\n";
    //     return true;
    // }

    // function sess_destroy($sess_id) {
    //     print "Session destroy called.\n";
    //     return true;
    // }

    // function sess_gc($sess_maxlifetime) {
    //     print "Session garbage collection called.\n";
    //     print "Sess_maxlifetime: $sess_maxlifetime\n";
    //     return true;
    // }

    // session_set_save_handler("sess_open", "sess_close", "sess_read", "sess_write", "sess_destroy", "sess_gc");
    // session_start();

    // $_SESSION['foo'] = "bar";
    // print "Some text\n";
    // $_SESSION['baz'] = "wombat";
?>