<?php

include('connection_tambah_bank.php');

$query      = mysqli_query($connect, "SELECT * FROM tb_bank");
$results    = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        *{
            padding: 0;
            margin: 0;
        }

        .container{
            padding: 50px;
        }

        .container h3{
            text-align: center;
            font-weight: bold;
            margin-bottom: 25px;
        }

        .container table{
            margin: 0px auto;
            text-transform: uppercase;
            margin-top: 10px;
        }

        .container th, .container td{
            width: 250px;
            text-align: center;
            padding: 10px 0px;
        }

        .container th{
            font-size: 1.2em;
            font-weight: bold;
        }

        .container td{
            font-weight: 500;
        }

        table .nomer{
            width: 75px;
        }

        .container .url{
            text-transform: lowercase;
        }

        .container .tambah{
            text-transform: uppercase;
            font-weight: bold;
        }
    </style>

    <title>Data Bank</title>
  </head>
  <body>
    
    <div class="container">

    <h3>DATA BANK</h3>

    <a href="add_tambah_bank.php" class="tambah">Tambah Data</a>

        <table border="2">
            <tr>
                <th class="nomer">no</th>
                <th>nama bank</th>
                <th>url</th>
                <th>logo</th>
                <th>status</th>
                <th>more options</th>
            </tr>
            <?php foreach ($results as $result) : ?>
                <tr>
                    <td class="nomer"><?php echo $result['id']?></td>
                    <td><?php echo $result['nama']?></td>
                    <td class="url"><?php echo $result['url']?></td>
                    <td><?php echo $result['logo']?></td>
                    <td><?php echo $result['status']?></td>
                    <td>
                        <a href="edit_tambah_bank.php?id=<?php echo $result['id']?>">Edit |</a>
                        <a href="delete_tambah_bank.php?id=<?php echo $result['id']?>"> hapus</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>

    </div>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>