<?php include 'view/header.php' ?>
<?php include 'view/sidebar.php' ?>

<?php 
    require 'model/database.php';

    $query = "SELECT * FROM members";
    $result = mysqli_query($conn, $query);

?>
<style>
    <?php include 'css/members.css';
          include 'css/style.css';
    ?>
</style>

<div class="members container">
    <h2>Members</h2>
    <hr>
    <div class="members-table">
        <table class="table">
        <thead class="table-head">
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Membership Plan</th>
                <th scope="col">Address</th>
                <th scope="col">City</th>
                <th scope="col">Date of Birth</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <th><?php echo $row['id'] ?></th>
                <th><?php echo $row['first name'] ?></th>
                <td><?php echo $row['last name'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['membership plan'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><?php echo $row['city'] ?></td>
                <td><?php echo $row['date of birth'] ?></td>
                <td class="icon"><a><i class="edit-icon fa-sharp fa-solid fa-pen fa-green"></i></a></td>
                <td class="icon"><a><i class="delete-icon fa-sharp fa-solid fa-trash fa-red"></i></a></td>
            </tr>
            <?php 
                }                
            ?> 
        </tbody>
        </table>
    </div>
</div>

<?php include 'view/footer.php' ?>