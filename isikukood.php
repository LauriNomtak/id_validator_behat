<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<form action="" method="post" name="isikukood" id="isikukood">

    <input type="text" name="personal_id" id="personal_id">
    <input type="submit" name="submit" id="submit">

</form>

<?php
if (isset($_POST['submit'])) {
    $personal_id = $_POST['personal_id'];
    if (control_sum($personal_id) &&
        month_val($personal_id) &&
        day_val($personal_id) &&
        num_count($personal_id) &&
        check_if_num($personal_id)
    ) {
        echo "Isikukood valideeritud!";
    } else {
        echo "Isikukood ei ole õige!";
    }
}





