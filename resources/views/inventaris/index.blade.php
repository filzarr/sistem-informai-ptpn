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
        @if (\Session::has('success'))
            <x-alerts.succes>{!! \Session::get('success') !!}</x-alerts.succes>
        @endif
        @if (\Session::has('info'))
            <x-alerts.info>{!! \Session::get('info') !!}</x-alerts.info>
        @endif
        @if (\Session::has('danger'))
            <x-alerts.danger>{!! \Session::get('danger') !!}</x-alerts.danger>
        @endif

        <header class=" flex justify-center">
            <h3 class=" text-lg font-semibold text-gray-800">Data Inventaris PTPN IV GUNUNG BANYU</h3>
        </header>
        <div class="grid mt-10">

            <div class="flex  justify-between">
                <div class="">
                    @php
                        $filter = [
                            [
                                'value' => '',
                                'label' => 'Semua',
                            ],
                            [
                                'value' => '2024',
                                'label' => '2024',
                            ],
                            [
                                'value' => '2023',
                                'label' => '2023',
                            ],
                            [
                                'value' => '2022',
                                'label' => '2022',
                            ],
                            [
                                'value' => '2021',
                                'label' => '2021',
                            ],
                            [
                                'value' => '2020',
                                'label' => '2020',
                            ],
                            [
                                'value' => '2019',
                                'label' => '2019',
                            ],
                        ];
                        $urut = [
                            [
                                'value' => 'desc',
                                'label' => 'Terbaru',
                            ],
                            [
                                'value' => 'asc',
                                'label' => 'Terlama',
                            ],
                        ];
                    @endphp
                    <form method="GET" class="flex gap-3">
                        <x-form.filter :option="$filter" label="Pilih Tahun" name="filter"
                            request="{{ $request->query('filter') }}"></x-form.filter>
                        <x-form.filter :option="$urut" label="Urutkan" name="sort"
                            request="{{ $request->query('sort') }}"></x-form.filter>

                    </form>
                </div>
                <div class="flex ">
                    <a href="export/inventaris">
                        <button type="button"
                            class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Export
                            Excel</button>
                    </a>
                    <a href="inventaris/category/create">
                        <button type="button"
                            class="text-white  bg-amber-600  focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded text-sm px-5 py-2.5 text-center me-2 mb-2">Tambah
                            Tambah Kategori Mesin</button>
                    </a>
                    <a href="inventaris/create">
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
                            @if (auth()->user()->role_user == 3 or auth()->user()->role_user == 4)
                                <th scope="col" class=" text-center px-6 py-3">
                                    Nama Penginput
                                </th>
                            @endif
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
                        @forelse ($inventaris as $item)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="px-6 py-4 text-center ">
                                    {{ $loop->iteration }}
                                </th>
                                @if (auth()->user()->role_user == 2 or auth()->user()->role_user == 4)
                                    <th scope="col" class=" text-center px-6 py-3">
                                        {{ $item->name }}
                                    </th>
                                @endif
                                <th
                                    class="px-6 py-4 font-medium text-gray-900 text-center  whitespace-nowrap dark:text-white">
                                    {{ $item->nama }}
                                </th>
                                <td class="px-6 py-4 text-center ">
                                    {{ $item->nomor_mesin }}
                                </td>
                                <td class="px-6 py-4 text-center ">
                                    {{ $item->merek }}
                                </td>
                                <td class=" text-center px-6 py-4">
                                    {{ $item->type }}
                                </td>
                                <td class="px-6 py-4 text-center ">
                                    {{ $item->kapasitas }}
                                </td>
                                <td class="px-6 py-4 text-center ">
                                    {{ $item->tahun_perolehan }}
                                </td>
                                <td class="px-6 py-4 text-center ">
                                    {{ $item->nomor_inventaris }}
                                </td>
                                <td class="px-6 py-4 text-center ">
                                    {{ $item->nilai_aktiva }}
                                </td>
                                <td class="px-6 py-4 text-center ">
                                    {{ $item->category }}
                                </td>
                                <td class="px-6 py-4 text-center ">
                                    {{ $item->kondisi_mesin }}
                                </td>
                                <td class="  py-4 text-center flex gap-3 items-center align-middle justify-center">
                                    <a href="/inventaris/{{ $item->id }}/edit">
                                        <iconify-icon icon="mdi:pencil-box" width="30" height="30"
                                            style="color: #ffd500"></iconify-icon>
                                    </a>
                                    <button data-modal-target="{{ $item->id }}"
                                        data-modal-toggle="{{ $item->id }}" class="block  " type="button">
                                        <iconify-icon icon="pepicons-pop:trash-circle-filled" width="24"
                                            height="24" style="color: #d10000"></iconify-icon>
                                    </button>


                                </td>

                            </tr>

                            <div id="{{ $item->id }}" tabindex="-1"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">

                                <div class="relative p-4 w-full max-w-md max-h-full  ">
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <button type="button"
                                            class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-hide="{{ $item->id }}">
                                            <svg class="w-3 h-3" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="p-4 md:p-5 text-center">
                                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                            </svg>
                                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                Apakah Anda Yakin Ingin Menghapus Data</h3>
                                            <form
                                                action="{{ route('inventaris.destroy', ['inventari' => $item->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button data-modal-hide="popup-modal" type="submit"
                                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                    Iya
                                                </button>
                                            </form>

                                            <button data-modal-hide="{{ $item->id }}" type="button"
                                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No,
                                                cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <tr>
                                <td colspan="100%" class=" text-center font-light text-gray-500">Data Belum Ada</td>
                            </tr>
                        @endforelse


                    </tbody>
                </table>

            </div>
            <div class="flex justify-end mt-3">
                {{ $inventaris->appends(request()->query())->links() }}
            </div>
        </div>
    </div>

</x-app-layout>
