<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uploaded successfully!</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
</head>
{{-- <body class="d-flex justify-content-center p-4 pt-4"> --}}
<body>
        
    <center>
        <div class="container-fluid">
            <div class="row" style="margin-top:50px">
                <div class="col-md-6 offset-md-3">
                    <h1>Christ Embassy Accra Ghana Zone</h1>
                    New Converts / First Timer's Form. We are glad you came for service. We love you.<br>
                    Church Attended: SUNDAYS, WEDNESDAYS AFTERNOON/EVENING, FRIDAYS & OTHERS<hr>

                    <div>
                        <div class="card">
                            <div class="card-header bg-success text-white">First Timer Uploaded successfully</div>
                            <div class="card-body">
                                <p>Hi Esteemed <b>{{ Auth::user()->name }}</b>, you have successfully uploaded <b>{{ request()->name }}</b>, a first timer in <b>{{ request()->zonal_church }}.</b> </p>
                                <p>Thank you dear esteemed first timers officer</p>
                                <a href="/" class="btn btn-sm btn-primary">Home</a> / 
                                <a href="/upload-first-timer" class="btn btn-sm btn-primary">Upload First timers</a> / 
                                <a href="/dashboard" class="btn btn-sm btn-success">Dashboard</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>

</body>
</html>