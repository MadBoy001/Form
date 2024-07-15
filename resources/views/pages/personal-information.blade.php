@extends('master')

@section('content')

<section class="flex flex-col items-center justify-center bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-full lg:py-0 gap-10">
        <div class="w-full md:max-w-6xl bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                Personal Information
            </h1>
            <form class="space-y-4 md:space-y-6" action="{{route('personal-information-store')}}" method="POST">
                @csrf
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full Name*</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email*</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@mail.com" required="">
                    </div>
                </div>

                <div class="grid md:grid-cols-3 md:gap-6">
                    <div>
                        <label for="client_mobile" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mobile No*</label>
                        <input type="number" name="client_mobile" id="client_mobile" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                    </div>
                    <div>
                        <label for="client_alt_mobile" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alternate Mobile No</label>
                        <input type="number" name="client_alt_mobile" id="client_alt_mobile" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
                    </div>

                    <div>
                        <label for="client_gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender*</label>
                        <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                <div class="flex items-center ps-3">
                                    <input id="horizontal-list-radio-license" type="radio" value="male" name="client_gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Male </label>
                                </div>
                            </li>
                            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                <div class="flex items-center ps-3">
                                    <input id="horizontal-list-radio-id" type="radio" value="female" name="client_gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="horizontal-list-radio-id" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Female</label>
                                </div>
                            </li>
                            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                <div class="flex items-center ps-3">
                                    <input id="horizontal-list-radio-military" type="radio" value="other" name="client_gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="horizontal-list-radio-military" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Other</label>
                                </div>
                            </li>
                        </ul>
                    </div>  
                </div>
                
                
                
                <div class="grid md:grid-cols-3 md:gap-6">

                        <div>
                            <label for="client_dob_ad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DOB AD*</label>
                            <div class="relative max-w-sm">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                    </svg>
                                </div>
                                <input id="client_dob_ad" datepicker datepicker-format="dd/mm/yyyy" name="client_dob_ad" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full pl-10 py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                            </div>
                        </div>

                        <div>
                            <label for="client_dob_bs" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DOB BS*</label>
                            <div class="relative max-w-sm">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                    </svg>
                                </div>
                                <input id="nepali-datepicker" datepicker-np name="client_dob_bs" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full pl-10 py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                            </div>
                        </div>

                    <div>
                        <label for="client_nationality" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nationality</label>
                        <input type="text" id="disabled-input" aria-label="disabled input" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="Nepalese" disabled>
                    </div>
                
            </div>


                <div class="grid md:grid-cols-4 md:gap-6">

                    <div>
                        <label for="client_ctzn_num" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Citizenship Number*</label>
                        <input type="text" name="client_ctzn_num" id="client_ctzn_num" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                    </div>
                    <div>
                        <label for="client_ctzn_district" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Citizenship Issue District*</label>
                        <select id="client_ctzn_district" name="client_ctzn_district" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">Select</option>
                            @foreach (config('data.districts') as $district)
                                <option value={{$district}}>{{$district}}</option>
                            @endforeach
                            </select>
                    </div>

                    <div>
                        <label for="client_ctn_bs" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Citizenship Issue Date BS*</label>
                        <div class="relative max-w-sm">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                            </div>
                            <input id="datepicker" datepicker datepicker-format="dd/mm/yyyy" name="client_ctn_bs" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full pl-10 py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                        </div>
                    </div>

                    <div>
                        <label for="client_ctn_ad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Citizenship Issue Date AD*</label>
                        <div class="relative max-w-sm">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                            </div>
                            
                            <input id="nepali-datepicker1" datepicker-np name="client_ctn_ad" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full pl-10 py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                        </div>
                    </div>
                </div>


                <div class="grid md:grid-cols-3 md:gap-6">
                    <div>
                        <label for="client_nid" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">National Id Card No.</label>
                        <input type="text" name="client_nid" id="client_nid" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
                    </div>

                    <div>
                        <label for="client_pan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pan</label>
                        <input type="text" name="client_pan" id="client_pan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                    </div>
                    <div>
                        <label for="boid" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Boid</label>
                        <input type="text" name="boid" id="boid"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                            {{-- placeholder="130XXXXXXXXXXXXXX" 
                            pattern="130[0-9]{13}" 
                            title="Must start with 130 and have exactly 16 characters." 
                            minlength="16" 
                            maxlength="16"  --}}
                            >
                        <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">Must start with 130 and have exactly 16 characters.</p>
                    </div>
                    
                </div>

                <div class="flex justify-between">
                    <div></div>
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
    const client_dob_ad = document.getElementById('client_dob_ad');
    const client_dob_bs = document.getElementById('client_dob_bs');

    if (client_dob_ad && client_dob_bs) {
        client_dob_ad.addEventListener('change', function() {
            const adDate = client_dob_ad.value;
            if (adDate) {
                console.log('AD Date Changed:', adDate);
                const bsDate = NepaliFunctions.AD2BS(adDate, "DD/MM/YYYY", "DD/MM/YYYY");
                client_dob_bs.value = bsDate;
            }
        });

        client_dob_bs.addEventListener('change', function() {
            const bsDate = client_dob_bs.value;
            if (bsDate) {
                console.log('BS Date Changed:', bsDate);
                const adDate = NepaliFunctions.BS2AD(bsDate, "DD/MM/YYYY", "DD/MM/YYYY");
                client_dob_ad.value = adDate;
            }
        });
    } else {
        console.error('Date picker elements not found.');
    }
});

</script>

@endpush

<section class="flex flex-col items-center justify-center bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-full lg:py-0 gap-10">

    </div>
</section>