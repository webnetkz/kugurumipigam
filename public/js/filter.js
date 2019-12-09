 function goFilter(event) {
    var items_el = document.getElementById('onePosts');
	//console.log(event.value);
  var items = items_el.getElementsByClassName('cartItem');
  //console.log(items);
  for (var i=0; i<items.length; i++) {
  	if (items[i].classList.contains(event.value)) {
    	items[i].style.display = 'inline-block';
    } else {
    	items[i].style.display = 'none';
    }
  }
};
 
 function goFilter1(event) {
    var items_el = document.getElementById('twoPosts');
	//console.log(event.value);
  var items = items_el.getElementsByClassName('cartItem');
  //console.log(items);
  for (var i=0; i<items.length; i++) {
  	if (items[i].classList.contains(event.value)) {
    	items[i].style.display = 'inline-block';
    } else {
    	items[i].style.display = 'none';
    }
  }
};