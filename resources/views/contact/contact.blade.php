<x-guest>

    <div class="py-12 bg-white">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white text-4xl text-staghorn-500 font-bold pl-10">
                  Contact Us
                </div>
                        <!-- Alert User -->
        @if(Session::has('success'))
        <div class="bg-green-100 rounded-lg py-5 px-6 mb-4 text-base text-green-700" role="alert">
            {{Session::get('success')}}
          </div>

            @endif
        <x-panel>
            <form action="" method="post" action="{{ route('contact.save') }}">
                    @csrf

                    <x-form.input name="name"/>

                    <x-form.input name="email"/>

                    <x-form.input name="phone"/>

                    <x-form.input name="subject"/>

                    {{-- <x-form.textarea name="msg" /> --}}
                    <x-form.field>
                        <label  class="block mb-1 uppercase font-bold text-xs text-gray-700"
                        for="msg">
                        Message
                        </label>
                        <textarea class="form-textarea border border-gray-200 p-1 w-full rounded"
                            name="msg",
                            id="msg"
                            rows="5"
                        ></textarea>


                    </x-form.field>

                    @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                        <li class="text-red-500 text-xs">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                    <x-form.button>Send Message</x-form.button>
            </form>

        </x-panel>
        </div>
        </div>
    </div>
</x-guest>
