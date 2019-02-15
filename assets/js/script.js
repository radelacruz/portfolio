// reference
// https://getbootstrap.com/docs/4.0/components/navs/#javascript-behavior
$('.nav-tabs a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})

$('.nav-tabs a[href="#aboutme"]').tab('show')

