<?php $__env->startSection('container'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Blog Makanan Nasi Padang</title>
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
    <h1>Blog Makanan Nasi Padang</h1>

    <div class="post">
      <img src="img/nasipadang.jpeg" alt="Nasi Padang">
      <h2>Nikmatnya Nasi Padang Khas Sumatera</h2>
      <p>Nasi Padang adalah hidangan khas Sumatera yang terkenal dengan ragam hidangannya yang beragam dan penuh dengan cita rasa. Nasi Padang biasanya terdiri dari nasi putih yang disajikan dengan berbagai macam lauk-pauk seperti rendang, gulai, ayam pop, dan sambal.</p>
      <p>Hidangan Nasi Padang terkenal dengan cita rasa gurih, pedas, dan kaya rempah. Biasanya disajikan dengan gaya hidangan "hidang" di mana hidangan-hidangan tersebut diletakkan di atas meja dan pelanggan dapat memilih hidangan yang mereka inginkan.</p>
      </div>
    </div>

    <div class="post">
      <img src="img/nasipadang2.jpeg" alt="Nasi Padang">
      <h2>Nikmatnya Sensasi Makan Nasi Padang</h2>
      <p>Makan nasi Padang bukan hanya tentang cita rasa yang lezat, tetapi juga tentang pengalaman yang unik. Dengan beragam hidangan yang disajikan, Anda dapat mencoba berbagai kombinasi dan menikmati kelezatan setiap hidangan.</p>
      <p>Nasi Padang juga memberikan kesan budaya dan tradisi dari Sumatera. Dari penyajiannya yang khas hingga keberagaman hidangannya, makan nasi Padang akan memuaskan selera dan menawarkan pengalaman kuliner yang tak terlupakan.</p>
      <div class="details">
      </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tugas-tugas\koding\application\project1\resources\views/nasipadang.blade.php ENDPATH**/ ?>