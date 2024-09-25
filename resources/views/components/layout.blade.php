<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    @vite('resources/css/app.css')
</head>

<body class="p-4">
    <div class="rounded-xl overflow-hidden min-h-[32rem] flex flex-col shadow-lg border border-gray-500">
        <div class="w-100vw flex flex-nowrap items-center text-white bg-gray-900 py-2 gap-4 pr-4">
            <div class="grid place-content-center h-full w-16 hover:opacity-50 cursor-pointer">
                <x-svg.grid></x-svg.grid>
            </div>
            <h2 class="grow">Dashboard</h2>
            <x-svg.alert></x-svg.alert>
            <div class="grid grid-rows-2 text-right pl-8">
                <h2 class="font-semibold">Astro Burger Bar</h2>
                <p>8372 Main Rd</p>
            </div>
            <div class="bg-gray-200 rounded-full grid place-content-center h-8 w-8">
                <span class="uppercase font-bold text-xs text-gray-900">CE</span>
            </div>
            <x-svg.chevron-down></x-svg.chevron-down>
        </div>

        <div class="grow relative flex flex-nowrap">
            <div class="grid h-full w-16 border-r border-black h-100vh place-content-center gap-4 py-2">
                <div class="h-8 w-8 grid place-content-center">
                    <x-svg.home></x-svg.home>
                </div>
                <div class="h-8 w-8 grid place-content-center">
                    <x-svg.files></x-svg.files>
                </div>
                <div class="h-8 w-8 grid place-content-center">
                    <x-svg.receipts></x-svg.receipts>
                </div>
                <div class="h-8 w-8 grid place-content-center">
                    <x-svg.screen></x-svg.screen>
                </div>
                <div class="h-8 w-8 grid place-content-center">
                    <x-svg.campaigns></x-svg.campaigns>
                </div>
                <div class="h-8 w-8 grid place-content-center bg-blue-200 rounded-lg">
                    <x-svg.labor></x-svg.labor>
                </div>
                <div class="h-8 w-8 grid place-content-center">
                    <x-svg.placeholder></x-svg.placeholder>
                </div>
                <div class="h-8 w-8 grid place-content-center">
                    <x-svg.placeholder></x-svg.placeholder>
                </div>
                <div class="h-8 w-8 grid place-content-center">
                    <x-svg.placeholder></x-svg.placeholder>
                </div>
                <div class="h-8 w-8 grid place-content-center">
                    <x-svg.placeholder></x-svg.placeholder>
                </div>
                <div class="h-8 w-8 grid place-content-center">
                    <x-svg.placeholder></x-svg.placeholder>
                </div>
            </div>
            <div class="p-4 w-full">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>
@vite('resources/js/app.js')

</html>
