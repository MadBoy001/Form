@extends('master')

@section('content')


<section class="flex flex-col items-center justify-center bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-full lg:py-0 gap-10">
        <div class="w-full md:max-w-6xl bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Permanent Address
                </h1>
                <form class="space-y-4 md:space-y-6" action="{{ route('address-store') }}" method="POST">
                    @csrf
                    <div class="grid md:grid-cols-3 gap-6">
                        <div>
                            <label for="client_country" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country</label>
                            <select id="client_country" name="client_country" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly>
                                <option value="nepal" selected>Nepal</option>
                            </select>
                        </div>
                        <div>
                            <label for="client_province" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Province</label>
                            <select id="client_province" name="client_province" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Select</option>
                                @foreach (config('data.provinces') as $province)
                                <option value="{{ $province }}">{{ $province }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="client_district" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">District</label>
                            <select id="client_district" name="client_district" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Select</option>
                                @foreach (config('data.districts') as $district)
                                <option value="{{ $district }}">{{ $district }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="grid md:grid-cols-3 gap-6">
                        <div>
                            <label for="client_municipality" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Municipality</label>
                            <select id="client_municipality" name="client_municipality" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Select</option>
                                <option value="option1">Option 1</option>
                                <option value="option1">Option 2</option>
                                <option value="option1">Option 3</option>
                                <option value="option1">Option 4</option>
                            </select>
                        </div>
                        <div>
                            <label for="client_ward" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ward No.</label>
                            <input type="number" name="client_ward" id="client_ward" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                        </div>
                        <div>
                            <label for="client_tole" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tole</label>
                            <input type="text" name="client_tole" id="client_tole" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                        </div>
                    </div>
                    
                    <div class="grid md:grid-cols-3 gap-6">
                        <div>
                            <label for="client_landline" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Landline Number</label>
                            <input type="tel" name="client_landline" id="client_landline" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                        </div>
                    </div>
                    
                    <div class="flex items-center mb-4">
                        <input name="current_address_different" id="checkbox-1" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Is Your Current Address Different From Permanent Address?</label>
                    </div>
                    
                    
                    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
        
                    <div id="current-address-section">
        
                        <h1 class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Current Address
                        </h1>
                        
                        <div class="grid md:grid-cols-3 gap-6">
                            <div>
                                <label for="current_country" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country</label>
                                <select id="current_country" name="current_country" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
                                    <option value="nepal" selected>Nepal</option>
                                </select>
                            </div>
                            <div>
                                <label for="current_province" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Province</label>
                                <select id="current_province" name="current_province" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Select</option>
                                    @foreach (config('data.provinces') as $province)
                                    <option value="{{ $province }}">{{ $province }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="current_district" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">District</label>
                                <select id="current_district" name="current_district" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Select</option>
                                    @foreach (config('data.districts') as $district)
                                    <option value="{{ $district }}">{{ $district }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="grid md:grid-cols-3 gap-6">
                            <div>
                                <label for="current_municipality" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Municipality</label>
                                <select id="current_municipality" name="current_municipality" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">Select</option>
                                    <option value="option1">Option 1</option>
                                    <option value="option1">Option 2</option>
                                    <option value="option1">Option 3</option>
                                    <option value="option1">Option 4</option>
                                </select>
                            </div>
                            <div>
                                <label for="current_ward" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ward No.</label>
                                <input type="number" name="current_ward" id="current_ward" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                            </div>
                            <div>
                                <label for="current_tole" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tole</label>
                                <input type="text" name="current_tole" id="current_tole" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                            </div>
                        </div>
                        
                        <div class="grid md:grid-cols-3 gap-6">
                            <div>
                                <label for="current_landline" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Landline Number</label>
                                <input type="tel" name="current_landline" id="current_landline" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                            </div>
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


@push('script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const checkbox = document.getElementById('checkbox-1');
        const currentAddressSection = document.getElementById('current-address-section');
    
        // Function to toggle current address section
        function toggleCurrentAddressSection() {
            if (checkbox.checked) {
                currentAddressSection.style.display = 'block';
            } else {
                currentAddressSection.style.display = 'none';
            }
        }
    
        // Initial toggle on page load
        toggleCurrentAddressSection();
    
        // Toggle current address section on checkbox change
        checkbox.addEventListener('change', toggleCurrentAddressSection);
    });
    </script>
    
@endpush