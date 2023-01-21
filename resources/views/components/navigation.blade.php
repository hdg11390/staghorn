<nav class="sticky top-0 flex bg-white rounded shadow-sm">
    <div class="flex items-center gap-2 px-4 py-2">
        <img src="{{ asset('images/xsmbanner.jpg') }}" alt="banner">
    </div>
    <div class="items-center justify-end flex-1 hidden mr-10 md:flex ">

        <a href="home"><x-menu-item>Home</x-menu-item></a>
        <a href="/about"><x-menu-item>About Us</x-menu-item></a>

        <x-menu-item class="group">
            <span>Our Dogs</span>
            <div class="absolute left-0 hidden bg-white border top-full whitespace-nowrap rounded-b-md border-staghorn-100 group-hover:block">
                <a href="/boys"><x-drop-item> <span>Our Boys</span></x-drop-item></a>
                <a href="/girls"><x-drop-item> <span>Our Girls</span></x-drop-item></a>
                <a href="/greets"> <x-drop-item> <span>Our Greeters</span></x-drop-item></a>
                <a href="/retired"><x-drop-item> <span>Retired</span></x-drop-item></a>
                <a href="/rb_boys"><x-drop-item> <span>Rainbow Boys</span></x-drop-item></a>
                <a href="/rb_girls"><x-drop-item> <span>Rainbow Girls</span></x-drop-item></a>


            </div>

        </x-menu-item>


        <x-menu-item class="group">
           <span>News/Litters</span>
           <div class="absolute left-0 hidden bg-white border top-full whitespace-nowrap rounded-b-md border-staghorn-100 group-hover:block">
            <a href="/upcoming"><x-drop-item> <span>Upcoming Litters</span></x-drop-item></a>
            <a href="/shownews"><x-drop-item> <span>Show News</span></x-drop-item></a>
            <a href="/adults"><x-drop-item> <span>Adults Available</span></x-drop-item></a>
           </div>
        </x-menu-item>
        <a href="/contact-form"><x-menu-item>Contact</x-menu-item></a>

    </div>


   </nav>
