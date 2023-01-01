<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('F.D.System') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="font-bold text-2xl text-left mb-5 ml-1 text-blue-600 sm:ml-2">Invoice List</h1>
            @if (session('success'))
                <div role="alert" x-data="{ show: true }" x-show="show" id="alert-session"
                    class="w-full text-center bg-fuchsia-500 mb-2 py-6">
                    <span class="  mt-3  text-white text-center font-bold">
                        {{ session('success') }}
                    </span>
                </div>
                @php
                    session()->forget('success');
                @endphp
            @endif
            @foreach ($invoices as $invoice)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-5">
                    <div class="invoice-parent py-5 flex flex-row justify-between">
                        <div class="first-child h-full flex flex-col align-middle">
                            <h1 class="p-5 text-6xl text-red-600 font-bold">
                                Invoice #{{ $invoiceNumber }}
                            </h1>
                            <h3 class="px-5 py-0 text-black text-lg  mt-0 mb-2 font-bold">
                                {{ $invoice->room->Guest_Name }}
                            </h3>
                            <p class="py-0 px-5 text-left text-slate-600">
                                Room Number: {{ $invoice->room->room_number }}
                            </p>
                            <article class="py-0 px-5 text-slate-600">
                                <span class="font-bold text-black">Details:</span>
                                {{ $invoice->details }}

                            </article>
                        </div>
                        <div class="right-child h-full flex flex-col gap-0 justify-between align-middle">
                            <h1 class="font-bold text-6xl h-full p-5 m-5 text-black w-full">
                                {{ $invoice->price }}<span class="text-6xl text-yellow-400 ml-1">$</span>
                            </h1>
                            <form action="{{ route('invoices.PayNow', $invoice) }}" method="post" class="w-full mb-3">
                                @csrf
                                @method('DELETE')
                                <div>
                                    <button type="submit"
                                        class="hover:shadow-form rounded-md bg-[#5b21b6]  py-3 mx-auto px-8 text-base font-semibold text-white outline-none block">
                                        Pay Now
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</x-app-layout>
