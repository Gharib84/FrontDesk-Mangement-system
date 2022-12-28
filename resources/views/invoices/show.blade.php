<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('F.D.System') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="font-bold text-xl text-left mb-5 ml-1 text-blue-600">Invoice List</h1>
            @foreach ($invoices as $item)
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-5">
                <div class="invoice-header flex flex-row py-5 ml-1 gap-2">
                    <p class="text-base text-left text-slate-900 p-2"> Guest Name:
                <h3 class="text-base text-left text-slate-600 p-2">{{$item->room->Guest_Name}}</h3>
                    </p>
                    <p class="text-base text-left text-slate-900 p-2"> Room Number:
                        <h3 class="text-base text-left text-slate-600 p-2">{{$item->room->room_number}}</h3>
                            </p>
                </div>
                <div class="details py-1 mb-2 ml-3 gap-2">
                    <article class="text-base text-left text-slate-600">
                        Payment Details:  {{$item->details}}
                    </article>
                </div>
            </div>
                
            @endforeach
            
        </div>
    </div>
</x-app-layout>
