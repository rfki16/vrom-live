<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Booking') }}
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
                        data: 'user.name', 
                        name: 'user.name',
                        className: 'text-center',
                    },
                    {
                        data: 'item.brand.name', 
                        name: 'item.brand.name',
                        className: 'text-center',
                    },   
                    {
                        data: 'item.name', 
                        name: 'item.name',
                        className: 'text-center',
                    },   
                    {
                        data: 'start_date',
                        name: 'start_date',
                        className: 'text-center',
                    },                                        
                    {
                        data: 'end_date',
                        name: 'end_date',
                        className: 'text-center',
                    },                                        
                    {
                        data: 'status',
                        name: 'status',
                        className: 'text-center',
                    },                                        
                    {
                        data: 'payment_status',
                        name: 'payment_status',
                        className: 'text-center',
                    },                                        
                    {
                        data: 'price',
                        name: 'price',
                        className: 'text-center',
                    },                                        
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                    },
                ],
            });
        </script>
    </x-slot>

    <div class="py-12">
        <div class="px-6 mx-auto max-w-7x1 sm lg:px-8">
            <div class="overflow-hidden shadow sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <table id="dataTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Brand</th>
                                <th>Item</th>
                                <th>Mulai</th>
                                <th>Selesai</th>
                                <th>Status Booking</th>
                                <th>Status Pembayaran</th>
                                <th>Total Dibayar</th>
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