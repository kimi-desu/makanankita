<?php $__env->startSection('container'); ?>
<!DOCTYPE html>
<html>
<head>
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
    <h1>Blog Makanan Gulai Tambusu</h1>

    <div class="post">
      <img src="img/tambusu.jpeg" alt="Gulai Tambusu">
      <h2>Gulai Tambusu: Kelezatan Khas Sumatera Barat</h2>
      <p>Gulai Tambusu adalah hidangan khas Sumatera Barat yang terkenal dengan perpaduan rasa pedas, gurih, dan rempah-rempah yang khas. Gulai ini terbuat dari bahan utama seperti daging sapi, santan kelapa, dan rempah-rempah seperti lengkuas, kunyit, dan cabai.</p>
      <p>Gulai Tambusu memiliki cita rasa yang kaya dan kompleks. Daging sapi yang dimasak dengan santan dan rempah-rempah memberikan rasa yang lezat dan aroma yang menggugah selera. Gulai Tambusu biasanya disajikan dengan nasi hangat dan pelengkap seperti kerupuk atau acar.</p>
      <div class="details">
        <span class="author">Oleh: John Doe</span>
        <span class="date">12 Juni 2023</span>
      </div>
    </div>

    <!-- Tambahkan posting lainnya di sini -->

  </div>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tugas-tugas\koding\application\project1\resources\views/gulaitambusu.blade.php ENDPATH**/ ?>