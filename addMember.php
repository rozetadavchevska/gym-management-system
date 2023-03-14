<?php include 'view/header.php' ?>
<?php include 'view/sidebar.php' ?>
<style>
    <?php include 'css/addMember.css';
          include 'css/style.css';
    ?>
</style>

<div class="add-member container">
    <h2>Add new member</h2>
    <hr>
    <form class="container form row" method="post" action="model/insertMember.php">
        <div class="col-6 p-2">
            <label for="fname" class="form-label">First name</label>
            <input type="text" name="fname" class="form-control" placeholder="First name" aria-label="First name">
        </div>
        <div class="col-6 p-2">
            <label for="lname" class="form-label">Last name</label>
            <input type="text" name="lname" class="form-control" placeholder="Last name" aria-label="Last name">
        </div>
        <div class="col-md-6 p-2">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email">
        </div>
        <div class="col-6 p-2">
            <label for="membership-plan" class="form-label">Membership Plan</label>
            <select class="form-select" name="membership-plan">
                <option selected>Membership Plan</option>
                <option value="basic">Basic</option>
                <option value="premium">Premium</option>
            </select>
        </div>
        <div class="col-6 p-2">
            <label for="address" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St">
        </div>
        <div class="col-md-6 p-2">
            <label for="city" class="form-label">City</label>
            <input type="text" name="city" class="form-control" id="city">
        </div>
        <div class="col-6 p-2">
            <label for="date-of-birth" class="form-label">Date of birth</label>
            <input type="date" name="date-of-birth" class="form-control" aria-label="Date of birth">
        </div>
        <div class="col-12 p-2">
            <button type="submit" name="member-submit" class="btn add-member-btn">Add member</button>
        </div>
    </form>
</div>

<?php include 'view/footer.php' ?>