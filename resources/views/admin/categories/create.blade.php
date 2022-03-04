<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('admin/category.add') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex flex-col justify-center items-center">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div
                                class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                                role="alert">
                                <span class="font-medium">Error</span> {{ $error }}
                            </div>
                        @endforeach
                    @endif
                    <form class="w-full max-w-lg" action="{{route('admin.category.store')}}" method="post">
                        @csrf
                        <div class="flex-mx-3 mb-6 justify-center ">
                            <div class="w-full px-3 mb-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="grid-first-name">
                                    {{__('admin/category.name')}}
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-50 text-gray border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="grid-first-name" type="text" name="name" value="{{old('name')}}">
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <button
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded md:w-[465px] sm:w-full">
                                        {{__('admin/category.save_btn')}}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
