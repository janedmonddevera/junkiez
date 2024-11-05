


	let lastScrollTop = 0;
	const navbar = document.querySelector('.navbar-brand');
	const navbar1 = document.querySelector('.navbar');
	window.addEventListener('scroll', function() {
		const st = window.pageYOffset || document.documentElement.scrollTop;
		if (st > lastScrollTop && st > 30) {
			// Downscroll and past 30px
			navbar.classList.remove('hidden'); // Hide navbar
	
			navbar1.style.backgroundColor = 'rgba(255, 255, 255, 0.8)';
		} 
	   else if ( st === 0) {
	  
		navbar.classList.add('hidden'); 
		navbar1.style.backgroundColor = 'rgba(255, 255, 255, 0)';
	   }
	});
	


function openNav() {
	document.getElementById("mySidenav").style.width = "100vw";
	document.getElementById("main").style.marginLeft = "250px";
  }
  
  function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
	document.getElementById("main").style.marginLeft= "0";
  
  
	
  }
  

  var loadingScreen = document.querySelector(".loadingScreen");

  window.addEventListener('load', function() {
	console.log('nice');
	loadingScreen.classList.add('d-none');
  })

var lists = document.querySelectorAll(".nav-item-lists");


lists.forEach(function(list) {

  var arrow = list.querySelector(".arrow");
  

  function onMouseEnter() {
    arrow.classList.remove('d-none');
  }


  function onMouseExit() {
    arrow.classList.add('d-none');
  }


  list.addEventListener('mouseenter', onMouseEnter);
  list.addEventListener('mouseleave', onMouseExit);
});
