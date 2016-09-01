<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>CC STUDIO 2.0</title>

    <!-- Vendor styles -->
    <link rel="stylesheet" href="../fontawesome/css/font-awesome.css" />
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="../fullcalendar/dist/fullcalendar.print.css" media='print'/>
    <link rel="stylesheet" href="../fullcalendar/dist/fullcalendar.min.css" />
    <link rel="stylesheet" href="../app-your-style.css" />

  
<body>
</head>
<div id="wrapper">
<div class="content">
<div class="row">
    <div class="col-lg-12">
      <div id='loading'>loading...</div>
      <div class="panel-body">
          <div id="calendar"></div>
          <?php include'demos/json.php'; ?>
      </div>

    </div>
</div>
    </div>

    <!-- Footer-->
    <footer class="footer">
        <span class="pull-right">
            Example text
        </span>
        Company 2015-2020
    </footer>

</div>

<!-- Vendor scripts -->
<script src="js/jquery.min.js"></script>
<script src="jquery-ui.min.js"></script>

<script src="../bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../moment/min/moment.min.js"></script>
<script src="../fullcalendar/dist/fullcalendar.min.js"></script>

<!-- App scripts -->
<script src="../app-your-style.js"></script>
</body>
</html>
