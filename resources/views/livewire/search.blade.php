<div>

    <form>
        <div class="mt-2">
            <input placeholder="{{ $placeholder }}" wire:model.live.debounce="searchText" type="text"
                class="p-4 w-full rounded-md bg-gray-700 text-white" wire:offline.attr="disabled">
        </div>
    </form>
    @if (!empty($searchText))
        <div wire:transition>
            <livewire:search-results :results="$results">
        </div>
    @endif
</div>
