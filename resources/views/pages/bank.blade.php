@extends('master')

@section('content')

<section class="flex flex-col items-center justify-center bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-full lg:py-0 gap-10">
        <div class="w-full md:max-w-6xl bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Bank Details
                </h1>
                <form class="space-y-4 md:space-y-6" action="{{ route('bank-store') }}" method="POST">
                    @csrf
                    <div class="grid md:grid-cols-3 md:gap-6">
                        <div>
                            <label for="account_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type of Bank Account</label>
                            <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input id="horizontal-list-radio-license" type="radio" value="saving" name="account_type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" {{ old('account_type') == 'saving' ? 'checked' : '' }}>
                                        <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Saving</label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input id="horizontal-list-radio-id" type="radio" value="current" name="account_type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" {{ old('account_type') == 'current' ? 'checked' : '' }}>
                                        <label for="horizontal-list-radio-id" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Current</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
        
                    <div class="grid md:grid-cols-3 md:gap-6">
                        <div>
                            <label for="account_num" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Account Number</label>
                            <input type="text" name="account_num" id="account_num" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('account_num') }}" placeholder="" required="">
                        </div>
                        <div>
                            <label for="bank_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name of Bank</label>
                            <select id="bank_name" name="bank_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Select</option>
                                @foreach (config('data.bank_list') as $bank)
                                    <option value="{{ $bank }}" {{ old('bank_name') == $bank ? 'selected' : '' }}>{{ $bank }}</option>
                                @endforeach
                            </select>
                        </div>
        
                        <div>
                            <label for="bank_branch" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Branch of Bank</label>
                            <input type="text" name="bank_branch" id="bank_branch" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('bank_branch') }}" placeholder="" required="">
                        </div>
                    </div>
        
                    <div class="flex justify-between">
                        <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                            <div class="flex">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                                </svg>
                                Go Back
                            </div>
                        </button>
                        <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                            <div class="flex">
                                Next
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                                </svg>
                            </div>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
