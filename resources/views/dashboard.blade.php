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
                        Dashboard
                    </a>
                </li>

            </ol>
        </nav>
    </x-slot>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 rounded bg-white mt-10 py-4">
        <div class="grid grid-cols-4 gap-10">
            <div
                class="flex items-center gap-5  p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <iconify-icon class="text-3xl" icon="icon-park-solid:data" style="color: #0ac2ff"></iconify-icon>
                <div class="grid">
                    <h3 class=" font-semibold text-gray-600">Jumlah Inventaris</h3>
                    <span class="text-sm font-semibold text-gray-500">50</span>
                </div>
            </div>
            <div
                class="flex items-center gap-5  p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <iconify-icon class="text-3xl" icon="emojione-monotone:oil-drum" style="color: #fff700"></iconify-icon>
                <div class="grid">
                    <h3 class=" font-semibold text-gray-600">Produksi Minyak Sawit Hari Ini</h3>
                    <span class="text-sm font-semibold text-gray-500">Belum Ada</span>
                </div>
            </div>
            <div
                class="flex items-center gap-5  p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <iconify-icon class="text-3xl" icon="material-symbols:oil-barrel-rounded"
                    style="color: #3700ff"></iconify-icon>
                <div class="grid">
                    <h3 class=" font-semibold text-gray-600">Rendemen Minyak Sawit Hari Ini</h3>
                    <span class="text-sm font-semibold text-gray-500">Belum Ada</span>
                </div>
            </div>
            <div
                class="flex items-center gap-5  p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <iconify-icon class="text-3xl" icon="maki:industry" style="color: #f20707"></iconify-icon>
                <div class="grid">
                    <h3 class=" font-semibold text-gray-600">Produksi TBS Hari Ini</h3>
                    <span class="text-sm font-semibold text-gray-500">Belum Ada</span>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-5 gap-5">
          <div class="col-span-2 flex ">
            <div class=" w-full ">
              <div class="w-full py-5 bg-white rounded-lg shadow mt-10 dark:bg-gray-800  ">
                  <div class=" ">
                      <canvas id="myChart"></canvas>
                  </div>
                  <div
                      class="grid grid-cols-1   items-center border-gray-200 border-t dark:border-gray-700 justify-between mt-2.5">
                      <div class="pt-5 ps-3">
                          <a href="#"
                              class=" px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                              <svg class="w-3.5 h-3.5 text-white me-2 rtl:rotate-180" aria-hidden="true"
                                  xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                                  <path
                                      d="M14.066 0H7v5a2 2 0 0 1-2 2H0v11a1.97 1.97 0 0 0 1.934 2h12.132A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.934-2Zm-3 15H4.828a1 1 0 0 1 0-2h6.238a1 1 0 0 1 0 2Zm0-4H4.828a1 1 0 0 1 0-2h6.238a1 1 0 1 1 0 2Z" />
                                  <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.98 2.98 0 0 0 .13 5H5Z" />
                              </svg>
                              View full report
                          </a>
                      </div>
                  </div>
              </div>
            </div>
          </div>
          <div class=" w-full bg-white rounded-lg col-span-3 shadow mt-10 dark:bg-gray-800 p-4 md:p-6">
              <div class="  ">
                  <canvas id="chartair"></canvas>
              </div>
              <div
                  class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between mt-2.5">
                  <div class="pt-5">
                      <a href="#"
                          class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                          <svg class="w-3.5 h-3.5 text-white me-2 rtl:rotate-180" aria-hidden="true"
                              xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                              <path
                                  d="M14.066 0H7v5a2 2 0 0 1-2 2H0v11a1.97 1.97 0 0 0 1.934 2h12.132A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.934-2Zm-3 15H4.828a1 1 0 0 1 0-2h6.238a1 1 0 0 1 0 2Zm0-4H4.828a1 1 0 0 1 0-2h6.238a1 1 0 1 1 0 2Z" />
                              <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.98 2.98 0 0 0 .13 5H5Z" />
                          </svg>
                          View full report
                      </a>
                  </div>
              </div>
          </div>

        </div>
    </div>
</x-app-layout>
