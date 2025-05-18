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
                    <div class="sm:rounded-lg mt-5 relative overflow-x-auto">
                        <table
                            class="sm:rounded-lg w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="rounded-md text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        ФИО
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Телефон
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Адрес
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Тип
                                    </th>
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
                                        Статус
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr class="bg-white border-b border-gray-200">
                                        <th scope="row" class="px-6 py-4">
                                            {{ $order->user->name }}
                                            {{ $order->user->middlename }}
                                            {{ $order->user->lastname }}
                                        </th>
                                        <th scope="row" class="px-6 py-4">
                                            {{ $order->user->tel }}
                                        </th>
                                        <th scope="row" class="px-6 py-4">
                                            {{ $order->user->email }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $order->adress }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $order->type }}
                                        </td>
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
                                            @if($order->status->title == 'новая' || $order->status->title == 'в процессе')
                                                <form class=" w-full p-5" id="form-update-{{$order->id}}"
                                                    action="{{route('order.update')}}" method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input type="hidden" name="id" value="{{$order->id}}">
                                                    <select class=" w-full shrink-0" name="status"
                                                        onchange="document.getElementById('form-update-{{$order->id}}').submit()">
                                                        @if ($order->status->title == 'новая')
                                                            <option selected value="1">Новая</option>
                                                            <option value="2">В процессе</option>
                                                            <option value="3">Завершена</option>
                                                            <option value="4">Отменена</option>
                                                        @else
                                                            <option value="1">Новая</option>
                                                            <option selected value="2">В процессе</option>
                                                            <option value="3">Завершена</option>
                                                            <option value="4">Отменена</option>
                                                        @endif

                                                    </select>
                                                </form>
                                            @else
                                                <p class=" w-full p-5">{{ $order->status->title }}</p>
                                            @endif
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