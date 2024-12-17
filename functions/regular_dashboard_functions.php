<?php
    include('../db/config.php');
    include('misc_functions.php');

    function getTotalUsers() {
        global $conn;
        $sql = "SELECT COUNT(*) AS TOTAL FROM users";
        $result = $conn->query($sql)->fetch_assoc();
        return $result['TOTAL'];
    }

    function getTotalRecipes() {
        global $conn;
        $sql = "SELECT COUNT(*) AS TOTAL FROM recipes";
        $result = $conn->query($sql)->fetch_assoc();
        return $result['TOTAL'];
    }

    function createUserManageTable($r) {
        if ($r == 2) createSuperUserTable(); else if ($r == 1) createRegularUserTable();
    }

    function createSuperUserTable() {
        $rol = "role"; // to avoid errors from role being a sql keyword
        $result = sendSQLtoDB("SELECT user_id, fname, lname, email, $rol, created_at FROM users");
        if ($result->num_rows > 0){
            // Start table and add table headers
            echo "<table border='1'>";
            echo "<tr> <th>First name</th> <th>Last name</th> <th>Email</th> <th>Role</th> <th> Registration date</th> </tr>";
            
            // output data of each row
            while($row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$row["fname"]."</td>";
                echo "<td>".$row["lname"]."</td>";
                echo "<td>".$row["email"]."</td>";
                echo "<td>".$row["role"]."</td>";
                echo "<td>".$row["created_at"]."</td>";
                echo "<td> <button onclick = 'del(" . $row['user_id'] . "" . ")'> Delete </button> </td>";
                echo "</tr>";                  
            }
            echo "</table>";
        } else {
            echo "<h1>0 results</h1>";
        }
    }

    function createRegularUserTable() {
        $result = sendSQLtoDB("SELECT name, origin, type, created_at FROM foods");
        if ($result->num_rows > 0){
            // Start table and add table headers
            echo "<table border='1'>";
            echo "<tr> <th>Recipe name</th> <th>Origin</th> <th>Type</th> <th>Submission date</th> </tr>";
            
            // output data of each row
            while($row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$row["name"]."</td>";
                echo "<td>".$row["origin"]."</td>";
                echo "<td>".$row["type"]."</td>";
                echo "<td>".$row["created_at"]."</td>";
                echo "</tr>";                  
            }
            echo "</table>";
        } else {
            echo "<h1>0 results</h1>";
        }
    }
?>