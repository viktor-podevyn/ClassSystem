<?php

$con = new PDO("mysql:host=localhost;dbname=crud",'root','');

if (isset($_POST["submit"])) {
    $str = $_POST["search"];

    $sth = $con->prepare("SELECT * FROM student WHERE :search");
    $sth->bindValue('search', $str);

    $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth -> execute();

    if($row = $sth->fetch()) {
        ?>
        <br><br><br>
        <table>
            <tr>
                <th>Name</th>
                <th>Last name</th>
                <th>Student ID</th>
                <th>Class Name</th>
            </tr>
            <tr>
                <td><?php echo $row->firstName; ?></td>
                <td><?php echo $row->lastName;?></td>
                <td><?php echo $row->studentID;?></td>
                <td><?php echo $row->className;?></td>
            </tr>

        </table>
        <?php
    } else{
        echo "Name Does not exist";
    }
}

?>
