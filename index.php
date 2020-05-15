<!DOCTYPE html>
<html>

<head>
  <style type="text/css">
    .lead-form {
      text-align: center;
      font-size: 20px;
    }

    form {
      width: 460px;
      margin: 0 auto;
    }

    .item {
      overflow: hidden;
      margin-bottom: 20px;

    }

    .label {
      float: left;
      margin-right: 20px;
      width: 135px;
      border-left: solid 3px #e0505d;
      padding-left: 10px;
    }

    .btn-area {

      padding-left: 170px;
    }

    input[type="text"],
    input[type="email"] {
      border: solid 1px #aaa;
      border-radius: 5px;
      padding: 10px;
      font-size: 15px;
      width: 200px;
    }

    textarea {
      border: solid 1px #aaa;
      border-radius: 5px;
      padding: 10px;
      height: 160px;
      width: 200px;
      font-size: 15px;
    }

    .confirm_btn {
      font-size: 1.4em;
      font-weight: bold;
      padding: 10px 30px;

    }

    .reset_btn {
      font-size: 1.4em;
      font-weight: bold;
      padding: 10px 30px;
    }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
    function check_contactform() {
      var name = $('input[name="name"]').val();
      var furigana = $('input[name="furigana"]').val();
      var address = $('input[name="address"]').val();
      var tel = $('input[name="tel"]').val();
      var otoiawase = $('textarea[name="otoiawase"]').val();
      var errmsg = "";

      if (name == "") {
        errmsg = "お名前を入力して下さい\n";
      }

      if (furigana == "") {
        errmsg = errmsg + "フリガナを入力して下さい\n";
      }

      if (address == "") {
        errmsg = errmsg + "メールアドレスを入力して下さい\n";
      }

      if (!address.match(/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/)) {
        errmsg = errmsg + "メールアドレスをご確認下さい\n";
      }

      if (tel == "") {
        errmsg = errmsg + "電話番号を入力して下さい\n";
      }

      if (otoiawase == "") {
        errmsg = errmsg + "お問い合わせ内容を入力して下さい\n";
      }

      if (errmsg != "") {
        alert(errmsg);
        return false;
      }

      $('form[name="myform"]').submit();
    }
  </script>
</head>

<body>
  <p class="lead-form">お問い合わせはこちらから！</p>
  <form action="confirmation.php" method="post" name="myform">
    <div class="item"><label class="label">お名前</label><input type="text" name="name"></div>
    <div class="item"><label class="label">フリガナ</label><input type="text" name="furigana"></div>
    <div class="item"><label class="label">メールアドレス</label><input type="text" name="address"></div>
    <div class="item"><label class="label">電話番号</label><input type="text" name="tel"></div>
    <div class="item"><label class="label">お問い合わせ内容</label><textarea name="otoiawase"></textarea></div>
    <div class="btn-area"><input type="button" class="confirm_btn" value="確認画面へ" onclick="check_contactform()"><input type="reset" class="reset_btn" value="リセット"></div>
  </form>
</body>

</html>