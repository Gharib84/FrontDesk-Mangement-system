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

                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <h1 class="font-bold text-xl text-left mb-5 ml-1">
                                        Arrival List In Resort
                                    </h1>
                                    @if (session('success'))
                                    <div role="alert" x-data="{ show: true }" x-show="show" id="alert-session" class="w-full bg-fuchsia-500 mb-2 py-2">
                                        <span class="  mt-3  text-white text-center font-bold">
                                            {{ session('success') }}
                                        </span>
                                    </div>
                                    @php
                                        session()->forget('success');
                                    @endphp
                                @endif
                                    <table class="min-w-full text-center">
                                        <thead class="border-b bg-[#5b21b6]">
                                            <tr>
                                                <th scope="col" class="text-sm font-bold text-white px-6 py-4">
                                                    Room Number
                                                </th>
                                                <th scope="col" class="text-sm font-bold text-white px-6 py-4">
                                                    Guest Name
                                                </th>
                                                <th scope="col" class="text-sm font-bold text-white px-6 py-4">
                                                    Room Type
                                                </th>
                                                <th scope="col" class="text-sm font-bold text-white px-6 py-4">
                                                    Arrival Date
                                                </th>
                                                <th scope="col" class="text-sm font-bold text-white px-6 py-4">
                                                    Departure Date
                                                </th>
                                                <th scope="col" class="text-sm font-bold text-white px-6 py-4">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead class="border-b">
                                        <tbody>

                                            @foreach ($arrivalsList as $arr)
                                                <tr class="bg-white border-b">
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                        {{ $arr->room_number }}
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        {{ $arr->Guest_Name }}
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        {{ $arr->Room_Type }}
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        {{ $arr->Arrival_Date }}
                                                    </td>
                                                    <td
                                                        class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        {{ $arr->Departure_Date }}
                                                    </td>
                                                    <td>
                                                        <form action="{{route('arrivals.destroy', $arr->book_id)}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="inline-block px-6 py-2 border-2 border-red-600 text-red-600 font-bold text-xs leading-tight uppercase rounded-full hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
                                                                Check Out</button>
                                                        </form>
                                                    </td>
                                                </tr class="bg-white border-b">
                                            @endforeach

                                        </tbody>
                                    </table>
                                    {{ $arrivalsList->links() }}
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- end form --}}

                </div>
            </div>
        </div>

</x-app-layout>
