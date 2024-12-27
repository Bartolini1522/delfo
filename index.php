<html>
  <head>
    <title>Calcoli</title>
    <style>
    p {
      font-family: Arial, Helvetica, sans-serif;
      font-size: medium;
      font-weight: 200;
      margin-left: 20px;
      margin-right: 20px;
    }
    body {
      background-image:url('sfondo_legno.jpg');
      background-repeat: no-repeat;
      background-size: cover;
    }
    .inputbox1 {
      text-align: center;
      margin: auto;
      width: 600px;
      background-color: rgba(220, 220, 220, 0.8);
      border-radius: 20px;
      margin-top: 20px;
    }
    .outputbox {
      text-align:center;
      margin: auto;
      width: 600px;
      height: 400px;
      background-color: rgba(220, 220, 220, 0.8);
      border-radius: 20px;
      margin-top: 20px;
      margin-bottom: 20px;
      overflow-y: auto;
    }
    input[type=number] {
      width: 50px;
      padding: 5px;
      margin: 8px;
      border: none;
      background-color: rgba(255, 255, 255, 0.5);
      border-radius: 10px;
    }
    
    /* Parte per rimuvere le frecce dai campi per inserire i valori */
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }

    /* Firefox */
    input[type=number] {
    -moz-appearance: textfield;
    }
    /*///// */

    input[type=reset] {
      width: 100px;
      padding: 5px;
      margin: 8px;
      align: right;
      border: none;
      background-color: rgba(255, 255, 255, 0.5);
      border-radius: 10px;
    }
    input[type=submit] {
      width: 100px;
      padding: 5px;
      margin: 8px;
      border: none;
      background-color: rgba(255, 255, 255, 0.5);
      border-radius: 10px;
    }
    a:link, a:visited {
    text-decoration: underline;
    color: rgb(245,133,41);
    background-color: transparent;
    }
    a:hover, a:active {
    text-decoration: underline overline;
    color: rgb(170,170,170);
    }
    </style>
  </head>
  <body>
	<h1>Home</h1>
	<p>Benvenuti su delfo.top!</p>
  </body>
</html>