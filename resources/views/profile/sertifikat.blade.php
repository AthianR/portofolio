@extends('layouts.app')
@section('content')
    <div class="sert">
        <div class="flex flex-col w-full">
            <div class="grid p-4 card bg-base-300 rounded-box">
                <h1>Skils</h1>
                <div class="grid grid-cols-6 gap-4">
                    <div class="collapse col-start-1 col-end-4  collapse-arrow bg-base-200">
                        <input type="radio" name="my-accordion-2" />
                        <div class="collapse-title" style="font-weight: 600">
                            Soft Skils
                        </div>
                        <div class="collapse-content">
                            <ul>
                                <li class="m-4">
                                    Penyelesaian Masalah
                                </li>
                            </ul>
                            <ul>
                                <li class="m-4">
                                    Kerja Team
                                </li>
                            </ul>
                            <ul>
                                <li class="m-4">
                                    Manajemen Waktu
                                </li>
                            </ul>
                            <ul>
                                <li class="m-4">
                                    Kepemimpinan
                                </li>
                            </ul>
                            <ul>
                                <li class="m-4">
                                    Good Communication
                                </li>
                            </ul>
                            <ul>
                                <li class="m-4">
                                    Berfikir Kritis
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-end-7 col-span-3 collapse collapse-arrow bg-base-200">
                        <input type="radio" name="my-accordion-2" />
                        <div class="collapse-title" style="font-weight: 600">
                            Hard Skils
                        </div>
                        <div class="collapse-content">
                            <ul>
                                <li class="m-4">
                                    PHP
                                </li>
                            </ul>
                            <ul>
                                <li class="m-4">
                                    HTML
                                </li>
                            </ul>
                            <ul>
                                <li class="m-4">
                                    JavaScript
                                </li>
                            </ul>
                            <ul>
                                <li class="m-4">
                                    MySql
                                </li>
                            </ul>
                            <ul>
                                <li class="m-4">
                                    Data Science
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="grid p-4 card bg-base-300 rounded-box">
                <h1>Sertifikat</h1>
                <div class="grid grid-cols-3 gap-4">
                    <div class="card thumbnail bg-gradient-to-r from-indigo-500 to-slate-950 hover:from-slate-950 hover:to-indigo-500"
                        data-image="images/data.jpg">
                        Associate Data Scientist
                    </div>
                    <div class="card thumbnail bg-gradient-to-r from-indigo-500 to-slate-950 hover:from-slate-950 hover:to-indigo-500"
                        data-image="images/cyber.jpg">
                        CyberOps Associate</div>
                    <div class="card thumbnail bg-gradient-to-r from-indigo-500 to-slate-950 hover:from-slate-950 hover:to-indigo-500"
                        data-image="images/security.jpg">
                        Cybersecurity Essentials</div>
                    <div class="card thumbnail bg-gradient-to-r from-indigo-500 to-slate-950 hover:from-slate-950 hover:to-indigo-500"
                        data-image="images/am.jpg">
                        HMIF Anggota Muda</div>
                    <div class="card thumbnail bg-gradient-to-r from-indigo-500 to-slate-950 hover:from-slate-950 hover:to-indigo-500"
                        data-image="images/p2m.jpg">
                        P2M</div>
                    <div class="card thumbnail bg-gradient-to-r from-indigo-500 to-slate-950 hover:from-slate-950 hover:to-indigo-500"
                        data-image="images/toefl.jpg">
                        Toefl</div>
                    <div class="card thumbnail bg-gradient-to-r from-indigo-500 to-slate-950 hover:from-slate-950 hover:to-indigo-500"
                        data-image="images/mbkm.jpg">
                        Magang
                    </div>
                </div>
                <div class="overlay" id="overlay">
                    <span class="close-button" id="close-button">&times;</span>
                    <img src="" alt="Deskripsi gambar" class="full-image" id="full-image">
                </div>
            </div>
        </div>
    </div>
@endsection
