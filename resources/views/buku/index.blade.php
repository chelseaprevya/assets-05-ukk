@extends('Admin.template')
@section('konten')
    {{-- main --}}
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Table Buku</h1>
        <a class="btn btn-primary disabled" title="Create" role="button" aria-disabled="true"><i class="bi bi-plus"></i>Create</a>
        <nav>
            <ol class="breadcrumb">
                {{-- <li class="breadcrumb-item"><a href="index.html">Home</a></li> --}}
                {{-- <li class="breadcrumb-item active">Dashboard</li> --}}
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    {{-- table --}}
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Id</th>
                <th scope="col">Judul</th>
                <th scope="col">Penulis</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Tahun terbit</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Gambar</th>
                <th scope="col">Stok</th>
                <th scope="col">Id kategori</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            {{-- </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr> --}}
        </tbody>
    </table>
    {{-- end table --}}
</main>
{{-- end main --}}
@endsection
