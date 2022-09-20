<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>The Best Donuts, Coffee, Yogurt, Sandwich, and Cronut</title>
    <link rel="icon" href="<?= base_url('assets/images/jco2.png') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>
<style>
    #logo {
        transition: 0.4s;
    }
</style>

<body class="scrolled">
    <div class="container mx-auto px-1">
        <nav class="grid grid-cols-2 pr-14 sticky top-0 mb-7 bg-white">
            <div class="ml-5 mt-2">
                <img src="<?php echo base_url('assets/images/jco.png') ?>" id="logo" alt="" class="" width="80px">
            </div>
            <div class="flex justify-end gap-8 m-10 text-sm">
                <a href="" class="hover:text-orange-500 transition duration-300 ease-in-out">DONUTS</a>
                <a href="" class="hover:text-orange-500 transition duration-300 ease-in-out">COFFEE</a>
                <a href="" class="hover:text-orange-500 transition duration-300 ease-in-out">MENU</a>
                <svg width="9px" height="18px" viewBox="0 0 9 13" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="16.-sign-up" transform="translate(-987.000000, -117.000000)" fill="#F26724">
                            <g id="Menu" transform="translate(81.000000, 87.000000)">
                                <g transform="translate(624.000000, 27.000000)" id="17-copy-17">
                                    <path d="M286.493232,16 C286.605734,16 286.712366,15.4875294 286.786715,15.4031079 C286.959283,15.2072343 291.014051,10.5685558 290.999963,7.50979368 C290.988811,5.02317838 288.970036,3 286.50008,3 C284.018579,3 282,5.02396187 282,7.51175242 C282,10.5687516 286.027571,15.2062549 286.199161,15.4021285 C286.273315,15.4869418 286.37486,15.5329721 286.493232,15.5357143 L286.493232,16 Z M286.500094,6 C285.67298,6 285,6.6729375 285,7.5 C285,8.32725 285.67298,9 286.500094,9 C287.327208,9 288,8.32725 288,7.5 C288,6.6729375 287.327208,6 286.500094,6 Z"></path>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
                <a href="" class="hover:text-orange-500 transition duration-300 ease-in-out flex justify-end">STORES</a>
                <a href="" class="hover:text-orange-500 transition duration-300 ease-in-out">CONTACT US</a>
            </div>
        </nav>
        <section>
            <div class="relative">
                <ul id="slider">
                    <li class="h-[85vh] relative"><img src="<?= base_url('assets/images/bg-jco4.jpg') ?>" alt="" class="h-full w-full object-cover p-10">
                        <div class="absolute flex space-x-5 bottom-20 left-20 items-center">
                            <h2 class="text-1xl text-white font-semibold">SEE MORE</h2>
                            <button class="p-3">
                                <svg data-v-4e2fe63c="" version="1.1" id="svg5-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve">
                                    <path data-v-4e2fe63c="" d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z"></path>
                                </svg>
                            </button>
                    </li>
                    <li class="h-[85vh] relative hidden"><img src="<?= base_url('assets/images/bg-jco3.jpg') ?>" alt="" class="h-full w-full object-cover  p-10">
                        <div class="absolute flex space-x-5 bottom-20 left-20 items-center">
                            <h2 class="text-1xl text-white font-semibold">SEE MORE</h2>
                            <button class="p-3">
                                <svg data-v-4e2fe63c="" version="1.1" id="svg5-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve">
                                    <path data-v-4e2fe63c="" d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z"></path>
                                </svg>
                            </button>
                        </div>
                    </li>
                    <li class="h-[85vh] relative hidden"><img src="<?= base_url('assets/images/bg-jco2.jpg') ?>" alt="" class="h-full w-full object-cover  p-10">
                        <div class="absolute flex space-x-5 bottom-20 left-20 items-center">
                            <h2 class="text-1xl text-white font-semibold">SEE MORE</h2>
                            <button class="p-3">
                                <svg data-v-4e2fe63c="" version="1.1" id="svg5-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve">
                                    <path data-v-4e2fe63c="" d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z"></path>
                                </svg>
                            </button>
                        </div>
                    </li>
                </ul>
                
                <div class="absolute px-5 flex w-full h-full top-0 left-0">
                    <div class="my-auto w-full flex justify-between m-5">
                        <button onClick="prev()" class="p-3 text-white hover:bg-transparent hover:border border-white rounded-full">

                            <!-- left -->

                            <svg data-v-4e2fe63c="" version="1.1" id="svg4-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve">
                                <path data-v-4e2fe63c="" d="M13,26c-0.256,0-0.512-0.098-0.707-0.293l-12-12c-0.391-0.391-0.391-1.023,0-1.414l12-12c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L2.414,13l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414C13.512,25.902,13.256,26,13,26z"></path>
                            </svg>
                        </button>
                        <button onClick="next()" class="p-3 text-white hover:border border-white transition all ease-in-out delay-150 rounded-full">

                            <!-- right -->

                            <svg data-v-4e2fe63c="" version="1.1" id="svg5-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve">
                                <path data-v-4e2fe63c="" d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        window.onscroll = function() {
            scrollFunction()
        }

        function scrollFunction() {
            if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
                document.getElementById("logo").style.width = "70px"
            } else {
                document.getElementById("logo").style.width = "80px"
            }
        }
    </script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
</body>

</html>