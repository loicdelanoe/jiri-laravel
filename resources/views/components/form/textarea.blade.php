<div class="flex flex-col gap-2">
    <label class="font-bold mb-0 pb-1" for="{{ $name }}">{{ __($label) }}</label>
    <textarea class="border border-grey-700 focus:invalid:border-pink-500 invalid:text-pink-600 rounded-md p-2"
              name="{{ $name }}"
              id="{{ $name }}"
              cols="30" rows="10"
              placeholder="{{ __($placeholder) }}">{{ old($name) ?? $slot }}</textarea>
    @error($name)
    <span class="block text-red-500">{{ $message }}</span>
    @enderror
</div>
