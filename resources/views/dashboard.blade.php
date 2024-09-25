<x-layout>
    <div class="grid gap-4">
        <div class="flex flex-row items-center justify-between">
            <h2 class="text-2xl font-semibold">Time Clock Entries</h2>
            <button class="bg-blue-500 rounded-full text-white hover:bg-blue-600 px-4 py-2">Add New Clock-In</button>
        </div>
        <div class="flex flex-row items-center justify-between">
            <div class="relative">
                <x-svg.search class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></x-svg.search>
                <input
                    type="text"
                    class="w-full pl-10 pr-4 py-2 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Search for Employee"
                />
            </div>

            <div class="bg-gray-200 rounded-full p-1.5">
                <x-svg.download class="text-gray-900"></x-svg.download>
            </div>
        </div>

        <div>
            {{-- Table header --}}
            <div @class([
                'grid grid-cols-11 px-2 py-3 bg-gray-100 rounded-lg font-semibold text-gray-500',
                '[&>*:nth-child(1)]:col-span-3',
                '[&>*:nth-child(2)]:col-span-3',
                '[&>*:nth-child(3)]:col-span-3',
                '[&>*:nth-child(4)]:col-span-1',
                '[&>*:nth-child(5)]:col-span-1',
            ])>
                <h2>Employee Name</h2>
                <h2>Clock In</h2>
                <h2>Clock Out</h2>
                <h2>Total Hours</h2>
                <h2>&nbsp;</h2>
            </div>

            {{-- For each punch in the $punch array,  --}}

            {{-- Table row --}}
            @foreach ($punches as $punch)
                <div @class([
                    'grid grid-cols-11 px-2 py-3 border-b border-gray-200',
                    '[&>*:nth-child(1)]:col-span-3',
                    '[&>*:nth-child(2)]:col-span-3',
                    '[&>*:nth-child(3)]:col-span-3',
                    '[&>*:nth-child(4)]:col-span-1',
                    '[&>*:nth-child(5)]:col-span-1',
                ])>
                    <h2>{{ $punch['employee']['first_name'] }} {{ $punch['employee']['last_name'] }}</h2>
                    <h2>{{ \Carbon\Carbon::parse($punch['clock_in'])->format('h:i A') }}</h2>
                    <h2>{{ \Carbon\Carbon::parse($punch['clock_out'])->format('h:i A') }}</h2>
                    <h2>{{ round(\Carbon\Carbon::parse($punch['clock_in'])->diffInHours($punch['clock_out'])) }} hours</h2>
                    <div class="flex flex-row flex-nowrap items-center gap-2">
                        <div class="grow"></div>
                        <x-svg.edit class="text-gray-500"></x-svg.edit>
                        <x-svg.delete class="text-gray-500"></x-svg.delete>
                    </div>
                </div>
            @endforeach
            

            {{-- More rows... --}}

            {{-- Page selector --}}
            <div class="grid place-content-center">
                <div @class(['flex flex-nowrap py-3 mx-auto place-items-center gap-4'])>
                    <div
                        class="text-gray-900 hover:bg-blue-200 active:bg-blue-200/50 rounded-full p-4 w-4 h-4 grid place-content-center cursor-pointer">
                        <x-svg.chevron-left class="text-gray-500"></x-svg.chevron-left>
                    </div>

                    <a
                        href="#"
                        class="text-gray-900 hover:bg-blue-200 active:bg-blue-200/50 rounded-full p-4 w-4 h-4 grid place-content-center font-bold cursor-pointer"
                    >
                        <span>1</span>
                    </a>
                    <a
                        href="#"
                        class="text-gray-900 hover:bg-blue-200 active:bg-blue-200/50 rounded-full p-4 w-4 h-4 grid place-content-center cursor-pointer"
                    >
                        <span>2</span>
                    </a>
                    <a
                        href="#"
                        class="text-gray-900 hover:bg-blue-200 active:bg-blue-200/50 rounded-full p-4 w-4 h-4 grid place-content-center cursor-pointer"
                    >
                        <span>3</span>
                    </a>
                    <a
                        href="#"
                        class="text-gray-900 hover:bg-blue-200 active:bg-blue-200/50 rounded-full p-4 w-4 h-4 grid place-content-center cursor-pointer"
                    >
                        <span>4</span>
                    </a>
                    <a
                        href="#"
                        class="text-gray-900 hover:bg-blue-200 active:bg-blue-200/50 rounded-full p-4 w-4 h-4 grid place-content-center cursor-pointer"
                    >
                        <span>5</span>
                    </a>
                    <a
                        href="#"
                        class="text-gray-900 hover:bg-blue-200 active:bg-blue-200/50 rounded-full p-4 w-4 h-4 grid place-content-center cursor-pointer"
                    >
                        <span>6</span>
                    </a>
                    <a
                        href="#"
                        class="text-gray-900 hover:bg-blue-200 active:bg-blue-200/50 rounded-full p-4 w-4 h-4 grid place-content-center cursor-pointer"
                    >
                        <span>7</span>
                    </a>

                    <div
                        class="text-gray-900 hover:bg-blue-200 active:bg-blue-200/50 rounded-full p-4 w-4 h-4 grid place-content-center cursor-pointer">
                        <x-svg.chevron-right class="text-gray-500"></x-svg.chevron-right>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
