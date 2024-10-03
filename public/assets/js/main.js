window.addEventListener("load", function () {
  document.getElementsByClassName("loader")[0].style.display = "none";
})

// Show More Projcts
let projects = document.querySelectorAll('.projects .box');
let showMore = document.querySelector('.showMore');
let countShowed = 6;
for (let i = countShowed; i < projects.length; i++) {
  projects[i].style.display = 'none';
}

showMore.addEventListener('click', () => {
  for (let i = countShowed; i < projects.length && i < (countShowed + 5); i++) {
    projects[i].style.display = 'block';
  }
  countShowed += 3;

  // Check IF Have More Projects ?
  if (projects.length < countShowed) {
    showMore.style.display = 'none';
  }
});

// Check If Count Projects Less Than 6 Hidden Button Show
if (projects.length <= 6) {
  showMore.style.display = 'none';
}


