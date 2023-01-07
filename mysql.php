<?php
$servername = "localhost";
$username = "root";
$passsword = "";
$database = "market";

// $sqlcre = "CREATE DATABASE market";
// mysqli_query($conn , $sqlcre);

$conn = mysqli_connect($servername, $username, $passsword, $database);
if (!$conn) {
    echo "unsuccessful connection";
}
else{
    echo "connection established";
}

// $sqldel = "DROP DATABASE shop";
// mysqli_query($conn , $sqldel);




// $tablecre = "CREATE TABLE students(Eno int, Name varchar(20), Email varchar(20))";
// $restabcre = mysqli_query($conn , $tablecre);
// if($restabcre){
//     echo "<br> table created";
// } else {
//     echo "<br> table not created" ;
// }

// $tabledel = "DROP TABLE students";
// $restabdel = mysqli_query($conn , $tabledel);
// if($restabdel){
//     echo "<br> table deleted";
// } else {
//     echo "<br> table not deleted" ;
// }



// $valins = "INSERT INTO students VALUES(1, 'Vidit', 'email@email.com')";
// $resvalins = mysqli_query($conn , $valins);
// if($resvalins){
//     echo "<br> value inserted successfully";
// } else {
//     echo "<br> values not inserted " ;
// }

// $valins = "INSERT INTO students VALUES(2, 'Abc', 'email2@email.com')";
// $resvalins = mysqli_query($conn , $valins);
// if($resvalins){
//     echo "<br> value inserted successfully";
// } else {
//     echo "<br> values not inserted " ;
// }

// $valins = "INSERT INTO students VALUES(2, 'Xyz', 'email3@email.com')";
// $resvalins = mysqli_query($conn , $valins);
// if($resvalins){
//     echo "<br> value inserted successfully";
// } else {
//     echo "<br> values not inserted " ;
// }
function insertvalues($conn, $eno, $name, $email)
{
    $valins = "INSERT INTO students VALUES($eno, '$name', '$email')";
    $resvalins = mysqli_query($conn , $valins);
    if($resvalins){
        echo "<br> value inserted successfully";
    } else {
        echo "<br> values not inserted " ;
    }

}
function deletevalues($conn, $eno, $name, $email)
{
    $valins = "DELETE FROM students WHERE Eno = $eno";
    $resvalins = mysqli_query($conn , $valins);
    if($resvalins){
        echo "<br> value deleted successfully";
    } else {
        echo "<br> values not deleted " ;
    }

}


if($_SERVER["REQUEST_METHOD"] == "POST"){
    // $eno = $_POST["Eno"];
    // $name = $_POST["Name"];
    // $email = $_POST["Email"];


    $eno = $_POST["Eno"];
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $task = $_POST["rdtask"];

    if($task == "insert")
    {
        insertvalues($conn, $eno, $name, $email);
    }
    else{
        deletevalues($conn, $eno, $name, $email);
    }





}


// $retrive = "SELECT * FROM students ";
// $resretrive = mysqli_query($conn , $retrive);
// if($resretrive){
//     echo "<br> value inserted successfully";
// } else {
//     echo "<br> values not inserted " ;
// }

?>