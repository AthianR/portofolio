@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="content1" id="organisasi1">
            <div class="title">
                Pengalalman Organisasi
            </div>
            <div class="flex flex-col w-full lg:flex-row">
                <div class="grid flex-grow h-auto card rounded-box">
                    <div class="subtitle">
                        <h2>Himpunan Mahasiswa Teknik Informatika - HMIF (Dec 2020 - Nov 2021)</h2>
                    </div>
                    <div class="body-content p-4">
                        <p>
                            Jabatan saya di HMIF saat itu yaitu sebagai Angkatan Muda(AM), yang dimana saya tergabung
                            kedalam
                            Divisi Pengembangan Aparatur Organisasi. Tugas dari divisi itu sendiri yaitu bergerak dalam
                            pengembangan Anggota HMIF guna menghasilkan kader yang berkualitas.
                        </p>
                    </div>
                </div>
                <div class="divider lg:divider-horizontal">=></div>
                <div class="grid flex-grow h-auto card bg-base-300 rounded-box">
                    <div class="subtitle">
                        <h2>Himpunan Mahasiswa Teknik Informatika - HMIF (Dec 2021 - Nov 2022)</h2>
                    </div>
                    <div class="body-content p-4">
                        <p>
                            Dalam menjalankan tugas sebagai Organiosatoris saya juga aktif dalam mengikuti beberapa program
                            kerja, diantaranya:
                        <ul>
                            <li>
                                1. Koordinator Administrasi Program Kerja Webinar Nasional Technopreneur.
                            </li>
                            <li>
                                2. Koordinatir Adminirtrasi Program Kerja Pengabdian Kepada Masyarakat (P2M).
                            </li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="button">
                <a href="#organisasi2" class="btn btn-primary mx-auto  mb-2">Next</a>
            </div>
        </div>

        <div class="content2">
            <div class="title" id="organisasi2">
                Pengalalman Organisasi
            </div>
            <div class="flex flex-col w-full lg:flex-row">
                <div class="grid flex-grow h-auto card rounded-box">
                    <div class="subtitle">
                        <h2>Himpunan Mahasiswa Teknik Informatika - HMIF (Nov 2021 - Nov 2022)</h2>
                    </div>
                    <div class="body-content p-4 mx-auto">
                        <p>
                            Setelah mengemban satu periode kepengurusan, sayapun kembali menajutkan kepengurusan pada
                            periode kedua pada tahun 2021 - 2022. Pada periode tersebut saya diamanati sebagai Kepala Divisi
                            dari Divisi Pengembangan Aparatur Organisasi. Saat saya menjabat sebagai Kadiv atau Kepala
                            Divisi banyak sekali inovasi dan perubahan yang dilakukan guna menghasilkan kader yang
                            berkualitas sesuai dengan Jobdesk dari divisi itu sendiri.
                        </p>
                    </div>
                </div>
                <div class="divider lg:divider-horizontal">=></div>
                <div class="grid flex-grow h-auto card bg-base-300 rounded-box">
                    <div class="subtitle">
                        <h2>Himpunan Mahasiswa Teknik Informatika - HMIF (Nov 2021 - Nov 2022)</h2>
                    </div>
                    <div class="body-content p-4">
                        <p>
                            HMIF sendiri memmiliki program kerja LKMM atau Latihan Kepemimpinan Manajemen Mahasiswa dan saya
                            ditugaskan sebagai Ketua Pelaksana dalam program kerja tersebut. Selain itu terdapat proker
                            proker lain yang harus saya hadiri guna menjadi pengawasan terhadap panitia dan acara yang
                            sedang berlangsung. Selama dua tahun periode juga saya pernah memimpin Musyawarah Besar HMIF,
                            yang dimana saya menjadi Presidium 1 pada saat persidangan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="button">
                <a href="#magang" class="btn btn-primary mx-auto  mb-2">Next</a>
            </div>
        </div>

        <div class="content3">
            <div class="title" id="magang">
                Pengalalman Magang (MBKM)
            </div>
            <div class="flex flex-col w-full lg:flex-row">
                <div class="grid flex-grow h-auto card rounded-box">
                    <div class="subtitle">
                        <h2>PT. Solusi Tiga Selaras - SOLUTIF (Agustus 2022 - Desember 2022)</h2>
                    </div>
                    <div class="body-content p-4 mx-auto">
                        <p>
                            Magang Bersertifikat Kampus Merdeka (MBKM) merupakan program dari Kementrian Pendidikan dan
                            Kebudayaan (KEMENDIKBUD) guna menintergasikan pendidikan tinggi dengan pengalaman dunia kerja. Saat itu saya
                            diterima di PT. Solusi Tiga Selaras (SOLUTIF) sebagai Fullstack Laravel Developer. Magang
                            tersebut dilakukan secara online, metode SCRUM digunakan selama proses pengerjaan project.
                            Program magang tersebut berdurasi 6 bulan, dan pada bulan pertama saya diajarkan mengenai dasar
                            dari posisi yang saya tempati. Setelah satu bulan belajar kemudian dibentuklan team untuk
                            mengerjakan project. Project yang dikerjakan yaitu PERIKSALAB.ID
                        </p>
                    </div>
                </div>
                <div class="divider lg:divider-horizontal">=></div>
                <div class="grid flex-grow h-auto card bg-base-300 rounded-box">
                    <div class="subtitle">
                        <h2>PT. Solusi Tiga Selaras - SOLUTIF (Agustus 2022 - Desember 2022)</h2>
                    </div>
                    <div class="body-content p-4">
                        <p>
                            Dalam satu team itu terdapat beberapa posisi diantaranya, Product Manager(PM) dengan
                            tugas mengatur dan merancang fitur yang akan dibangun dengan waktu yang telah ditentukan beserta
                            membuat workflow, Fullstack Laravel Developer bertugas sebagai team eksekusi dari pengerjaan
                            fitur dalam project tersebut dengan menggunakan Framework Laravel dan Bootstrap, Quality
                            Assurance(QA) bertugas untuk melakukan testing aplikasi atau fitur yang telah di deploy oleh
                            Fullstack Laravel Developer dan melakukan report jika terdapat bug.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
