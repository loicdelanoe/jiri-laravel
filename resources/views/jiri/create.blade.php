<x-layouts.main>
    <h2 class="font-bold text-xl">Create a new Jiri</h2>
    <form action="/jiris" method="post" class="flex flex-col gap-4 bg-slate-50 p-4">
        @csrf
        <div class="flex flex-col gap-2">
            <label class="font-bold" for="name">Name</label>
            <input class="border border-grey-700 focus:invalid:border-pink-500 invalid:text-pink-600 rounded-md p-2"
                   type="text" name="name" id="name">
        </div>
        <div class="flex flex-col gap-2">
            <label class="font-bold" for="starting-at">Starting at</label>
            <input class="border border-grey-700 focus:invalid:border-pink-500 invalid:text-pink-600 rounded-md p-2"
                   type="text" name="starting_at" id="starting_at">
        </div>
        <div>
            <button class="bg-blue-500 font-bold text-white rounded-md p-2 px-4 tracking-wider uppercase" type="submit">
                Create
            </button>
        </div>
    </form>
</x-layouts.main>
