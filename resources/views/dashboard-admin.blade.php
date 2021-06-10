<x-master-layout>


    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            <main>
                <div class="border-box flex-1">
                    <div class="border-box p-8">
                        <div class="pl-6 text-2xl font-semibold border-gray-200 text-yellow-600 dark:text-gray-200">Dashboard</div>
                        <!-- Card -->
                        <div class="border-box pl-6 pt-3 pr-6 bg-gray-200 bg-opacity-25 grid gap-6 mb-8 md:grid-cols-2 md:border-box xl:grid-cols-3 rounded items-center justify center">
                            <div class="cursor-pointer transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 bg-gradient-to-r from-green-400 to-blue-500 flex flex-col pl-4 pt-4 pr-4 pb-3 rounded-lg shadow-xs dark:bg-gray-800">
                                <div class="flex items-center">
                                    <img src="images/bel.svg" class="w-14 ml-3" alt="">
                                    <div class="flex-col ml-auto text-right font-bold mr-3">
                                        <span class="text-3xl">100</span>
                                        <p class="text-l text-gray-900 dark:text-gray-200">
                                            Jumlah Notifikasi
                                        </p>
                                    </div>
                                </div>
                                <div class="flex justify-start items-center pl-3 pt-3 pr-3 text-gray-100">
                                    <p class="text-sm font-semibold">Tampilkan</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 ml-auto  text-gray-100" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="cursor-pointer transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 flex flex-col pl-4 pt-4 pr-4 pb-3 rounded-lg shadow-xs dark:bg-gray-800">
                                <div class="flex items-center">
                                    <img src="images/list.svg" class="w-14 ml-3" alt="">
                                    <div class="flex-col ml-auto text-right font-bold mr-3">
                                        <span class="text-3xl">100</span>
                                        <p class="text-l text-gray-900 dark:text-gray-200">
                                            Jumlah Approved
                                        </p>
                                    </div>
                                </div>
                                <div class="flex justify-start items-center pl-3 pt-3 pr-3 text-gray-100">
                                    <p class="text-sm font-semibold">Tampilkan</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 ml-auto  text-gray-100" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="cursor-pointer transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 bg-gradient-to-r from-purple-400 via-indigo-500 to-blue-500 flex flex-col pl-4 pt-4 pr-4 pb-3 rounded-lg shadow-xs dark:bg-gray-800">
                                <div class="flex items-center">
                                    <img src="images/writing.svg" class="w-14 ml-3" alt="">
                                    <div class="flex-col ml-auto text-right font-bold mr-3">
                                        <span class="text-3xl">100</span>
                                        <p class="text-l text-gray-900 dark:text-gray-200">
                                            Template Surat Keluar
                                        </p>
                                    </div>
                                </div>
                                <div class="flex justify-start items-center pl-3 pt-3 pr-3 text-gray-100">
                                    <p class="text-sm font-semibold">Tampilkan</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 ml-auto  text-gray-100" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            </div>


                        </div>

                        <div class="pl-6 text-2xl font-semibold border-gray-200 text-yellow-600 dark:text-gray-200">Recent</div>
                        <!-- New Table -->
                        <div class="pl-6 pt-3 pr-6 w-full overflow-hidden rounded-lg shadow-xs">
                            <div class="w-full overflow-x-auto">
                                <table class="w-full whitespace-no-wrap">
                                    <thead>
                                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                            <th class="px-4 py-3">Type Of Letter</th>
                                            <th class="px-4 py-3">Created at</th>
                                            <th class="px-4 py-3">Status</th>
                                            <th class="px-4 py-3">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                        <tr class="text-gray-700 dark:text-gray-400">
                                            <td class="px-4 py-3">
                                                <div class="flex items-center text-sm">
                                                    <!-- Avatar with inset shadow -->
                                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                        <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                                    </div>
                                                    <div>
                                                        <p class="font-semibold">Hans Burger</p>
                                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                                            10x Developer
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                $ 863.45
                                            </td>
                                            <td class="px-4 py-3 text-xs">
                                                <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                                    Approved
                                                </span>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                                                </svg>
                                            </td>
                                        </tr>

                                        <tr class="text-gray-700 dark:text-gray-400">
                                            <td class="px-4 py-3">
                                                <div class="flex items-center text-sm">
                                                    <!-- Avatar with inset shadow -->
                                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                        <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&facepad=3&fit=facearea&s=707b9c33066bf8808c934c8ab394dff6" alt="" loading="lazy" />
                                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                                    </div>
                                                    <div>
                                                        <p class="font-semibold">Jolina Angelie</p>
                                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                                            Unemployed
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                $ 369.95
                                            </td>
                                            <td class="px-4 py-3 text-xs">
                                                <span class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600">
                                                    Pending
                                                </span>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                                                </svg>
                                            </td>
                                        </tr>

                                        <tr class="text-gray-700 dark:text-gray-400">
                                            <td class="px-4 py-3">
                                                <div class="flex items-center text-sm">
                                                    <!-- Avatar with inset shadow -->
                                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                        <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/photo-1551069613-1904dbdcda11?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                                    </div>
                                                    <div>
                                                        <p class="font-semibold">Sarah Curry</p>
                                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                                            Designer
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                $ 86.00
                                            </td>
                                            <td class="px-4 py-3 text-xs">
                                                <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700">
                                                    Denied
                                                </span>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                                                </svg>
                                            </td>
                                        </tr>

                                        <tr class="text-gray-700 dark:text-gray-400">
                                            <td class="px-4 py-3">
                                                <div class="flex items-center text-sm">
                                                    <!-- Avatar with inset shadow -->
                                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                        <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/photo-1551006917-3b4c078c47c9?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                                    </div>
                                                    <div>
                                                        <p class="font-semibold">Rulia Joberts</p>
                                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                                            Actress
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                $ 1276.45
                                            </td>
                                            <td class="px-4 py-3 text-xs">
                                                <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                                    Approved
                                                </span>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                                                </svg>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                                <span class="flex items-center col-span-3">
                                    Showing 21-30 of 100
                                </span>
                                <span class="col-span-2"></span>
                                <!-- Pagination -->
                                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                                    <nav aria-label="Table navigation">
                                        <ul class="inline-flex items-center">
                                            <li>
                                                <button class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple" aria-label="Previous">
                                                    <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                                        <path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                                    </svg>
                                                </button>
                                            </li>
                                            <li>
                                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                                    1
                                                </button>
                                            </li>
                                            <li>
                                                <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                                    2
                                                </button>
                                            </li>
                                            <li>
                                                <button class="px-3 py-1 text-white transition-colors duration-150 bg-blue-600 border border-r-0 border-blue-600 rounded-md focus:outline-none focus:shadow-outline-purple">
                                                    3
                                                </button>
                                            </li>
                                            <li>
                                               <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                                   4
                                               </button>
                                            </li>
                                            <li>
                                                <button class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple" aria-label="Next">
                                                    <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                                        <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                                    </svg>
                                                </button>
                                            </li>
                                        </ul>
                                    </nav>
                                </span>
                            </div>
                        </div>



                    </div>
                </div>
            </main>

            </div>
    </div>
</x-master-layout>
