<div class="flex w-full pb-10">
    <div class="w-3/6 mx-1">
        <input wire:model.debounce.300ms="search" type="text" class="block w-full px-4 py-3 leading-tight text-gray-700 bg-[#c8d5dd] border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"placeholder="Search users...">
    </div>
    <div class="relative w-1/6 mx-1">
        <select wire:model="orderBy" class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-[#c8d5dd] border border-blue-200 rounded appearance-none focus:outline-none focus:bg-blue-50 focus:border-gray-500" id="grid-state">
            <option value="id">ID</option>
            <option value="callName">Call Name</option>
            <option value="pics">Picture</option>
            <option value="img_by">Image By</option>
        </select>
                    {{-- <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div> --}}

    </div>
    <div class="relative w-1/6 mx-1">
        <select wire:model="orderAsc" class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-[#c8d5dd] border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
            <option value="1">Descending</option>
            <option value="0">Ascending</option>
        </select>
        {{-- <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div> --}}
    </div>
    <div class="relative w-1/6 mx-1">
        <select wire:model="perPage" class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-[#c8d5dd] border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
            <option>10</option>
            <option>15</option>
            <option>20</option>
            <option>25</option>
            <option>50</option>
            <option>100</option>
        </select>
        {{-- <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div> --}}
    </div>
</div>
