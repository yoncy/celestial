<?php

declare(strict_types=1);

// Composer autoload
require_once 'vendor/autoload.php';
//spl_autoload_register(static function ($className) {
//    include 'src/' . $className . '.php';
//});

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Celestial</title>

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">
</head>

<body>
    <!-- As a link -->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="logs.php">Logs</a>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card bg-light mb-3">
                    <div class="card-header">Hero</div>
                    <div class="card-body">
                        <form action="src/Actions/HeroAction.php" method="post" name="hero">
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="number" class="form-control" id="age" name="age" placeholder="Enter age" value="">
                            </div>
                            <div class="form-group">
                                <label for="height">Height</label>
                                <input type="number" class="form-control" id="height" name="height" placeholder="Hero height">
                            </div>
                            <div class="form-group">
                                <label for="height">Actions</label>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-primary">Fight</button>
                                    <button type="button" class="btn btn-danger">Run</button>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" value="Submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-light mb-3">
                    <div class="card-header">Sun</div>
                    <div class="card-body">
                        <form action="src/Actions/SunAction.php" method="post" name="sun">
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="number" class="form-control" id="age" name="age" placeholder="Enter age">
                            </div>
                            <div class="form-group">
                                <label for="height">Height</label>
                                <input type="number" class="form-control" id="height" name="height" placeholder="Hero height">
                            </div>
                            <button type="submit" form="sun" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-light mb-3">
                    <div class="card-header">Moon</div>
                    <div class="card-body">
                        <form action="src/Actions/MoonAction.php" method="post" name="sun">
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="number" class="form-control" id="age" name="age" placeholder="Enter age">
                            </div>
                            <div class="form-group">
                                <label for="height">Height</label>
                                <input type="number" class="form-control" id="height" name="height" placeholder="Hero height">
                            </div>
                            <button type="submit" class="btn btn-primary" form="sun">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card bg-light mb-3">
                    <div class="card-header">Good guy</div>
                    <div class="card-body">
                        <form action="src/Actions/MoonAction.php" method="post">
                            <div class="form-group">
                                <label for="name">Awesome guy name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="His awesome name">
                            </div>
                            <div class="form-group">
                                <label for="height">Is a good guy</label>
                                <input type="checkbox" id="withFeelings" name="withFeelings">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card bg-light mb-3">
                    <div class="card-header">Bad ass guy</div>
                    <div class="card-body">
                        <form action="src/Actions/PeopleAction.php" method="post">
                            <div class="form-group">
                                <label for="name">Bad guy name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="His awesome name">
                            </div>
                            <div class="form-group">
                                <label for="height">Is a bad guy</label>
                                <input type="checkbox" id="withFeelings" name="withFeelings">
                            </div>
                            <div class="form-group">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-primary">Transform him into a good guy</button>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
</body>

</html>


