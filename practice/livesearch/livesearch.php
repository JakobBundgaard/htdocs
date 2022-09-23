<?php 

include_once ("config.php");
if(isset($_POST['input'])) {
    $input = $_POST['input'];

    $query = "SELECT * FROM livesearch WHERE name LIKE '{$input}%' OR age LIKE '{$input}%' OR country LIKE '{$input}%' OR email LIKE '{$input}%' OR occupation LIKE '{$input}%'";

    $result = $conn->query($query);  // $users = $conn->query($sql);



    if($result->fetchColumn() > 0) {?>

        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Country</th>
                    <th>Email</th>
                    <th>Occupation</th>
                </tr>
            </thead>
            <tbody>
                <?php 

                    while($row = $result->fetch()) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $age = $row['age'];
                        $country = $row['country'];
                        $email = $row['email'];
                        $occupation = $row['occupation'];
                        ?>

                        <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $name; ?></td>
                            <td><?php echo $age; ?></td>
                            <td><?php echo $country; ?></td>
                            <td><?php echo $email; ?></td>
                            <td><?php echo $occupation; ?></td>
                        </tr>

                        <?php  
                    }

                ?>
            </tbody>
        </table>

    <?php  

    } else {
        echo "<h6 class='text-danger text-center mt-3'>No Data Found!</h6>";
    }
    
}

?>