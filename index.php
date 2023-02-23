<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <title>Home</title>
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

    :root {
      --black: #192a56;
      --light-color: #666;
      --box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
      --primary-color: rgba(197, 125, 0, 0.799);
      --secondary-color: #fff;
    }

    * {
      font-family: 'Nunito', sans-serif;
      box-sizing: border-box;
    }

    body {
      background-color: var(--primary-color);
    }

    section {
      display: flex;
      justify-content: center;
      margin-top: 10%;
      width: 100%;
      height: 100%;
    }

    .main {
      width: 90vw;
      display: flex;
      justify-content: space-between;
    }

    .left {
      font-size: 25px;
    }

    .left h5 {
      text-transform: uppercase;
    }

    .left a {
      text-decoration: none;
      color: black;
      text-transform: uppercase;
      padding: 10px;
      font-weight: bold;
      border-radius: 10px;
      background-color: #c5d2db;
    }

    .left a:hover {
      color: #c5d2db;
      font-size: 30px;
      background-color: chocolate;
    }
  </style>
</head>

<body>
  <section>
    <div class="main">
      <div class="left">
        <h5>fast food</h5>
        <h2>Order Sekarang dan Rasakan kenikmatannya</h2>
        <a href="Home.php">Order now</a>
      </div>
      <div class="right">
        <img src="image/bb.png" alt="">
      </div>
    </div>
  </section>
</body>

</html>