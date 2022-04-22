<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>

<body>

    <div id="app">


        <!-- This example requires Tailwind CSS v2.0+ -->
        <nav class="bg-white shadow">
            <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
                <div class="relative flex justify-between h-16">
                    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                        <!-- Mobile menu button -->
                        <button type="button"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <!--
                                Icon when menu is closed.

                                Heroicon name: outline/menu

                                Menu open: "hidden", Menu closed: "block"
                            -->
                            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <!--
                                Icon when menu is open.

                                Heroicon name: outline/x

                                Menu open: "block", Menu closed: "hidden"
                            -->
                            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                        <div class="flex-shrink-0 flex items-center">
                            <svg id="logo-47" width="155" height="29" class="gradient" viewBox="0 0 155 29"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.4469 23.968C7.46073 26.9542 2.40329 26.9423 0.990883 22.9624C0.714354 22.1832 0.493259 21.382 0.330644 20.5645C-0.333309 17.2265 0.00745592 13.7667 1.30985 10.6224C2.61224 7.4782 4.81776 4.79076 7.64751 2.89998C10.4773 1.0092 13.8042 -1.45785e-07 17.2075 0C20.6108 1.45785e-07 23.9377 1.0092 26.7674 2.89998C29.5972 4.79076 31.8027 7.4782 33.1051 10.6225C34.4075 13.7667 34.7482 17.2265 34.0843 20.5645C33.9217 21.382 33.7006 22.1832 33.424 22.9624C32.0116 26.9423 26.9542 26.9542 23.968 23.968L19.3584 19.3584C18.918 18.918 18.9635 18.1917 19.085 17.5809C19.1588 17.2096 19.1209 16.8247 18.976 16.4749C18.8311 16.1251 18.5858 15.8261 18.271 15.6158C17.9562 15.4055 17.5861 15.2932 17.2075 15.2932C16.8289 15.2932 16.4588 15.4055 16.144 15.6158C15.8291 15.8261 15.5838 16.1251 15.4389 16.4749C15.294 16.8247 15.2561 17.2096 15.33 17.5809C15.4515 18.1917 15.4969 18.918 15.0565 19.3584L10.4469 23.968Z"
                                    fill="url(#logo470_linear_1495_1244)"></path>
                                <path d="M48.4145 19.8367H53.0398V22.5624H44.8835V8.06683H48.4145V19.8367Z"
                                    class="cneutral" fill="#3A3B7B"></path>
                                <path
                                    d="M59.3494 22.7276C58.2206 22.7276 57.2019 22.4867 56.2933 22.0049C55.3986 21.5231 54.6896 20.8348 54.1665 19.94C53.6572 19.0452 53.4025 17.999 53.4025 16.8013C53.4025 15.6175 53.664 14.5781 54.1871 13.6833C54.7103 12.7748 55.4261 12.0796 56.3346 11.5978C57.2432 11.116 58.2619 10.8751 59.3907 10.8751C60.5195 10.8751 61.5382 11.116 62.4467 11.5978C63.3553 12.0796 64.0711 12.7748 64.5942 13.6833C65.1173 14.5781 65.3789 15.6175 65.3789 16.8013C65.3789 17.9852 65.1104 19.0314 64.5736 19.94C64.0505 20.8348 63.3278 21.5231 62.4054 22.0049C61.4969 22.4867 60.4782 22.7276 59.3494 22.7276ZM59.3494 19.6715C60.0239 19.6715 60.5952 19.4238 61.0633 18.9282C61.5451 18.4326 61.786 17.7237 61.786 16.8013C61.786 15.879 61.5519 15.1701 61.0839 14.6745C60.6296 14.1789 60.0652 13.9311 59.3907 13.9311C58.7024 13.9311 58.1311 14.1789 57.6768 14.6745C57.2225 15.1563 56.9954 15.8652 56.9954 16.8013C56.9954 17.7237 57.2157 18.4326 57.6562 18.9282C58.1105 19.4238 58.6749 19.6715 59.3494 19.6715Z"
                                    class="cneutral" fill="#3A3B7B"></path>
                                <path
                                    d="M71.0102 10.8751C71.8224 10.8751 72.5314 11.0403 73.1371 11.3707C73.7565 11.701 74.2315 12.1347 74.5619 12.6715V11.0403H78.0928V22.5417C78.0928 23.6017 77.8795 24.5585 77.4527 25.4119C77.0397 26.2792 76.3996 26.9675 75.5324 27.4768C74.6789 27.9862 73.612 28.2409 72.3318 28.2409C70.6248 28.2409 69.2413 27.8348 68.1813 27.0226C67.1214 26.2241 66.5156 25.1366 66.3642 23.76H69.8539C69.964 24.2005 70.2256 24.5447 70.6386 24.7925C71.0515 25.054 71.5609 25.1848 72.1666 25.1848C72.8962 25.1848 73.4743 24.9714 73.9011 24.5447C74.3416 24.1317 74.5619 23.4641 74.5619 22.5417V20.9105C74.2177 21.4473 73.7428 21.8879 73.1371 22.232C72.5314 22.5624 71.8224 22.7276 71.0102 22.7276C70.0604 22.7276 69.2 22.4867 68.4291 22.0049C67.6582 21.5093 67.0456 20.8141 66.5914 19.9193C66.1509 19.0108 65.9306 17.9646 65.9306 16.7807C65.9306 15.5968 66.1509 14.5575 66.5914 13.6627C67.0456 12.7679 67.6582 12.0796 68.4291 11.5978C69.2 11.116 70.0604 10.8751 71.0102 10.8751ZM74.5619 16.8013C74.5619 15.9203 74.3141 15.2251 73.8185 14.7158C73.3367 14.2065 72.7447 13.9518 72.0427 13.9518C71.3406 13.9518 70.7418 14.2065 70.2462 14.7158C69.7644 15.2114 69.5235 15.8997 69.5235 16.7807C69.5235 17.6617 69.7644 18.3638 70.2462 18.8869C70.7418 19.3962 71.3406 19.6509 72.0427 19.6509C72.7447 19.6509 73.3367 19.3962 73.8185 18.8869C74.3141 18.3775 74.5619 17.6824 74.5619 16.8013Z"
                                    class="cneutral" fill="#3A3B7B"></path>
                                <path
                                    d="M85.2727 22.7276C84.1439 22.7276 83.1252 22.4867 82.2167 22.0049C81.3219 21.5231 80.6129 20.8348 80.0898 19.94C79.5805 19.0452 79.3258 17.999 79.3258 16.8013C79.3258 15.6175 79.5873 14.5781 80.1105 13.6833C80.6336 12.7748 81.3494 12.0796 82.2579 11.5978C83.1665 11.116 84.1852 10.8751 85.314 10.8751C86.4428 10.8751 87.4615 11.116 88.37 11.5978C89.2786 12.0796 89.9944 12.7748 90.5175 13.6833C91.0406 14.5781 91.3022 15.6175 91.3022 16.8013C91.3022 17.9852 91.0338 19.0314 90.4969 19.94C89.9738 20.8348 89.2511 21.5231 88.3287 22.0049C87.4202 22.4867 86.4015 22.7276 85.2727 22.7276ZM85.2727 19.6715C85.9472 19.6715 86.5185 19.4238 86.9866 18.9282C87.4684 18.4326 87.7093 17.7237 87.7093 16.8013C87.7093 15.879 87.4752 15.1701 87.0072 14.6745C86.5529 14.1789 85.9885 13.9311 85.314 13.9311C84.6257 13.9311 84.0544 14.1789 83.6001 14.6745C83.1459 15.1563 82.9187 15.8652 82.9187 16.8013C82.9187 17.7237 83.139 18.4326 83.5795 18.9282C84.0338 19.4238 84.5982 19.6715 85.2727 19.6715Z"
                                    class="cneutral" fill="#3A3B7B"></path>
                                <path
                                    d="M94.3318 9.84264C93.7123 9.84264 93.203 9.66368 92.8038 9.30577C92.4183 8.93409 92.2256 8.47981 92.2256 7.94294C92.2256 7.3923 92.4183 6.93802 92.8038 6.5801C93.203 6.20842 93.7123 6.02258 94.3318 6.02258C94.9375 6.02258 95.4331 6.20842 95.8185 6.5801C96.2177 6.93802 96.4173 7.3923 96.4173 7.94294C96.4173 8.47981 96.2177 8.93409 95.8185 9.30577C95.4331 9.66368 94.9375 9.84264 94.3318 9.84264ZM96.0869 11.0403V22.5624H92.556V11.0403H96.0869Z"
                                    class="cneutral" fill="#3A3B7B"></path>
                                <path
                                    d="M101.557 12.6715C101.901 12.1347 102.376 11.701 102.982 11.3707C103.588 11.0403 104.297 10.8751 105.109 10.8751C106.059 10.8751 106.919 11.116 107.69 11.5978C108.461 12.0796 109.067 12.7679 109.507 13.6627C109.961 14.5575 110.189 15.5968 110.189 16.7807C110.189 17.9646 109.961 19.0108 109.507 19.9193C109.067 20.8141 108.461 21.5093 107.69 22.0049C106.919 22.4867 106.059 22.7276 105.109 22.7276C104.31 22.7276 103.602 22.5624 102.982 22.232C102.376 21.9016 101.901 21.4749 101.557 20.9518V28.055H98.0263V11.0403H101.557V12.6715ZM106.596 16.7807C106.596 15.8997 106.348 15.2114 105.852 14.7158C105.37 14.2065 104.772 13.9518 104.056 13.9518C103.354 13.9518 102.755 14.2065 102.259 14.7158C101.778 15.2251 101.537 15.9203 101.537 16.8013C101.537 17.6824 101.778 18.3775 102.259 18.8869C102.755 19.3962 103.354 19.6509 104.056 19.6509C104.758 19.6509 105.357 19.3962 105.852 18.8869C106.348 18.3638 106.596 17.6617 106.596 16.7807Z"
                                    class="cneutral" fill="#3A3B7B"></path>
                                <path
                                    d="M116.109 22.7276C115.104 22.7276 114.209 22.5555 113.424 22.2114C112.64 21.8672 112.02 21.3992 111.566 20.8072C111.112 20.2015 110.857 19.527 110.802 18.7836H114.292C114.333 19.1828 114.519 19.5063 114.849 19.7541C115.18 20.0019 115.586 20.1258 116.068 20.1258C116.508 20.1258 116.845 20.0432 117.079 19.878C117.327 19.6991 117.451 19.4719 117.451 19.1966C117.451 18.8662 117.279 18.6253 116.935 18.4739C116.591 18.3087 116.033 18.1298 115.262 17.937C114.436 17.7443 113.748 17.5447 113.197 17.3382C112.647 17.118 112.172 16.7807 111.773 16.3264C111.373 15.8584 111.174 15.232 111.174 14.4474C111.174 13.7866 111.353 13.1878 111.711 12.6509C112.082 12.1003 112.619 11.6666 113.321 11.35C114.037 11.0334 114.884 10.8751 115.861 10.8751C117.306 10.8751 118.442 11.233 119.268 11.9488C120.108 12.6647 120.59 13.6145 120.714 14.7984H117.451C117.396 14.3992 117.217 14.0826 116.914 13.8485C116.625 13.6145 116.24 13.4975 115.758 13.4975C115.345 13.4975 115.028 13.5801 114.808 13.7453C114.588 13.8967 114.478 14.1101 114.478 14.3854C114.478 14.7158 114.65 14.9636 114.994 15.1288C115.352 15.294 115.902 15.4592 116.646 15.6243C117.499 15.8446 118.194 16.0649 118.731 16.2851C119.268 16.4916 119.736 16.8357 120.135 17.3176C120.548 17.7856 120.762 18.4188 120.776 19.2173C120.776 19.8918 120.583 20.4975 120.197 21.0344C119.826 21.5575 119.282 21.9705 118.566 22.2733C117.864 22.5762 117.045 22.7276 116.109 22.7276Z"
                                    class="cneutral" fill="#3A3B7B"></path>
                                <path
                                    d="M133.694 11.0403V22.5624H130.163V20.9931C129.805 21.5024 129.316 21.9154 128.697 22.232C128.091 22.5349 127.417 22.6863 126.673 22.6863C125.792 22.6863 125.014 22.4936 124.34 22.1081C123.665 21.7089 123.142 21.1376 122.771 20.3943C122.399 19.6509 122.213 18.7768 122.213 17.7718V11.0403H125.723V17.2969C125.723 18.0678 125.923 18.6666 126.322 19.0934C126.721 19.5201 127.258 19.7335 127.933 19.7335C128.621 19.7335 129.165 19.5201 129.564 19.0934C129.963 18.6666 130.163 18.0678 130.163 17.2969V11.0403H133.694Z"
                                    class="cneutral" fill="#3A3B7B"></path>
                                <path
                                    d="M150.313 10.9164C151.744 10.9164 152.88 11.35 153.72 12.2173C154.573 13.0845 155 14.289 155 15.8308V22.5624H151.49V16.3058C151.49 15.5624 151.29 14.9911 150.891 14.5919C150.505 14.1789 149.969 13.9724 149.28 13.9724C148.592 13.9724 148.048 14.1789 147.649 14.5919C147.264 14.9911 147.071 15.5624 147.071 16.3058V22.5624H143.56V16.3058C143.56 15.5624 143.361 14.9911 142.962 14.5919C142.576 14.1789 142.039 13.9724 141.351 13.9724C140.663 13.9724 140.119 14.1789 139.72 14.5919C139.334 14.9911 139.142 15.5624 139.142 16.3058V22.5624H135.611V11.0403H139.142V12.4857C139.5 12.0039 139.968 11.6253 140.546 11.35C141.124 11.0609 141.778 10.9164 142.507 10.9164C143.375 10.9164 144.146 11.1022 144.82 11.4739C145.508 11.8456 146.045 12.3756 146.431 13.0639C146.83 12.4306 147.374 11.9144 148.062 11.5152C148.75 11.116 149.501 10.9164 150.313 10.9164Z"
                                    class="cneutral" fill="#3A3B7B"></path>
                                <defs>
                                    <linearGradient id="logo470_linear_1495_1244" x1="32.8486" y1="8.60374" x2="2.30537"
                                        y2="8.60374" gradientUnits="userSpaceOnUse">
                                        <stop class="ccompli2" stop-color="#64C2DB"></stop>
                                        <stop offset="0.510417" class="ccompli1" stop-color="#7476ED"></stop>
                                        <stop offset="1" class="ccustom" stop-color="#E56F8C"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                            <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
                            <router-link class="hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium"
                                to="/" exact>
                                Home
                            </router-link>

                            <router-link class="hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium"
                                to="/about">
                                About
                            </router-link>

                            <router-link class="hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium"
                                to="/contact">
                                Contact
                            </router-link>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="sm:hidden" id="mobile-menu">
                <div class="pt-2 pb-4 space-y-1">
                    <!-- Current: "bg-indigo-50 border-indigo-500 text-indigo-700", Default: "border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700" -->
                    <router-link class="bg-indigo-50 border-indigo-500 text-indigo-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium" to="/" exact>
                        Home
                    </router-link>

                    <router-link class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium" to="/about">
                        About
                    </router-link>

                    <router-link class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium"
                        to="/contact">
                        Contact
                    </router-link>
                </div>
            </div>
        </nav>

        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <router-view></router-view>
        </div>
    </div>

    <script src="{{ asset('/js/app.js') }}"></script>
</body>

</html>
