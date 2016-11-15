
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Cover Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">
          <div class="inner cover">
            <h1 class="cover-heading">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h1>Embedded Operating Systems 2016</h1>
                </div>
              </div>
            </h1>
            <p class="lead">
              <div class="panel panel-primary">
                <div class="panel-heading">Led Example:</div>
                <div class="panel-body">
                  <div class="btn-group" role="group" aria-label="...">
                    <button type="button" class="btn btn-success">Start</button>
                    <button type="button" class="btn btn-danger">Stop</button>
                  </div>
                </div>
              </div>
            </p>
            <p class="lead">
              <div class="panel panel-primary">
                <div class="panel-heading">Lumen:</div>
                <div class="panel-body">
                  <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                      60%
                    </div>
                  </div>
                </div>
              </div>
            </p>
            <p class="lead">
              <div class="panel panel-primary">
                <div class="panel-heading">Temperature:</div>
                <div class="panel-body">
                  <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                      <?php
                      $output=array();
                      $rv=0;
                      exec('sudo ~/rpiShieldDriver/ADT7310/./program 2>&1',$output,$rv);
                      //echo(%rv);
                      foreach($output as $line)
                      {
                        echo("$line\t");
                      }
                       ?>
                    </div>
                  </div>
                </div>
              </div>
            </p>
            <p class="lead">
              <div class="panel panel-primary">
                <div class="panel-heading">Userspace Driver:</div>
                <div class="panel-body">
                  <div class="btn-group" role="group" aria-label="...">
                    <button type="button" class="btn btn-success">Start</button>
                    <button type="button" class="btn btn-danger">Stop</button>
                  </div>
                </div>
              </div>
            </p>
            <p class="lead">
              <div class="panel panel-primary">
                <div class="panel-heading">Kernelspace Driver:</div>
                <div class="panel-body">
                  <div class="btn-group" role="group" aria-label="...">
                    <button type="button" class="btn btn-success">Aan</button>
                    <button type="button" class="btn btn-danger">Uit</button>
                  </div>
                </div>
              </div>
            </p>
          </div>
        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
