<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload First Timer</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    @livewireStyles
</head>
<body>

<center>
   <div class="container-fluid">
       <div class="row" style="margin-top:35px">
             <div class="col-md-6 offset-md-3">
                 <h3><b>Christ Embassy Accra Ghana Zone</b></h3>
                    New Converts / First Timer's Form. We are glad you came for service. We love you.<br>
                    Church Attended: SUNDAYS, WEDNESDAYS AFTERNOON/EVENING, FRIDAYS & OTHERS<hr>
                 @livewire('multi-upload-first-timers')
             </div>
       </div>
   </div>
</center>
    
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr('#myDatepicker');
    </script>
</body>
</html>