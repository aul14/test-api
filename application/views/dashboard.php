<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/4.2.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css"> -->

    <title>Hello, world!</title>

</head>

<body style="background-color: #EFF3F8;">


    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div style="background: #fff;">
                    <div class="text-left" style="margin-bottom: 5px; color: black;">
                        Medical Equipment - Inventory
                    </div>
                    <nav class="navbar navbar-expand-sm justify-content-center" style="margin-bottom: 20px;">
                        <ul class="navbar-nav">
                            <li class="nav-item mr-2">
                                <a href="#" class="nav-link btn btn-sm btn-primary">
                                    <i class="fa fa-plus"></i> Add New
                                </a>
                            </li>
                            <li class="nav-item mr-2">
                                <a href="#" class="nav-link btn btn-sm btn-success">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                            </li>
                            <li class="nav-item mr-2">
                                <a href="#" class="nav-link btn btn-sm btn-danger">
                                    <i class="fa fa-trash"></i> Delete
                                </a>
                            </li>
                            <li class="nav-item mr-2">
                                <a href="#" class="nav-link btn btn-sm btn-info">
                                    <i class="fa fa-book"></i> Details
                                </a>
                            </li>
                            <li class="nav-item mr-2">
                                <a href="#" class="nav-link btn btn-sm btn-dark">
                                    <i class="fa fa-barcode"></i> Print QR
                                </a>
                            </li>
                            <li class="nav-item mr-2">
                                <a href="#" class="nav-link btn btn-sm btn-secondary">
                                    <i class="fa fa-print"></i> Print
                                </a>
                            </li>
                            <li class="nav-item mr-2">
                                <a href="#" class="nav-link btn btn-sm btn-warning">
                                    <i class="fa fa-search"></i> Advanced Search
                                </a>
                            </li>
                            <li class="nav-item mr-2">
                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" type="button" style="background-color: #f48024;" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-calendar"></i> View
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item mr-2">
                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" type="button" style="background-color: #D2691E;" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-angle-down"></i> Coloumn
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div style="background: #fff;">
                    <table id="mytable" class="table table-striped table-bordered table-hover ">
                        <thead class="table-info">
                            <tr>
                                <th><input type="checkbox" onclick="toggle(this);" /></th>
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

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script> -->
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
    <script>
        function toggle(source) {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i] != source)
                    checkboxes[i].checked = source.checked;
            }
        }
        $(function() {
            $('#mytable').DataTable({
                "scrollY": "340px",
                "scrollCollapse": true,
                "scrollX": true,
                "ajax": "<?= base_url('dashboard/view_data'); ?>",

                "columns": [{
                        "mData": "null",
                        "class": "center",
                    },
                    {
                        "mData": "no",
                        "class": "center",
                    },
                    {
                        "mData": "assetCode",
                        "class": "center",
                    },
                    {
                        "mData": "assetName",
                        "class": "center",
                    },
                    {
                        "mData": "merk",
                        "class": "center",
                    },
                    {
                        "mData": "tipe",
                        "class": "center",
                    },
                    {
                        "mData": "serialNumber",
                        "class": "center",
                    },
                    {
                        "mData": "condition",
                        "class": "center",
                    },
                    {
                        "mData": "procureDate",
                        "class": "center",
                    },
                    {
                        "mData": "assetCatName",
                        "class": "center",
                    },
                    {
                        "mData": "ownershipType",
                        "class": "center",
                    },
                    {
                        "mData": "roomName",
                        "class": "center",
                    },
                    {
                        "mData": "floorName",
                        "class": "center",
                    },
                    {
                        "mData": "buildingName",
                        "class": "center",
                    },

                ]
            });
        });
    </script>
</body>

</html>