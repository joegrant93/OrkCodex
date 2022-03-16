<?
include 'DBH.php';
$conn = GetDatabaseConnection("localhost", "joeganjm", "cEK7FRgmBqKV", "joeganjm_OrkCodex");

function GetAllDataSheetTypes()
{
    global $conn;
    $sql = "SELECT * FROM `DataSheetTypes` ORDER BY `name`";
    $result = mysqli_query($conn, $sql);
    $rows = array();
    while ($r = mysqli_fetch_assoc($result)) {
        $rows[] = $r;
    }
    return json_encode($rows, JSON_INVALID_UTF8_IGNORE);
}

function GetAllSections()
{
    global $conn;
    $sql = "SELECT * FROM `Sections`";
    $result = mysqli_query($conn, $sql);
    $rows = array();
    while ($r = mysqli_fetch_assoc($result)) {
        $rows[] = $r;
    }
    return json_encode($rows, JSON_INVALID_UTF8_IGNORE);
}

function PrintCards($dataSet)
{
    echo '<div class="row justify-content-md-center rounded">';
    for ($i = 0; $i < sizeof($dataSet); $i++) {
        echo "<div class=\"col-md-4 d-flex rounded justify-content-center mb-1\" onclick=\"location.href='" . $dataSet[$i]->hyperlink . "';\">";
        echo "<h5 class=\"align-self-center\">" . $dataSet[$i]->name . "</h5>";
        echo "</div>";
    }
    echo '</div>';
}
