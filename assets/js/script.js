// reference
// https://getbootstrap.com/docs/4.0/components/navs/#javascript-behavior
$('.nav-tabs a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})

$('.nav-tabs a[href="#aboutme"]').tab('show')


document.addEventListener('DOMContentLoaded', function() {
	var elems = document.querySelectorAll('.collapsible');
	var instances = M.Collapsible.init(elems, options);
});

// Or with jQuery

$(document).ready(function(){
	$('.collapsible').collapsible();
});