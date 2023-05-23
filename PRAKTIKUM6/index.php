<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
    <style>
    .container {
          display: flex;
          justify-content: center;
      }
      .btn {
        margin: 10px;
        text-decoration: none;
        background-color: #0d6efd;
        font-size: 16px;
        padding: 10px 20px;
        border-radius: 10px;
        color: white;
      } 
    </style>
  </head>
  <body>
  <center>
        <h1>Selamat Datang</h1>
        <br>
      <table class="table">
        <tr>
          <td>Nama: <?=$nama?></td>
        </tr>
        <tr>
          <td>NIM: <?=$nim?></td>
      </table>
      </center>
    <div class="container">
      <a class="btn btn-primary rounded-5" id="home-tab2" 
      href="/home/index" role="button" aria-selected="true">Beranda</a>
      <a class="btn btn-secondary rounded-5" id="profile-tab2" 
      href="/home/profil" role="button" aria-selected="false">Profile</a>
    </div>  
  </body>
</html>
