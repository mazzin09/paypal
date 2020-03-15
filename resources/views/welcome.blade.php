<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <form action="{{ route('create-payment') }}" method="post">
    @csrf 
    <input type="submit" value="Pay Now">
    </form>
    </div>
</body>
</html>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link href="agecheck.css" rel="stylesheet">
<script src="jquery.agecheck.min.js"></script>

$.ageCheck({
  minAge: 21,
  redirectTo: '',
  redirectOnFail: '',
  title: 'Age Verification',
  copy: 'This Website requires you to be [21] years or older to enter. Please enter your Date of Birth in the fields below in order to continue:',
  successMsg: {
    header: 'Success!',
    body: 'You are now being redirected back to the application...'
  },
  underAgeMsg: 'Sorry, you are not old enough to view this site...',
  errorMsg: {
    invalidDay: 'Day is invalid or empty',
    invalidYear: 'Year is invalid or empty'
  }
});