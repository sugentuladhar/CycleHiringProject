<?php

class Database {
    var $con;
    function connect(){
        $this -> con= mysql_connect('localhost','root','root');
        mysql_select_db('bikersclub',$this -> con);
    }

    function query($sql) {
        return mysql_query($sql, $this->con);
    }

    function close(){
        mysql_close($this->con);
    }

    function fetchArray($reultset){
        return mysql_fetch_array($reultset);
    }
}

$db = new Database();

?>