<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sumeru Kyc Form</title>
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/nepali-datepicker/dist/css/nepali.datepicker.v3.0.min.css">
    <link href="https://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/css/nepali.datepicker.v4.0.4.min.css" rel="stylesheet" type="text/css"/>
    {{-- <link rel="stylesheet" type="text/css"/ href="./date.css"> --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>
<body class="bg-white bg-gray-50 relative pb-20 dark:bg-gray-900">

    @include('components1.navbar')


    @yield('content')

    
    @include('components1.footer')
    


    @stack('script')

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/nepali-datepicker/dist/js/nepali.datepicker.v3.0.min.js"></script>
    <script src="https://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/js/nepali.datepicker.v4.0.4.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite-datepicker/1.0.1/datepicker.min.js"></script>

    {{-- <script type="text/javascript">
        console.log(NepaliFunctions.GetCurrentBsDate());
    </script> --}}
    
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    
    <script>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                @php
                    toastr()->error($error);
                @endphp
            @endforeach
        @endif
    </script>

<script>
    $(document).ready(function() {
        $("#nepali-datepicker").nepaliDatePicker({
            dateFormat: "DD/MM/YYYY",
            ndpYear: true,
            ndpMonth: true,
            // unicodeDate: true
        }); 
        $("#nepali-datepicker1").nepaliDatePicker({
            dateFormat: "DD/MM/YYYY",
            ndpYear: true,
            ndpMonth: true,
            // unicodeDate: true
        }); 
    });
</script>
    

</body>
</html>
