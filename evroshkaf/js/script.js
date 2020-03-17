$(document).ready(function(){
    $(".next").click(function() {
        $(".ago").removeAttr("hidden");
        if (!$(".type-organization").attr("hidden")) {
            $(".system").removeAttr("hidden");
            $(".type-organization").attr("hidden", "hidden");
        } else if (!$(".system").attr("hidden")) {
            $(".employees").removeAttr("hidden");
            $(".system").attr("hidden", "hidden");
        } else if (!$(".employees").attr("hidden")) {
            $(".call-back").removeAttr("hidden");
            $(".employees").attr("hidden", "hidden");
            $(".ago").attr("hidden", "hidden");
            $(".next").attr("hidden", "hidden");
            $(".count").removeAttr("hidden");
        }
    });
    $(".ago").click(function() {
        if (!$(".system").attr("hidden")) {
            $(".system").attr("hidden", "hidden");
            $(".type-organization").removeAttr("hidden");
        } else if (!$(".employees").attr("hidden")) {
            $(".employees").attr("hidden", "hidden");
            $(".system").removeAttr("hidden");
        }
    });

    $(".phone").click(function() {
        $("#myModal").modal('show');
    });
	 $(".stiker").click(function() {
        $("#stiker").modal('show');
    });
	$(".form-services8").click(function() {
		
        $("#myModal-8").modal('show');
    });
	$(".form-services7").click(function() {
		
        $("#myModal-7").modal('show');
    });
	$(".form-services6").click(function() {
		
        $("#myModal-6").modal('show');
    });
	$(".form-services5").click(function() {
		
		
        $("#myModal-5").modal('show');
    });
	$(".form-services2").click(function() {
		
        $("#myModal-2").modal('show');
    });
	$(".form-services4").click(function() {
		
        $("#myModal-2").modal('show');
    });
	$(".form-services3").click(function() {
		
        $("#myModal-3").modal('show');
    });
	$(".form-services1").click(function() {
		
        $("#myModal-1").modal('show');
    });
    $(".form-services").click(function() {
		
        $("#myModal-services").modal('show');
    });
    $(".form-trust").click(function() {
        $("#myModal-trust").modal('show');
    });
    $(".form-free").click(function() {
        $("#myModal-free").modal('show');
    });
	 $(".cat1").click(function() {
        $("#c1").modal('show');
    });
	$(".cat2").click(function() {
        $("#c2").modal('show');
    });
	$(".cat3").click(function() {
        $("#c3").modal('show');
    });
	$(".cat4").click(function() {
        $("#c4").modal('show');
    });
	$(".cat5").click(function() {
        $("#c5").modal('show');
    });
	$(".cat6").click(function() {
        $("#c6").modal('show');
    });
	$(".cat7").click(function() {
        $("#c7").modal('show');
    });
	$(".cat8").click(function() {
        $("#c8").modal('show');
    });
	$(".cat9").click(function() {
        $("#c9").modal('show');
    });
	$(".cat10").click(function() {
        $("#c10").modal('show');
    });
	$(".cat11").click(function() {
        $("#c11").modal('show');
    });
	$(".cat12").click(function() {
        $("#c12").modal('show');
    });
	$(".cat13").click(function() {
        $("#c13").modal('show');
    });
	$(".cat14").click(function() {
        $("#c14").modal('show');
    });
	$(".cat15").click(function() {
        $("#c15").modal('show');
    });
	$(".cat16").click(function() {
        $("#c16").modal('show');
    });
	$(".cat17").click(function() {
        $("#c17").modal('show');
    });
	$(".cat18").click(function() {
        $("#c18").modal('show');
    });
	$(".cat19").click(function() {
        $("#c19").modal('show');
    });
	$(".cat20").click(function() {
        $("#c20").modal('show');
    });
	$(".cat21").click(function() {
        $("#c21").modal('show');
    });
	$(".cat22").click(function() {
        $("#c22").modal('show');
    });
	$(".cat23").click(function() {
        $("#c23").modal('show');
    });
	$(".cat24").click(function() {
        $("#c24").modal('show');
    });
	$(".cat25").click(function() {
        $("#c25").modal('show');
    });
	$(".cat26").click(function() {
        $("#c26").modal('show');
    });
	$(".cat27").click(function() {
        $("#c27").modal('show');
    });
	$(".cat28").click(function() {
        $("#c28").modal('show');
    });
	$(".cat29").click(function() {
        $("#c29").modal('show');
    });
	$(".cat30").click(function() {
        $("#c30").modal('show');
    });
	$(".cat31").click(function() {
        $("#c31").modal('show');
    });
	$(".cat32").click(function() {
        $("#c32").modal('show');
    });
	$(".cat33").click(function() {
        $("#c33").modal('show');
    });
	$(".cat34").click(function() {
        $("#c34").modal('show');
    });
	$(".cat35").click(function() {
        $("#c35").modal('show');
    });
	$(".cat36").click(function() {
        $("#c36").modal('show');
    });
    $('.submit').click(function() {
        for (i=0; i <= $(".phone-mask").length; i++) {
            var phone = $(".phone-mask")[i].value;
            if (phone != '') {
                $(".modal").modal('hide');
                $("#myModal-submit").modal('show');
            }
        }
    });
    $(function(){
        $(".phone-mask").mask("+375(99)999-99-99");
    });

});


$(document).ready(function(){
    $(".modal .next").click(function () {
        var pushModal = $(this).closest(".catalog");
        pushModal.removeClass("fade").modal('hide').addClass("fade");
        pushModal.next(".catalog").removeClass("fade").modal('show').addClass("fade");
    });
    $(".modal .prev").click(function () {
        var pushModal = $(this).closest(".catalog");
        pushModal.removeClass("fade").modal('hide').addClass("fade");
        pushModal.prev(".catalog").removeClass("fade").modal('show').addClass("fade");
    });
});



