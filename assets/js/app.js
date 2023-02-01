// Navbar Responsive Button

// const nav_toggler = document.querySelector(".nav-toggle-icon");
// const navbar = document.querySelector("#navbar");
// const navitem = document.querySelector("#navbar li");
// nav_toggler.addEventListener("click", function () {
// 	navbar.classList.toggle("active");
// });
/* navitem.addEventListener('click', function () {
    navbar.style.display = "none";
}); */

// Window scroll to top button
const scroll_top = document.querySelector(".scroll_top");

window.addEventListener("scroll", function (e) {
	e.preventDefault();
	if (window.pageYOffset > 1200) {
		scroll_top.classList.add("scroll_top_active");
		scroll_top.addEventListener("click", function (e) {
			e.preventDefault();
			window.scrollTo(0, 0);
		});
	} else {
		scroll_top.classList.remove("scroll_top_active");
	}
});
const scrollButton = document.getElementById("scroll_top");
console.log(scrollButton);
