<?php
//echo "SELECT actor.`first_name`, actor.`last_name`, film.`title` FROM `film_actor` left join actor on actor.actor_id = film_actor.actor_id left join film on film.film_id = film_actor.film_id where film.film_id=$_GET[film_id]"
;$con = mysqli_connect("localhost", 'root', '', 'sakila');
$rs = mysqli_query($con, "SELECT actor.`first_name`, actor.`last_name`, film.`title` FROM `film_actor` left join actor on actor.actor_id = film_actor.actor_id left join film on film.film_id = film_actor.film_id where film.film_id=$_GET[film_id]");
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
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <th>TITILE</th>
        </tr>
    </thead>
    <?php
foreach ($array as $info):
?>
        <tr>
            <td align="center"><?=($info['first_name']);?></td>
            <td  align="center"><?=$info['last_name'];?></td>
            <td  align="center"><?=$info['title'];?></td>
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
  