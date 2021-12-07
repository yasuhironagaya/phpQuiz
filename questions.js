const answersList = document.querySelectorAll('ol.answers li');

answersList.forEach(li => li.addEventListener('click', checkClickedAnswer));

function checkClickedAnswer() {
  document.querySelector('#correct-answer').style.color ='#f05959';
  document.querySelector('#section-correct-answer').style.display = 'block';
}


