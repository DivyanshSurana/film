<?php
$con = mysqli_connect("localhost", 'root', '', 'sakila');
$rs = mysqli_query($con, "SELECT `address_id`, `address`, `address2`, `district`, city.city as city_id, `postal_code`, `phone`,country.country FROM `address` left join city on address.city_id = city.city_id left join country on country.country_id = country.country_id where address='$_GET[address]'");
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
            <th>ADDRESS ID</th>
            <th>ADDRESS</th>
            <th>DISTRICT</th>
            <th>CITY</th>
         
        </tr>
    </thead>
    <title>FILM</title>
    <?php
foreach ($array as $info):
?>
        <tr>
            <td align="center"><?=($info['address_id']);?></td>
            <td align="center"><?=($info['address']);?></td>
            <td align="center"><?=($info['district']);?></td>
            <td align="center">
            <a href="city.php?city=<?=$info['city_id'];?>"><?=$info['city_id'];?></a>
                </form>
            </td>
         <?php   exit;?>
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
