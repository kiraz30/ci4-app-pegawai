<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Pegawai</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <style>
    html, body {
      height: 100%;
    }
    body {
      display: flex;
      flex-direction: column;
    }

  </style>
</head>
<body>

<!-- navbar -->
 <?= $this->include('layouts/navbar');?>
<!-- content -->
<div class="container">
    <?= $this->renderSection('content');?>
</div>

<!-- footer -->
<footer class="text-center mt-auto py-3 bg-body-tertiary">
  <!-- Copyright -->
  <div class="container text-center p-3">
    <span>
    © 2020 Copyright:
    </span>
  </div>
  <!-- Copyright -->
</footer>

<script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>