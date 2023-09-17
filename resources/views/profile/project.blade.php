@extends('layouts.app')
@section('content')
    <div class="container mx-auto py-12 mt-10">
        <div class="pr bg-gray-950 p-6 rounded-lg shadow-lg">
            <h1 class="text-3xl font-semibold text-gray-50 mb-4">Project</h1>
            <p class="text-gray-50 leading-relaxed">
                Terdapat 3 project yang pernah saya kerjakan dengan menggunakan Framework Laravel. Yaitu project Periksalab
                yang saya kerjakan pada saat Magang, kemudian project SDN Leuwilaja III merupakan project teman yang saya
                kerjakan untuk kebutuhan penelitian, lalu project Mhazel project yang berisikan web seperti onlineshop untuk
                memenuhi tugas perkuliahan.
            </p>
            <p class="text-gray-50 leading-relaxed mt-2">
                Berikut dokumentasi projectnya :
            </p>
            <div class="card mt-4">
                <h2 class="content text-xl font-semibold text-gray-50">My Project</h2>
                <div class="body grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-2">
                    <!-- Anggota Tim 1 -->
                    <div class="body-content bg-gray-800 hover:scale-110 transition duration-300 delay-150 p-4 rounded-lg shadow-lg">
                        <a href="#">
                            <img src="../images/periksa.png" alt="Foto Anggota Tim" class="w-100 h-100 mx-auto mb-2 rounded-lg">
                        </a>
                        <h3 class="text-lg font-semibold text-gray-50">Periksalab.id</h3>
                        <p class="text-sm text-gray-50">Project Magang PT. Solusi Tiga Selaras</p>
                    </div>
                    <!-- Anggota Tim 2 -->
                    <div class="body-content bg-gray-800 hover:scale-110 transition duration-300 delay-150 p-4 rounded-lg shadow-lg">
                        <a href="https://github.com/AthianR/sdnleuwilaja">
                            <img src="../images/sd.png" alt="Foto Anggota Tim" class="w-100 h-100 mx-auto mb-2 rounded-lg">
                        </a>
                        <h3 class="text-lg font-semibold text-gray-50">sdnleuwilajaIII</h3>
                        <p class="text-sm text-gray-50">Project penelitian teman</p>
                    </div>
                    <!-- Anggota Tim 3 -->
                    <div class="body-content bg-gray-800 hover:scale-110 transition duration-300 delay-150 p-4 rounded-lg shadow-lg">
                        <a href="https://github.com/AthianR/mhazel">
                            <img src="../images/mhazel.png" alt="Foto Anggota Tim" class="w-100 h-100 mx-auto mb-2 rounded-lg">
                        </a>
                        <h3 class="text-lg font-semibold text-gray-50">Mhazel</h3>
                        <p class="text-sm text-gray-50">Project Onlineshop</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
