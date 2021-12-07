<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <script src="./questions.js" defer></script>
    <title>問題1 | Quiz</title>
  </head>
  <body>
    <div id="main">
      <h1>自己紹介Quiz</h1>

      <div class="section">
        <h2>問題1</h2>
        <p>
          <?php echo $question; ?>
        </p>

        <h3>選択肢</h3>
        <ol class="answers">
          <li>2000年</li>
          <li>1958年</li>
          <li>1598年</li>
          <li>紀元前3000年</li>
        </ol>
      </div>

      <div id="section-correct-answer" class="section">
        <h2>答え</h2>
        <p>
          <span id="correct-answer">2.1958年</span> <br />
          昭和33年に生まれました、この年は戌年です。<br />
          今思えば終戦記念日1945年8月14日から13年しか経っていませんね。<br />
          多くの人の夢や希望を奪った戦争を決して忘れないように生きていきたい。
        </p>
      </div>

      <div class="section">
        <a href="./index.php">戻る</a>
      </div>
    </div>
  </body>
</html>
