/* Javascript */
function load() {
  console.log("pisti-js load event detected!");
}
window.onload = load;

/* Nav Active */
// $(document).ready(function($){
//     var url = window.location.pathname;
//     $('.pisti-nav-item a[href="'+url+'"]').addClass('pisti-a-active');
// });

// $(function () {
// 	setNavigation();
// });

// function setNavigation() {
// 	var path = window.location.pathname;
// 	path = path.replace(/\/$/, '');
// 	path = decodeURIComponent(path);

// 	$('.navbar-nav-desktop a').each(function() {
//     	var href = $(this).attr('href');
//     	if(path.substring(0, href.length) === href) {
//         	$(this).closest('a').addClass('pisti-a-active');
//         }
//     });
// }

//     function navHighlight(elem, home, active) {
//         var url = location.href.split('/'),
//             loc = url[url.length - 1],
//             link = document.querySelectorAll(elem);
//         for (var i = 0; i < link.length; i++) {
//             var path = link[i].href.split('/'),
//                 page = path[path.length - 1];
//             if (page == loc ||
//                 page == home && loc == '') {
//                 link[i].parentNode.className += ' ' + active;
//                 document.body.className += ' ' +
//                     page.substr(0, page.lastIndexOf('.'));
//             }
//         }
//     }

//     navHighlight('.pisti-menu-desktop a', '', 'pisti-a-active');
    /* menu link
       selector, home page, highlight class */

  $(document).ready(function() {
  	if (window.location.href.indexOf('products') > -1) {
  	    $('.nav-products').addClass('pisti-a-active');
 	} else if (window.location.href.indexOf('faq') > -1) {
    	$('.nav-faq').addClass('pisti-a-active');
    } else if (window.location.href.indexOf('contact') > -1) {
    	$('.nav-contact-us').addClass('pisti-a-active');
    } else {
    	$('.nav-pisti').addClass('pisti-a-active');
    }
  });

/* End */

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}

function onHover(products) {

	var pistiProducts = [
    	"https://temp1.asign.pro/wp-content/uploads/2019/05/test-1.jpg",
    	"https://temp1.asign.pro/wp-content/uploads/2019/05/test-2.jpg"
    ];

	var pistiProduct = products.getAttribute("data-pisti-product");
	var pistiPID = products.getAttribute("data-item-name");

	var replace = document.getElementsByClassName("img-replacement");
	var itemdec = document.getElementsByClassName("text-replacement");


    replace[0].src = pistiProducts[pistiProduct];
	replace[1].src = pistiProducts[pistiProduct];
	replace[2].src = pistiProducts[pistiProduct];

	itemdec[0].innerHTML = pistiPID;
	itemdec[1].innerHTML = pistiPID;
	itemdec[2].innerHTML = pistiPID;
}

function onLeave(remove) {

	var removed = "https://temp1.asign.pro/wp-content/uploads/2019/05/test-1.jpg";
	var pistiRPID = remove.getAttribute("data-return-name");

	var replace = document.getElementsByClassName("img-replacement");
	var itemdec = document.getElementsByClassName("text-replacement");


    	replace[0].src = removed;
		replace[1].src = removed;
		replace[2].src = removed;


    	itemdec[0].innerHTML = pistiRPID;
		itemdec[1].innerHTML = pistiRPID;
		itemdec[2].innerHTML = pistiRPID;
}

var pistiProductA = document.getElementsByClassName('pisti-product-a');
var pistiProductItem = document.getElementsByClassName('pisti-product-item');
var pistiProductItemLabel = document.getElementsByClassName('pisti-product-item-label');


for (i = 0; i < pistiProductA.length; i++) {
  pistiProductA[i].addEventListener("mouseover", function() {
	mouseOver(this);
  });
  
  pistiProductA[i].addEventListener("mouseout", function() {
	mouseOut(this);
  });
}

  function mouseOver(p) {
    var item = p.querySelector('img.pisti-product-item');
    var itemLabel = p.querySelector('p.pisti-product-item-label');
  	item.style.transition = '0.3s all ease';
  	itemLabel.style.transition = '0.3s all ease';
	item.style.backgroundColor = '#333333';
  	itemLabel.style.color = '#f7cc1b';
  	itemLabel.style.fontWeight = '600';
  }
  
  function mouseOut(p) {
    var item = p.querySelector('img.pisti-product-item');
    var itemLabel = p.querySelector('p.pisti-product-item-label');
    item.style.transition = '0.3s all ease';
  	itemLabel.style.transition = '0.3s all ease';
	item.style.backgroundColor = '#111111';
  	itemLabel.style.color = '#FFFFFF';
  	itemLabel.style.fontWeight = '400';
  }

// Sidebar function goes here:
        const sideBar = document.getElementsByClassName('pisti-sidebar');
        const onLoad = document.getElementsByClassName('pisti-sidebar');
        const onLoade = document.getElementsByClassName('pisti-sidebar-title');

        for (let i = 0; i < sideBar.length; i++) {
            console.log(i);
            sideBar[i].addEventListener('click', function () {
                onLoad[0].classList.remove('onload-active');
                onLoade[0].classList.remove('onload-active');
                const sideBarTitle = this.nextElementSibling;

                sideBarTitle.style.display == 'none';

                if (sideBarTitle.style.display === 'block') {
                    sideBarTitle.style.display = 'none';
                } else {
                    sideBarTitle.style.display = 'block';
                }
            });
        }

// Tab for product page
function tabChange() {
	let getTab = document.getElementsByClassName('bdt-tabs-item');

	for (let t = 0; t < getTab.length; t ++) {
    	getTab[t].click();
    }
}