const iconList = document.getElementsByClassName('icon_list')[0];
const navbar = document.querySelector('header .container nav ul');

let status_bar = false;

iconList.addEventListener("click", function () {
	if (status_bar == false) {
		navbar.classList.add('active');
		status_bar = true;
	} else if (status_bar == true) {
		navbar.classList.remove('active');
		status_bar = false;
	}
});

// Show More Projcts
let projects = document.querySelectorAll('.projects .container .parent .box');
let showMore = document.querySelector('.projects .showMore');
let countShowed = 10;
for (let i = countShowed; i < projects.length; i++) {
	projects[i].style.display = 'none';
}

showMore.addEventListener('click', () => {
	for (let i = countShowed; i < projects.length && i < (countShowed + 5); i++) {
		projects[i].style.display = 'block';
	}
	countShowed += 5;

	// Check IF Have More Projects ?
	if (projects.length < countShowed) {
		showMore.style.display = 'none';
	}
});

// Check If Count Projects Less Than 10 Hidden Button Show
if (projects.length <= 10) {
	showMore.style.display = 'none';
}