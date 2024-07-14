@extends('master')

@section('content')


<section class="flex flex-col items-center justify-center bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-full lg:py-0 gap-10">
        <div class="w-full md:max-w-6xl bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Documents Upload
                </h1>
                <form class="space-y-4 md:space-y-6" action="{{route('document-store')}}" method="POST"  enctype="multipart/form-data">
                  @csrf
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Passport Size Photo</label>
                            <input name="passport_image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Your Most Recent Photo</p>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Selfie Holding Citizenship</label>
                            <input name="holding_selfie_image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Your Most Recent Photo</p>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Citizenship Front Side</label>
                            <input  name="citizenship_front_image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Your Most Recent Photo</p>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Citizenship Back-Side</label>
                            <input name="citizenship_back_image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Your Most Recent Photo</p>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Signature</label>
                            <input name="signature_image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Your Most Recent Photo</p>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Thumb</label>
                            <input name="thumb_image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Your Most Recent Photo</p>
                        </div>
                    </div>
          
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Location Map</label>
                            <input name="map_image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Show Directions From Nearest Landmark with Distance</p>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">DMAT Confirmation Letter</label>
                            <input name="dmat_confirmation_image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Your Most Recent Photo</p>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Pan Card</label>
                            <input name="pan_image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
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