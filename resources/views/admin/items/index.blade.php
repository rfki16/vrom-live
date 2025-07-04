<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Items') }}
        </h2>
    </x-slot>

    <x-slot name="script">
        <script>
            var datatable = $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                stateSave: true,
                ajax: {
                    url: '{!! url()->current() !!}'
                },
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.12.1/i18n/id.json'
                },
                columns: [{
                        data: 'id',
                        name: 'id',
                        className: 'text-center',
                    },
                    {
                        data: 'thumbnail',
                        name: 'thumbnail',
                        orderable: false,
                        searchable: false,
                    }, 
                    {
                        data: 'name',
                        name: 'name',
                        className: 'text-center',
                    },  
                    {
                        data: 'brand.name', 
                        name: 'brand.name',
                        className: 'text-center',
                    },  
                    {
                        data: 'type.name',
                        name: 'type.name',
                        className: 'text-center',
                    },                                        
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        width: '15%',
                    },
                ],
            });
        </script>
    </x-slot>

    <div class="py-12">
        <div class="px-6 mx-auto max-w-7x1 sm lg:px-8">
            <div class="mb-10">
                <a href="{{ route('admin.items.create') }}" class="px-4 py-2 font-bold text-white bg-green-500 rounded hover:bg-green-700">+ Buat Item</a>
            </div>
            <div class="overflow-hidden shadow sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <table id="dataTable">
                        <thead>
                            <tr>
                                <th style="max-width: 10%;">ID</th>
                                <th>Thumbnail</th>
                                <th>Name</th>
                                <th>Brand</th>
                                <th>Type</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>