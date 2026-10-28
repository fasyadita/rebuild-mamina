@extends('main.layouts.app')

@section('title', 'Detail Artikel - Mamina')

@section('content')

<div class="article-page-wrapper">
  <div class="article-container">

    <!-- CONTENT -->
    <div class="article-main-content">

      <div class="article-meta">
        <span>👤 Nabila Azzahra</span>
        <span>Perawatan Bayi</span>
        <span>27/02/2026</span>
      </div>

      <h1 class="article-title">
        Manfaat Baby Spa untuk Bayi: Rahasia Stimulasi Tumbuh
        Kembang dan Kualitas Tidur yang Lebih Optimal
      </h1>

      <img
        src="https://images.unsplash.com/photo-1515488042361-ee00e0ddd4e4?q=80&w=1200&auto=format&fit=crop"
        alt="Baby Spa"
        class="article-hero-image" />

      <div class="article-body-text">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Sed deleniti tempora incidunt ut labore et dolore magna
          aliqua. Ut enim ad minim veniam, quis nostrum exercitationem
          ullam corporis nisi ut aliquid ex ea commodi consequatur.
          Duis aute irure dolor in reprehenderit in voluptate velit
          esse cillum dolore eu fugiat nulla pariatur.
        </p>
        <br>
        <p>
          Excepteur sint occaecat cupidatat non proident, sunt in
          culpa qui officia deserunt mollit anim id est laborum.
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Sed do eiusmod tempor incididunt ut labore et dolore magna
          aliqua. Ut enim ad minim veniam, quis nostrud exercitation
          ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
        <br>
        <p>
          Duis aute irure dolor in reprehenderit in voluptate velit
          esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
          occaecat cupidatat non proident, sunt in culpa qui officia
          deserunt mollit anim id est laborum.
        </p>
        <br>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Sed do eiusmod tempor incididunt ut labore et dolore magna
          aliqua. Ut enim ad minim veniam, quis nostrud exercitation
          ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
      </div>

    </div>

    <!-- SIDEBAR -->
    <aside class="article-sidebar">

      <h3>Semua Tag</h3>

      <div class="article-tags">
        <div class="article-tag">Perawatan Bayi</div>
        <div class="article-tag">ASI Lancar</div>
        <div class="article-tag">Pijat Laktasi</div>
        <div class="article-tag">Perawatan Nifas</div>
        <div class="article-tag">Kesehatan Ibu</div>
        <div class="article-tag">Pijat Ibu</div>
      </div>

      <h3>Artikel Terkait</h3>

      <a href="{{ route('artikel.detail') }}" style="text-decoration:none;">
        <div class="article-related-item">
          <img
            src="https://images.unsplash.com/photo-1515488042361-ee00e0ddd4e4?q=80&w=400&auto=format&fit=crop"
            alt="" />

          <div class="article-related-info">
            <small>27/02/2026</small>
            <h4>Manfaat Baby Spa Untuk Bayi</h4>
          </div>
        </div>
      </a>

      <a href="{{ route('artikel.detail') }}" style="text-decoration:none;">
        <div class="article-related-item">
          <img
            src="https://images.unsplash.com/photo-1515488042361-ee00e0ddd4e4?q=80&w=400&auto=format&fit=crop"
            alt="" />

          <div class="article-related-info">
            <small>27/02/2026</small>
            <h4>Manfaat Baby Spa Untuk Bayi</h4>
          </div>
        </div>
      </a>

      <a href="{{ route('artikel.detail') }}" style="text-decoration:none;">
        <div class="article-related-item">
          <img
            src="https://images.unsplash.com/photo-1515488042361-ee00e0ddd4e4?q=80&w=400&auto=format&fit=crop"
            alt="" />

          <div class="article-related-info">
            <small>27/02/2026</small>
            <h4>Manfaat Baby Spa Untuk Bayi</h4>
          </div>
        </div>
      </a>

    </aside>

  </div>
</div>

@endsection

@push('styles')
<style>
  .article-page-wrapper {
    background: #f6f1ea;
    padding: 40px 20px;
    color: #444;
    font-family: Arial, sans-serif;
    min-height: 100vh;
  }

  .article-container {
    display: flex;
    gap: 20px;
    max-width: 1200px;
    margin: auto;
  }

  /* CONTENT */
  .article-main-content {
    flex: 3;
    background: #f4dede;
    padding: 20px;
    border-radius: 12px;
  }

  .article-meta {
    display: flex;
    gap: 10px;
    margin-bottom: 15px;
    flex-wrap: wrap;
  }

  .article-meta span {
    background: #e7caca;
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 12px;
    color: #666;
  }

  .article-title {
    font-size: 32px;
    color: #5fa59d;
    margin-bottom: 20px;
    line-height: 1.3;
    font-weight: bold;
  }

  .article-hero-image {
    width: 100%;
    height: 350px;
    border-radius: 12px;
    object-fit: cover;
    margin-bottom: 20px;
  }

  .article-body-text {
    column-count: 2;
    column-gap: 30px;
    text-align: justify;
    line-height: 1.8;
    font-size: 15px;
  }

  /* SIDEBAR */
  .article-sidebar {
    flex: 1;
    background: #f4dede;
    padding: 20px;
    border-radius: 12px;
    height: fit-content;
  }

  .article-sidebar h3 {
    margin-bottom: 15px;
    color: #666;
  }

  .article-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 30px;
  }

  .article-tag {
    border: 1px solid #d7b7b7;
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 12px;
    color: #777;
    background: #f9eeee;
  }

  .article-related-item {
    display: flex;
    gap: 10px;
    margin-bottom: 15px;
    background: #f9eeee;
    padding: 10px;
    border-radius: 10px;
    cursor: pointer;
    transition: 0.3s;
  }

  .article-related-item:hover {
    transform: translateY(-2px);
  }

  .article-related-item img {
    width: 80px;
    height: 60px;
    object-fit: cover;
    border-radius: 8px;
  }

  .article-related-info small {
    color: #999;
    display: block;
    margin-bottom: 5px;
  }

  .article-related-info h4 {
    font-size: 14px;
    color: #5fa59d;
    line-height: 1.4;
  }

  /* RESPONSIVE DESIGN */
  @media(max-width:900px) {
    .article-container {
      flex-direction: column;
    }

    .article-body-text {
      column-count: 1;
    }
  }

  @media(max-width:600px) {
    .article-page-wrapper {
      padding: 20px 10px;
    }

    .article-container {
      gap: 15px;
    }

    .article-main-content,
    .article-sidebar {
      padding: 15px;
    }

    .article-title {
      font-size: 24px;
      margin-bottom: 15px;
    }

    .article-hero-image {
      height: 220px;
      margin-bottom: 15px;
    }

    .article-body-text {
      font-size: 14px;
    }

    .article-meta {
      gap: 8px;
      margin-bottom: 12px;
    }

    .article-meta span {
      padding: 4px 10px;
      font-size: 11px;
    }
  }
</style>
@endpush