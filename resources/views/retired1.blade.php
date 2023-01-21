<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    
        <div class="max-w-7xl mx-auto">
            <div class="bg-white  shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  


                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                            <table class="w-3/4 mx-auto">
                                <thead class="border-b">
                            
                                </thead>
                                <tbody>
                                    @foreach (\App\Models\Dog::where('dogstat', '=', 'R')
                                    ->orderBy('birthday')->get() as $dog)

                                <tr class="border-t ">
                                    <td ><img src="{{ $dog->pic }}" alt="" class="w-auto h-24 mx-auto py-2" ></td>
                                    <td class="text-lg text-gray-900 font-semibold px-6 py-4 whitespace-nowrap">
                                        {{ $dog->regName }}
                                    </td>
                                    <td class="text-lg text-gray-900 font-semibold px-6 py-4 whitespace-nowrap">
                                        {{ $dog->callName }}'s pedigree
                                    </td>
                                    
                                </tr>
                                @endforeach 
                                </tbody>
                            </table>
                            </div>
                        </div>
                        </div>
                    </div>















        
                </div>
            </div>
        </div>
   
    <x-footer/>
</x-app-layout>
