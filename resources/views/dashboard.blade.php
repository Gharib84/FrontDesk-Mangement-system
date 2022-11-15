<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 text-center">
                    Welcome To Paradise Resort System
                    {{-- cards --}}
                    <div
                        class="cards mt-7 w-full h-2/4  sm:flex sm:flex-col md:flex md:flex-col lg:flex lg:flex-row  xl:flex xl:flex-row 2xl:flex 2xl:flex-row justify-between
                            sm:items-center md:items-center 
                        ">
                        <div class="card-one card w-full h-48 flex justify-center items-center shadow-md ml-5 rounded-r">
                            <form action="" method="POST">
                                <h2>
                                    Make A Book
                                </h2>
                                <button class="bg-indigo-800 px-5 py-2 rounded-r mt-1" style="color: aliceblue;font-weight:bold;">
                                    Create
                                </button>
                            </form>
                        </div>

                        <div class="card-two card w-full h-48 flex justify-center items-center shadow-md ml-5 rounded-r">
                            <form action="" method="POST">
                                <h2>
                                   Check Arrivals
                                </h2>
                                <button class="bg-indigo-800 px-5 py-2 rounded-r mt-1" style="color: aliceblue; font-weight:bold;">
                                    Search
                                </button>
                            </form>
                        </div>

                        <div class="card-three card w-full h-48 flex justify-center items-center shadow-md ml-5 rounded-r">
                            <form action="" method="POST">
                                <h2>
                                    Departure
                                </h2>
                                <button class="bg-indigo-800 px-5 py-2 rounded-r mt-1" style="color: aliceblue;font-weight:bold;">
                                    Check
                                </button>
                            </form>
                        </div>

                        {{-- end cards --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
