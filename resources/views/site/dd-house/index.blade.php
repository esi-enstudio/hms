<x-admin-app-layout title="DD House">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('DD House') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="text-center whitespace-nowrap w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    SL
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Cluster | Region
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Code | Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Thana | District
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Address
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Latitude | Longitude
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    BTS Code
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Disabled AT
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Create | Update
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($houses as $sl => $house)
                                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ ++$sl }}
                                    </th>
                                    <td class="px-6 py-4">
                                        <p>{{ $house->cluster }}</p>
                                        <p>{{ $house->region }}</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <p>{{ $house->name }}</p>
                                        <p>{{ $house->code }}</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <p>{{ $house->thana }}</p>
                                        <p>{{ $house->district }}</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $house->address }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <p>{{ $house->lat }}</p>
                                        <p>{{ $house->long }}</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $house->bts_code }}
                                    </td>
                                    <td class="px-6 py-4">
{{--                                        {{ $house->disabled_at->toDayDateTimeString() }}--}}
                                    </td>
                                    <td class="px-6 py-4">
                                        <p>Create: {{ $house->created_at->toDayDateTimeString() }}</p>
                                        <p>Last Update: {{ $house->updated_at->toDayDateTimeString() }}</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    </td>
                                </tr>
                            @empty
                                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <td class="px-6 py-4">
                                        <p>No data found.</p>
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>
