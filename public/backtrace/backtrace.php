<?php require_once __DIR__.'/../inc/head.php'; ?>


<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Test v0.1</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <?php
                    if(isset($_SESSION['user']['id'])){
                        echo '<li><a href="page2.php">Page 2</a></li>
                              <li><a href="page3.php">Page 3</a></li>
                              <li><a href="'.$_SERVER['PHP_SELF'].'">'.$_SESSION['user']['name'].'</a></li>';
                    }
                    ?>
                </ul>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">

    <h1>Test v0.1</h1>
    <p class="lead">Test Environment Page 2</p>
    <div class="row">
        <div class="col-md-8">
            <h5>Session Data</h5>
            <a class="btn" href="login.php">Logout</a>
            <pre>
                <?php
                //App\Main\Main::runCode('str');
                //


                ?>
            </pre>
        </div>
        <div class="col-md-4">
            <div class="well">
                <h4>Categories</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Logging</a>
                            </li>
                            <li><a href="#">Backtrace</a>
                            </li>
                            <li><a href="#">Debugging</a>
                            </li>
                            <li><a href="#">Profiling</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Reporting</a>
                            </li>
                            <li><a href="#">Handlers</a>
                            </li>
                            <li><a href="#">Exceptions</a>
                            </li>
                            <li><a href="#">Common Errors</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.row -->
            </div>

            <p>Errors</p>
            <pre>
                <?php
                var_dump(error_get_last());
                ?>
            </pre>
        </div>
    </div>

</div><!-- /.container -->



<?php require_once __DIR__.'/../inc/footer.php'; ?>
