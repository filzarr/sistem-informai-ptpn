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
                        Data Inventaris
                    </a>
                </li>

            </ol>
        </nav>
    </x-slot>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 rounded bg-white mt-10 py-4">
        <header class=" flex justify-center">
            <h3 class=" text-lg font-semibold text-gray-800">Data Inventaris PTPN IV GUNUNG BANYU</h3>
        </header>
        <div class="grid mt-10">

            <div class="flex  justify-between">
                <div class="">
                    <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio"
                        class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                        type="button">

                        Pilih Kategori
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio"
                        class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                        type="button">

                        Pilih Kondisi Mesin
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                </div>
                <div class="flex ">
                    <button type="button"
                        class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Export
                        Excel</button>
                    <a href="/inventaris/create">
                        <button type="button"
                            class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded text-sm px-5 py-2.5 text-center me-2 mb-2">Tambah
                            Inventaris</button>
                    </a>
                </div>
            </div>


            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th width="5%" class=" text-center px-6 py-3">
                                No.
                            </th>
                            <th scope="col" class=" text-center px-6 py-3">
                                Nama Mesin/Peralatan
                            </th>
                            <th scope="col" class="px-6 py-3 text-center ">
                                Penomoran Mesin/Instalasi
                            </th>
                            <th scope="col" class="px-6 py-3 text-center ">
                                Merek
                            </th>
                            <th scope="col" class="px-6 py-3 text-center ">
                                Type/Jenis/Spesifikasi Teknis
                            </th>
                            <th scope="col" class="px-6 py-3 text-center ">
                                Kapasitas Mesin
                            </th>
                            <th scope="col" class="px-6 py-3 text-center ">
                                Tahun Perolehan
                            </th>
                            <th scope="col" class="px-6 py-3 text-center ">
                                No. Inventaris /No. Aset
                            </th>
                            <th scope="col" class="px-6 py-3 text-center ">
                                Nilai Aktiva
                            </th>
                            <th scope="col" class="px-6 py-3 text-center ">
                                Kategori
                            </th>
                            <th scope="col" class="px-6 py-3 text-center ">
                                Kondisi Mesin
                            </th>
                            <th scope="col" class="px-6 py-3 text-center ">
                                Action
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 text-center ">
                                1.
                            </th>
                            <th
                                class="px-6 py-4 font-medium text-gray-900 text-center  whitespace-nowrap dark:text-white">
                                JEMBATAN TIMBANG CPO
                            </th>
                            <td class="px-6 py-4 text-center ">
                                1
                            </td>
                            <td class="px-6 py-4 text-center ">
                                AVERY
                            </td>
                            <td class=" text-center px-6 py-4">

                            </td>
                            <td class="px-6 py-4 text-center ">
                                50 Ton
                            </td>
                            <td class="px-6 py-4 text-center ">
                                1985
                            </td>
                            <td class="px-6 py-4 text-center ">
                                220000005223
                            </td>
                            <td class="px-6 py-4 text-center ">
                                1
                            </td>
                            <td class="px-6 py-4 text-center ">
                                Penerimaan Buah
                            </td>
                            <td class="px-6 py-4 text-center ">
                                80%
                            </td>

                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>
