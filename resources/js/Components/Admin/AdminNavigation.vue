<template>
    <div>
        <nav class="bg-white border-b border-gray-200 fixed z-30 w-full">
            <div class="px-3 py-3 lg:px-5 lg:pl-3">
                <div class="flex items-center justify-between">
                    <div class="flex items-center justify-start">
                    <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar" class="lg:hidden mr-2 text-gray-600 hover:text-gray-900 cursor-pointer p-2 hover:bg-gray-100 focus:bg-gray-100 focus:ring-2 focus:ring-gray-100 rounded">
                        <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                        <svg id="toggleSidebarMobileClose" class="w-6 h-6 hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>

                    <!-- LOGOOOO -->
                    <a href="#" class="text-xl font-bold flex items-center lg:ml-2.5">
                        <svg height="35px" width="35px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                viewBox="0 0 512 512" xml:space="preserve">
                            <path style="fill:#E07188;" d="M231.43,217.211H107.31c-12.851,0-23.273-10.42-23.273-23.273V54.303
                                c0-12.853,10.421-23.273,23.273-23.273h124.12c12.854,0,23.273,10.42,23.273,23.273v139.636
                                C254.703,206.791,244.285,217.211,231.43,217.211z M130.582,170.666h77.575v-93.09h-77.575L130.582,170.666L130.582,170.666z"/>
                            <path style="fill:#DC4161;" d="M231.43,31.03h-62.06v46.545h38.788v93.09H169.37v46.545h62.06c12.854,0,23.273-10.42,23.273-23.273
                                V54.303C254.703,41.45,244.285,31.03,231.43,31.03z"/>
                            <path style="fill:#F4D853;" d="M262.46,31.03h-24.624c0.861-2.428,1.351-5.033,1.351-7.758C239.188,10.42,228.77,0,215.915,0h-93.09
                                c-12.851,0-23.273,10.42-23.273,23.273c0,2.724,0.493,5.329,1.354,7.758H76.28c-12.851,0-23.273,10.42-23.273,23.273
                                S63.429,77.575,76.28,77.575H262.46c12.854,0,23.273-10.42,23.273-23.273S275.315,31.03,262.46,31.03z"/>
                            <path style="fill:#8CB7E8;" d="M224.97,170.666h-124.12c-55.609,0-100.848,45.24-100.848,100.848v31.03v93.09v93.093
                                C0.002,501.58,10.42,512,23.274,512c12.851,0,23.273-10.42,23.273-23.273v-69.821h232.726v69.821
                                c0,12.853,10.418,23.273,23.273,23.273c12.851,0,23.273-10.42,23.273-23.273v-93.093v-93.09v-31.03
                                C325.818,215.906,280.576,170.666,224.97,170.666z"/>
                            <path style="fill:#E9A440;" d="M285.733,54.303c0-12.853-10.418-23.273-23.273-23.273h-24.624c0.861-2.428,1.351-5.033,1.351-7.758
                                C239.188,10.42,228.77,0,215.915,0H169.37v77.575h93.09C275.315,77.575,285.733,67.155,285.733,54.303z"/>
                            <path style="fill:#6398DE;" d="M224.97,170.666h-55.6v248.241h109.902v69.821c0,12.853,10.418,23.273,23.273,23.273
                                c12.851,0,23.273-10.42,23.273-23.273v-93.093v-93.09v-31.03C325.818,215.906,280.576,170.666,224.97,170.666z"/>
                            <path style="fill:#8CB7E8;" d="M488.726,372.361c-12.854,0-23.273,10.42-23.273,23.273c0,12.834-10.44,23.273-23.273,23.273
                                c-12.834,0-23.273-10.439-23.273-23.273v-93.09v-77.575c0-55.608-45.242-100.848-100.851-100.848l-15.512,0.002
                                c-55.609,0-100.848,45.239-100.848,100.848c0,55.607,45.239,100.846,100.848,100.846h69.818v69.818
                                c0,38.499,31.319,69.818,69.818,69.818c38.497,0,69.818-31.319,69.818-69.818C511.998,382.781,501.577,372.361,488.726,372.361z"/>
                        </svg>
                        <span class="self-center whitespace-nowrap">Admin Panel</span>
                    </a>

                    <!-- Search BOX -->
                    <form action="#" method="GET" class="hidden lg:block lg:pl-32">
                        <label for="topbar-search" class="sr-only">Search</label>
                        <div class="mt-1 relative lg:w-64">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" name="email" id="topbar-search" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full pl-10 p-2.5" placeholder="Search">
                        </div>
                    </form>
                    </div>
                    <div class="flex items-center">
                    <button id="toggleSidebarMobileSearch" type="button" class="lg:hidden text-gray-500 hover:text-gray-900 hover:bg-gray-100 p-2 rounded-lg">
                        <span class="sr-only">Search</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div class="hidden lg:flex items-center">
                    </div>
                    <a href="#" class="hidden sm:inline-flex ml-5 text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center items-center mr-3">
                        Import Data
                    </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</template>