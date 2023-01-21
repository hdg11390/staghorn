<x-guest>


    <section >
        <div class="flex items-center justify-center py-6 mx-auto">
            <img src="{{ asset('images/welcome.jpg') }}" alt="">
        </div>
            <div class="flex border-b-4 border-black border-double">
            <div class="flex-1 pb-2 pl-10 ml-4 text-lg text-left ">  {{ \Carbon\Carbon::now()->format('F j, Y ') }} </div>
            <div class="flex pb-2 pr-10 mr-4 text-lg text-right">Napanee ON</div>
            </div>

         <div class="mt-4">
            <x-carousel/>
            </div>

            <div class="flex items-center py-8 mx-auto">
                <div class="w-8/12">

                <p class="px-10 mx-auto prose-xl prose-p text-staghorn-900">We are Staghorn Reg`d Labradors. In the 25+ years since Staghorn was registered, we have produced several top winning Champions, including Best in Specialty Show winning adults and puppies as well as several obedience and working certificate titled dogs. Many of our dogs have gone on to become definite assets in other breeding programs, both across Canada and the USA. We maintain a small breeding program of select Labrador Retrievers in S.E. Ontario, Canada. We are located 2 hours from Toronto and 2- 1/2 hours from Ottawa.</p>
                </div>


                <div class="w-4/12 ">
                    <div class="flex items-center justify-center px-4">
                        <div class="block mx-4 bg-white rounded-lg shadow-lg max-w-4/5">

                          <h5 class="px-6 py-4 mb-2 text-xl font-medium leading-tight text-center rounded text-zinc-100 bg-staghorn-400">Upcoming Litters and Availablity</h5>
                          <div class="p-6">
                          <p class="mb-4 text-base text-staghorn">
                            Visit our Upcoming Litters page for information about our 2023 puppies.
                          </p>
                          <div class="flex items-center justify-center mx-auto ">
                            <a href="/upcoming">
                          <button class="px-4 py-2 mt-2 border-0 rounded text-zinc-100 bg-staghorn-400 focus:outline-none hover:bg-staghorn-500">Upcoming Page</button>
                        </a>
                        </div>
                        </div>
                      </div>



                </div>

              </div>


    </section>




</x-guest>




