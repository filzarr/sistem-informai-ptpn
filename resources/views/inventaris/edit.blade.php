<x-app-layout>
    <x-slot name="header">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="/inventaris"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        Data Inventaris
                    </a>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Tambah</span>
                    </div>
                </li>

            </ol>
        </nav>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 rounded bg-white mt-10 py-4">
        <header class=" flex justify-center">
            <h3 class=" text-lg font-semibold text-gray-800">Tambah Data Inventaris PTPN IV GUNUNG BANYU</h3>
        </header>
        <form class="grid gap-5 mt-5" method="POST" action="{{url('/inventaris')}}">
            @csrf
            <div class="grid gap-6  md:grid-cols-2">
                <div>
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Mesin
                        / Peralatan </label>
                    <input type="text" name="nama" id="default-input"
                        placeholder="Masukkan Nama Mesin / Peralatan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div>
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No.
                        Inventaris / No. Aset</label>
                    <input type="text" name="nomor_inventaris" id="default-input"
                        placeholder="Masukkan Nama Mesin / Peralatan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <div class="grid gap-6  md:grid-cols-2">
                <div class="">
                    <label for="nomormesin"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penomoran Mesin /
                        Peralatan</label>
                    <input type="text" name="nomor_mesin" id="nomormesin"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukan Penomoran Mesin" required>
                </div>
                <div>
                    <label for="merek"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Merek</label>
                    <input type="text" name="merek" id="merek"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukan Merek" required>
                </div>

            </div>
            <div class="grid gap-6  md:grid-cols-3">
                <div>
                    <label for="type"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">TYPE/JENIS/SPESIFIKASI
                        TEKNIS</label>
                    <input type="text" id="type" name="type"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukan Type " required>
                </div>
                <div>
                    <label for="kapasitas"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kapasitas Mesin /
                        Instalasi</label>
                    <input type="text" id="kapasitas" name="kapasitas"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukan Kapasitas Mesin " required>
                </div>
                <div>
                    <label for="perolehan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun
                        Perolehan</label>
                    <select id="perolehan" name="tahun_perolehan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        
                        <option disabled selected>Pilih Tahun</option>
                        @for ($i = 2024; $i >= 2000; $i--)
                        <option  value="{{$i}}">{{$i}}</option>
                        @endfor


                    </select>
                </div>
            </div>
            <div class="grid gap-6  md:grid-cols-2">
                <div>
                    <label for="aktiva" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nilai
                        Aktiva Terakhir (Rp.)</label>
                    <input type="text" id="aktiva" name="nilai_aktiva"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Rp.****" required>
                </div>
                <div>
                    <label for="kondisi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kondisi
                        Mesin (%)</label>
                    <input type="text" id="kondisi" name="kondisi_mesin"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Kondisi Mesin (%) " required>
                </div>
            </div>
            <div class="grid gap-6  md:grid-cols-2">
                <div class="">
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                        Kategori</label>
                    <select id="countries" name="category_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option disabled selected>Pilih Kategori</option>
                        @foreach ($category as $item)
                            <option value="{{ $item->id }}">{{ $item->category }}</option>
                        @endforeach


                    </select>
                </div>
            </div>
            <div class=""><button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
        </form>

    </div>
</x-app-layout>
