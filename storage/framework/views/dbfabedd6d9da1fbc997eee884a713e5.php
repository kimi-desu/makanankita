<?php $__env->startSection('container'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Blog Makanan Rendang</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }
    h1 {
      text-align: center;
    }
    .post {
      margin-bottom: 40px;
    }
    .post img {
      display: block;
      max-width: 100%;
      height: auto;
      margin: 0 auto 10px;
    }
    .post h2 {
      margin-top: 0;
    }
    .post p {
      line-height: 1.5;
    }
    .post .details {
      font-size: 14px;
      color: #888;
    }
    .post .author {
      font-style: italic;
    }
    .post .date {
      margin-left: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Blog Makanan Rendang</h1>

    <div class="post">
      <img src="img/rendang.jpeg" alt="Rendang">
      <h2>Kenikmatan Rendang yang Menggugah Selera</h2>
      <p>Rendang adalah masakan khas Indonesia yang terkenal di seluruh dunia. Rasanya yang kaya, daging yang lembut, dan rempah-rempah yang harum membuat rendang menjadi favorit banyak orang.</p>
      <p>Proses memasak rendang membutuhkan kesabaran, dengan daging yang dimasak dalam campuran bumbu rempah yang kaya selama berjam-jam. Hasilnya adalah rendang yang lezat dan menggigit.</p>
    </div>

    <div class="post">
      <img src="img/rendang2.png" alt="Rendang">
      <h2>Resep Rendang Sederhana</h2>
      <p>Berikut adalah resep sederhana untuk memasak rendang:</p>
      <ol>
        <li>Persiapkan bahan-bahan seperti daging sapi, bumbu rendang, santan, dan rempah-rempah.</li>
        <li>Panaskan minyak dan tumis bumbu rendang hingga harum.</li>
        <li>Tambahkan daging sapi dan aduk hingga daging berubah warna.</li>
        <li>Tuangkan santan dan masak rendang dengan api kecil hingga bumbu meresap dan daging menjadi empuk.</li>
        <li>Sajikan rendang dengan nasi hangat.</li>
      </ol>
    </div>

    <div class="post">
      <img src="img/rendang3.jpeg" alt="Rendang">
      <h2>Variasi Rendang yang Lezat</h2>
      <p>Rendang tidak hanya memiliki satu varian saja. Ada beberapa variasi rendang yang dapat Anda coba, seperti rendang padang, rendang daging kambing, atau rendang ayam.</p>
      <p>Masing-masing variasi rendang memiliki cita rasa dan karakteristik unik, tetapi tetap mempertahankan esensi dari rendang yang lezat.</p>
    </div>

    <!-- Tambahkan posting lainnya di sini -->

  </div>
</body>
</html>


        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tugas-tugas\koding\application\project1\resources\views/rendang.blade.php ENDPATH**/ ?>