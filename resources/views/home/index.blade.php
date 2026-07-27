@extends('layouts.header')

@section('title')
    Home |
@endsection

@section('content')
    
    <div class="mt-3">
         @props([
        'authorsCount' => '250+',
        'booksCount' => '1,500+'
    ])

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 450" width="100%" height="auto">
        <defs>
            <linearGradient id="bgGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#f8fafc"/>
                <stop offset="60%" stop-color="#f1f5f9"/>
                <stop offset="100%" stop-color="#e2f1ed"/>
            </linearGradient>

    <linearGradient id="bookCover1" x1="0%" y1="0%" x2="100%" y2="100%">
      <stop offset="0%" stop-color="#0f766e"/>
      <stop offset="100%" stop-color="#042f2e"/>
    </linearGradient>

    <linearGradient id="bookCover2" x1="0%" y1="0%" x2="100%" y2="100%">
      <stop offset="0%" stop-color="#f59e0b"/>
      <stop offset="100%" stop-color="#b45309"/>
    </linearGradient>

    <linearGradient id="bookCover3" x1="0%" y1="0%" x2="100%" y2="100%">
      <stop offset="0%" stop-color="#2563eb"/>
      <stop offset="100%" stop-color="#1e3a8a"/>
    </linearGradient>

    <filter id="shadow" x="-10%" y="-10%" width="120%" height="120%">
      <feDropShadow dx="0" dy="8" stdDeviation="10" flood-color="#0f766e" flood-opacity="0.12"/>
    </filter>

    <filter id="glow" x="-20%" y="-20%" width="140%" height="140%">
      <feDropShadow dx="0" dy="4" stdDeviation="8" flood-color="#f59e0b" flood-opacity="0.4"/>
    </filter>
  </defs>

  <rect width="1200" height="450" rx="16" fill="url(#bgGradient)"/>

    <circle cx="1120" cy="240" r="200" fill="#0f766e" fill-opacity="0.04"/>
    <circle cx="120" cy="400" r="140" fill="#f59e0b" fill-opacity="0.04"/>

  <!-- Left Side Text & Stats -->
  <g transform="translate(55, 110)">
    <g transform="translate(0, 0)">
      <rect width="210" height="32" rx="16" fill="#d1fae5" opacity="0.9"/>
      <text x="14" y="21" fill="#0f766e" font-family="sans-serif" font-weight="bold" font-size="13">✨ Sanly Kitaphana Batagasy</text>
    </g>

    <text x="0" y="78" fill="#0f766e" font-family="sans-serif" font-weight="bold" font-size="44">Ylym Chyragy</text>
    <text x="0" y="118" fill="#1e293b" font-family="sans-serif" font-weight="bold" font-size="20">Siziň Islendik Wagt Okap Biljek Kitaphanaňyz</text>
    <text x="0" y="144" fill="#64748b" font-family="sans-serif" font-size="15">Müňlerçe elektron kitaplar we iň belli awtorlaryň jemlenen meýdançasy.</text>

    <!-- Dynamic Stats Cards -->
    <g transform="translate(0, 175)">
      <!-- Awtorlar -->
      <g transform="translate(0, 0)" filter="url(#shadow)">
        <rect width="220" height="105" rx="14" fill="#ffffff" stroke="#e2e8f0" stroke-width="1"/>
        <rect width="7" height="105" rx="3" fill="#0f766e"/>
        <circle cx="45" cy="38" r="20" fill="#ccfbf1"/>
        <path d="M 45 27 A 6 6 0 1 1 45 39 A 6 6 0 1 1 45 27 Z M 33 48 C 33 43, 38 41, 45 41 C 52 41, 57 43, 57 48" fill="none" stroke="#0f766e" stroke-width="2.5" stroke-linecap="round"/>
        <text x="80" y="44" fill="#0f766e" font-family="sans-serif" font-weight="bold" font-size="34">{{ $authorsCount }}</text>
        <text x="80" y="68" fill="#475569" font-family="sans-serif" font-weight="bold" font-size="14" letter-spacing="0.5">AWTORLAR</text>
      </g>

      <!-- Kitaplar -->
      <g transform="translate(245, 0)" filter="url(#shadow)">
        <rect width="220" height="105" rx="14" fill="#ffffff" stroke="#e2e8f0" stroke-width="1"/>
        <rect width="7" height="105" rx="3" fill="#f59e0b"/>
        <circle cx="45" cy="38" r="20" fill="#fef3c7"/>
        <path d="M 36 28 L 45 24 L 54 28 L 54 44 L 45 40 L 36 44 Z M 45 24 L 45 40" fill="none" stroke="#d97706" stroke-width="2.5" stroke-linejoin="round"/>
        <text x="80" y="44" fill="#d97706" font-family="sans-serif" font-weight="bold" font-size="34">{{ $booksCount }}</text>
        <text x="80" y="68" fill="#475569" font-family="sans-serif" font-weight="bold" font-size="14" letter-spacing="0.5">KITAPLAR</text>
      </g>
    </g>
  </g>

  <!-- Right Visuals -->
  <g transform="translate(740, 95)">
    <ellipse cx="180" cy="305" rx="180" ry="20" fill="#cbd5e1" opacity="0.4"/>

    <!-- Standing Books -->
    <g transform="translate(30, 80)">
      <rect width="38" height="210" rx="4" fill="url(#bookCover1)"/>
      <rect x="6" y="0" width="4" height="210" fill="#14b8a6" opacity="0.4"/>
      <rect x="12" y="25" width="20" height="4" fill="#f59e0b" rx="1"/>
      <rect x="12" y="34" width="20" height="2" fill="#f59e0b" opacity="0.7" rx="1"/>
      <text x="-135" y="24" fill="#ffffff" font-family="sans-serif" font-weight="bold" font-size="11" transform="rotate(-90)" letter-spacing="1">YLYM CHYRAGY</text>
      <rect x="12" y="175" width="20" height="4" fill="#f59e0b" rx="1"/>
    </g>

    <g transform="translate(74, 50)">
      <rect width="44" height="240" rx="4" fill="url(#bookCover3)"/>
      <rect x="7" y="0" width="5" height="240" fill="#60a5fa" opacity="0.4"/>
      <rect x="14" y="30" width="22" height="4" fill="#ffffff" opacity="0.9" rx="1"/>
      <text x="-160" y="27" fill="#ffffff" font-family="sans-serif" font-weight="bold" font-size="12" transform="rotate(-90)" letter-spacing="1">TÜRKMÊN EDEBIÝATY</text>
      <circle cx="22" cy="195" r="7" fill="#f59e0b"/>
    </g>

    <g transform="translate(126, 90) rotate(14)">
      <rect width="40" height="205" rx="4" fill="url(#bookCover2)"/>
      <rect x="6" y="0" width="4" height="205" fill="#fde047" opacity="0.5"/>
      <text x="-130" y="25" fill="#ffffff" font-family="sans-serif" font-weight="bold" font-size="11" transform="rotate(-90)" letter-spacing="1">DÜNÝÄ EDEBIÝATY</text>
    </g>

    <!-- Stacked Books -->
    <g transform="translate(185, 180)">
      <rect x="0" y="70" width="180" height="32" rx="4" fill="#1e293b"/>
      <rect x="16" y="74" width="160" height="24" fill="#f8fafc"/>
      <rect x="0" y="70" width="20" height="32" fill="#0f766e" rx="2"/>

      <rect x="12" y="40" width="165" height="30" rx="4" fill="#b45309"/>
      <rect x="26" y="44" width="147" height="22" fill="#f8fafc"/>
      <rect x="12" y="40" width="18" height="30" fill="#f59e0b" rx="2"/>

      <g transform="translate(20, -15)">
        <path d="M 10 38 Q 60 22 110 38 L 110 54 Q 60 40 10 54 Z" fill="#e2e8f0"/>
        <path d="M 110 38 Q 160 22 210 38 L 210 54 Q 160 40 110 54 Z" fill="#ffffff"/>
        <path d="M 10 38 Q 60 22 110 38 Q 160 22 210 38 L 205 35 Q 160 19 110 33 Q 60 19 15 35 Z" fill="#0f766e"/>
        <g transform="translate(75, 20)">
          <circle cx="18" cy="10" r="10" fill="none" stroke="#d97706" stroke-width="2.5"/>
          <circle cx="42" cy="10" r="10" fill="none" stroke="#d97706" stroke-width="2.5"/>
          <path d="M 28 10 Q 30 7 32 10" stroke="#d97706" stroke-width="2.5" fill="none"/>
          <path d="M 8 10 L 0 5" stroke="#d97706" stroke-width="2" fill="none"/>
          <path d="M 52 10 L 60 5" stroke="#d97706" stroke-width="2" fill="none"/>
        </g>
      </g>
    </g>

    <!-- Sparkles -->
    <g transform="translate(140, 20)">
      <path d="M 180 -10 L 185 2 L 197 2 L 187 10 L 191 22 L 180 14 L 169 22 L 173 10 L 163 2 L 175 2 Z" fill="#f59e0b" filter="url(#glow)"/>
      <path d="M 60 -25 L 63 -18 L 70 -18 L 65 -13 L 67 -6 L 60 -10 L 53 -6 L 55 -13 L 50 -18 L 57 -18 Z" fill="#14b8a6"/>
      <circle cx="-10" cy="65" r="4" fill="#f59e0b"/>
      <circle cx="45" cy="-2" r="3" fill="#0f766e"/>
    </g>
  </g>
</svg>
    </div>

    <div>
        <div class="h4 text-dark mt-3 mb-2 fw-bold">
            Top Taze kitaplar <i class="bi bi-arrow-right text-success fw-bold"></i>
        </div>

        <div class="row row-cols-1 row-cols-lg-5">
            @foreach ($newbooks as $book)
                @include('app.book-card')
            @endforeach
        </div>
    </div>

    <div>
        <div class="h4 text-dark mt-3 mb-2 fw-bold">
            Top Halanylanlar <i class="bi bi-arrow-right text-success fw-bold"></i>
        </div>

        <div class="row row-cols-1 row-cols-lg-5">
            @foreach ($topLikedbooks as $book)
                @include('app.book-card')
            @endforeach
        </div>
    </div>

    <div>
        <div class="h4 text-dark mt-3 mb-2 fw-bold">
            Awtorlar <i class="bi bi-arrow-right text-success fw-bold"></i>
        </div>
        <div class="row row-cols-1 row-cols-lg-5">
            @foreach ($authors as $author)
                @include('app.author-card')
            @endforeach
        </div>
    </div>

   
@endsection