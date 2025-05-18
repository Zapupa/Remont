<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a class="border p-3 text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('order.create') }}">
                        {{ __('Создать заявку') }}
                    </a>


                    <div class="sm:rounded-lg mt-5 relative overflow-x-auto">
                        <table
                            class="sm:rounded-lg w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="rounded-md text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Дата
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Время
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Способ оплаты
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Адрес
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Тип
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Статус
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr class="bg-white border-b border-gray-200">
                                        <th scope="row" class="px-6 py-4">
                                            {{ $order->date }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $order->time }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $order->payment }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $order->adress }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $order->type }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $order->status->title }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>