@extends('admin.layouts.main')

@section('container')

<div class="card mt-3 bg-light border-0">
    <div class="card-body">

        <div class="mb-3">
            <div class="btn-group">
                <button type="button" class="btn btn-dark disabled">Urutkan berdasar</button>
                <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Kategori</a></li>
                    <li><a class="dropdown-item" href="#">Kategori</a></li>
                    <li><a class="dropdown-item" href="#">Kategori</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
            </div>
        </div>

        <div class="flex justify-center">
            <table class="bg-white col-sm-12 table">
                <tr class="justify-center bg-dark text-light">
                    <th class="text-center">Nik</th>
                    <th class="text-center">Kategori</th>
                    <th class="text-center">Lokasi</th>
                    <th class="text-center">Keterangan</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Created At</th>
                    <th class="text-center">Updated At</th>
                    <th class="text-center">Action</th>
                </tr>
                @foreach ($aspirasis as $aspirasi)
                <tr>
                    <td class="p-1 m-1 bg-white border-2 border-gray-100 text-center">
                        {{ $aspirasi->nik }}
                    </td>
                    <td class="p-1 m-1 bg-white border-2 border-gray-100 text-center">
                        {{ $aspirasi->kategoris->ket_kategori }}
                    </td>
                    <td class="p-1 m-1 bg-white border-2 border-gray-100 text-center">
                        {{ $aspirasi->lokasi }}
                    </td>
                    <td class="p-1 m-1 bg-white border-2 border-gray-100 text-center">
                        {{ $aspirasi->keterangan }}
                    </td>
                    <td class="p-1 m-1 bg-white border-2 border-gray-100 text-center">
                        Status
                    </td>
                    <td class="p-1 m-1 bg-white border-2 border-gray-100 text-center">
                        {{ $aspirasi->created_at->diffForHumans() }}
                    </td>
                    <td class="p-1 m-1 bg-white border-2 border-gray-100 text-center">
                        {{ $aspirasi->updated_at->diffForHumans() }}
                    </td>
                    <td class="p-1 m-1 bg-white border-2 border-gray-100 text-center">
                        <div class="flex-row">
                            <div class="btn-sm">
                                <form action="/dashboard/aspirasi/{{ $aspirasi->id }}" method="post">
                                    @method('put')
                                    @csrf
                                    <button class="btn btn-primary" type="submit"
                                        onclick="return confirm('Ubah status?')">Konfir</button>
                                </form>
                            </div>
                            <div class="btn-sm">
                                <form action="/dashboard/aspirasi/{{ $aspirasi->id }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger" type="submit"
                                        onclick="return confirm('Hapus aspirasi?')">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

</div>

@endsection
