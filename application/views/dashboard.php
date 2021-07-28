<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <h1>Hello, world!</h1>
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>No</th>
                <th>Code</th>
                <th>Asset Name</th>
                <th>Merk</th>
                <th>Type</th>
                <th>SN</th>
                <th>Condition</th>
                <th>Procure Date</th>
                <th>Category</th>
                <th>Ownership</th>
                <th>Room Name</th>
                <th>Floor Name</th>
                <th>Building Name</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($result['data'] as $i => $d) : ?>
                <tr>
                    <td></td>
                    <td><?= ++$i; ?></td>
                    <td><?= $d['assetCode'];  ?></td>
                    <td><?= $d['assetName'];  ?></td>
                    <td><?= empty($d['propAssetPropgenit']['merk']) ? '-' : $d['propAssetPropgenit']['merk'];  ?></td>
                    <td><?= empty($d['propAssetPropgenit']['tipe']) ? '-' : $d['propAssetPropgenit']['tipe'];  ?></td>
                    <td><?= empty($d['propAssetPropgenit']['serialNumber']) ? '-' : $d['propAssetPropgenit']['serialNumber'];  ?></td>
                    <td><?= empty($d['propAssetPropadmin']['condition']) ? '-' : $d['propAssetPropadmin']['condition'];  ?></td>
                    <td><?= empty($d['propAssetPropadmin']['procureDate']) ? '-' : $d['propAssetPropadmin']['procureDate'];  ?></td>
                    <td><?= empty($d['propAssetCat']['assetCatName']) ? '-' : $d['propAssetCat']['assetCatName'];  ?></td>
                    <td><?= empty($d['propAssetPropadmin']['ownershipType']) ? '-' : $d['propAssetPropadmin']['ownershipType'];  ?></td>
                    <td><?= empty($d['propAssetPropadmin']['propAssetPropbuildingRoom']['roomName']) ? '-' : $d['propAssetPropadmin']['propAssetPropbuildingRoom']['roomName'];  ?></td>
                    <td><?= empty($d['propAssetPropadmin']['propAssetPropbuildingRoom']['floorName']) ? '-' : $d['propAssetPropadmin']['propAssetPropbuildingRoom']['floorName'];  ?></td>
                    <td><?= empty($d['propAssetPropadmin']['propAssetPropbuildingRoom']['buildingName']) ? '-' : $d['propAssetPropadmin']['propAssetPropbuildingRoom']['buildingName'];  ?></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>