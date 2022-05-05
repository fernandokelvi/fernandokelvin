body {
    font-family: 'Roboto Mono',monospace;
    min-height: 600px;
    background-image: url('https://eskipaper.com/images/chess-3.jpg');
    background-color: #000000;
    background-size: cover;
    background-position: center bottom;
    background-repeat: no-repeat;
  }
  
  .container {
    text-align: center;
    padding: 20px;
    height: 100vh;
  }
  
  .page-title {
    color: #ffffff;
    margin: 0 0 5px;
  }
  
  .page-subtitle {
    color: #ffffff;
    margin-top: 5px;
  }
  
  .page-logo {
    width: 200px;
  }

  .alura-logo {
    width: 40px;
    position: absolute;
    top: 10px;
    right:10px;
  }
  
  .text {
      justify-content: center;
      align-items: center;
      background-color: #fff;
      position: absolute;
      font-size:16px;
      font-weight:bold;
      top: 142px;
      left: calc(50% - 142.5px);
      width: 270px;
      text-align:center;
    }

  @media (max-height: 500px) {
    body {
      min-height:800px;
    }
  }