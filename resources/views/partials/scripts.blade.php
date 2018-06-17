<script src="{{ asset("/js/particles.min.js") }}"></script>
<script type="text/javascript" src="{!! asset('/js/parsley.min.js') !!}"></script>

<script>
/* ---- nav smooth scroll ---- */
$(document).ready(function() {
    $('.scroll-link').on('click', function(event){
        event.preventDefault();
        var sectionID = $(this).attr("data-id");
        scrollToID('#' + sectionID, 750);
    });
    $('.scroll-top').on('click', function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop:0}, 1200);       
    });
});

/* ---- auto Enable submit buttoin ---- */
$('#terms').click(function () {
    //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#submitbut').removeAttr('disabled'); //enable input
        
    } else {
        $('#submitbut').attr('disabled', true); //disable input
    }
});


/* ------ auto preview image ------ */

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile-img").change(function(){
        readURL(this);
    });

    function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#profile-img-tag2').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile-img2").change(function(){
        readURL2(this);
    });


/* ------ particles-js ------ */

    particlesJS.load('particles-js', '/js/particles.json', function () {
            console.log('callback - particles.js config loaded')
        })
</script>

