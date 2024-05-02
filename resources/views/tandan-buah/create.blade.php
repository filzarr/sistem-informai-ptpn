<x-app-layout>
    <x-slot name="header">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="/data-minyak-sawit"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        Data Tandan Buah
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
            <h3 class=" text-lg font-semibold text-gray-800">Tambah Data Tandan Buah PTPN IV GUNUNG BANYU</h3>
        </header>
        <form class="grid gap-5 mt-5 w-1/2" method="POST" action="{{url('/tandan-buah')}}">
            @csrf
            <x-form.text value=""   label="Panen Masuk" name="panen_masuk"
            placeholder="Masukkan Panen Masuk (Kg)"  ></x-form.text>
            <x-form.text value=""   label="Tbs Diolah" name="tbs_diolah"
            placeholder="Masukkan Tbs Diolah (Kg)"   ></x-form.text>
            <div class="grid gap-6  md:grid-cols-3">
                <div id="datepicker" class="p-4 bg-white rounded shadow-lg">
                    <input type="text" id="datepicker-input" name="tanggal" class="w-full h-10 px-2 border rounded" placeholder="Select Date and Time">
                </div>
                @error('tanggal')
                    <span class="text-red-500 text-sm">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-5">
                <label for="countries"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                    Asal</label>
                <select id="countries" name="kategori"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected disabled>Pilih</option>
                    <option value="buah-kebun-banyu">Kebun Gunung Bayu</option>
                    <option value="pihak-ketiga">Pihak Ketiga</option>
                </select>
                @error('kategori')
                    <span class="text-red-500 text-sm">{{$message}}</span>
                @enderror
            </div>
            <x-form.button></x-form.button>
        </form>

    </div>
    <script>
        // Initialize flatpickr
        const datepicker = flatpickr("#datepicker-input", {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
            time_24hr: true,
        });
    </script>
</x-app-layout>
