@extends('layouts.app')
@section('content')
    <div class="container mx-auto py-12 mt-10">
        <div class="crd bg-gray-900 p-12 rounded-lg shadow-lg">
            <h1 class="text-3xl font-semibold text-gray-50 mb-4">About Us</h1>
            <p class="text-gray-50 leading-relaxed">
                Web ini berisikan portofolio Athian Rizki, yang dibuat dengan Framework Laravel dan Tailwind CSS dengan
                ekstensi DaisyUi. Selain itu web ini juga di style custom dengan menggunakan file css dan juga javascript.
                Versi laravel yang saya gunakan yaitu versi 8.0.
            </p>
            <div class="mt-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-2">
                    <a href="{{ url('/') }}">
                    <div class="bg-gray-950 hover:scale-110 transition duration-300 delay-150 p-4 rounded-lg shadow-lg">
                        <img src="../images/athian.jpg" alt="Foto Anggota Tim"
                            class="w-20 h-20 rounded-full mx-auto mb-2">
                        <h3 class="text-lg font-semibold text-gray-50">Athian Rizki</h3>
                        <p class="text-sm text-gray-50">Fullstack Laravel</p>
                    </div>
                </a>
                </div>
            </div>
        </div>
    </div>
@endsection
