<x-guest>
    <div class="mx-auto max-w-7xl">
        <div class="bg-white ">
            <p class="px-20 pt-8 text-4xl font-semibold text-center">Retired But Not Forgotten</p>
            <div class="py-4">
                <div class="w-1/2 mx-auto border-4 border-t border-gray-700 border-solid shadow-md shadow-staghorn-500"></div>
            </div>

            <div class="p-6 bg-white ">
                <div class="container px-5 py-4 mx-auto ">
                    <div class="flex flex-wrap justify-center -m-4 ">
                        @foreach ($dogs as $dog )

                            <div class="flex flex-col items-center lg:flex-row lg:w-3/5">
                                <div class="lg:basis lg:min-w-180px ">
                                <img src="{{ asset('images/' . $dog->pic) }}" alt="" class="w-auto h-24 py-2 mx-auto" >
                                </div>
                                <div class="self-center px-6 text-lg font-semibold text-gray-900 whitespace-nowrap lg:basis-3/6">
                                    <a href="{{ route('dogg', $dog) }}">
                                        {{ $dog->regName }}
                                    <a/>
                                </div>

                                <div class="self-center px-6 text-lg font-semibold text-gray-900 whitespace-nowrap lg:basis-2/6">
                                    <a href="{{ route('show', $dog) }}">
                                        {{ $dog->callName }}'s pedigree
                                    <a/>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="max-w-4xl pt-6 mx-auto">
                        {{ $dogs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest>
