<?php
$con = mysqli_connect("localhost", 'root', '', 'sakila');
$rs = mysqli_query($con, "SELECT `customer_id`, store.`store_id`, `first_name`, `last_name`, `email`, address.`address` as ad, `active`, `create_date` FROM `customer` left join store on store.store_id = customer.store_id left join address on address.address_id = customer.address_id where first_name='$_GET[customer]' or last_name='$_GET[customer]'");
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
            <th>CUSTOMER ID</th>
            <th>STORE ID</th>
            <th>FIRST NAME</th>
            <th>LAST NAME </th>
            <th>EMAIL</th>
            <th>ADDRESS</th>
            <th>ACTIVE</th>
            <th>CREATED DATE</th>
        </tr>
    </thead>
    <title>FILM</title>
    <?php
foreach ($array as $info):
?>
        <tr>
            <td align="center"><?=($info['customer_id']);?></td>
            <td align="center">
            <a href="store.php?store_id=<?=$info['store_id'];?>"><?=$info['store_id'];?></a>
                </form>
            </td>
            <td align="center"><?=$info['first_name'];?></td>
            <td align="center"><?=($info['last_name']);?></td>
            <td  align="center"><?=$info['email'];?></td>
            <td align="center">
            <a href="address.php?address=<?=$info['ad'];?>"><?=$info['ad'];?></a>
                </form>
            </td>
            <td align="center"><?=$info['active'];?></td>
            <td align="center"><?=$info['create_date'];?></td>
    
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
