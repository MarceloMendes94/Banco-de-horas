<?
public Class Connection{
    $database ="banco_de_horas";
    $host     ="localhost";
    $user     ="root";
    $password ="";

    $mysqli = new mysqli($host, $user, $password, $database);
    
    function Open_Conect(){
        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        }
    }

    function CloseConect(){
        $mysqli->close();
    }
}















/*
if ($mysqli->query("CREATE TEMPORARY TABLE myCity LIKE City") === TRUE) {
    printf("Table myCity successfully created.\n");
}


if ($result = $mysqli->query("SELECT Name FROM City LIMIT 10")) {
    printf("Select returned %d rows.\n", $result->num_rows);


    $result->close();
}


if ($result = $mysqli->query("SELECT * FROM City", MYSQLI_USE_RESULT)) {

    if (!$mysqli->query("SET @a:='this will not work'")) {
        printf("Error: %s\n", $mysqli->error);
    }
    $result->close();
}


*/


?>





