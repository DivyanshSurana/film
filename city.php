<?php
$con = mysqli_connect("localhost", 'root', '', 'sakila');
$rs = mysqli_query($con, "SELECT city.`city_id`, city.`city`, country.`country` FROM city left join country on country.country_id = city.country_id where city='$_GET[city]'");
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
            <th>CITY ID</th>
            <th>CITY</th>
            <th>COUNTRY</th>
        </tr>
    </thead>
    <title>FILM</title>
    <?php
foreach ($array as $info):
?>
        <tr>
            <td align="center"><?=($info['city_id']);?></td>
            <td  align="center"><?=$info['city'];?></td>
            <td align="center">
            <a href="country.php?country=<?=$info['country'];?>"><?=$info['country'];?></a>
                </form>
            </td>
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
