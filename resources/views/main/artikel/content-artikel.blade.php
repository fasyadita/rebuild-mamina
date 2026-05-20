@extends('main.layouts.app')

@section('title', 'Artikel & Tips - Mamina')

@section('content')

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Detail Artikel</title>

  <style>
    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
      font-family: Arial, sans-serif;
    }

    body{
      background:#f6f1ea;
      padding:20px;
      color:#444;
    }

    .container{
      display:flex;
      gap:20px;
      max-width:1200px;
      margin:auto;
    }

    /* CONTENT */
    .content{
      flex:3;
      background:#f4dede;
      padding:20px;
      border-radius:12px;
    }

    .meta{
      display:flex;
      gap:10px;
      margin-bottom:15px;
      flex-wrap:wrap;
    }

    .meta span{
      background:#e7caca;
      padding:6px 12px;
      border-radius:20px;
      font-size:12px;
      color:#666;
    }

    .title{
      font-size:32px;
      color:#5fa59d;
      margin-bottom:20px;
      line-height:1.3;
      font-weight:bold;
    }

    .hero-image{
      width:100%;
      height:350px;
      border-radius:12px;
      object-fit:cover;
      margin-bottom:20px;
    }

    .article-text{
      column-count:2;
      column-gap:30px;
      text-align:justify;
      line-height:1.8;
      font-size:15px;
    }

    /* SIDEBAR */
    .sidebar{
      flex:1;
      background:#f4dede;
      padding:20px;
      border-radius:12px;
      height:fit-content;
    }

    .sidebar h3{
      margin-bottom:15px;
      color:#666;
    }

    .tags{
      display:flex;
      flex-wrap:wrap;
      gap:10px;
      margin-bottom:30px;
    }

    .tag{
      border:1px solid #d7b7b7;
      padding:6px 12px;
      border-radius:20px;
      font-size:12px;
      color:#777;
      background:#f9eeee;
    }

    .related-item{
      display:flex;
      gap:10px;
      margin-bottom:15px;
      background:#f9eeee;
      padding:10px;
      border-radius:10px;
      cursor:pointer;
      transition:0.3s;
    }

    .related-item:hover{
      transform:translateY(-2px);
    }

    .related-item img{
      width:80px;
      height:60px;
      object-fit:cover;
      border-radius:8px;
    }

    .related-info small{
      color:#999;
      display:block;
      margin-bottom:5px;
    }

    .related-info h4{
      font-size:14px;
      color:#5fa59d;
      line-height:1.4;
    }

    @media(max-width:900px){
      .container{
        flex-direction:column;
      }

      .article-text{
        column-count:1;
      }
    }
  </style>
</head>

<body>

  <div class="container">

    <!-- CONTENT -->
    <div class="content">

      <div class="meta">
        <span>👤 Nabila Azzahra</span>
        <span>Perawatan Bayi</span>
        <span>27/02/2026</span>
      </div>

      <h1 class="title">
        Manfaat Baby Spa untuk Bayi: Rahasia Stimulasi Tumbuh
        Kembang dan Kualitas Tidur yang Lebih Optimal
      </h1>

      <img 
        src="https://images.unsplash.com/photo-1515488042361-ee00e0ddd4e4?q=80&w=1200&auto=format&fit=crop"
        alt="Baby Spa"
        class="hero-image"
      />

      <div class="article-text">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Sed deleniti tempora incidunt ut labore et dolore magna
          aliqua. Ut enim ad minim veniam, quis nostrum exercitationem
          ullam corporis nisi ut aliquid ex ea commodi consequatur.
          Duis aute irure dolor in reprehenderit in voluptate velit
          esse cillum dolore eu fugiat nulla pariatur.
        </p>

        <p>
          Excepteur sint occaecat cupidatat non proident, sunt in
          culpa qui officia deserunt mollit anim id est laborum.
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Sed do eiusmod tempor incididunt ut labore et dolore magna
          aliqua. Ut enim ad minim veniam, quis nostrud exercitation
          ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>

        <p>
          Duis aute irure dolor in reprehenderit in voluptate velit
          esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
          occaecat cupidatat non proident, sunt in culpa qui officia
          deserunt mollit anim id est laborum.
        </p>

        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Sed do eiusmod tempor incididunt ut labore et dolore magna
          aliqua. Ut enim ad minim veniam, quis nostrud exercitation
          ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
      </div>

    </div>

    <!-- SIDEBAR -->
    <aside class="sidebar">

      <h3>Semua Tag</h3>

      <div class="tags">
        <div class="tag">Perawatan Bayi</div>
        <div class="tag">ASI Lancar</div>
        <div class="tag">Pijat Laktasi</div>
        <div class="tag">Perawatan Nifas</div>
        <div class="tag">Kesehatan Ibu</div>
        <div class="tag">Pijat Ibu</div>
        <div class="tag">Pijat Laktasi</div>
        <div class="tag">Perawatan Nifas</div>
      </div>

      <h3>Artikel Terkait</h3>

      <a href="{{ route('artikel.detail') }}" class="no-underline block">
        <div class="related-item">
          <img 
            src="https://images.unsplash.com/photo-1515488042361-ee00e0ddd4e4?q=80&w=400&auto=format&fit=crop"
            alt=""
          />

          <div class="related-info">
            <small>27/02/2026</small>
            <h4>Manfaat Baby Spa Untuk Bayi</h4>
          </div>
        </div>
      </a>

      <a href="{{ route('artikel.detail') }}" class="no-underline block">
        <div class="related-item">
          <img 
            src="https://images.unsplash.com/photo-1515488042361-ee00e0ddd4e4?q=80&w=400&auto=format&fit=crop"
            alt=""
          />

          <div class="related-info">
            <small>27/02/2026</small>
            <h4>Manfaat Baby Spa Untuk Bayi</h4>
          </div>
        </div>
      </a>

      <a href="{{ route('artikel.detail') }}" class="no-underline block">
        <div class="related-item">
          <img 
            src="https://images.unsplash.com/photo-1515488042361-ee00e0ddd4e4?q=80&w=400&auto=format&fit=crop"
            alt=""
          />

          <div class="related-info">
            <small>27/02/2026</small>
            <h4>Manfaat Baby Spa Untuk Bayi</h4>
          </div>
        </div>
      </a>

    </aside>

  </div>

</body>
</html>

@endsection