<?php
/**
 * Returns mysqli_connect
 * 
 * Returns false or null if mysqli_connect is unsuccessful.
 * @param string $servername_ 
 * @param string $password_
 * @param string $dbname_
 * @param string $username_
 */
function GetDatabaseConnection(string $servername_, string $username_, string $password_, string $dbname_)
{
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $conn = mysqli_connect($servername_, $username_, $password_, $dbname_);
    return $conn;
}
