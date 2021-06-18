<?php
$con = mysqli_connect("localhost", 'root', '', 'sakila');
$rs = mysqli_query($con, "SELECT `payment_id`, customer.`first_name` as customer_name,customer.
`last_name` as cutomer_last_name, staff.`first_name`  as staff_name, staff.`last_name`  
as staff_last_name , rental.`rental_id`, `amount`, `payment_date` FROM `payment` 
left join customer on customer.customer_id = payment.customer_id left join staff on 
staff.staff_id = payment.staff_id left join rental on rental.rental_id = payment.rental_id");
//print_r($rs);
$array = mysqli_fetch_all($rs, MYSQLI_ASSOC);
//print_r($array[0]);
$index = 1;
?>
<html>
<table  width=100% class="table table-striped table-dark" border="5x" >
    <thead>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <tr>
            <th>CUTOMER FIRST NAME</th>
            <th>CUTOMER LAST NAME</th>
            <th>STAFF FIRST NAME</th>
            <th>STAFF LAST NAME</th>
            <th>RENTAL</th>
            <th>AMOUNT</th>
            <th>AMOUNT DATE</th>
        </tr>
    </thead>
    <title>FILM</title>
    <?php
foreach ($array as $info):
?>
        <tr>
            <td align="center"><?=($info['customer_name']);?></td>
            <td  align="center"><?=$info['cutomer_last_name'];?></td>
            <td align="center"><?=$info['staff_name'];?></td>
            <td align="center"><?=$info['staff_last_name'];?></td>
            <td align="center"><?=($info['rental_id']);?></td>
            <td  align="center"><?=$info['amount'];?></td>
            <td align="center"><?=$info['payment_date'];?></td>
        </tr>
    <?php
endforeach;

?>
    <style>
        .styled-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
        }

        .styled-table th {
            padding: 12px 18px;
        }

        .styled-table td {
            padding: 10px 19px;
            background-color: lightcyan;
        }

        .styled-table tbody tr {
            border-bottom: 1px solid burlywood;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: lightblue;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid burlywood;
        }

        body {
            background-image:url("");
        }

        .styled-table tbody tr.active-row {
            font-weight: bold;
            color: burlywood;
        }
    </style>
