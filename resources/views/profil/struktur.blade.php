<x-app-layout>
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
                        Profil / Struktur Organisasi
                    </a>
                </li>

            </ol>
        </nav>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 rounded bg-white mt-10 py-4">

        <header class=" flex justify-center">
            <h3 class=" text-lg font-semibold text-gray-800">Struktur Organisasi PTPN IV GUNUNG BANYU</h3>
        </header>
        <div class="grid mt-10 px-24 space-y-8">


            <header class="w-full">
                <p class=" text-xl font-semibold text-gray-800">Struktur</p>
            </header>
            <div class="mt-8">
                <p class=" text-gray-600">
                    Struktur organisasi merupakan landasan pokok perusahaan. Perusahaan 
                    yang baik memiliki struktur yang baik pula, sehingga sistem oprasional dapat 
                    terlaksana dengan lancar dan mempermudah koordinasi serta pengawasan 
                    terhadap setiap kegiatan. 
                    <br>
                    <br>
                    Organisasi yang terdapat di PT P. Nusantara IV (Persero) Kebun Gunung 
                    Bayu ini dipimpin oleh seorang Manager Unit dan dibantu oleh beberapa staf 
                    yang di dalamnya telah terlihat batasan pertanggungjawaban dari setiap bidang 
                    pekerjaan tersebut, disamping itu ditunjukkan hubungan antara satu seksi dengan 
                    seksi lainnya melalui fungsi masing-masing. 
                    <div class="w-full flex justify-center">
                        <img src="/struktur.png" class="w-1/2" alt="">
                    </div>
                </p>
                <p class="text-center text-gray-600">Gambar 3 Struktur Organisasi PKS Gunung Bayu</p>
            </div>
        </div>
    </div>

</x-app-layout>
