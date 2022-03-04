<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-wrap justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('admin/menu.artist') }}
            </h2>
            <a href="{{route('admin.artist.create')}}">
                <button
                    class="h-10 px-5 text-indigo-700 transition-colors duration-150 border border-indigo-500 rounded-lg focus:shadow-outline hover:bg-indigo-500 hover:text-indigo-100">
                    {{ __('admin/artist.add') }}
                </button>
            </a>
        </div>
    </x-slot>

    <div class="py-12">

        <div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2">
            <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                <table id="datatable" class="stripe hover"
                       style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                    <thead>
                    <tr>
                        <th scope="col"
                            class="py-3 px-6 text-md font-bold tracking-wider text-left text-gray-700 uppercase ">
                            {{__('admin/artist.full_name')}}
                        </th>
                        <th scope="col"
                            class="py-3 px-6 text-md font-bold tracking-wider text-left text-gray-700 uppercase ">
                            <span class="sr-only">Sil</span>
                        </th>
                        <th scope="col"
                            class="py-3 px-6 text-md font-bold tracking-wider text-left text-gray-700 uppercase ">
                            <span class="sr-only">Düzenle</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($artists as $artist)
                        <tr class="bg-white border-b ">
                            <td class="py-4 px-6 text-md font-medium text-gray-900  ">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                        <img class="w-8 h-8 rounded-full" src="/storage/{{$artist->avatar}}" alt="Neil image">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        {{$artist->full_name}}
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-6 text-md font-medium text-right ">
                                <a href="{{route('admin.artist.edit', $artist)}}"
                                   class="text-blue-600  hover:underline">{{__('admin/artist.edit_btn')}}</a>
                            </td>
                            <td class="py-4 px-6 text-md font-medium text-right ">
                                <form action="{{route('admin.artist.destroy',$artist)}}"
                                      method="post"
                                      onsubmit="return confirm('{{__('admin/artist.delete_confirm')}}');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-600  hover:underline">
                                        {{__('admin/artist.delete')}}
                                    </button>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function() {

            var table = $('#datatable').DataTable({
                responsive: true
            })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>
</x-app-layout>
