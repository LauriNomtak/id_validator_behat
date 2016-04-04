<?php

/**
 * Created by PhpStorm.
 * User: Lauri
 * Date: 04.04.2016
 * Time: 11:11
 */
class Validator
{
    function check_if_num($personal_id)
    {
        if (ctype_digit($personal_id)) {
            return "True";
        } else {
            echo "Sisestatud väärtus ei ole number. ";
            return "False";
        }
    }

    function num_count($personal_id)
    {
        if (strlen($personal_id) === 11) {
            return "True";
        } else {
            echo "Isikukoodi pikkus on vale. ";
            return "False";
        }
    }

    function month_val($personal_id)
    {
        $month = substr($personal_id, 3, 2);
        if ($month > 12) {
            echo "Isikukoodi kuu on vale. ";
            return "False";
        } else {
            return "True";

        }
    }

    function day_val($personal_id)
    {
        $day = substr($personal_id, 5, 2);
        if ($day > 31) {
            echo "Isikukoodi päev on vale. ";
            return "False";
        } else {
            return "True";

        }
    }

    function control_sum($personal_id)
    {
        $personal_id = str_split($personal_id);
        $total_sum = 0;
        $i = 1;
        for ($id_num = 0; $id_num < 10; $id_num++) {

            $sum = $personal_id[$id_num] * $i;
            $total_sum = $total_sum + $sum;
            $i++;
            if ($i > 9) {
                $i = 1;
            }
        }

        $control_num = ($total_sum - floor($total_sum / 11) * 11);

        if ($control_num == $personal_id[10]) {
            return "True";
        } else {
            echo "Isikukoodi kontrollnumber on vale. ";
            return "False";
        }
    }
}