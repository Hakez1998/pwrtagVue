<!DOCTYPE html>
<html>
<head>
  <style>
    @media only screen {
      body {
        font-family: 'Nunito', sans-serif;
        height: 100%;
        width: 100%;
        display: block;
        margin: 0px;
      }
      h1 {
        font-family: "font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif";
      }
    }
  </style>
</head>
<body>
  <div style="height: 400px; width: 100%; display: flex; justify-content: center;">
    <div style=" width: 50%; align-items: center; align-content: center;">
      <img style="width: 100%" src="{{ asset('storage/Pwrtag_Neon.PNG')}}">
    </div>
  </div>
  <div style="height: 200px; width: 100%; display: flex; align-items: center; justify-content: center; padding-left: 20px; padding-right: 20px;">
    <div style="margin-right:50px;">
      <h1> Name: {{ $data->name }}</h1>
    </div>
    <div>
      <h1>Ticket Number: {{ $data->tiket_number}}</h1>
    </div>
  </div>



</body>
</html>