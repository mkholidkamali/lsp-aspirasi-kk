@extends('layouts.main')

@section('container')
<div class="p-4 p-md-5 mb-4 text-white rounded bg-dark mt-5 shadow-sm">
    <div class="row">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">ASPIRASI MASYARAKAT</h1>
            <p class="lead my-3">Sampaikan aspirasi anda langsung ke pemerintahan</p>
            <a href="#form" class="btn btn-secondary btn-lg">Tulis</a>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            <img src="/img/test.png" style="max-width: 300px">
        </div>
    </div>
</div>

<div class="row mb-2">
    <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static bg-white">
                <strong class="d-inline-block mb-2 text-primary">Profile</strong>
                <h3 class="mb-0">Perbaikan Jalan</h3>
                <div class="mb-1 text-muted">Nov 12</div>
                <p class="card-text mb-auto">Menindak lanjuti adanya jalan yang rusak, pemerintah setempat siaga langsung memperbaikinya</p>
                <a href="/profile" class="stretched-link">Lihat</a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img"
                    aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                        dy=".3em">Thumbnail</text>
                </svg>

            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static bg-white">
                <strong class="d-inline-block mb-2 text-success">Sistem</strong>
                <h3 class="mb-0">Perbaikan Fitur</h3>
                <div class="mb-1 text-muted">Nov 11</div>
                <p class="mb-auto">Tim IT sudah memperbaiki fitur formulir yang telah di laporkan oleh user.</p>
                <a href="#form" class="stretched-link">Cek</a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img"
                    aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                        dy=".3em">Thumbnail</text>
                </svg>

            </div>
        </div>
    </div>
</div>

<div class="row g-5 mb-5">

    <div class="col-md-3">
        <div class="position-sticky" style="top: 2rem;">
            <div class="p-4 mb-3 rounded bg-white shadow-sm">
                <h4 class="fst-italic">Search</h4>
                <form class="d-flex mt-3">
                    {{-- <input class="form-control me-2" type="search" placeholder="" aria-label="Search"> --}}
                    <button class="btn btn-outline-success btn-block" style="width: 100%" type="submit">Tekan saya</button>
                </form>
            </div>
            

            @if (session()->has('success'))
                <div class="mt-5">
                    <div class="alert alert-success mx-auto mt-4" role="alert">
                        Berhasil memasukan aspirasi
                    </div>
                </div>
            @endif

        </div>
    </div>

    <div class="col-md-9">
        <article class="blog-post">
            <h2 class="blog-post-title">Layanan baru oleh pemerintah</h2>
            <p class="blog-post-meta">January 1, 2021 by <strong> DPRD Tarakarta</strong></p>

            <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap.
                Basic typography, lists, tables, images, code, and more are all supported as expected.</p>
            <hr>
        </article>

        <div class="card shadow-sm" style="margin-top: 3rem; margin-bottom: 5rem">
            <div class="card-body">
                <h1 class="text-center">Formulir Aspirasi</h1>
                <hr>
                <form action="/aspirasi" method="post" id="form">
                    @csrf
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik">
                        @error('nik')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select class="form-select" name="id_kategori">
                            @foreach ($kategoris as $kategori)
                                <option value="{{ $kategori->id }}">{{ $kategori->ket_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="lokasi" class="form-label">Lokasi</label>
                        <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi">
                        @error('lokasi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan">
                        @error('keterangan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
