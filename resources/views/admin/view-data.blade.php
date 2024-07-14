@extends('master')

@section('content')

{{-- Personal Information --}}
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
                        <input type="text" name="name" id="name" value="{{$user->name}}" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email*</label>
                        <input type="email" name="email" id="email" value="{{$user->email}}"  class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@mail.com" required="">
                    </div>
                </div>

                <div class="grid md:grid-cols-3 md:gap-6">
                    <div>
                        <label for="client_mobile" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mobile No*</label>
                        <input type="number" name="client_mobile" id="client_mobile" value="{{$user->client_mobile}}"  class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                    </div>
                    <div>
                        <label for="client_alt_mobile" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alternate Mobile No</label>
                        <input type="number" name="client_alt_mobile" id="client_alt_mobile" value="{{$user->client_alt_mobile}}"  class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
                    </div>

                    <div>
                        <label for="client_gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender*</label>
                        <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                <div class="flex items-center ps-3">
                                    <input id="horizontal-list-radio-license" disabled {{$user->client_gender == "male" ? "checked" : ""}} type="radio" value="male" name="client_gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Male </label>
                                </div>
                            </li>
                            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                <div class="flex items-center ps-3">
                                    <input id="horizontal-list-radio-id" disabled {{$user->client_gender == "female" ? "checked" : ""}} type="radio" value="female" name="client_gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="horizontal-list-radio-id" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Female</label>
                                </div>
                            </li>
                            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                <div class="flex items-center ps-3">
                                    <input id="horizontal-list-radio-military" disabled {{$user->client_gender == "other" ? "checked" : ""}} type="radio" value="other" name="client_gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="horizontal-list-radio-military" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Other</label>
                                </div>
                            </li>
                        </ul>
                    </div>  
                </div>
                
                
                
                <div class="grid md:grid-cols-3 md:gap-6">

                    <div>
                        <label for="client_dob_ad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DOB AD</label>
                        <div class="relative max-w-sm">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                            </div>
                            <input id="datepicker-autohide"  value="{{$user->client_dob_ad}}"  datepicker datepicker-autohide  name="client_dob_ad" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                        </div>
                    </div>

                    <div>
                        <label for="client_dob_bs" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DOB BS</label>
                        <div class="relative max-w-sm">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                            </div>
                            <input datepicker id="default-datepicker"  value="{{$user->client_dob_bs}}"  name="client_dob_bs" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                        </div>
                    </div>

                    <div>
                        <label for="client_nationality" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nationality</label>
                        <input type="text" id="disabled-input" aria-label="disabled input" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="Nepalese" disabled>
                    </div>
                
            </div>


                <div class="grid md:grid-cols-4 md:gap-6">
                    <div>
                        <label for="client_ctzn_num" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Citizenship Number</label>
                        <input type="text" name="client_ctzn_num" id="client_ctzn_num" value="{{$user->client_ctzn_num}}" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                    </div>
                    <div>
                        <label for="client_ctzn_district" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Citizenship Issue District</label>
                        <select id="client_ctzn_district" disabled name="client_ctzn_district" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">Select</option>
                            @foreach (config('data.districts') as $district)
                                <option {{$user->client_ctzn_district === $district ? "selected" : ""}} value={{$district}}>{{$district}}</option>
                            @endforeach
                            </select>
                    </div>
                    <div>
                        <label for="client_ctn_bs" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Citizenship Issue Date BS</label>
                        <div class="relative max-w-sm">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                            </div>
                            <input datepicker id="default-datepicker" name="client_ctn_bs" type="text" value="{{$user->client_ctn_bs}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                        </div>
                    </div>
                    <div>
                        <label for="client_ctn_ad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Citizenship Issue Date AD</label>
                        <div class="relative max-w-sm">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                            </div>
                            <input id="datepicker-autohide" name="client_ctn_ad" datepicker datepicker-autohide type="text" value="{{$user->client_ctn_ad}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                        </div>  
        
                    </div>
                </div>


                <div class="grid md:grid-cols-3 md:gap-6">
                    <div>
                        <label for="client_nid" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">National Id Card No.</label>
                        <input type="text" name="client_nid" id="client_nid" value="{{$user->client_nid}}" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
                    </div>

                    <div>
                        <label for="client_pan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pan</label>
                        <input type="text" name="client_pan" id="client_pan" value="{{$user->client_pan}}" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                    </div>
                    <div>
                        <label for="boid" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Boid</label>
                        <input type="text" name="boid" id="boid" value="{{$user->boid}}" 
                            class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                            placeholder="130XXXXXXXXXXXXXX" 
                            {{-- pattern="130[0-9]{13}" 
                            title="Must start with 130 and have exactly 16 characters." 
                            minlength="16" 
                            maxlength="16"  --}}
                            required>
                    </div>           
                </div>

            </form>
        </div>
        </div>

        {{-- Family Details --}}
        <div class="w-full md:max-w-6xl bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Family Member Details
                </h1>
                <form class="space-y-4 md:space-y-6" action="{{route('family-store')}}" method="POST">
                @csrf
        
                    <div class="grid md:grid-cols-3 md:gap-6">
                        <div>
                            <label for="father_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Father's Name*</label>
                            <input type="text" name="father_name" id="father_name" disabled value="{{$family->father_name}}" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                        </div>
                        <div>
                            <label for="mother_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mother's Name*</label>
                            <input type="text" name="mother_name" id="mother_name" disabled value="{{$family->mother_name}}" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                        </div>
                        <div>
                            <label for="grandfather_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">GrandFather's Name*</label>
                            <input type="text" name="grandfather_name" id="grandfather_name" disabled value="{{$family->grandfather_name}}" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                        </div>
                    </div>
        
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div>
                            <label for="maritial_status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Maritial Status*</label>
                            <select id="maritial_status" name="maritial_status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="no">No</option>
                                <option value="yes">Yes</option>
                                </select>
                        </div>
                        <div>
                        <label for="is_minor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Minor*</label>
                        <select id="is_minor" name="is_minor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option {{$family->is_minor === "yes" ? "selected" : ""}} value="no">No</option>
                            <option {{$family->is_minor === "yes" ? "selected" : ""}} value="yes">Yes</option>
                        </select>
                    </div>
                    </div>
        
                <div class="spouse_family_info" id="spouse_family_info">
                    <div class="grid md:grid-cols-3 md:gap-6">
                        <div>
                            <label for="spouse_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Spouse's Name*</label>
                            <input type="text" name="spouse_name" id="spouse_name" disabled value="{{$family->spouse_name}}" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                        <div>
                            <label for="father_in_law_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Father-in-law's Name*</label>
                            <input type="text" name="father_in_law_name" id="father_in_law_name" disabled value="{{$family->father_in_law_name}}" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                        <div>
                            <label for="mother_in_law_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mother-in-law's Name*</label>
                            <input type="text" name="mother_in_law_name" id="mother_in_law_name" disabled value="{{$family->mother_in_law_name}}" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 mt-5 md:gap-6">
                        <div>
                            <label for="son_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Son's Name*</label>
                            <input type="text" name="son_name" id="son_name" disabled value="{{$family->son_name}}" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                        <div>
                            <label for="daughter_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Daughter's Name*</label>
                            <input type="text" name="daughter_name" id="daughter_name" disabled value="{{$family->daughter_name}}" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                    </div>
                </div>
        
                    <div class="guardian_info" id="guardian_info">
                    <div class="grid md:grid-cols-3 md:gap-6">
                        <div>
                            <label for="guradian_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name of Guardian*</label>
                            <input type="text" name="guradian_name" id="guradian_name" disabled value="{{$family->guradian_name}}" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                        <div>
                            <label for="guardian_relation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Relation*</label>
                            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                                <option>Father</option>
                                <option>Mother</option>
                                <option>Uncle</option>
                                <option>Aunt</option>
                                </select>
                        </div>
                        <div>
                            <label for="guardian_mobile" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Guardian Contact No.*</label>
                            <input type="number" name="guardian_mobile" id="guardian_mobile" disabled value="{{$family->guardian_mobile}}" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                    </div>
                    <div class="grid md:grid-cols-3 md:gap-6 mt-5">
                        <div>
                            <label for="guardian_email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Guardian Email*</label>
                            <input type="email" name="guardian_email" id="guardian_email" disabled value="{{$family->guardian_email}}" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                        </div>
                    </div>
                </div>
        
                </form>
            </div>
        </div>

        {{-- Address --}}
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
                                <option {{$address->client_province === $province ? "selected" : ""}} value="{{ $province }}">{{ $province }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="client_district" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">District</label>
                            <select id="client_district" name="client_district" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Select</option>
                                @foreach (config('data.districts') as $district)
                                <option {{$address->client_district === $district ? "selected" : ""}} value="{{ $district }}">{{ $district }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="grid md:grid-cols-3 gap-6 mt-5">
                        <div>
                            <label for="client_municipality" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Municipality</label>
                            <select id="client_municipality" name="client_municipality" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Select</option>
                                <option {{$address->client_municipality === "option1" ? "selected" : ""}} value="option1">Option 1</option>
                                <option {{$address->client_municipality === "option2" ? "selected" : ""}} value="option2">Option 2</option>
                                <option {{$address->client_municipality === "option3" ? "selected" : ""}} value="option3">Option 3</option>
                                <option {{$address->client_municipality === "option4" ? "selected" : ""}} value="option4">Option 4</option>
                            </select>
                        </div>
                        <div>
                            <label for="client_ward" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ward No.</label>
                            <input type="number" name="client_ward" id="client_ward" disabled value="{{$address->client_ward}}" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                        </div>
                        <div>
                            <label for="client_tole" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tole</label>
                            <input type="text" name="client_tole" id="client_tole" disabled value="{{$address->client_tole}}" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                        </div>
                    </div>
                    
                    <div class="grid md:grid-cols-3 gap-6">
                        <div>
                            <label for="client_landline" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Landline Number</label>
                            <input type="tel" name="client_landline" id="client_landline" disabled value="{{$address->client_landline}}" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
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
                                <input type="number" name="current_ward" id="current_ward" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                            </div>
                            <div>
                                <label for="current_tole" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tole</label>
                                <input type="text" name="current_tole" id="current_tole" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                            </div>
                        </div>
                        
                        <div class="grid md:grid-cols-3 gap-6">
                            <div>
                                <label for="current_landline" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Landline Number</label>
                                <input type="tel" name="current_landline" id="current_landline" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                            </div>
                        </div>
                    </div>
                                
                </form>
            </div>
        </div>

        {{-- Bank --}}
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
                                        <input id="horizontal-list-radio-license" disabled {{$bank->account_type === "saving" ? "checked" : ""}} type="radio" value="saving" name="account_type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Saving</label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input id="horizontal-list-radio-id" disabled {{$bank->account_type === "current" ? "checked" : ""}} type="radio" value="current" name="account_type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="horizontal-list-radio-id" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Current</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-3 md:gap-6">
                        <div>
                            <label for="account_num" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Account Number</label>
                            <input type="text" name="account_num" id="account_num" value="{{$bank->account_num}}" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                        </div>
                        <div>
                            <label for="bank_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name of Bank</label>
                            <select id="bank_name" name="bank_name" disabled class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Select</option>
                                @foreach (config('data.bank_list') as $bank_item)
                                    <option {{$bank->bank_name === $bank_item ? 'selected'  : ""}} value="{{$bank_item}}">{{$bank_item}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label for="bank_branch" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Branch of Bank</label>
                            <input type="text" name="bank_branch" id="bank_branch" disabled value="{{$bank->bank_branch}}" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                        </div>
                    </div>

                </form>
            </div>
        </div>

        {{-- Occupation --}}
        <div class="w-full md:max-w-6xl bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Source of Income
                </h1>
                <form class="space-y-4 md:space-y-6" action="{{route('occupation-store')}}" method="POST">
                @csrf
                    <div class="grid md:grid-cols-3 md:gap-6">

                        <div>
                            <label for="occupation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Occupation</label>
                            <select id="occupation" name="occupation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @foreach (config('data.occupation') as $occupation_item)
                                    <option {{$occupation->occupation === $occupation_item ? 'selected'  : ""}} value="{{$occupation_item}}">{{$occupation_item}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label for="business_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Business Type</label>
                            <select id="business_type" name="business_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Select</option>
                                <option {{$occupation->business_type === "manufacturing" ? "selected" : ""}} value="manufacturing">Manufacturing</option>
                                <option {{$occupation->business_type === "service" ? "selected" : ""}} value="service">Service</option>
                                <option {{$occupation->business_type === "other" ? "selected" : ""}} value="other">Other</option>
                            </select>
                        </div>

                        <div>
                            <label for="organization_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Organization's Name</label>
                            <input type="text" name="organization_name" id="organization_name" disabled value="{{$occupation->organization_name}}" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                        </div>
                    </div>
        
                    <div class="grid md:grid-cols-3 md:gap-6">
                        <div>
                            <label for="organization_address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                            <input type="text" name="organization_address" id="organization_address" disabled value="{{$occupation->organization_address}}" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                        </div>
                        <div>
                            <label for="designation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Designation</label>
                            <select id="designation" name="designation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @foreach (config('data.designation_list') as $designation_item)
                                    <option {{$occupation->designation === $designation_item ? 'selected'  : ""}} value="{{$designation_item}}">{{$designation_item}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="employee_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Employee Id No.</label>
                            <input type="text" name="employee_id" id="employee_id" disabled value="{{$occupation->employee_id}}" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                        </div>
                    </div>
                    <div class="grid md:grid-cols-3 md:gap-6">
                        <div>
                            <label for="income_range" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Estimated Annual Income</label>
                            <select id="income_range" name="income_range" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Select</option>
                                <option {{$occupation->income_range === "1" ? "selected" : ""}} value="1">Below 5Lakhs</option>
                                <option {{$occupation->income_range === "2" ? "selected" : ""}} value="2">5Lakhs - 10Lakhs</option>
                                <option {{$occupation->income_range === "3" ? "selected" : ""}} value="3">Above 10Lakhs</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div>
                            <label for="other_involvement" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Involvement in Investment Companies Which are Established for Securties Trading</label>
                            <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input id="horizontal-list-radio-license" type="radio" {{$occupation->other_involvement === "yes" ? "checked" : ""}} value="yes" name="other_involvement" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes </label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input id="horizontal-list-radio-id" type="radio" {{$occupation->other_involvement === "no" ? "checked" : ""}} value="no" name="other_involvement" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="horizontal-list-radio-id" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                                    </div>
                                </li>
                            </ul>
                        </div>  
                    </div>  
        
                    <div class="grid md:grid-cols-3 md:gap-6">
                        <div>
                            <label for="other_organisation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name of Organisation</label>
                            <input type="text" name="other_organisation" id="other_organisation" disabled value="{{$occupation->other_organisation ? $occupation->other_organisation : "None"}}" class="mb-5 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                        </div>
                        <div>
                            <label for="other_designation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Designation</label>
                            <select id="countries" name="other_organisation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">None</option>
                                @foreach (config('data.designation_list') as $designation_item)
                                    <option {{$occupation->other_designation === $designation_item ? 'selected'  : ""}} value="{{$designation_item}}">{{$designation_item}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
            
                </form>
            </div>
        </div>  


        {{-- Documents --}}
        <div class="w-full md:max-w-6xl bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <h1 class="text-xl m-5 text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                Documents
            </h1>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 p-10">
                <!-- Card 1 -->
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="">
                        <img class="rounded-t-lg" src="{{ asset($document->passport_image) }}" alt="" />
                        <h5 class="mp-5 text-2xl m-5 font-bold tracking-tight text-gray-900 dark:text-white">
                            Passport Image
                        </h5>
                    </div>
                </div>

                <!-- Card 1 -->
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="">
                        <img class="rounded-t-lg" src="{{ asset($document->holding_selfie_image) }}" alt="" />
                        <h5 class="mp-5 text-2xl m-5 font-bold tracking-tight text-gray-900 dark:text-white">
                            Selfie Holding Sumeru
                        </h5>
                    </div>
                </div>

                <!-- Card 1 -->
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="">
                        <img class="rounded-t-lg" src="{{ asset($document->citizenship_front_image) }}" alt="" />
                        <h5 class="mp-5 text-2xl m-5 font-bold tracking-tight text-gray-900 dark:text-white">
                            Citizenship Frontside
                        </h5>
                    </div>
                </div>

                <!-- Card 1 -->
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="">
                        <img class="rounded-t-lg" src="{{ asset($document->citizenship_back_image) }}" alt="" />
                        <h5 class="mp-5 text-2xl m-5 font-bold tracking-tight text-gray-900 dark:text-white">
                            Citizenship Backside
                        </h5>
                    </div>
                </div>

                <!-- Card 1 -->
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="">
                        <img class="rounded-t-lg" src="{{ asset($document->signature_image) }}" alt="" />
                        <h5 class="mp-5 text-2xl m-5 font-bold tracking-tight text-gray-900 dark:text-white">
                            Signature
                        </h5>
                    </div>
                </div>

                <!-- Card 1 -->
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="">
                        <img class="rounded-t-lg" src="{{ asset($document->thumb_image) }}" alt="" />
                        <h5 class="mp-5 text-2xl m-5 font-bold tracking-tight text-gray-900 dark:text-white">
                            Thumb Prints
                        </h5>
                    </div>
                </div>

                <!-- Card 1 -->
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="">
                        <img class="rounded-t-lg" src="{{ asset($document->map_image) }}" alt="" />
                        <h5 class="mp-5 text-2xl m-5 font-bold tracking-tight text-gray-900 dark:text-white">
                            House Map
                        </h5>
                    </div>
                </div>
                
                

            </div>
        </div>


    </div>
</section>
@endsection


@push('script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const spouseFamilyInfo = document.getElementById('spouse_family_info');
        const guardianInfo = document.getElementById('guardian_info');

        @if($family->maritial_status === "no")
            if (spouseFamilyInfo) {
                spouseFamilyInfo.style.display = 'none';
            }
        @endif

        @if($family->is_minor === "no")
            if (guardianInfo) {
                guardianInfo.style.display = 'none';
            }
        @endif
    });
</script>
@endpush