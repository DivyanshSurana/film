<?php
$con = mysqli_connect("localhost", 'root', '', 'sakila');
if(isset($_GET['inventory_id'])){
$rs = mysqli_query($con, "SELECT `inventory_id`, `film`.`title` as film_id, address.address as store_id, inventory.`last_update` FROM `inventory` 

left join film  on film.film_id = inventory.film_id
left join store on store.store_id = inventory.store_id
left join address on address.address_id = store.address_id where inventory_id=$_GET[inventory_id]");
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
            <th>INVENTORY ID</th>
            <th>TITLE</th>
            <th>ADDRESS</th>
            <th>LAST UPDATE</th>
        </tr>
    </thead>
    <title>FILM</title>
    <?php
foreach ($array as $info):
?>
        <tr>
            <td align="center"><?=($info['inventory_id']);?></td>
            <td align="center">   <a href="film.php?film=<?=$info['film_id'];?>"><?=$info['film_id'];?></a></td>
            <td align="center">
            <a href="address.php?address=<?=$info['store_id'];?>"><?=$info['store_id'];?></a>
                </form>
            </td>
            <td align="center"><?=$info['last_update'];?></td>

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
    $rs = mysqli_query($con, "SELECT `inventory_id`, `film`.`title` as film_id, address.address as store_id, inventory.`last_update` FROM `inventory` 

left join film  on film.film_id = inventory.film_id
left join store on store.store_id = inventory.store_id
left join address on address.address_id = store.address_id");
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
            <th>INVENTORY ID</th>
            <th>TITLE</th>
            <th>ADDRESS</th>
            <th>LAST UPDATE</th>
        </tr>
    </thead>
    <title>FILM</title>
    <?php
foreach ($array as $info):
?>
        <tr>
            <td align="center"><?=($info['inventory_id']);?></td>
            <td align="center">   <a href="film.php?film=<?=$info['film_id'];?>"><?=$info['film_id'];?></a></td>
            <td align="center">
            <a href="address.php?address=<?=$info['store_id'];?>"><?=$info['store_id'];?></a>
                </form>
            </td>
            <td align="center"><?=$info['last_update'];?></td>

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