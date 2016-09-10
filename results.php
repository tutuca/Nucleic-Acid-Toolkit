<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nucleic Acid Toolkit</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/index.html#tools">Nucleic Acid Toolkit</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#results">Results</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#bugreporter">Bug Reporter</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Results Grid Section -->
    <br><br><br>
    <section id="results">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Results</h2>
                    <hr class="star-primary">
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12 text-center">
        
                <style>
                p.resultbox { width: 80%;
                            margin-left: auto;
                            margin-right: auto;
                            word-break: break-all;}
                </style>
                <body>
                <p class="resultbox">
                        
                        <?php
                        // This is the data you want to pass to Python
                        $function = $_POST['function'];
                        $data = $_POST['dna'];
    
                        // Execute the python script with one argument
                        // $command = 'python path/to/function.py '
                        $command = 'python Programs/' . $function . '.py ';
                        $result = shell_exec($command . escapeshellarg($data));
    
                        // print
                        echo $result;
                        ?>           
                        
                </p>
                </body>
                <br>
                <br>
                <br>
              
                </div>
            </div>
        </div>
    </section>
    
    <!-- Bug Reporter Section -->
    <section id="bugreporter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Bug Reporter</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Tool</label>
                                <input type="text" class="form-control" placeholder="Tool" id="name" required data-validation-required-message="Please enter a tool.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>About Toolkit</h3>
                        <p>Nucleic Acid Tookit is a free to use<br>open source project found at <a href="https://github.com/anfederico">GitHub</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Nucleic Acid Toolkit 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/bugreporter.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>
</html>