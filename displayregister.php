<?php
    include('connectregister.php');
    $sql1 = "SELECT id,user_name,user_email FROM register_mywebpage";
    $display = mysqli_query($con, $sql1);

    if ($display->num_rows > 0) 
    {
        // output data of each row
        // $row =  mysqli_fetch_array($display)
        echo "<h2>All Records</h2>";
        echo "<table border='1' width='100%'>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Name</th>";
        echo "<th>Email</th>";
        echo "</th>";
        while($row = $display->fetch_assoc()) 
        {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['user_name']."</td>";
            echo "<td>".$row['user_email']."</td>";
            echo "</tr>";
        }
    } 
    else 
    {
        echo "0 results";
    }
    echo "<br><a href='updateregister.php'><button>Update</button></a>";
    echo "<br><a href='https://dipanjan18-lab.github.io/new-web/register.html'><button>New Register</button></a>";
?>
