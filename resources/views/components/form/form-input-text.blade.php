<div>
    <label for="{{ $formname }}"
        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $label }}</label>
    <input type="text" name="{{ $name }}" id="{{ $formname }}"
        class="bg-gray-50 border border-gray-300 @error($name) border-red-500 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder="Masukan Merek" required>
    @error($name)
        <span class="text-red-500 text-sm">{{ $messageerror }}</span>
    @enderror
</div>
