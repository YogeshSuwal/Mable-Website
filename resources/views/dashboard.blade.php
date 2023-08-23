<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-12xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="table">
                        <thead>
                            <tr>
                            <th >S.N.</th>
                            <th >Full Name</th>
                            <th >Phone</th>
                            <th >Address</th>
                            <th >Answer</th>
                            <th >CV</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($support as $sup)
                            <tr>
                            <th>1</th>
                            <td>{{$sup->first_name}}</td>
                            <td>{{$sup->phone}}</td>
                            <td>{{$sup->address}}</td>
                            <td>
                                1.{{$sup->question_one}}<br>
                                2.{{$sup->question_two}}<br>
                                3.{{$sup->question_three}}<br>
                                4.{{$sup->question_four}}
                            </td>
                            <td>
                                <a href="{{$sup->cv}}">download</a>
                            </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
