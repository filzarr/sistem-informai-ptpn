<select id="option" onchange="this.form.submit()"
    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block   p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
    name="{{ $name }}">
    <option value="" disabled selected >{{ $label }}</option>
    @foreach ($option as $item)
        {{ $request }}
        @if ($request == $item['value'])
            <option value="{{ $item['value'] }}" selected>{{ $item['label'] }}</option>
        @else
            <option value="{{ $item['value'] }}">{{ $item['label'] }}</option>
        @endif
        {{-- <option value="{{ $item['value']  }}">{{ $item['label']  }}</option> --}}
    @endforeach 
</select>
