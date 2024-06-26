<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eWallet demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <?php
    $accountBallance = 1000;
    echo 'Initial account ballance: ' . $accountBallance . ' PLN<br>';
    $transfersarray = array(1 => 100, 300, -1100, -1000);

    //loop
    foreach ($transfersarray as $transfer) {
        if ($transfer > 0) {
            echo 'Incoming transfer: ' . $transfer . ' PLN<br>';
        } else {
            echo 'Outgoing transfer: ' . $transfer . ' PLN<br>';
        }
        $accountBallance += $transfer;
        $transferBallance += $transfer;
    }

    echo 'Final account ballance: ' . $accountBallance . ' PLN<br>';
    if ($accountBallance < 0) {
        echo 'You have an overdraft!<br>';
    }
    if ($transferBallance < 0) {
        echo 'Your expenses exceeded incomes!<br>';
    }
    ?>


    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid"><img src="https://www.kadencewp.com/wp-content/uploads/2020/10/alogo-2.svg" style="width:10%;">
            <a class="navbar-brand" href="#">eWallet</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center" style="background-color:lightgrey;">
            Initial account ballance
            <span class="badge bg-primary rounded-pill">
                1000 PLN</span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center">Incoming transfer <span class="badge bg-secondary rounded-pill">300 PLN</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">Outgoing transfer <span class="badge bg-secondary rounded-pill">-1400 PLN</span>
        </li>



        <li class="list-group-item d-flex justify-content-between align-items-center" style="background-color:lightgrey;">
            Final account ballance
            <span class="badge bg-primary rounded-pill">
                -100 PLN</span>
        </li>





    </ul>


    <hr>


    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        You have an overdraft!<br> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        Your expenses exceeded incomes!<br> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>