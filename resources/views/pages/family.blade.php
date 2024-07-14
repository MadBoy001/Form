
@extends('master')

@section('content')




<section class="flex flex-col items-center justify-center bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-full lg:py-0 gap-10">
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
                            <input type="text" name="father_name" id="father_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                        </div>
                        <div>
                            <label for="mother_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mother's Name*</label>
                            <input type="text" name="mother_name" id="mother_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                        </div>
                        <div>
                            <label for="grandfather_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">GrandFather's Name*</label>
                            <input type="text" name="grandfather_name" id="grandfather_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
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
                              <option value="no">No</option>
                              <option value="yes">Yes</option>
                          </select>
                      </div>
                    </div>
          
                  <div class="spouse_family_info" id="spouse_family_info">
                      <div class="grid md:grid-cols-3 md:gap-6">
                          <div>
                              <label for="spouse_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Spouse's Name*</label>
                              <input type="text" name="spouse_name" id="spouse_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                          </div>
                          <div>
                              <label for="father_in_law_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Father-in-law's Name*</label>
                              <input type="text" name="father_in_law_name" id="father_in_law_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                          </div>
                          <div>
                              <label for="mother_in_law_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mother-in-law's Name*</label>
                              <input type="text" name="mother_in_law_name" id="mother_in_law_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                          </div>
                      </div>
                      <div class="grid md:grid-cols-2 mt-5 md:gap-6">
                          <div>
                              <label for="son_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Son's Name*</label>
                              <input type="text" name="son_name" id="son_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                          </div>
                          <div>
                              <label for="daughter_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Daughter's Name*</label>
                              <input type="text" name="daughter_name" id="daughter_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                          </div>
                      </div>
                  </div>
          
                    {{-- <div class="grid md:grid-cols-3 md:gap-6">
                        <div>
                            <label for="is_minor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Minor*</label>
                            <select id="is_minor" name="is_minor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                    </div> --}}
          
                    <div class="guardian_info" id="guardian_info">
                      <div class="grid md:grid-cols-3 md:gap-6">
                          <div>
                              <label for="guradian_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name of Guardian*</label>
                              <input type="text" name="guradian_name" id="guradian_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
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
                              <input type="number" name="guardian_mobile" id="guardian_mobile" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                          </div>
                      </div>
                      <div class="grid md:grid-cols-3 md:gap-6 mt-5">
                          <div>
                              <label for="guardian_email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Guardian Email*</label>
                              <input type="email" name="guardian_email" id="guardian_email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
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
        const maritial_status = document.getElementById('maritial_status');
        const spouse_family_info = document.getElementById('spouse_family_info');
        const is_minor = document.getElementById('is_minor');
        const guardian_info = document.getElementById('guardian_info');

        const spouse_name = document.getElementById('spouse_name');
        const father_in_law_name = document.getElementById('father_in_law_name');
        const mother_in_law_name = document.getElementById('mother_in_law_name');
        const son_name = document.getElementById('son_name');
        const daughter_name = document.getElementById('daughter_name');
        const guardian_name = document.getElementById('guardian_name');
        const guardian_relation = document.getElementById('guardian_relation');
        const guardian_mobile = document.getElementById('guardian_mobile');
        const guardian_email = document.getElementById('guardian_email');

        // Initially hide spouse_family_info and guardian_info
        spouse_family_info.style.display = 'none';
        guardian_info.style.display = 'none';

        maritial_status.addEventListener('change', function() {
            if (maritial_status.value === 'yes') {
                spouse_family_info.style.display = 'block';
                is_minor.value = "no";
                guardian_info.style.display = 'none';

                if (spouse_name) spouse_name.required = true;
                if (father_in_law_name) father_in_law_name.required = true;
                if (mother_in_law_name) mother_in_law_name.required = true;
                if (son_name) son_name.required = true;
                if (daughter_name) daughter_name.required = true;

                if (guardian_name) guardian_name.required = false;
                if (guardian_relation) guardian_relation.required = false;
                if (guardian_mobile) guardian_mobile.required = false;
                if (guardian_email) guardian_email.required = false;
            } else {
                spouse_family_info.style.display = 'none';

                if (spouse_name) spouse_name.required = false;
                if (father_in_law_name) father_in_law_name.required = false;
                if (mother_in_law_name) mother_in_law_name.required = false;
                if (son_name) son_name.required = false;
                if (daughter_name) daughter_name.required = false;
            }
        });

        is_minor.addEventListener('change', function() {
            if (is_minor.value === 'yes') {
                guardian_info.style.display = 'block';
                maritial_status.value = "no";
                spouse_family_info.style.display = 'none';

                if (guardian_name) guardian_name.required = true;
                if (guardian_relation) guardian_relation.required = true;
                if (guardian_mobile) guardian_mobile.required = true;
                if (guardian_email) guardian_email.required = true;

                if (spouse_name) spouse_name.required = false;
                if (father_in_law_name) father_in_law_name.required = false;
                if (mother_in_law_name) mother_in_law_name.required = false;
                if (son_name) son_name.required = false;
                if (daughter_name) daughter_name.required = false;
            } else {
                guardian_info.style.display = 'none';

                if (guardian_name) guardian_name.required = false;
                if (guardian_relation) guardian_relation.required = false;
                if (guardian_mobile) guardian_mobile.required = false;
                if (guardian_email) guardian_email.required = false;
            }
        });
    });
</script>
@endpush
