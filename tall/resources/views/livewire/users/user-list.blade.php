{{-- <div>
</div> --}}
{{-- Close your eyes. Count to one. That is how long forever feels. --}}

<ul class="mt-4">
    @foreach ($users as $user)
        <li class="border-b py-2 mb-2 flex justify-between"
            wire:key="{{ $user->id }}">

            <a href="/users/view/{{ $user->id }}"
                 class="text-blue-700" wire:navigate>
                {{ $user->name }}
            </a>

            <button wire:click="delete({{ $user->id }})"
                class="text-red-500 text-xl font-bold">
                &times;
            </button>
        </li>
    @endforeach
</ul>
