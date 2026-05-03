<!doctype html>
<html lang="en">
  <head>
    <link rel="icon" href="logo.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Payid19 Test</title>
    <style>
        body {
            background-color: #121212;
            color: #E0E0E0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            margin-top: 50px;
            background: #1E1E1E;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }
        label {
            font-weight: bold;
            color: #F5F5F5;
        }
        .form-control {
            background-color: #2A2A2A;
            color: #E0E0E0;
            border: 1px solid #03DAC5;
        }
        .form-control:focus {
            background-color: #333;
            border-color: #00B8A9;
        }
        .btn-primary {
            background-color: #03DAC5;
            border: none;
        }
        .btn-primary:hover {
            background-color: #00B8A9;
        }
        .content {
            padding: 20px;
            background: #2A2A2A;
            border-radius: 5px;
            margin-top: 20px;
        }
        .comment {
            background: #333;
            padding: 15px;
            margin: 10px 0;
            border-radius: 8px;
        }
        textarea {
            background-color: #2A2A2A;
            color: #E0E0E0;
            border: 1px solid #03DAC5;
            border-radius: 5px;
        }
        textarea:focus {
            background-color: #333;
            border-color: #00B8A9;
        }
        a {
            color: #03DAC5;
        }
        a:hover {
            color: #00B8A9;
            text-decoration: underline;
        }
    </style>
  </head>
  <body>
    <div class="container">
      <form action="payid19.php" method="post">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="email">E-mail Adresiniz</label>
            <input type="email" id="email" class="form-control" name="email" placeholder="Email adresinizi giriniz">
          </div>
          <div class="col-md-6 mb-3">
            <label for="ucret">Bağış Miktarı</label>
            <input type="text" id="ucret" class="form-control" name="ucret" placeholder="Bağış miktarını giriniz">
          </div>
          <div class="col-md-6 mb-3">
            <label for="baslik">Başlık</label>
            <input type="text" id="baslik" class="form-control" name="baslik" placeholder="Başlık giriniz">
          </div>
          <div class="col-md-6 mb-3">
            <label for="aciklama">Açıklama</label>
            <input type="text" id="aciklama" class="form-control" name="aciklama" placeholder="Açıklama giriniz">
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary w-100">Bağış Yap</button>
          </div>
        </div>
      </form>
    </div>
    <p style="text-align: center;">Bağışlarınız &ouml;ncelikle bu web sitesinin domain ve hosting &ouml;demeleri i&ccedil;in kullanılacak, geri kalan para ise gelecekteki projelerimiz i&ccedil;in harcanacaktır. USD olarak para miktarı hesaplancak ve &ouml;demeyi coin olarak alınacak (Litecoin, Tron, Binance Coin, Ethereum, Bitcoin, BEP, TRC20, ERC20)</p>
  </body>
</html>
