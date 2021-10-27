<?php include_once('header.php');?>

<?php 
    $servername = 'localhost';
    $username = 'root';
    $password = 'admin';
    $dbname = 'studentresult';

    //create connetion
    $conn = new mysqli($servername, $username, $password, $dbname);

    //check connection
    if($conn->connect_error){
        die("Connection Fail".$conn->connect_error);
    }

    $sql = "SELECT * FROM student";
    $result = $conn -> query($sql);
?>

        <h1 style="text-align:center; padding:20px;">Student Details</h1>
            <div class="row justify-content-center">
                <div class="col-auto">
                    <table class="table table-hover table-bordered table-striped text-center" style="width: 1000px">
                    <thead>
                    <tr class="table-primary">
                        <td>RollNo</td>
                        <td>First name</td>
                        <td>Last Name</td>
                        <td>English</td>
                        <td>Science</td>
                        <td>Maths</td>
                        <td>Hindi</td>
                
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if($result -> num_rows > 0){
                    while($row = $result -> fetch_assoc()){
                    ?>
                    <tr class="table-primary">
                        <td><?php echo $row['RollNo'];?></td>
                        <td><?php echo $row['Fname'];?></td>
                        <td><?php echo $row['Lname'];?></td>
                        <td><?php echo $row['English'];?></td>
                        <td><?php echo $row['Science'];?></td>
                        <td><?php echo $row['Maths'];?></td>
                        <td><?php echo $row['Hindi'];?></td>
                
                    </tr>
                    </tbody>
                

                    <?php
                    }
                    ?>

                    </table>
                    </div>
                    </div>
    <?php
            }
            else{
                echo "0 results";
            }
        $conn -> close();
    ?>

    <?php include_once('footer.php');?>