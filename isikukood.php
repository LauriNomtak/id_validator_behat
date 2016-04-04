<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<form action="" method="post" name="isikukood" id="isikukood">

    <input type="text" name="personal_id" id="personal_id">
    <input type="submit" name="submit" id="submit">

</form>

<?php

require_once 'classes/Validator.php';

$validator = new Validator();

if (isset($_POST['submit'])) {
    $personal_id = $_POST['personal_id'];
    if ($validator->control_sum($personal_id) &&
        $validator->month_val($personal_id) &&
        $validator->day_val($personal_id) &&
        $validator->num_count($personal_id) &&
        $validator->check_if_num($personal_id)
    ) {
        echo "Isikukood valideeritud!";
    } else {
        echo "Isikukood ei ole õige!";
    }
}





