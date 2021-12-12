<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <script src="./questions.js" defer></script>
    <title>問題<?php echo $id; ?> | Quiz</title>
  </head>
  <body>
    <div id="main">
      <h1>自己紹介Quiz</h1>

      <div class="section">
        <h2>問題<?php echo $id; ?></h2>
        <p>
          <?php echo $question; ?>
        </p>

        <h3>選択肢</h3>
        <ol class="answers" data-id="question<?php echo $id; ?>">
          <?php foreach($answers as $key => $value): ?>
          <li data-answer="<?php echo $key; ?>"><?php echo $value; ?></li>
          <?php endforeach; ?>
         </ol>
      </div>

      <div id="section-correct-answer" class="section">
        <h2>答え</h2>
        <p>
          <span id="correct-answer"><?php echo $correctAnswer; ?>. <?php echo $correctAnswerValue; ?></span> <br />
          <?php echo $explanation; ?>
          </p>
      </div>

      <div class="section">
        <a href="./../question.php">戻る</a>
      </div>
    </div>
  </body>
</html>
