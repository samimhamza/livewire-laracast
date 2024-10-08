<div>

    <form wire:submit="changeGreeting">
        <div class="mt-2">
            <select wire:model.fill="greeting" class=" p-4 rounded-md bg-gray-700 text-white">
                @foreach ($greetings as $greeting)
                    <option value="{{ $greeting->greeting }}">{{ $greeting->greeting }}</option>
                @endforeach
            </select>
            <input wire:model="name" type="text" class="p-4 rounded-md bg-gray-700 text-white">
        </div>
        <div class="text-red-500">
            @error('name')
                {{ $message }}
            @enderror
        </div>
        <div class="mt-2">
            <button type="submit" class="text-white font-medium rounded-md px-4 py-2 bg-blue-600">
                Greet
            </button>
        </div>
    </form>
    @if ($greetingMessage !== '')
        <div class="mt-5">
            {{ $greetingMessage }}
        </div>
    @endif
</div>
