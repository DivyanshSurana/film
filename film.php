<?php
;$con = mysqli_connect("localhost", 'root', '', 'sakila');
if(isset($_GET['film'])){
$rs = mysqli_query($con, "SELECT `film_id`, `title`, `description`, `release_year`, language.`name` as language_id, `original_language_id`, `rental_duration`, `rental_rate`, `length`, `replacement_cost`, `rating`, `special_features` FROM `film` left join language on language.language_id = film.language_id where title='$_GET[film]'");
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
            <th>FILM ID</th>
            <th>TITLE</th>
            <th>DECRIPTION</th>
            <th>RELEASE DATE</th>
            <th>LANGUAGE ID</th>
            <th>ORIGNAL LANGUAGE ID</th>
            <th>RENTAL DURATION</th>
            <th>RENTAL RATE</th>
            <th>LENGHT</th>
            <th>REPLACEMENT COST</th>
            <th>RATING</th>
            <th>SPECIAL FETURES</th>
        </tr>
    </thead>
    <title>FILM</title>
    <?php
foreach ($array as $info):
?>
        <tr>
            <td align="center"><?=($info['film_id']);?></td>
            <td  align="center"><?=$info['title'];?></td>
            <td align="center"><?=$info['description'];?></td>
            <td align="center"><?=($info['release_year']);?></td>
            <td align="center">
            <a href="language.php?name=<?=$info['language_id'];?>"><?=$info['language_id'];?></a>
                </form>
            </td>
            <td align="center"><?=$info['original_language_id'];?></td>
            <td align="center"><?=$info['rental_duration'];?></td>
            <td align="center"><?=($info['rental_rate']);?></td>
            <td align="center"><?=($info['length']);?></td>
            <td  align="center"><?=$info['replacement_cost'];?></td>
            <td align="center"><?=$info['rating'];?></td>
            <td align="center"><?=($info['special_features']);?></td>
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
    $rs = mysqli_query($con, "SELECT `film_id`, `title`, `description`, `release_year`, language.`name` as language_id, `original_language_id`, `rental_duration`, `rental_rate`, `length`, `replacement_cost`, `rating`, `special_features` FROM `film` left join language on language.language_id = film.language_id ");
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
            <th>FILM ID</th>
            <th>TITLE</th>
            <th>DECRIPTION</th>
            <th>RELEASE DATE</th>
            <th>LANGUAGE ID</th>
            <th>ORIGNAL LANGUAGE ID</th>
            <th>RENTAL DURATION</th>
            <th>RENTAL RATE</th>
            <th>LENGHT</th>
            <th>REPLACEMENT COST</th>
            <th>RATING</th>
            <th>SPECIAL FETURES</th>
        </tr>
    </thead>
    <title>FILM</title>
    <?php
foreach ($array as $info):
?>
        <tr>
            <td align="center"><?=($info['film_id']);?></td>
            <td  align="center"><?=$info['title'];?></td>
            <td align="center"><?=$info['description'];?></td>
            <td align="center"><?=($info['release_year']);?></td>
            <td align="center">
            <a href="language.php?name=<?=$info['language_id'];?>"><?=$info['language_id'];?></a>
                </form>
            </td>
            <td align="center"><?=$info['original_language_id'];?></td>
            <td align="center"><?=$info['rental_duration'];?></td>
            <td align="center"><?=($info['rental_rate']);?></td>
            <td align="center"><?=($info['length']);?></td>
            <td  align="center"><?=$info['replacement_cost'];?></td>
            <td align="center"><?=$info['rating'];?></td>
            <td align="center"><?=($info['special_features']);?></td>
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