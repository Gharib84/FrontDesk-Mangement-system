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
                                        Invoices List In Resort
                                    </h1>
                                    <span class="mt-3 bg-green-500 text-white text-center font-bold">
                                        @include('flash::message')
                                    </span>
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
                                                    Price
                                                </th>
                                                <th scope="col" class="text-sm font-bold text-white px-6 py-4">
                                                    Details
                                                </th>
                                                <th scope="col" class="text-sm font-bold text-white px-6 py-4">
                                                    Show
                                            </tr>
                                        </thead class="border-b">
                                        <tbody>

                                            @foreach ($rooms as $room)
                                                @foreach ($room->invoices as $invoice)
                                                    <tr class="bg-white border-b">
                                                        <td
                                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                            {{ $room->room_number }}
                                                        </td>
                                                        <td
                                                            class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                            {{ $room->Guest_Name }}
                                                        </td>
                                                        <td
                                                            class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                            {{ $invoice->price }}
                                                        </td>
                                                        <td
                                                            class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                            {{ $invoice->details }}
                                                        </td>   
                                                        <td>
                                                            <form action="{{ route('rooms.show', $room->checkIn_id) }}"
                                                                method="GET">
                                                                @csrf
                                                                <button type="submit"
                                                                    class="px-6 py-2 border-2 font-bold border-blue-400 text-sm text-blue-400 leading-tight rounded-full focus:outline-none focus:ring-0 transition duration-150 ease-in-out
                                                                ">
                                                                    Show Invoice</button>
                                                            </form>
                                                        </td>

                                                    </tr class="bg-white border-b">
                                                @endforeach
                                            @endforeach

                                        </tbody>
                                    </table>
                                    {{ $rooms->links() }}

                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- end form --}}

                </div>
            </div>
        </div>

</x-app-layout>
