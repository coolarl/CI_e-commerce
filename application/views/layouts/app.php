<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
    <meta name="generator" content="Jekyll v3.8.5" />
    <title><?= isset($title) ? $title :'CIshop' ?> E-commerce</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/navbar-fixed/" />

    <!-- Bootstrap core CSS -->
    <link href="/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/app.css" />
    <style></style>
    <!-- Custom styles for this template -->
    <!--font-->
    <link rel="stylesheet" href="/assets/libs/fontawesome/css/all.min.css" />
  </head>
  <body>
  
    <?php $this->load->view('layouts/_navbar');?>
    <?php $this->load->view($page); ?>

    <script src="/assets/libs/jquery/jquery-3.7.1.min.js"></script>
    <script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/app.js"></script>
  </body>
</html>