$(document).ready(function() {
    $('#sidebarCollapse , .closebtn').on('click', function() {
        $('body').toggleClass('is-collapsed');
    });
    // $('body').on('click', '.closebtn', function() {
    //     $('body').toggleClass('is-collapsed');
    //     console.log('hello');
    // });
});