<x-profil-layout>
    <x-slot name="header">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="#"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        Profil / Visi dan Misi
                    </a>
                </li>

            </ol>
        </nav>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 rounded   mt-10 py-4">

        <header class=" flex justify-center">
            <h3 class=" text-lg font-semibold text-gray-100">Visi dan Misi PTPN IV GUNUNG BANYU</h3>
        </header>
        <div class="grid mt-10 px-24 space-y-8">


            <header class="w-full">
                <p class=" text-xl font-semibold text-gray-100">Visi</p>
            </header>
            <div class="mt-5">
                <p class=" text-gray-200">
                    PT Perkebunan Nusantara IV menjadi perusahaan unggul dalam 
                    usaha agroindustri yang terintegrasi 
                </p>
            </div>
            <header class="w-full mt-10">
                <p class=" text-xl font-semibold text-gray-100">Misi</p>
            </header>
            <div class="mt-5 px-5">
               <ol  class="list-decimal" style="list-style: auto">
                <li class="text-gray-200">Menjalankan usaha dengan prinsip-prinsip usaha terbaik, inovatif, 
                    dan berdaya saing tinggi.</li>
                <li class="text-gray-200">Menyelenggarakan usaha agroindustri berbasis kelapa sawit. </li>
                <li class="text-gray-200">Mengintergrasikan usaha agroindustri hulu, hilir, produk baru, 
                    penduduk agroindustri dan pendayagunaan aset dengan preferensi 
                    pada teknologi terkini yang teruji (proven) dan berwawasan 
                    lingkungan. </li>
               </ol>
            </div>
        </div>
    </div>

</x-profil-layout>
