@extends('layouts.main')
@section('container')
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
    <h1>Blog Makanan Gulai Ayam</h1>

    <div class="post">
      <img src="img/gulaiayam.jpeg" alt="Gulai Ayam">
      <h2>Kuliner Lezat dari Sumatera: Gulai Ayam</h2>
      <p>Gulai ayam adalah hidangan khas Sumatera yang terkenal dengan cita rasa kaya rempah. Gulai ayam biasanya dimasak dengan bahan-bahan seperti ayam, santan, dan rempah-rempah yang dihaluskan.</p>
      <p>Rasa gulai ayam yang gurih dan creamy membuatnya cocok disantap bersama nasi hangat. Hidangan ini populer di seluruh Indonesia dan sering dijadikan menu spesial dalam acara-acara tertentu.</p>
    </div>

    <div class="post">
      <img src="img/gulaiayam2.jpeg" alt="Gulai Ayam">
      <h2>Resep Gulai Ayam yang Nikmat</h2>
      <p>Untuk memasak gulai ayam, Anda dapat mengikuti resep sederhana berikut:</p>
      <ol>
        <li>Persiapkan bahan-bahan seperti ayam, santan, bumbu halus, dan rempah-rempah.</li>
        <li>Tumis bumbu halus dan rempah-rempah hingga harum.</li>
        <li>Tambahkan potongan ayam dan aduk hingga ayam berubah warna.</li>
        <li>Tuangkan santan dan masak gulai dengan api kecil hingga bumbu meresap dan ayam matang sempurna.</li>
        <li>Sajikan gulai ayam dengan nasi dan pelengkap lainnya.</li>
      </ol>
    </div>
  </div>
</body>
</html>
@endsection
