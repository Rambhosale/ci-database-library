<?php
include('init_database.php');

$result = activeDB()->limit(2)
			->get('ec_er_college.ec_er_college_student_data');

echo '<pre>';
print_r($result->result_array());
