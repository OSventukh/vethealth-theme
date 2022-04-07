'use strict';
window.addEventListener('DOMContentLoaded', () => {
	
	const standWithUkraineBanner = document.createElement('a');
	const header = document.querySelector('#header');
	standWithUkraineBanner.innerText = "Допоможи Українській армії";
	standWithUkraineBanner.href='https://savelife.in.ua/donate/';
	standWithUkraineBanner.title = 'Допомога армії через благодійний фонд Повернись живим';
	standWithUkraineBanner.classList.add('stand-with-ukraine')
	header.append(standWithUkraineBanner);

});