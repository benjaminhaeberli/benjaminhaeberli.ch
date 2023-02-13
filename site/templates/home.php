<?php snippet('header') ?>

<h1 class="text-lg">
    <?= snippet('hgroup', ['title' => page()->title()]) ?>
</h1>



<div class=" bg-slate-50 pt-[5.75rem]">

    <div class="relative">
        <div class="relative mx-auto max-w-container px-4 pt-16 sm:px-6 lg:px-8 lg:pt-20">
            <div class="mx-auto grid max-w-[40rem] grid-cols-1 gap-y-16 gap-x-8 lg:max-w-none lg:grid-cols-3">
                <div class="flex flex-col lg:pb-6">
                    <h1 class="mt-4 text-4xl font-extrabold font-display leading-none tracking-tight text-slate-900 sm:text-5xl sm:leading-[3.5rem]">Éco-conception de services numériques.</h1>
                    <p class="order-first text-base font-semibold leading-7 text-sky-500">Qui suis-je ?</p>
                    <p class="mt-6 text-base leading-7 text-slate-700">Je suis engagé en matière de durabilité, d'éthique et de respect de la vie privée</p>
                    <div class="flex flex-wrap mt-6">
                        <div class="flex items-center text-sm font-medium text-slate-500"><svg fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 flex-none stroke-current text-slate-400" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <ellipse cx="16" cy="16" rx="13" ry="5"></ellipse>
                                <ellipse cx="16" cy="16" rx="13" ry="5" transform="rotate(60 16 16)"></ellipse>
                                <ellipse rx="13" ry="5" transform="matrix(-.5 .86603 .86603 .5 16 16)"></ellipse>
                                <circle cx="16" cy="16" r="2"></circle>
                            </svg><span class="ml-2.5">React</span></div>

                        <div class="flex items-center text-sm font-medium text-slate-500 ml-6"><svg fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 flex-none stroke-current text-slate-400" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <defs>
                                    <linearGradient id="next-icon-gradient-a" x1="15.125" y1="18.25" x2="24.25" y2="27.375" gradientUnits="userSpaceOnUse">
                                        <stop offset=".24" stop-color="currentColor"></stop>
                                        <stop offset="1" stop-color="currentColor" stop-opacity="0"></stop>
                                    </linearGradient>
                                    <linearGradient id="next-icon-gradient-b" x1="20.5" y1="11.25" x2="20.5" y2="18.25" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="currentColor"></stop>
                                        <stop offset="1" stop-color="currentColor" stop-opacity="0"></stop>
                                    </linearGradient>
                                </defs>
                                <path d="M16.25 28.5c6.765 0 12.25-5.485 12.25-12.25S23.015 4 16.25 4 4 9.485 4 16.25 9.485 28.5 16.25 28.5Z"></path>
                                <path d="M12 21.5V12l12.25 14.25" stroke="url(#next-icon-gradient-a)"></path>
                                <path d="M21.25 12a.75.75 0 1 0-1.5 0v8.17l1.5 1.64V12Z" fill="url(#next-icon-gradient-b)" stroke-width="0"></path>
                            </svg><span class="ml-2.5">Next.js</span></div>
                    </div>

                </div>
                <div class="relative lg:col-span-2"><img src="/img/templates/pocket/banner.png" class="relative z-20 -mb-36 aspect-[853/682] max-w-[853px] rounded-xl bg-slate-200 shadow-xl shadow-black/5 ring-1 ring-slate-900/5 sm:-mb-16 lg:-mb-8 xl:-mb-16" width="1600" height="1280">
                    <div class="z-0 hidden md:block">
                        <div class="absolute -top-4 -right-12 -left-12 h-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_right,transparent,white_4rem,white_calc(100%-4rem),transparent)]"></div>
                        <div class="absolute -top-12 bottom-0 -left-4 w-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_top,white_4rem,white_calc(100%-4rem),transparent)]"></div>
                        <div class="absolute -top-12 bottom-0 -right-4 w-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_top,white_4rem,white_calc(100%-4rem),transparent)]"></div>
                        <div class="absolute -top-12 right-10 mt-px flex h-8 items-end overflow-hidden">
                            <div class="flex -mb-px h-[2px] w-80 -scale-x-100">
                                <div class="w-full flex-none blur-sm [background-image:linear-gradient(90deg,rgba(56,189,248,0)_0%,#0EA5E9_32.29%,rgba(236,72,153,0.3)_67.19%,rgba(236,72,153,0)_100%)]"></div>
                                <div class="-ml-[100%] w-full flex-none blur-[1px] [background-image:linear-gradient(90deg,rgba(56,189,248,0)_0%,#0EA5E9_32.29%,rgba(236,72,153,0.3)_67.19%,rgba(236,72,153,0)_100%)]"></div>
                            </div>
                        </div>
                        <div class="absolute bottom-0 -left-48 flex h-8 items-end overflow-hidden">
                            <div class="flex -mb-px h-[2px] w-80 -scale-x-100">
                                <div class="w-full flex-none blur-sm [background-image:linear-gradient(90deg,rgba(56,189,248,0)_0%,#0EA5E9_32.29%,rgba(236,72,153,0.3)_67.19%,rgba(236,72,153,0)_100%)]"></div>
                                <div class="-ml-[100%] w-full flex-none blur-[1px] [background-image:linear-gradient(90deg,rgba(56,189,248,0)_0%,#0EA5E9_32.29%,rgba(236,72,153,0.3)_67.19%,rgba(236,72,153,0)_100%)]"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute inset-x-0 bottom-0 h-px overflow-hidden">
        <div class="absolute -right-8 bottom-0 -left-8 h-px bg-slate-900/[0.1] [mask-image:linear-gradient(to_right,transparent,white_4rem,white_calc(100%-4rem),transparent)]"></div>
    </div>
</div>

<?= page()->content()->get('text') ?>

<?php snippet('footer') ?>