<x-app-layout>
    <x-slot name="header">

        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="/analisis"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        Laporan Harian
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
            <h3 class=" text-lg font-semibold text-gray-800">Tambah Data Laporan Harian</h3>
        </header>
        <form class="grid gap-10 mt-5" method="POST" action="/laporan-harian/{{ $data->id }}">
            @csrf
            @method('PUT')
            <div class="grid   gap-4">
                <p class=" text-lg font-semibold text-gray-800">Produksi TBS</p>
                <div class="grid-cols-4 grid gap-3">
                    <x-form.number value="{{ $data->realisasi_tbs }}" label="Realisasi" name="realisasi_tbs"
                        placeholder="Masukkan Realisasi tbs (kg)"></x-form.number>
                    <x-form.number value="{{ $data->rkap_tbs }}" label="RKAP" name="rkap_tbs"
                        placeholder="Masukkan RKAP tbs (kg)"></x-form.number>
                </div>
            </div>
            <div class="grid   gap-4">
                <p class=" text-lg font-semibold text-gray-800">Sisa TBS</p>
                <div class="grid-cols-4 grid gap-3">
                    <x-form.number value="{{ $data->sisa_tbs }}" label="Pabrik" name="sisa_tbs"
                        placeholder="Masukkan Sisa tbs (kg)"></x-form.number>
                </div>
            </div>
            <div class="grid   gap-4">
                <p class=" text-lg font-semibold text-gray-800">Produksi Minyak Sawit</p>
                <div class="grid-cols-4 grid gap-3">
                    <x-form.number value="{{ $data->realisasi_minyaksawit }}" label="Realisasi"
                        name="realisasi_minyaksawit" placeholder="Masukkan Realisasi minyak sawit (kg)"></x-form.number>
                    <x-form.number value="{{ $data->rkap_minyaksawit }}" label="RKAP" name="rkap_minyaksawit"
                        placeholder="Masukkan RKAP minyak sawit (kg)"></x-form.number>
                </div>
            </div>
            <div class="grid   gap-4">
                <p class=" text-lg font-semibold text-gray-800">Produksi Inti Sawit</p>
                <div class="grid-cols-4 grid gap-3">
                    <x-form.number value="{{ $data->realisasi_intisawit }}" label="Realisasi" name="realisasi_intisawit"
                        placeholder="Masukkan Realisasi Inti Sawit (kg)"></x-form.number>
                    <x-form.number value="{{ $data->rkap_intisawit }}" label="RKAP" name="rkap_intisawit"
                        placeholder="Masukkan RKAP Inti Sawit (kg)"></x-form.number>
                </div>
            </div>
            <div class="grid   gap-4">
                <p class=" text-lg font-semibold text-gray-800">Rendemen Minyak Sawit</p>
                <div class="grid-cols-4 grid gap-3">
                    <x-form.number value="{{ $data->realisasi_rendemen }}" label="Realisasi" name="realisasi_rendemen"
                        placeholder="Masukkan Realisasi Rendemen Minyak Sawit (kg)"></x-form.number>
                    <x-form.number value="{{ $data->rkap_rendemen }}" label="RKAP" name="rkap_rendemen"
                        placeholder="Masukkan RKAP Rendemen Minyak Sawit (kg)"></x-form.number>
                </div>
            </div>
            <div class="grid   gap-4">
                <p class=" text-lg font-semibold text-gray-800">Pengiriman </p>
                <div class="grid-cols-4 grid gap-3">
                    <x-form.number value="{{ $data->pengiriman_minyaksawit }}" label="Minyak Sawit"
                        name="pengiriman_minyaksawit"
                        placeholder="Masukkan Pengiriman Minyak Sawit (kg)"></x-form.number>
                    <x-form.number value="{{ $data->pengiriman_intisawit }}" label="Inti Sawit"
                        name="pengiriman_intisawit" placeholder="Masukkan Pengiriman Inti Sawit (kg)"></x-form.number>
                    <x-form.number value="{{ $data->pengiriman_cangkang }}" label="Cangkang" name="pengiriman_cangkang"
                        placeholder="Masukkan Pengiriman Cangkang (kg)"></x-form.number>
                </div>
            </div>
            <div class="grid gap-6  md:grid-cols-2">
                @php
                    $select = [
                        ['label' => 'Gunung Banyu', 'value' => 'gunung-banyu'],
                        ['label' => 'Tanah Itam Ulu', 'value' => 'tanah-itam-ulu'],
                        ['label' => 'laras', 'value' => 'laras'],
                        ['label' => 'Bukit Lima', 'value' => 'bukit-lima'],
                        ['label' => 'Dolok Ilir', 'value' => 'dolok-ilir'],
                        ['label' => 'Mayang', 'value' => 'mayang'],
                        ['label' => 'Marihat', 'value' => 'marihat'],
                        ['label' => 'TBS P-III', 'value' => 'tbs p-III'],
                        ['label' => 'Gabungan', 'value' => 'gabungan'],
                    ];
                @endphp
                <div class="">
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                        Lokasi</label>
                    <select id="countries" name="ptpn"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option disabled selected>Pilih Lokasi</option>
                        @foreach ($select as $select)
                        @if ($select['value'] == $data->ptpn)
                        <option value="{{$select['value']}}" selected>{{$select['label']}}</option>
                            
                        @else
                        <option value="{{$select['value']}}" >{{$select['label']}}</option>
                            
                        @endif
                        @endforeach 
                    </select>
                </div>
            </div>
            {{-- <div class="grid gap-6  md:grid-cols-3">
                <x-form.number value=""   label="Masukkan VM (%)" name="vm"
                    placeholder="Masukkan VM (%)"  ></x-form.number>
                <x-form.number value=""   label="Masukkan nos (%)" name="nos"
                    placeholder="Masukkan nos (%)"  ></x-form.number>
                <x-form.number value=""   label="Masukkan ffa (%)" name="ffa"
                    placeholder="Masukkan ffa (%)"  ></x-form.number>
                <x-form.number value=""   label="Masukkan dobi (%)" name="dobi"
                    placeholder="Masukkan dobi (%)" ></x-form.number>
            </div> --}}
            <div class="grid gap-6  md:grid-cols-3">
                <div id="datepicker" class="p-4 bg-white rounded shadow-lg">
                    <input type="text" value="{{ $data->tanggal }}" id="datepicker-input" name="tanggal"
                        class="w-full h-10 px-2 border rounded" placeholder="Select Date and Time">
                </div>
                @error('waktu_analisis')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <x-form.button></x-form.button>
        </form>

    </div>

    <script>
        // Initialize flatpickr
        const datepicker = flatpickr("#datepicker-input", {
            dateFormat: "Y-m-d H:i",
        });
    </script>



</x-app-layout>
