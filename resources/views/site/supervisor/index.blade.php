<x-admin-app-layout title="Supervisor">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Supervisor') }}
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
                                    DD House
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Parents
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    NID | DOB
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Address
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Designation
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Signature
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($supervisors as $sl => $supervisor)
                                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ ++$sl }}
                                    </th>
                                    <td class="px-6 py-4">
                                        <p>{{ $supervisor->ddHouse->name }}</p>
                                        <p>{{ $supervisor->ddHouse->code }}</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <p>{{ $supervisor->name }}</p>
                                        <p>{{ $supervisor->user->email }}</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <p>{{ $supervisor->father_name }}</p>
                                        <p>{{ $supervisor->mother_name }}</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <p>{{ $supervisor->nid }}</p>
                                        <p>{{ $supervisor->dob }}</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $supervisor->address }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $supervisor->designation }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <img src="{{ $supervisor->signature }}" alt="manager sign">
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
