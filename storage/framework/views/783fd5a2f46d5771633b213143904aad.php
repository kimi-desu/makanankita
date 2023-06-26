<?php
$nama = "Mohammad hakimi/kimi";
$pekerjaan = "Pelajar";
$minat = "tidur";
$facebook = "https://www.facebook.com/mohammad.hakimi.39904181";
$twitter = "https://www.twitter.com/mohakimi2005";
$instagram = "https://www.instagram.com/otherkimi";
?>


<?php $__env->startSection('container'); ?>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f7f7f7;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 40px;
      text-align: center;
    }
    h1 {
      color: #333;
      font-size: 32px;
      margin-bottom: 20px;
    }
    p {
      color: #666;
      font-size: 18px;
      line-height: 1.5;
      margin-bottom: 30px;
    }
    .profile-pic {
      border-radius: 50%;
      width: 200px;
      height: 200px;
      margin-bottom: 20px;
    }
    .social-icons {
      margin-top: 20px;
    }
    .social-icons a {
      display: inline-block;
      width: 30px;
      height: 30px;
      margin-right: 10px;
      border-radius: 50%;
      background-color: #333;
      color: #fff;
      line-height: 30px;
      text-align: center;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <img class="profile-pic" src="img/emu.png" alt="Foto Profil">
    <h1>Tentang Saya</h1>
    <p>Halo, nama saya <?php echo $nama; ?>. Saya adalah <?php echo $pekerjaan; ?>. Saya senang <?php echo $minat; ?>.</p>
    <div class="social-icons">
      <a href="<?php echo $facebook; ?>" target="_blank">FB</a>
      <a href="<?php echo $twitter; ?>" target="_blank">TW</a>
      <a href="<?php echo $instagram; ?>" target="_blank">IG</a>
      <!-- Ganti tautan di atas dengan akun media sosial Anda -->
    </div>
  </div>
</body>
</html>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tugas-tugas\koding\application\project1\resources\views/about.blade.php ENDPATH**/ ?>