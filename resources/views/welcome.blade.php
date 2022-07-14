<!DOCTYPE html>
<html lang="en">
<head>
    <title>Medibhai Test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="{{ url('/js/generateOTP.js') }}"></script>
</head>
<body>

    <div class="container">
        <h2>Generate OTP</h2>
        <form action="{{url('/generateOTP')}}" method="post" id="generateOTPForm">
            {{csrf_field()}}
            <div class="form-group" id="mobile_div">
                <label for="mobile">Mobile:</label>
                <input type="text" class="form-control @error('mobile') is-invalid @enderror" id="mobile" placeholder="Enter 10 digit mobile Number" name="mobile">
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>


    </div>

</body>
</html>
