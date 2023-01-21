<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Girls of Staghorn') }}
        </h2>
    </x-slot>

  
        <div class="max-w-7xl mx-auto">
            <div class="bg-white ">
              <p class="px-20 pt-8 text-4xl font-semibold text-center">Retired But Not Forgotten</p>
              <div class="py-4">
                <div class="w-1/2 border-solid border-4 border-t border-gray-700 mx-auto shadow-md shadow-staghorn-500"></div>
            </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container mx-auto px-5 py-4 ">
                        <div class=" flex justify-center flex-wrap -m-4 ">

                            @foreach ($dogs as $dog )

                            <div class="flex flex-row w-3/5">
                              <div class="basis-1/6">
                                <img src="{{ $dog->pic }}" alt="" class="w-auto h-24 mx-auto py-2" >
                              </div>
                              <div class="basis-3/6 text-lg text-gray-900 font-semibold px-6  whitespace-nowrap self-center">
                                {{ $dog->regName }}
                              </div>
                              <div class="basis-2/6 text-lg text-gray-900 font-semibold px-6 self-center whitespace-nowrap">
                                {{ $dog->callName }}'s pedigree
                              </div>
                            </div>


                   
                          {{-- <div class="p-4 md:w-80">
                            <div class="h-full border-2 border-gray-200 shadow-md shadow-staghorn-500 border-opacity-60 rounded-lg overflow-hidden max-w-xs">
                              <img class="lg:h-48 w-80 object-cover object-center" src="{{ asset( $dog->pic) }}" alt="blog">
                              <div class="p-6">
                                 <h1 class="title-font text-lg font-semibold text-gray-900 mb-3 text-center h-14">{{ $dog->regName }}</h1>
                                <p class="leading-relaxed mb-3 text-center">D.O.B. {{ \Carbon\Carbon::parse($dog->birthday)->format('F j, Y ') }}</p>
                                <div class="flex items-center flex-wrap ">
                                  <button class="flex mx-auto mt-2 text-white bg-staghorn-400 border-0 py-2 px-5 focus:outline-none hover:bg-staghorn-500 rounded">{{ $dog->callName }}'s Page</button>
                               </div>
                              </div>
                            </div>
                          </div> --}}



                          @endforeach 
                          
                            
                    
                          </div>

                          <div class="pt-6">
                            {{ $dogs->links() }}
                          </div>
                        </div>
                      </div>
                </div>

            </div>
            <x-footer/>
    </div>

</x-app-layout>