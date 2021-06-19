<?php
$con = mysqli_connect("localhost", 'root', '', 'sakila');
$rs = mysqli_query($con, "SELECT `rental_id`, `rental_date`, `inventory_id`, customer.`first_name`,customer.`last_name`, staff.`first_name` as staff_name, staff.`last_name` as staff_last_name, `return_date` FROM `rental` left join staff on staff.staff_id = rental.staff_id left join customer on customer.customer_id = rental.customer_id ");
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
            <th>RENATL ID</th>
            <th>RENATL DATE</th>
            <th>INVENTRY ID</th>
            <th> CUTOMER FIRST NAME</th>
            <th> CUTOMER LAST NAME </th>
            <th> SATFF FIRST NAME</th>
            <th> STAFF LAST NAME </th>
            <th>RETURN DATE</th>
        </tr>
    </thead>
    <title>FILM</title>
    <?php
foreach ($array as $info):
?>
        <tr>
            <td align="center"><?=($info['rental_id']);?></td>
            <td  align="center"><?=$info['rental_date'];?></td>
            <td align="center">
            <a href="inventory.php?inventory_id=<?=$info['inventory_id'];?>"><?=$info['inventory_id'];?></a>
                </form>
            </td>
           
            <td align="center">
            <a href="cutomer.php?customer=<?=$info['first_name'];?>"><?=$info['first_name'];?></a>
                </form>
            </td>
            <td align="center">
            <a href="cutomer.php?customer=<?=$info['last_name'];?>"><?=$info['last_name'];?></a>
                </form>
            </td>
            <td align="center">
            <a href="staff.php?staff=<?=$info['staff_name'];?>"><?=$info['staff_name'];?></a>
                </form>
            </td>
            <td align="center">
            <a href="staff.php?staff=<?=$info['staff_last_name'];?>"><?=$info['staff_last_name'];?></a>
                </form>
            </td>
            <td  align="center"><?=$info['return_date'];?></td>
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
