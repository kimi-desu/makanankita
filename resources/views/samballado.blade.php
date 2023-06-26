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
    <h1>Blog Makanan Sambal Lado</h1>

    <div class="post">
      <img src="img/samballado.jpeg" alt="Sambal Lado">
      <h2>Sambal Lado: Sambal Pedas Khas Minang</h2>
      <p>Sambal Lado adalah sambal khas Minang yang terkenal dengan tingkat kepedasannya yang tinggi. Sambal ini terbuat dari cabai hijau besar yang digoreng hingga renyah, kemudian diolah dengan bumbu dan rempah-rempah yang khas.</p>
      <p>Sambal Lado memiliki cita rasa pedas yang kuat dengan rasa segar dan sedikit asam. Biasanya disajikan sebagai pelengkap hidangan Nasi Padang atau hidangan lainnya. Sambal Lado dapat meningkatkan rasa makanan dan memberikan sensasi pedas yang menggugah selera.</p>
    </div>

    <div class="post">
      <img src="img/samballado2.png" alt="Sambal Lado">
      <h2>Resep Sambal Lado yang Pedas dan Lezat</h2>
      <p>Berikut adalah resep sederhana untuk membuat Sambal Lado:</p>
      <ol>
        <li>Persiapkan bahan-bahan seperti cabai hijau besar, bawang merah, bawang putih, garam, gula, dan minyak.</li>
        <li>Goreng cabai hijau hingga renyah, lalu tiriskan dan haluskan.</li>
        <li>Tumis bawang merah dan bawang putih hingga harum.</li>
        <li>Tambahkan cabai yang sudah dihaluskan, garam, dan gula. Aduk rata dan masak hingga matang.</li>
        <li>Angkat dan sajikan Sambal Lado sebagai pelengkap hidangan.</li>
      </ol>
    </div>

    <!-- Tambahkan posting lainnya di sini -->

  </div>
</body>
</html>
@endsection
