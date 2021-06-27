$('#slide-site').slick({
    dots: true,
    slidesToShow: 1,
    responsive: [{
        breakpoint: 768,
        settings: {
            arrows: false
        }
    }]
});

function scrollFixedNavbar(){
	let header = document.querySelector('header');
	if(header){
		window.addEventListener('scroll', e=>{
			if ((e.path[1].pageYOffset >= 100) === true) {
				header.classList.add('position-fixed')
			}else{
				header.classList.remove('position-fixed')
			}
		})
		if(document.documentElement.scrollTop > 100){
			header.classList.add('position-fixed')
		}else{
			header.classList.remove('position-fixed')
		}
	}
}
scrollFixedNavbar()

document.addEventListener('DOMContentLoaded', () =>{
	'use strict';
	$(document).ready(function(){
		$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
			$(this).toggleClass('open');
			$('header').toggleClass('position-fixed');
		});
	});

	
    function addArrowOnMainPageSlide(){
    	let slidePrev = document.querySelector('#slide-site .slick-prev'),
    		slideNext = document.querySelector('#slide-site .slick-next');

    	if(slidePrev){
    		slidePrev.innerHTML = 
	    	`
	    		<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M10 4L6 8L10 12" stroke="#0099FF" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
	    	`;
    	}
    	if(slideNext){
    		slideNext.innerHTML = 
	    	`
	    		<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M6 12L10 8L6 4" stroke="#0099FF" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>

	    	`;
    	}
    	

    }
    addArrowOnMainPageSlide()

    const dropdownBottom = document.querySelectorAll('.dropdown-bottm')
    if(dropdownBottom){
    	dropdownBottom.forEach(item=>{
    		return item.innerHTML += 
    		`
    		<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M5 7.5L10 12.5L15 7.5" stroke="#000" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>

    		`;
    	})
    }


})