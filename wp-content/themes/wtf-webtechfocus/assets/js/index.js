
/*$(function () {
    var navLink = $("#offcanvasDarkNavbar");
    navLink.on("click", "a", null, function () {
        navLink.collapse('hide');
    });
});*/


/*
    $(function () {
        var navLink = $("#offcanvasDarkNavbar");
        navLink.on("click", "a", null, function () {
            navLink.collapse('hide');
        });
    });

    var myOffcanvas = document.getElementById('offcanvasDarkNavbar')
myOffcanvas.addEventListener('hidden.bs.offcanvas', function () {
// do something...
})
*/

//tooltip
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
if (tooltipTriggerList) {
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
}
//toast
const toastTrigger = document.getElementById('liveToastBtn')
const toastLiveExample = document.getElementById('liveToast')

if (toastTrigger) {
  const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
  toastTrigger.addEventListener('click', () => {
    toastBootstrap.show()
  })
}

//popover
const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
if (popoverTriggerList) {
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))

const popover = new bootstrap.Popover('.popover-dismiss', {
    trigger: 'focus'
  })
}