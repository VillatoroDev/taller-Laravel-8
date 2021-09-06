<div class="bg-white shadow-lg rounded-lg px-4 py-6 text-center">
    <a href="{{ route('course', $course->slug) }}">
        <img class="rouded-md mb-2" src="{{ Storage::url($course->image) }}" alt="Prueba de imagen">
        <h2 class="text-lg font-bold text-gray-600 truncate uppercase">{{ $course->name }}</h2>
        <h3 class="text-md text-gray-500">{{ $course->excerpt }}</h3>

        <div class="flex items-center">
            <img class="rounded-full mt-4 h-16 w-16" src="{{ $course->user->avatar }}" alt="Avatar del profesor">
            <div>
                <p class="text-sm text-left text-gray-400 font-semibold ml-4">{{ $course->user->name }}</p>
                <p class="text-sm text-left text-gray-300 ml-4">{{ $course->created_at->diffForHumans() }}</p>
            </div>
        </div>

    </a>
</div>
