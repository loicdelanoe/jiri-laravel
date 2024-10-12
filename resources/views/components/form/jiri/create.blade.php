<form {{ $attributes }} method="post" class="flex flex-col gap-4 bg-slate-50 p-4">
    @csrf
    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
    <x-form.input
        label="Name"
        type="text"
        name="name"
        placeholder="Jon Doe"
    />
    <x-form.input
        label="Starting at"
        type="text"
        name="starting_at"
        :placeholder="now()"
    />
    <div class="flex gap-4 mb-6">
        <div class="flex flex-col gap-2">
            <span class="font-bold text-2xl">Students</span>
            @foreach($contacts as $contact)
                <div class="bg-slate-200 rounded-md flex items-center pl-3 w-64">
                    <input id="students-{{ $contact->id }}"
                           type="checkbox"
                           name="students[]"
                           class="h-4 w-4"
                           value="{{ $contact->id }}"
                    >
                    <label class="py-3 px-3 w-full inline-block cursor-pointer"
                           for="students-{{ $contact->id }}">{{ $contact->full_name }}</label>
                </div>
            @endforeach
        </div>
        <div class="flex flex-col gap-2">
            <span class="font-bold text-2xl">Evaluators</span>
            @foreach($contacts as $contact)
                <div class="bg-slate-200 rounded-md flex items-center pl-3 w-64">
                    <input id="evaluators-{{ $contact->id }}"
                           type="checkbox"
                           name="evaluators[]"
                           class="h-4 w-4"
                           value="{{ $contact->id }}"
                    >
                    <label class="py-3 px-3 w-full inline-block cursor-pointer"
                           for="evaluators-{{ $contact->id }}">{{ $contact->full_name }}</label>
                </div>
            @endforeach
        </div>
    </div>
    <div>
        <span class="font-bold text-2xl mb-2 inline-block">Projects</span>
        <div class="flex gap-2 flex-wrap">
            @foreach($projects as $project)
                <div class="bg-slate-200 rounded-md flex items-center pl-3 w-64">
                    <input id="projects-{{ $project->id }}"
                           type="checkbox"
                           name="projects[]"
                           class="h-4 w-4"
                           value="{{ $project->id }}"
                    >
                    <label class="py-3 px-3 w-full inline-block cursor-pointer"
                           for="projects-{{ $project->id }}">{{ $project->name }}</label>
                </div>
            @endforeach
        </div>
    </div>
    <div>
        <x-buttons.main>{{ __("Create this Jiri") }}</x-buttons.main>
    </div>
</form>
