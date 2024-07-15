@extends('master')

@section('content')


<section class="flex flex-col items-center justify-center bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-full lg:py-0 gap-10">
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
                                <option value="">Select</option>
                                <option value="business">Business</option>
                                <option value="agriculture">Agriculture</option>
                                <option value="retired">Retired</option>
                                <option value="student">Student</option>
                                <option value="housewife">Housewife</option>
                                <option value="government">Government</option>
                                <option value="expert">Expert</option>
                                <option value="private">Private Sector</option>
                                <option value="public">Public Sector</option>
                                <option value="service">Service</option>
                                <option value="others">Others</option>
                            </select>
                          </div>
                        <div>
                            <label for="business_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Business Type</label>
                            <select id="business_type" name="business_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="manufacturing">Manufacturing</option>
                                <option value="service">Service</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div>
                            <label for="organization_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Organization's Name</label>
                            <input type="text" name="organization_name" id="organization_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                        </div>
                    </div>
          
                    <div class="grid md:grid-cols-3 md:gap-6">
                        <div>
                            <label for="organization_address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                            <input type="text" name="organization_address" id="organization_address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                        </div>
                        <div>
                            <label for="designation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Designation</label>
                            <select id="designation" name="designation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Select</option>
                                <option value="director">Director</option>
                                <option value="executive">Executive</option>
                                <option value="shareholder">Shareholder</option>
                                <option value="employee">Employee</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                        <div>
                            <label for="employee_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Employee Id No.</label>
                            <input type="text" name="employee_id" id="employee_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                        </div>
                    </div>
                    <div class="grid md:grid-cols-3 md:gap-6">
                        <div>
                            <label for="income_range" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Estimated Annual Income</label>
                            <select id="income_range" name="income_range" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">Select</option>
                                <option value="1">Below 5Lakhs</option>
                                <option value="2">5Lakhs - 10Lakhs</option>
                                <option value="3">Above 10Lakhs</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div>
                            <label for="other_involvement" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Involvement in Investment Companies Which are Established for Securties Trading</label>
                            <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input id="horizontal-list-radio-license" type="radio" value="yes" name="other_involvement" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes </label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center ps-3">
                                        <input id="horizontal-list-radio-id" type="radio" value="no" name="other_involvement" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="horizontal-list-radio-id" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                                    </div>
                                </li>
                            </ul>
                        </div>  
                    </div>  
          
                    <div class="grid md:grid-cols-3 md:gap-6">
                        <div>
                            <label for="other_organisation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name of Organisation</label>
                            <input type="text" name="other_organisation" id="other_organisation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
                        </div>
                        <div>
                            <label for="other_designation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Designation</label>
                            <select id="other_designation" name="other_designation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                  <option value="">Select</option>
                                  <option value="director">Director</option>
                                  <option value="executive">Executive</option>
                                  <option value="shareholder">Shareholder</option>
                                  <option value="employee">Employee</option>
                                  <option value="others">Others</option>
                            </select>
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