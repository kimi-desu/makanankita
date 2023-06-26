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
    <h1>Blog Makanan Sate Padang</h1>

    <div class="post">
      <img src="img/satepadang.jpeg" alt="Sate Padang">
      <h2>Nikmatnya Sate Padang Khas Sumatera Barat</h2>
      <p>Sate Padang adalah hidangan khas Sumatera Barat yang terkenal dengan rasa kaya rempah dan bumbu kacang yang lezat. Potongan daging yang ditusuk pada tusukan bambu kemudian dipanggang hingga matang sempurna.</p>
      <p>Sate Padang biasanya disajikan dengan kuah khas yang gurih dan pedas. Hidangan ini sangat populer di Indonesia dan sering dijadikan makanan favorit dalam acara-acara tertentu.</p>
    </div>

    <div class="post">
      <img src="img/satepadang2.jpeg" alt="Sate Padang">
      <h2>Resep Sate Padang yang Menggugah Selera</h2>
      <p>Berikut adalah resep sederhana untuk membuat Sate Padang:</p>
      <ol>
        <li>Persiapkan bahan-bahan seperti daging sapi, tusuk sate, bumbu marinasi, dan bumbu kacang.</li>
        <li>Marinasi potongan daging sapi dengan bumbu marinasi selama beberapa jam.</li>
        <li>Tusukkan potongan daging pada tusuk sate dan panggang hingga matang.</li>
        <li>Sajikan sate dengan kuah kacang, ketupat, dan bawang merah goreng.</li>
      </ol>
    </div>
  </div>
</body>
</html>
@endsection
