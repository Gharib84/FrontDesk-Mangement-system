<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('F.D.System') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 text-center">

                    {{-- cards --}}
                    <div
                        class="cards mt-7 w-full h-2/4  sm:flex sm:flex-col md:flex md:flex-col lg:flex lg:flex-row  xl:flex xl:flex-row 2xl:flex 2xl:flex-row justify-between
                            sm:items-center md:items-center 
                        ">
                        <div class="card-one card w-full h-48 flex justify-center items-center shadow-md ml-5 rounded-r">

                            <div class="sub-child grid gap-3">
                                <h1 class="text-3xl">
                                    Make A Book
                                </h1>
                                <a href="{{ route('books.create') }}" class="bg-indigo-800 px-5 py-2 rounded-r mt-2"
                                    style="color: aliceblue;font-weight:bold;">
                                    Create
                                </a>
                            </div>
                        </div>

                        <div
                            class="card-two card w-full h-48 flex justify-center items-center shadow-md ml-5 rounded-r">
                            <div class="sub-child grid gap-3">
                                <h1 class="text-3xl">
                                    Arrivals List
                                </h1>
                                <a href="{{ route('rooms.arrivals') }}" class="bg-indigo-800 px-5 py-2 rounded-r mt-2"
                                    style="color: aliceblue;font-weight:bold;">
                                    Search
                                </a>
                            </div>
                        </div>

                        <div
                            class="card-three card w-full h-48 flex justify-center items-center shadow-md ml-5 rounded-r">
                            <div class="sub-child grid gap-3">
                                <h1 class="text-3xl">
                                    Departure List
                                </h1>
                                <a href="{{ route('books.create') }}" class="bg-indigo-800 px-5 py-2 rounded-r mt-2"
                                    style="color: aliceblue;font-weight:bold;">
                                    Check Now
                                </a>
                            </div>

                        {{-- end cards --}}
                    </div>
                </div>
            </div>
            <div class="p-6 bg-white border-b border-gray-200 text-center">

                {{-- cards --}}
                <div
                    class="cards mt-7 w-full h-2/4  sm:flex sm:flex-col md:flex md:flex-col lg:flex lg:flex-row  xl:flex xl:flex-row 2xl:flex 2xl:flex-row justify-between
                        sm:items-center md:items-center 
                    ">
                    <div class="card-one card w-full h-48 flex justify-center items-center shadow-md ml-5 rounded-r">

                        <div class="sub-child grid gap-3">
                            <h1 class="text-3xl">
                                Rooms List
                            </h1>
                            <a href="{{ route('books.index') }}" class="bg-indigo-800 px-5 py-2 rounded-r mt-2"
                                style="color: aliceblue;font-weight:bold;">
                                Show
                            </a>
                        </div>
                    </div>

                    <div
                        class="card-two card w-full h-48 flex justify-center items-center shadow-md ml-5 rounded-r">
                        <div class="sub-child grid gap-3">
                            <h1 class="text-3xl">
                                Check In List
                            </h1>
                            <a href="{{ route('rooms.index') }}" class="bg-indigo-800 px-5 py-2 rounded-r mt-2"
                                style="color: aliceblue;font-weight:bold;">
                                Display
                            </a>
                        </div>
                    </div>

                    <div
                        class="card-three card w-full h-48 flex justify-center items-center shadow-md ml-5 rounded-r">
                        <div class="sub-child grid gap-3">
                            <h1 class="text-3xl">
                                Invoices List
                            </h1>
                            <a href="{{ route('invoices.table') }}" class="bg-indigo-800 px-5 py-2 rounded-r mt-2"
                                style="color: aliceblue;font-weight:bold;">
                                Check Now
                            </a>
                        </div>

                    {{-- end cards --}}
                </div>
            </div>
        </div>
        </div>
    </div>
</x-app-layout>
