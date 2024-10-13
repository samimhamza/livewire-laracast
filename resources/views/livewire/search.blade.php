<div>

    <form>
        <div class="mt-2">
            <input placeholder="{{ $placeholder }}" wire:model.live.debounce="searchText" type="text"
                class="p-4 w-full rounded-md bg-gray-700 text-white" wire:offline.attr="disabled">
        </div>
    </form>

    <livewire:search-results :results="$results" :show="!empty($searchText)">
</div>
