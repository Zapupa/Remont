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
                    <form method="POST" action="{{ route('order.store') }}">
                        @csrf

                        <div>
                            <x-input-label for="date" :value="__('Дата')" />
                            <x-text-input id="date" class="block mt-1 w-full" type="date" name="date"
                                :value="old('date')" required autofocus autocomplete="date" />
                        </div>

                        <div>
                            <x-input-label for="time" :value="__('Время')" />
                            <x-text-input id="time" class="block mt-1 w-full" type="time" name="time"
                                :value="old('time')" required autofocus autocomplete="time" />
                        </div>

                        <div>
                            <x-input-label for="adress" :value="__('Адрес')" />
                            <x-text-input id="adress" class="block mt-1 w-full" type="text" name="adress"
                                :value="old('adress')" required autofocus autocomplete="adress" />
                        </div>

                        <div>
                            <x-input-label for="type" :value="__('Тип')" />
                            <select
                                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full shrink-0"
                                name="type" , name="type" , id="type">
                                <option value="Косметический ремонт">Косметический ремонт</option>
                                <option value="Капитальный ремонт">Капитальный ремонт</option>
                                <option value="Электромонтаж">Электромонтаж</option>
                            </select>
                        </div>

                        <div>
                            <x-input-label for="payment" :value="__('Способ оплаты')" />
                            <select
                                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full shrink-0"
                                name="payment" , name="payment" , id="payment">
                                <option value="Наличными">Наличными</option>
                                <option value="Банковская карта">Банковская карта</option>
                                <option value="Безналичный расчёт">Безналичный расчёт</option>
                            </select>
                        </div>




                        <div class="flex items-center justify-center mt-4">
                            <x-primary-button class="ms-3">
                                {{ __('Вход') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>