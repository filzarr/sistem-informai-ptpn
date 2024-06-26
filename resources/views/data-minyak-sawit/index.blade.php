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
                        Data Ketersediaan Minyak Sawit
                    </a>
                </li>

            </ol>
        </nav>
    </x-slot>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 rounded bg-white mt-10 py-4">
        @if (\Session::has('success'))
            <x-alerts.succes>{!! \Session::get('success') !!}</x-alerts.succes>
        @endif
        @if (\Session::has('info'))
            <x-alerts.info>{!! \Session::get('info') !!}</x-alerts.info>
        @endif
        @if (\Session::has('danger'))
            <x-alerts.danger>{!! \Session::get('danger') !!}</x-alerts.danger>
        @endif
        <div class="grid grid-cols-4 gap-10">
            <div
                class="flex items-center gap-5  p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <iconify-icon class="text-3xl" icon="icon-park-solid:data" style="color: #0ac2ff"></iconify-icon>
                <div class="grid">
                    <h3 class=" font-semibold text-gray-600">Stok Minyak Sawit</h3>
                    <span class="text-sm font-semibold text-gray-500">{{$stok->stok}}</span>
                </div>
            </div>
            <div
                class="flex items-center gap-5  p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <iconify-icon class="text-3xl" icon="emojione-monotone:oil-drum" style="color: #fff700"></iconify-icon>
                <div class="grid">
                    <h3 class=" font-semibold text-gray-600">Data Minyak Sawit Masuk Bulan Ini</h3>
                    <span class="text-sm font-semibold text-gray-500">{{$stokmasuk}}</span>
                </div>
            </div>
            <div
                class="flex items-center gap-5  p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <iconify-icon class="text-3xl" icon="material-symbols:oil-barrel-rounded"
                    style="color: #3700ff"></iconify-icon>
                <div class="grid">
                    <h3 class=" font-semibold text-gray-600">Pengiriman Minyak Sawit Bulan Ini</h3>
                    <span class="text-sm font-semibold text-gray-500">{{$stokkeluar}}</span>
                </div>
            </div>
        </div>
        <header class=" flex justify-center mt-7">
            <h3 class=" text-lg font-semibold text-gray-800">Data Produksi/Pengiriman Minyak Sawit</h3>
        </header>
        <div class="grid mt-10">

            <div class="flex  justify-between">
                <div class="">
                    <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio"
                        class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                        type="button">

                        Urutkan
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
                    <a href="/data-minyak-sawit/create">
                        <button type="button"
                            class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded text-sm px-5 py-2.5 text-center me-2 mb-2">Tambah
                            Stok / Pengiriman</button>
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
                            <th width="5%" class=" text-center px-6 py-3">
                                Stok Sebelumnya
                            </th>
                            <th scope="col" class=" text-center px-6 py-3">
                                Stok Setelahnya
                            </th>
                            <th scope="col" class=" text-center px-6 py-3">
                                Nama Penginput
                            </th> 
                            <th scope="col" class=" text-center px-6 py-3">
                                Keterangan
                            </th>
                            <th scope="col" class=" text-center px-6 py-3">
                                Tanggal
                            </th>



                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($ketsawit as $item)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="px-6 py-4 text-center ">
                                    {{$loop->iteration}}
                                </th>
                                <th
                                    class="px-6 py-4 font-medium text-gray-900 text-center  whitespace-nowrap dark:text-white">
                                    {{$item->stoksebelumnya}}
                                </th>
                                <td class="px-6 py-4 text-center text-gray-900">
                                    {{$item->stoksetelahnya}}
                                </td>
                                <td class="px-6 py-4 text-center text-gray-900 ">
                                    {{$item->name}}
                                </td> 
                                <td class="px-6 py-4 text-center text-gray-900 ">
                                    {{$item->keterangan}}
                                </td>
                                <td class="px-6 py-4 text-center text-gray-900 ">
                                    {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at)->format('d-m-Y H:i:s') }}Wib
                                </td>


                            </tr>
                        @empty
                        @endforelse


                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>
