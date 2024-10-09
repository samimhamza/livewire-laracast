<div class="m-auto w-1/2 mb-4">
    <div class="mb-3">
        <a href="/dashboard/articles/create" class="text-gray-200 p-2 bg-indigo-700 hover:bg-indigo-900" wire:navigate>
            Create Article
        </a>
    </div>
    <table>
        <thead class="text-xs uppercase bg-gray-700 text-gray-400">
            <tr>
                <th class="px-6 py-3">Title</th>
                <th class="px-6 py-3">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr class="border-b bg-gray-800 border-gray-700" wire:key="{{ $article->id }}">
                    <td class="px-6 py-3">
                        {{ $article->title }}
                    </td>
                    <td class="px-6 py-3">
                        <a class="text-gray-200 p-2" href="/dashboard/articles/{{ $article->id }}/edit"
                            wire-navigate>Edit</a>
                        <button class="text-gray-200 p-2 bg-red-700 hover:bg-red-900 rounded-sm"
                            wire:click="delete({{ $article->id }})"
                            wire:confirm="Are you sure you want to delete this article?">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
