<h3 class="font-bold text-lg mb-4">Follow list</h3>

<ul>
    @foreach (auth()->user()->follows as $user)
    <li class="mb-4">
        <div class="flex items-center text-sm">
            <img src="{{ $user->profile->profileImage() }}" alt="" class="rounded-full mr-2 w-10">
            {{ $user->name }}
        </div>
    </li>
    @endforeach
</ul>