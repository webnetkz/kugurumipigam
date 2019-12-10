 function goFilter(event) {
    var items_el = document.getElementById('onePosts');
    var items = items_el.getElementsByClassName('cartItem');

  for (var i = 0; i < items.length; i++) {
  	if (items[i].classList.contains(event.value)) {
    	items[i].style.display = 'inline-block';
    } else {
    	items[i].style.display = 'none';
    }
  }
};
 
 function goFilter1(event) {
    var items_el = document.getElementById('twoPosts');
    var items = items_el.getElementsByClassName('cartItem');

  for (var i = 0; i < items.length; i++) {
  	if (items[i].classList.contains(event.value)) {
    	items[i].style.display = 'inline-block';
    } else {
    	items[i].style.display = 'none';
    }
  }
};