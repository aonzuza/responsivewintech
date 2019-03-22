<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Kanit:300,400,500,600,700" rel="stylesheet">



  </head>
  <body>

    <style type="text/css">
        body{

          font-family: 'Kanit', sans-serif;
          font-weight: 200;
           background-color: #f9f9f9;

        }

    </style>

    <div>
      <label>วันที่และเวลา:</label>
      {{ $receivedTime }}
    </div>
    <div>
      <label>ชื่อ-สกุล:</label>
      {{ $firstName }} {{ $lastName}}
    </div>
    <div>
      <label>อีเมลลูกค้า:</label>
      {{ $email }}
    </div>
    <div>
      <label>เบอร์โทร:</label>
      {{ $telephone }}
    </div>
    <div>
      <label>บริษัท:</label>
      {{ $company }}
    </div>

    <div>
      <label>จังหวัด:</label>
      {{ $province }}
    </div>
    <div>
      <label>ประเทศ:</label>
      {{ $country }}
    </div>
    <div>
      <label>สินค้าที่สนใจ:</label>
      {{ $product }}
    </div>


    <div>
      <label>รายละเอียด:</label>
      {{ $information }}
    </div>





    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>





  </body>
</html>
