$(document).ready(function () {
	"use strict";
});

let header = document.querySelector('header')
let footer = document.querySelector('footer')

let path = window.location.pathname;
let page = path.split("/").pop().split('.').shift();

if (page === 'index' || page === '') {
	header.classList.add('transparent')
	footer.classList.add('light')
} else if (page === 'portfolio') {
	header.classList.add('light')
	footer.classList.add('dark')
} else if (page === 'about' || page === 'single-portfolio') {
	header.classList.add('dark')
	footer.classList.add('light')
} else  {
	header.classList.add('dark')
	footer.classList.add('light')
}

// let mobileMenuIcon = document.getElementById('mobile-menu-icon')
// let closeMenu = document.getElementById('close-menu')

// mobileMenuIcon.onclick = function (event) {
// 	header.classList.add('mobile')
// }

// closeMenu.onclick = function (event) {
// 	header.classList.toggle('mobile')
// }
