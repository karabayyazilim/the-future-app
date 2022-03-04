<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('admin/movie.add') }}
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
                    <form class="w-full" action="{{route('admin.movie.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="flex-mx-3 mb-6 justify-center ">
                            <div class="w-full px-3 mb-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="grid-first-name">
                                    {{__('admin/movie.title')}}
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-50 text-gray border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="grid-first-name" type="text" name="title" value="{{old('title')}}">
                            </div>
                            <div class="w-full px-3 mb-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="grid-first-name">
                                    {{__('admin/movie.description')}}
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-50 text-gray border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="grid-first-name" type="text" name="description" value="{{old('description')}}">
                            </div>

                            <div class="w-full px-3 mb-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                                    {{__('admin/movie.category')}}
                                </label>
                                <div class="relative">
                                    <select name="category_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                        <option selected disabled>{{__('admin/movie.select')}}</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full px-3 mb-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                                    {{__('admin/movie.character')}}
                                </label>
                                <div class="relative">
                                    <select name="character_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                        <option selected disabled>{{__('admin/movie.select')}}</option>
                                        @foreach($artists as $artist)
                                            <option value="{{$artist->id}}">{{$artist->full_name}}</option>
                                        @endforeach
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full px-3 mb-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="grid-first-name">
                                    {{__('admin/movie.tags')}}
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-50 text-gray border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="grid-first-name" type="text" name="tags" value="{{old('tags')}}">
                            </div>
                            <div class="flex items-center space-x-6 w-full px-3 mb-6">
                                <div class="shrink-0 ml-3">
                                    <img id="avatarShow" class="h-16 w-16 object-cover rounded-md"
                                         src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1361&q=80"
                                         alt="Current profile photo"/>
                                </div>
                                <label class="w-full">
                                    <span class="sr-only">Choose profile photo</span>
                                    <input id="avatar" name="img" type="file" class="block w-full text-sm text-slate-500
                                          file:mr-4 file:py-2 file:px-4
                                          file:rounded-md file:border-0
                                          file:text-sm file:font-semibold
                                          hover:file:bg-violet-100
                                        "/>
                                </label>
                            </div>
                            <div class="w-full px-3 mb-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="grid-first-name">
                                    {{__('admin/movie.content')}}
                                </label>
                                <textarea id="datatable" name="content"></textarea>
                            </div>

                            <div class="w-full px-3">
                                <div class="w-full px-3 mb-6 md:mb-0">
                                    <button
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded sm:w-full">
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

    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('datatable');

        const avatar = document.querySelector('#avatar');
        const avatarShow = document.querySelector('#avatarShow');
        avatar.addEventListener('change', () => {
            console.log('test')
            if (avatar.files && avatar.files[0]) {
                var reader = new FileReader();
                reader.onload = function (event) {
                    avatarShow.setAttribute('src', event.target.result)
                }
                reader.readAsDataURL(avatar.files[0]);
            }
        });
    </script>
</x-app-layout>
