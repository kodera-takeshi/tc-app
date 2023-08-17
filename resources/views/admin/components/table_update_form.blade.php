<label for="id-{{ $id }}" class="block text-sm font-semibold leading-6 text-gray-900">ID</label>
<input
    type="text"
    name="id"
    id="id-{{ $id }}"
    autocomplete="id"
    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"
    value="{{ $id }}"
    readonly
>
<label for="name-{{ $id }}" class="block text-sm font-semibold leading-6 text-gray-900 mt-2">ステータス</label>
<input
    type="text"
    name="name"
    id="name-{{ $id }}"
    autocomplete="name"
    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"
    value="{{ $name }}"
    required
>
<div class="mt-10">
    <button type="submit"
            class="block w-full rounded-md bg-blue-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
    >
        更新
    </button>
</div>
