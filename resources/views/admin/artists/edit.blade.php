<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('admin/artist.add') }}
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
                    <form class="w-full" action="{{route('admin.artist.update', $artist)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="flex-mx-3 mb-6 justify-center ">
                            <div class="w-full px-3 mb-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                       for="grid-first-name">
                                    {{__('admin/artist.full_name')}}
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-50 text-gray border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="grid-first-name" type="text" name="full_name" value="{{$artist->full_name}}">
                            </div>
                            <div class="flex items-center space-x-6 w-full px-3 mb-6">
                                <div class="shrink-0 ml-3">
                                    <img id="avatarShow" class="h-16 w-16 object-cover rounded-full"
                                         src="/storage/{{$artist->avatar}}"
                                         alt="Current profile photo"/>
                                </div>
                                <label class="w-full">
                                    <span class="sr-only">Choose profile photo</span>
                                    <input id="avatar" name="avatar" type="file" class="block w-full text-sm text-slate-500
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
                                    {{__('admin/artist.content')}}
                                </label>
                                <textarea id="datatable" name="content">{!! $artist->content !!}</textarea>
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
