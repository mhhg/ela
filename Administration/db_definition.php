<?php
define("HOST","localhost");
define("USER","elaonlin_root");
define("PASSWORD","2265mhhost");
define("DB", "elaonlin_eladb");
define("DBCL", "elaonlin_elaclass");
define("DBMS", "elaonlin_elamessage");
define("DBCMS", "elaonlin_elaCMS");
define("DBFR", "elaonlin_elaform");
define("Student", 0);
define("Teacher", 1);
define("Admin", 2);
define("CLCOUNT", 100);
function selectAll($table){
      $x = "SELECT * FROM $table;";
      return $x;
}?>
                            