<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Offshore Marine Engineering</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/main.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <!--    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>-->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="http://offshoremarineengineering.com">Offshore Marine Engineering</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="http://offshoremarineengineering.com/">Home <span class="sr-only">(current)</span></a></li>
                    <li><a href="aboutus.html">About Us</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Business <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Inspection</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Subsea Intevention</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Maintenance &amp; Repair <br/>( Offshore and Marine )</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li>
                        <a href="projects.html" role="button" aria-haspopup="true" aria-expanded="false">Projects</span></a>
                    </li>
                    <li class="active"><a href="contactus.html">Contact Us</a></li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Contact Us</h2> Thanks
                    <?php echo $_POST["name"]; ?> for your enquiry
                        <br/>
                        <h5>We will contact you soon</h5>
                        <?php 
$to = "enquiry@offshoremarineengineering.com";
$subject = "New Query has been posted by " . $_POST["name"];
$txt = $_POST["query"];
$headers = "From: webmaster@offshoremarineengineering.com";

mail($to,$subject,$txt,$headers);
                    ?>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Offshore Marine Engineering</strong>
                    </h4>
                    <p>SAINATH CHS, Office No - 2,Plot no - 58/59, Sector - 44, Seawoods ( W ), Navi Mumbai, Maharashtra 400706</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i></li>
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:name@example.com">enquiry@offshoremarineengineering.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; offshoremarineengineering.com</p>
                </div>
            </div>
        </div>
        <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    </footer>

</body>

</html>
