<?php

$id = '1';

$question = 'やっちんの生まれた年は';


$answers = [
  'A' => '2000年',
  'B' => '1958年',
  'C' => '1598年',
  'D' => '紀元前3000年',
];



$correctAnswer = 'B';
$correctAnswerValue = $answers[$correctAnswer];
$explanation ='昭和33年に生まれました、この年は戌年です。<br />
今思えば終戦記念日1945年8月14日から13年しか経っていませんね。<br />
多くの人の夢や希望を奪った戦争を決して忘れないように生きていきたい。';

include __DIR__.'/../template/question.tpl.php';
