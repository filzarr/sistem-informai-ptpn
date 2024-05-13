@props([ 'name', 'placeholder', 'value','label'])
<div>
    <label for="{{ $name }}"
        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $label }}</label>
    <input type="number" name="{{ $name }}" id="{{ $name }}" value="{{$value}}"
        class="bg-gray-50 border border-gray-300 @error($name) border-red-500 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder="{{$placeholder}}" >
    @error($name)
        <span class="text-red-500 text-sm">{{$message}}</span>
    @enderror
</div>
