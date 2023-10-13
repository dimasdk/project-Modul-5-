<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Informasi Koleksi') }}
        </h2>
    </x-slot>
<!--  
| Nama  : Dimas Dwi Kurniawan
| NIM   : 6706220041
| Kelas : D3IF-4603 
-->
@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <a href="#" class="btn btn-dark" onclick="goBack()">Back</a><br><br>
                    <p>Nama Koleksi: {{ $koleksi->namaKoleksi }}</p>
                    <p>Jenis Koleksi: {{ ($koleksi->jenisKoleksi == 1) ? 'Buku' : (($koleksi->jenisKoleksi == 2) ? 'Majalah' : 'Cakram Digital') }}</p>
                    <p>Jumlah Koleksi: {{ $koleksi->jumlahKoleksi }}</p>
                    <p>Ditambahkan: {{ $koleksi->created_at }}</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
@endsection
</x-app-layout>