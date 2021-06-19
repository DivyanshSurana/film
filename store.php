<?php
$con = mysqli_connect("localhost", 'root', '', 'sakila');
if(isset($_GET['store_id'])){
$rs = mysqli_query($con, "SELECT store.`store_id`, staff.`first_name`,staff.`last_name`, address.`address`FROM `store` left join staff on staff.staff_id = store.manager_staff_id left join address on address.address_id = store.address_id where store.store_id=$_GET[store_id]");
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
            <th>STORE ID</th>
            <th>MANAGER STAFF FIRST NAME</th>
            <th>MANAGER STAFF LAST NAME</th>
           <th>ADDRESS</th>

        </tr>
    </thead>
    <title>FILM</title>
    <?php
foreach ($array as $info):
?>
        <tr>
            <td align="center"><?=($info['store_id']);?></td>
            <td align="center">
            <a href="staff.php?staff=<?=$info['first_name'];?>"><?=$info['first_name'];?></a>
                </form>
            </td>
            <td align="center">
            <a href="staff.php?staff=<?=$info['last_name'];?>"><?=$info['last_name'];?></a>
                </form>
            </td>
            <td align="center">
            <a href="address.php?address=<?=$info['address'];?>"><?=$info['address'];?></a>
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
<?php
}
else{
    $rs = mysqli_query($con, "SELECT store.`store_id`, staff.`first_name`,staff.`last_name`, address.`address`FROM `store` left join staff on staff.staff_id = store.manager_staff_id left join address on address.address_id = store.address_id");
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
            <th>STORE ID</th>
            <th>MANAGER STAFF FIRST NAME</th>
            <th>MANAGER STAFF LAST NAME</th>
           <th>ADDRESS</th>

        </tr>
    </thead>
    <title>FILM</title>
    <?php
foreach ($array as $info):
?>
        <tr>
            <td align="center"><?=($info['store_id']);?></td>
            <td align="center">
            <a href="staff.php?staff=<?=$info['first_name'];?>"><?=$info['first_name'];?></a>
                </form>
            </td>
            <td align="center">
            <a href="staff.php?staff=<?=$info['last_name'];?>"><?=$info['last_name'];?></a>
                </form>
            </td>
            <td align="center">
            <a href="address.php?address=<?=$info['address'];?>"><?=$info['address'];?></a>
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
<?php
}