<script type="text/javascript" src = "jquery.min.js"></script>
  <script type="text/javascript" src = "felsofoku.js"></script>
  <title>Felsőfokú intézmények</title>
  <style>
    #informaciosdiv {
      width: 400px;
    }
    #intezmenyinfo {
      float: right;
      border: 1px solid black;
      width: 190px;
      height: 100px;
    }
    .cimke{
      display: inline-block;
      width: 60px;
      text-align: right;
    }
    span {
      margin: 3px 5px;
    }
    label {
      display: inline-block;
      width: 70px;
      text-align: right;
    }
    select {
      width: 115px;
    }
  </style>
  </head>
  <body>
    <h1>Felső fokú intézmények:</h1>
    <div id = 'informaciosdiv'>
      <div id = 'intezmenyinfo'>
        <span class="cimke">Név:</span><span id="nev" class="adat"></span><br>
        <span class="cimke">Cím:</span><span id="cim" class="adat"></span><br>
        <span class="cimke">Telefon:</span><span id="tel" class="adat"></span><br>
        <span class="cimke">E-mail:</span><span id="mail" class="adat"></span><br>
      </div>
      <label for='orszagcimke'>Ország:</label>
      <select id = 'orszagselect'></select>
      <br><br>
      <label for = 'varoscimke'>Város:</label>
      <select id = 'varosselect'></select>
      <br><br>
      <label for = 'varoscimke'>Intézmény:</label>
      <select id = 'intezmenyselect'></select>
    </div>
  </body>