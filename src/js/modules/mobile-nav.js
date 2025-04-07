function mobileNav() {
	// Mobile nav button
	const navBtn = document.querySelector('.mobile-nav-btn');
	const nav = document.querySelector('.mobile-nav');
	const menuIcon = document.querySelector('.nav-icon');

	const anchorLinks = document.querySelectorAll('.js-anchor-link'); // .js-anchor-link .menu__link

	anchorLinks.forEach(link => {
		link.addEventListener('click', () => {
			nav.classList.remove('mobile-nav--open');
			// menuIcon.classList.remove('is-active');
		})
	});

	navBtn.onclick = function () {
		nav.classList.toggle('mobile-nav--open');
		menuIcon.classList.toggle('nav-icon--active');
		// document.body.classList.toggle('no-scroll');
	};
}

export default mobileNav;