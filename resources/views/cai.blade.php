<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <div class="container-fluid bg-info p-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4 text-white">
                    <small class="fa fa-map-marker-alt text-white me-2"></small>
                    <small>Makassar, Sulawesi Selatan</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3 text-white">
                    <small class="far fa-clock text-white me-2"></small>
                    <small>Mon - Fri : 07:30 - 16:00 Saturday : 09:00 - 14:00</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4 text-white">
                    <small class="fa fa-phone-alt text-white me-2"></small>
                    <small>Kontak Admin: +62 823-9815-0355</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Start -->
    <div class="container-fluid header bg-primary p-0 mb-5">
            <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
                <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-4 text-white mb-5">Universitas DIPA Makassar</h1>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <img class="img-fluid" src="home/img/banner-udm-copy-1.png" alt="">
                        <div class="owl-carousel header-carousel">
                            <div class="owl-carousel-item position-relative">
                            </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end" src="{{ asset('home/img/Unit-180x180.jpg') }}" alt="">
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="{{ asset('home/img/WR-3-180x180.jpg') }}" alt="" style="margin-top: -25%;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Tentang Kami</p>
                    <h1 class="mb-4">Membangun Mahasiswa Berjiwa Teknologi, Kenali Layanan Kami!</h1>
                    <p>Universitas Dipa Makassar adalah salah satu perguruan tinggi swasta yang berada di Kota Makassar, Sulawesi Selatan. Universitas ini dulunya dikenal sebagai Sekolah Tinggi Ilmu Ekonomi (STIE) Dipa Makassar, dan kemudian berubah status menjadi universitas, sehingga menawarkan lebih banyak program studi lintas bidang.</p>
                    <p class="mb-4">Memilih universitas yang tepat adalah langkah awal menuju masa depan yang gemilang. Bergabunglah dengan Universitas Dipa Makassar untuk mendapatkan pendidikan terbaik demi mewujudkan impian Anda dan keluarga</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Dosen Yang Berkuwalitas</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>UKT Yang Tidak Mahal</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Fasilitas Yang Sangat Keren</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Jurusan Kami</p>
                <h1>Solusi Untuk Masa Depan Anda</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        {{-- <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-heartbeat text-primary fs-4"></i>
                        </div> --}}
                        <h4 class="mb-3">Magister Informatika(S2)</h4>
                        <p class="mb-4">Program Pascasarjana di Universitas Dipa Makassar merupakan jenjang pendidikan lanjutan yang ditujukan bagi lulusan sarjana (S1) yang ingin memperdalam keilmuan dan kompetensinya di bidang tertentu.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        {{-- <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-x-ray text-primary fs-4"></i>
                        </div> --}}
                        <h4 class="mb-3">Teknik Informatika(S1)</h4>
                        <p class="mb-4">Program Studi Teknik Informatika merupakan pilihan tepat bagi kamu yang ingin mendalami dunia teknologi informasi dan komputer. Program ini untuk mahasiswa dengan pengetahuan dan keterampilan dalam desain, pengembangan, pengujian, dan evaluasi perangkat lunak serta sistem komputer.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        {{-- <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-tooth text-primary fs-4"></i>
                        </div> --}}
                        <h4 class="mb-3">Sistem Informasi(S1)</h4>
                        <p class="mb-4">Program ini menggabungkan teknologi dan manajemen untuk menciptakan solusi informasi bagi organisasi. Terakreditasi B, cocok untuk kamu yang ingin berkarier sebagai analis sistem, programmer, atau manajer TI. Biaya kuliah terjangkau, fasilitas lengkap, dan dosen berpengalaman.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        {{-- <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-wheelchair text-primary fs-4"></i>
                        </div> --}}
                        <h4 class="mb-3">Rekaya Perangkat Lunak(S1)</h4>
                        <p class="mb-4">Program ini fokus pada pengembangan perangkat lunak, multimedia, game, dan teknologi masa depan seperti IoT dan cloud computing.
                            Terakreditasi Baik, cocok untuk kamu yang ingin jadi software engineer, game developer, atau technopreneur.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        {{-- <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-brain text-primary fs-4"></i>
                        </div> --}}
                        <h4 class="mb-3">Kewirausahaan(S1)</h4>
                        <p class="mb-4">Program ini membekali mahasiswa dengan pengetahuan dan keterampilan untuk merancang, mengelola, serta mengembangkan usaha atau bisnis. Fokus utama pada inovasi, ekonomi kreatif, dan digital entrepreneurship.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        {{-- <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-vials text-primary fs-4"></i>
                        </div> --}}
                        <h4 class="mb-3">Manajemen Informatika(D3)</h4>
                        <p class="mb-4">Program D3 ini menggabungkan ilmu komputer dan manajemen bisnis. Mahasiswa belajar pemrograman, analisis sistem, dan pengelolaan data.
                            Terakreditasi B, cocok untuk kamu yang ingin berkarier sebagai programmer, web developer, atau IT support.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        {{-- <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-vials text-primary fs-4"></i>
                        </div> --}}
                        <h4 class="mb-3">Bisnis Digital(S1)</h4>
                        <p class="mb-4">Program studi Bisnis Digital (S1) Universitas Dipa Makassar menawarkan wawasan menarik tentang digitalisasi proses bisnis dan memberi mahasiswa pengetahuan mendalam tentang berbagai teknologi dan strategi digital yang dapat digunakan dalam manajemen bisnis.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-primary overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <p class="d-inline-block border rounded-pill text-light py-1 px-4">Fitur Unggulan</p>
                        <h1 class="text-white mb-4">Mengapa Memilih Universitas DIPA Makassar?</h1>
                        <p class="text-white mb-4 pb-2">'Kampus berbasis teknologi, biaya kuliah terjangkau, dosen berpengalaman, fasilitas modern, dan peluang karier luas di bidang digital dan bisnis.</p>
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    {{-- <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa-solid fa-user-tie"></i>
                                    </div> --}}
                                    <div class="ms-4">
                                        <h4 class="text-white mb-2">Dosen</h4>
                                        <p class="text-white mb-0">Berpengalaman</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    {{-- <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-check text-primary"></i>
                                    </div> --}}
                                    <div class="ms-4">
                                        <h4 class="text-white mb-2">Kampus</h4>
                                        <p class="text-white mb-0">Berkualitas</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    {{-- <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-comment-medical text-primary"></i>
                                    </div> --}}
                                    <div class="ms-4">
                                        <h4 class="text-white mb-2">Biaya</h4>
                                        <p class="text-white mb-0">Terjangkau</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    {{-- <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-headphones text-primary"></i>
                                    </div> --}}
                                    <div class="ms-4">
                                        <h4 class="text-white mb-2">Siap Untuk</h4>
                                        <p class="text-white mb-0">Mahasiswa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('home/img/WhatsApp-Image-2022-09-01-at-23.05.18-180x180.jpg') }}" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Dosen</p>
                <h1>Dosen Yang Berpengalaman</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('home/img/REKTORXX-scaled.jpg') }}" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Dr. Y. Johny W. Soetikno, S.E.,M.M.</h5>
                            <p class="text-primary">Rektor Universitas DIPA Makassar</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('home/img/ARYASA.jpg') }}" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Komang Aryasa, S.Kom.,MT.</h5>
                            <p class="text-primary">Wakil Rektor 1 Universitas DIPA Makassar</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('home/img/sekunx.png') }}" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Indra Samsie, S.Kom., M.Kom.</h5>
                            <p class="text-primary">Wakil Rektor 2 Universitas DIPA Makassar</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('home/img/APRI-scaled.jpg') }}" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Dr. Aprizal, S. Kom.MM</h5>
                            <p class="text-primary">Wakil Rektor 3 Universitas DIPA Makassar</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('home/img/wr3x.png') }}" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Jufri, S.Kom.,MT.</h5>
                            <p class="text-primary">Sekretaris Universitas DIPA Makassar</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('home/img/sekx.png') }}" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Marsha, SE.,MM.</h5>
                            <p class="text-primary">Sekretaris Rektor Universitas DIPA Makassar</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('home/img/tix.png') }}" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Ir. H. Irsal,M.T.</h5>
                            <p class="text-primary">KAPRODI TEKNIK INFORMATIKA</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('home/img/irma.jpg') }}" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Andi Irmayana,S.Kom.,M.T</h5>
                            <p class="text-primary">KAPRODI Sistem Informasi</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('home/img/annah.jpg') }}" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Annah,S.Kom.,M.T.</h5>
                            <p class="text-primary">KAPRODI Rekayasa Perangkat Lunak</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('home/img/syukri.jpg') }}" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>M. Syukri Mustafa, S.Si., MMSI.</h5>
                            <p class="text-primary">KAPRODI Manajemen Informatika</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('home/img/sahlan.jpg') }}" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Muh. Syahlan Natsir, S.Kom ., M.T</h5>
                            <p class="text-primary">KAPRODI Bisnis Digital</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('home/img/fatma.jpg') }}" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>DR. Fatmasari, S.E.,MM.</h5>
                            <p class="text-primary">KAPRODI Kewirausahaan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>