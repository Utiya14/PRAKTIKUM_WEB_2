<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
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
      img {
        width : 120px;
      }
    </style>
  </head>
  <body>
    <center>
      <h1>Profil Mahasiswa</h1>
      <br>
      <?php 
        
      ?>
      <img src="<?= base_url('image/utiya.jpeg')?>" alt="">
      <table>
        <tr>
          <td><?php ?></td>
        </tr>
        <tr>
          <td>Nama: <?=$nama?></td>
        </tr>
        <tr>
          <td>NIM: <?=$nim?></td>
        </tr>
        <tr>
          <td>Asal Prodi: <?=$asal_prodi?></td>
        </tr>
        <tr>
          <td>Hobi: <?=$hoby?></td>
        </tr>
        <tr>
          <td>Skill: <?=$skill?></td>
        </tr>
      </table>
    </center>
    <div class="container">
      <a class="btn btn-primary rounded-5" id="home-tab2" href="/home/index" role="button" aria-selected="true">Beranda</a>
      <a class="btn btn-secondary rounded-5" id="profile-tab2" href="/home/profil" role="button" aria-selected="false">Profile</a>
    </div>
  </body>
</html>
