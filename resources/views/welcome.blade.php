<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/logo.svg" />
    <title>Traktir - Membantu creator media sosial</title>
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/welcome.js'])
</head>

<body class="is-boxed has-animations">
    <div class="body-wrap">
        <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
                            <a href="#" class="text-decoration-none d-inline-flex align-items-center">
                                <img class="header-logo-image" src="/logo.svg" alt="Logo">
                                <span class="text-sm p-2 text-white">Traktir</span>
                            </a>
                        </h1>
                    </div>
                    <div class="position-relative z-100">
                        <a role="button" href="{{ route('register') }}" class="text-decoration-none">
                            <button class="btn btn-primary">Daftar</button>
                        </a>
                        <a role="button" href="{{ route('login') }}" class="text-decoration-none">
                            <button class="btn">Masuk</button>
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class="hero">
                <div class="container">
                    <div class="hero-inner">
                        <div class="hero-copy">
                            <h1 class="hero-title mt-0">Membantu <i>creator</i> media sosial</h1>
                            <p class="hero-paragraph">Tidak perlu lagi bergantung pada iklan atau sponsor. Dapatkan
                                dukungan finansial langsung dari penggemar Anda dengan bantuan kami.</p>
                            <div class="hero-cta">
                                <a class="btn btn-primary" href="{{ route('register') }}">Daftar sekarang</a>
                                <a class="btn" href="{{ route('login') }}">Masuk</a>
                            </div>
                        </div>
                        <div class="hero-figure anime-element">
                            <div class="hero-figure-box hero-figure-box-01" data-rotation="45deg"></div>
                            <div class="hero-figure-box hero-figure-box-02" data-rotation="-45deg"></div>
                            <div class="hero-figure-box hero-figure-box-04" data-rotation="-135deg"></div>
                            <div class="hero-figure-box hero-figure-box-05"></div>
                            <div class="hero-figure-box hero-figure-box-06"></div>
                            <div class="hero-figure-box hero-figure-box-07"></div>
                            <div class="hero-figure-box hero-figure-box-08" data-rotation="-22deg"></div>
                            <div class="hero-figure-box hero-figure-box-09" data-rotation="-52deg"></div>
                            <div class="hero-figure-box hero-figure-box-10" data-rotation="-50deg"></div>
                            <div class="placeholder">
                                <img src="/support.svg" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="features section">
                <div class="container">
                    <div class="features-inner section-inner has-bottom-divider">
                        <div class="features-wrap">
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <img src="dist/images/feature-icon-01.svg" alt="Profil Pengguna">
                                    </div>
                                    <h4 class="feature-title mt-24">Profil Pengguna</h4>
                                    <p class="text-sm mb-0">Buat profil online Anda dan bagikan karya Anda dengan
                                        penggemar.</p>
                                </div>
                            </div>
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <img src="dist/images/feature-icon-02.svg" alt="Dukungan Finansial">
                                    </div>
                                    <h4 class="feature-title mt-24">Dukungan Finansial</h4>
                                    <p class="text-sm mb-0">Dapatkan dukungan finansial dari penggemar dengan membuat
                                        kampanye dan menerima donasi.</p>
                                </div>
                            </div>
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <img src="dist/images/feature-icon-03.svg" alt="Pembayaran">
                                    </div>
                                    <h4 class="feature-title mt-24">Pembayaran</h4>
                                    <p class="text-sm mb-0">Terima pembayaran dengan mudah dan aman dari penggemar Anda.
                                    </p>
                                </div>
                            </div>
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <img src="dist/images/feature-icon-04.svg" alt="Analisis">
                                    </div>
                                    <h4 class="feature-title mt-24">Analisis</h4>
                                    <p class="text-sm mb-0">Lacak dan analisis performa karya Anda dan dukungan
                                        finansial dalam real-time.</p>
                                </div>
                            </div>
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <img src="dist/images/feature-icon-05.svg" alt="Berkolaborasi">
                                    </div>
                                    <h4 class="feature-title mt-24">Berkolaborasi</h4>
                                    <p class="text-sm mb-0">Berkolaborasi dengan penggiat sosial media lain dan bagikan
                                        karya Anda dengan lebih banyak orang.</p>
                                </div>
                            </div>
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <img src="dist/images/feature-icon-06.svg" alt="Pemberitahuan">
                                    </div>
                                    <h4 class="feature-title mt-24">Pemberitahuan</h4>
                                    <p class="text-sm mb-0">Terima pemberitahuan real-time tentang dukungan finansial
                                        dan karya baru Anda</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="pricing section">
                <div class="container-sm">
                    <div class="pricing-inner section-inner">
                        <div class="pricing-header text-center">
                            <h2 class="section-title mt-0">Gratis untuk semua</h2>
                            <p class="section-paragraph mb-0">Bersama kami, Anda dapat mencapai potensi penuh di sosial
                                media dan menerima dukungan finansial yang Anda butuhkan.</p>
                        </div>
                        <div class="pricing-tables-wrap">
                            <div class="pricing-table">
                                <div class="pricing-table-inner is-revealing">
                                    <div class="pricing-table-main">
                                        <div class="pricing-table-header pb-24">
                                            <div class="pricing-table-price"><span
                                                    class="pricing-table-price-currency h2">Rp.</span><span
                                                    class="pricing-table-price-amount h1">0</span><span
                                                    class="text-xs">/bulan</span></div>
                                        </div>
                                        <div class="pricing-table-features-title text-xs pt-24 pb-24">Kamu akan dapat
                                        </div>
                                        <ul class="pricing-table-features list-reset text-xs">
                                            <li>
                                                <span>Halaman landing page</span>
                                            </li>
                                            <li>
                                                <span>Halaman komunitas</span>
                                            </li>
                                            <li>
                                                <span>Analisis aktifitas</span>
                                            </li>
                                            <li>
                                                <span>Dukungan donasi dari penggemar anda</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pricing-table-cta mb-8">
                                        <a class="btn btn-primary btn-shadow btn-block"
                                            href="{{ route('register') }}">Daftar
                                            sekarang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="cta section">
                <div class="container">
                    <div class="cta-inner section-inner">
                        <h3 class="section-title mt-0">Tunggu apa lagi bergabung sekarang juga?</h3>
                        <div class="cta-cta">
                            <a class="btn btn-primary btn-wide-mobile" href="#">Daftar sekarang</a>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="site-footer-inner">
                    <div class="brand footer-brand d-inline-flex align-items-center">
                        <a href="#">
                            <img class="header-logo-image" src="/logo.svg" alt="Logo">
                        </a>
                        <span class="text-sm p-2 text-white">Traktir</span>
                    </div>
                    <ul class="footer-links list-reset">
                        <li>
                            <a href="#">Contact</a>
                        </li>
                        <li>
                            <a href="#">About us</a>
                        </li>
                        <li>
                            <a href="#">FAQ's</a>
                        </li>
                        <li>
                            <a href="#">Support</a>
                        </li>
                    </ul>
                    <ul class="footer-social-links list-reset">
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Facebook</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z"
                                        fill="#0270D7" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Twitter</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z"
                                        fill="#0270D7" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Google</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.9 7v2.4H12c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C11.5 1.7 9.9 1 8 1 4.1 1 1 4.1 1 8s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H7.9z"
                                        fill="#0270D7" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <div class="footer-copyright">&copy; 2023 Kevin Naserwan, all rights reserved</div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
