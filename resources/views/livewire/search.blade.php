<div>

    <form>
        <div class="mt-2">
            <input placeholder="Search" wire:model.live.debounce="searchText" type="text"
                class="p-4 w-full rounded-md bg-gray-700 text-white">
        </div>
    </form>

    <livewire:search-results :results="$results" :show="!empty($searchText)">
</div>
