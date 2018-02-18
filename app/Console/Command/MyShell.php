<?php
function myMethod() {

  $dsn = 'mysql:dbname=test_cake;host=127.0.0.1';
  $user = 'root';
  $pass = 'root';

  try {
    $dbh = new PDO($dsn, $user, $pass);

    if ($dbh == null) {
      echo '接続に失敗しました';
    } else {
      echo '接続成功！';
    }
  } catch(PDOException $e) {
    var_dump($e->getMessage());
    throw new MissingConnectionException(array(
      'class' => get_class($this),
      'message' => $e->getMessage()
      ));
  }
}
