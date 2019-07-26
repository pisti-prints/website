/* Javascript */
function load() {
  console.log("script-js load event detected!");
}
window.onload = load;

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

	var replace = document.getElementById("replacement");
	var itemdec = document.getElementById("text-replacement");

	replace.src = pistiProducts[pistiProduct];
	itemdec.innerHTML = pistiPID;
}

function onLeave(remove) {

	var removed = "https://temp1.asign.pro/wp-content/uploads/2019/05/test-1.jpg";
	var pistiRPID = remove.getAttribute("data-return-name");

	var replace = document.getElementById("replacement");
	var itemdec = document.getElementById("text-replacement");

	replace.src = removed;
	itemdec.innerHTML = pistiRPID;

}