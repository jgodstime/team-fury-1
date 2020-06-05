//Princewill Opara Stage 1 Task
const menuDisplay = (x, myClass) => {
	const navigation = document.querySelector('#nav');
	if (navigation.className === 'nav') {
		navigation.className += ' responsive';
	} else {
		navigation.className = 'nav';
	}
};

const menuBtn = document.querySelector('.menu-bar');
menuBtn.addEventListener('click', menuDisplay);
document.write('This working');
