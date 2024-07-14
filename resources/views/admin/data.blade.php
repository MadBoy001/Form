@extends('master')

@section('content')
<section class="flex flex-col items-center justify-center bg-gray-50 dark:bg-gray-900 mt-10">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:w-full lg:py-0 gap-10">
    <div class="w-full md:max-w-6xl bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
      <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
          <h1 class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
              All Users
          </h1>
    
            <style>
                /* Set background and text color to gray */
                body {
                  color: rgb(156 163 175); /* Dark gray text color */
                }
                
                /* Style the DataTable to match the gray theme */
                .dataTable {
                  color: rgb(156 163 175); /* Dark gray text color */
                }
                
                .dataTable th,
                .dataTable td {
                    padding: 8px; /* Padding for table cells */
                    color: rgb(156 163 175); /* Dark gray text color */
                  }
            </style>
            {{ $dataTable->table() }}
        </div>  
    </div>
  </div>
</section>


@endsection

@push('script')
{{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
