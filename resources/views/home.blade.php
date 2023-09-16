@extends('layouts.app')
@section('content')
    <section class="content">
        <div class="card">

            <div class="image" id="image">
                <div class="hero min-h-screen">
                    <div class="hero-content text-center">
                        <div class="ctn max-w-xl">
                            <h1 class="text-5xl font-bold">My Portofolio</h1>
                            <p class="py-6">Selamat datang di web Portofilio. Pada web ini saya mengunakan Framework Laravel  dan Tailwind CSS dengan ekstensi DaisyUi. Versi Framework Laravel yang saya gunakan yaitu v8.0</p>
                            <a href="#home" class="btn btn-primary">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="home" id="home">
                <div class="card-home">
                    <div class="hero-content w-full flex-row">
                        <img src="images/athian.jpg" class="max-w-sm mx-auto rounded-lg shadow-2xl" />
                        <div class="card-body">
                            <div class="body-content">
                                <h1 class="nama">Athian Rizki</h1>
                                <p class="py-1">
                                    Saya seorang mahasiswa tingkat akhir di Universitas Komputer
                                    Indonesia dengan jurusan Teknik Informatika. Memiliki
                                    kepribadian yang kompetitif dalam menjalankan tanggungjawab.
                                    Memiliki pengetahuan dibidang Teknologi Informasi. Memahami
                                    pemahaman dasar mengenai Framework Laravel, Bahasa Pemrograman
                                    PHP, HTML, JavaScript, dan MySql. Memiliki jiwa kepemimpinan
                                    dan pemecahan masalah (Problem Solving).
                                </p>
                                <a href="#biodata" class="btn btn-sm btn-primary">Kenal Lebih Dekat</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bio" id="biodata">
                <div class="card-biodata mx-auto rounded-xl">
                    <div class="body-content">
                        <h1>Profile</h1>
                        <div class="table-auto">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <td>:</td>
                                        <td>Athian Rizki</td>
                                    </tr>
                                    <tr>
                                        <th>Tempat, Tanggal Lahir</th>
                                        <td>:</td>
                                        <td>Sukabumi, 22 Desember 2000</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td>:</td>
                                        <td>Laki-laki</td>
                                    </tr>
                                    <tr>
                                        <th>Agama</th>
                                        <td>:</td>
                                        <td>Islam</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>:</td>
                                        <td>Pelajar / Mahasiswa</td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td>:</td>
                                        <td>
                                            Jl. Rambutan Link. Perum Sindangkasih Kec. Majalengka
                                            Kab. Majalengka
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>No. Telp / WA</th>
                                        <td>:</td>
                                        <td>0831-0732-5952</td>
                                    </tr>
                                    <tr>
                                        <th>E-Mail</th>
                                        <td>:</td>
                                        <td>Kathiany75@gmail.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
