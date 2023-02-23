<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kos Malang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>
        body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
}

h1 {
  text-align: center;
}



.row {
  display: flex;
  justify-content: center;

  align-items: center;
}

.seat {
  width: 55px;
  height: 55px;
  background-color: green;
  border: 2px solid #ccc;
  margin: 5px;
  text-align: center;
  font-size: small;
  display: flex;
  justify-content: center;
  align-items: center;
}

.seatlegend {
  width:10px;
  height: 20px;
  background-color: green;
  border: 1px solid #ccc;
  margin: 5px;


}

.occupied {
  background-color: red;
}

.occupied2 {
  background-color: yellow;
}



    </style>
  </head>
  <body>




    <div class="container">



    </div>


    <div class="container">



        <br>
        <div class="card mt 10">
            <h6 class="card-header">Info Kos Paus</h6>
            <div class="card-body">

                <div class="row">
                   <p>Keterangan:</p>
                   <div class="seatlegend"></div> kosong
                   <div class="seatlegend occupied"></div>ditempati<br>
                   <div class="seatlegend occupied2"></div> tinggal 2 minggu



                 </div>

                <div class="card">
                    <div class="card-body">
                      Jumlah Kamar kosong: <strong>4</strong> </p>
                      <p>Jumlah Kamar terisi: <strong>2</strong> </p>
                      <p>akan kosong dalam 2 minggu: <strong>1</strong> </p>
                      <p>Total Income: <strong>Rp.1.000.000</strong></p>
                    </div>
                  </div>
                  <br>


              <div class="row">
                <div class="seat">A408</div>
                <div class="seat occupied">A410</div>
                <div class="seat">A412</div>


              </div>
              <div class="row">
                <div class="seat occupied">A414</div>
                <div class="seat">F310</div>
                <div class="seat occupied2">F17</div>

              </div>


              <br>


            </div>
          </div>


  </div>


  <div class="container">

    <br>
    <div class="card mt 10">
        <h6 class="card-header">Info Kos Mares</h6>
        <div class="card-body">
            <div class="card">
                <div class="card-body">
                  <p>Jumlah Kamar kosong: <strong>9</strong> </p>
                  <p>Jumlah Kamar terisi: <strong>5</strong> </p>
                  <p>Total Income: <strong>Rp.2.500.000</strong></p>
                </div>
              </div>
              <br>


          <div class="row">
            <div class="seat">kamar 01</div>
            <div class="seat occupied">kamar 02</div>
            <div class="seat">kamar 03</div>
            <div class="seat occupied">kamar 04</div>
            <div class="seat">kamar 05</div>
          </div>
          <div class="row">
            <div class="seat">kamar 06</div>
            <div class="seat">kamar 07</div>
            <div class="seat occupied">kamar 08</div>
            <div class="seat occupied">kamar 09</div>
            <div class="seat">kamar 10</div>
          </div>
          <div class="row">
            <div class="seat">kamar 11</div>
            <div class="seat">kamar 12</div>
            <div class="seat occupied">kamar 13</div>
            <div class="seat">kamar 14</div>


          </div>

          <br>


        </div>
      </div>


</div>



<div class="container">

    <br>
    <div class="card mt 10">
        <h6 class="card-header">Informasi General</h6>
        <div class="card-body">
            <div class="card">
                <div class="card-body">



                  <p>Total Income Paus+Mares / Februari: <strong>Rp.3.500.000</strong></p>

                  <a href="#" class="btn btn-primary">Details : under constraction</a>


                </div>
              </div>
              <br>




        </div>
      </div>


</div>






  </body>
</html>
