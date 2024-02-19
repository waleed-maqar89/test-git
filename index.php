<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <H1 id="siteTitle">GIT training</H1>
  <div class="product-container">
    <?php $count = 7;
    for ($i = 1; $i <= $count; $i++) :
    ?>
    <div class="product-card">
      <h1>Test product <?= $i ?></h1>
      <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus nulla magnam ipsa amet modi minima distinctio
        sint quidem, labore reprehenderit omnis tempore blanditiis cumque deleniti consequatur tenetur quo a. Saepe.
      </p>
    </div>
    <?php endfor; ?>
  </div>
  <script src="main.js"></script>
</body>

</html>