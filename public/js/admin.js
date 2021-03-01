
function shwimg(elem){
    // get the image to show selected image
    // var i = document.getElementById('imgInp');
    var cimg = elem.siblings('.childimg').children('img');
    // console.log(cimg);

    // console.log(cimg);

    //
    // var filetoload = $("#imgInp")[0];
    var filetoload = elem[0];

    // initiate the file reader object
    var reader = new FileReader();
    // read the contents of image file
    reader.readAsDataURL(filetoload.files[0]);
    reader.onload = function(e){
        // set the image source
        let srcs = e.target.result;

        cimg.attr('src', srcs);

        // try to add result to another input
        // jQuery('#imgurl').val(e.target.result);
    }
    // another way to get the source of a file
    //=======================================//
    //display selected image into the image tag
    //document.getElementById('thepicture').src = window.URL.createObjectURL(i.files[0]);
}


$(document).ready(function () {
    //sidebar javascript START
    $('#dismiss, .overlay').on('click', function () {
        // hide sidebar
        $('#sidebar').removeClass('active');
        $('#dismiss').css('display','none');
        // hide overlay
        $('.overlay').removeClass('active');
    });

    $('#sidebarCollapse').on('click', function () {
        // open sidebar
        $('#sidebar').addClass('active');
        $('#dismiss').css('display','block');
        // fade in the overlay
        $('.overlay').addClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
//sidebar javascript END
});