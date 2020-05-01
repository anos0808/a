$(document).ready(function () {
    var sum = 0;
    var sum1 = 0;
    var sum2 = 0;
    var currentTab = 0;
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    showTab(currentTab);
    $("#contactform-email").change(function () {
        if (filter.test($("#contactform-email").val())) {
            $("#contactform-email").css("border-color", "#3c763d");
        }
    });

    $('#stepForm').on('keyup keypress', function (e) {
        var keyCode = e.keyCode || e.which;
        if (keyCode === 13) {
            e.preventDefault();
            return false;
        }
    });

    $("#contactform-firma").change(function () {
        if ($("#contactform-firma").val() !== '') {
            $("#contactform-firma").css("border-color", "#3c763d");
        } else {
            $("#contactform-firma").css("border-color", "rgb(223, 42, 24)");
        }
    });
    $("#nextBtn").click(function () {
        if ($("#contactform-email").val() === '') {
            $("#contactform-email").css("border-color", "#df2a18");
            if ($("#contactform-firma").val() === '') {
                $("#contactform-firma").css("border-color", "#df2a18");
            }

        } else {
            if (checkInputValue()) {
                nextPrev(1);
            }
        }
    });
    function  checkInputValue() {
        if ($("#contactform-firma").val() === '') {
            $("#contactform-firma").css("border-color", "#df2a18");
        }
        if ($("#contactform-email").val() === '') {
            $("#contactform-email").css("border-color", "#df2a18");
            if ($("#contactform-firma").val() === '') {
                $("#contactform-firma").css("border-color", "#df2a18");
            }
        }
        var inputVal = $("#contactform-phone").val();
        var isphoneNumeric = $.isNumeric(inputVal);
        if ((isphoneNumeric && isphoneNumeric !== "") || (inputVal === "")) {
            if (filter.test($("#contactform-email").val()) && $("#contactform-firma").val() !== '') {
                return true;
            } else {
                return false;
            }
        }
    }
    $('#1').click(function () {
        $('.tab').hide();
        showWhatSelected();
        currentTab = 0;
        showTab(0);
    });
    $('#2').click(function () {
        if (checkInputValue()) {
            $('.tab').hide();
            showWhatSelected();
            currentTab = 1;
            showTab(1);
        }
    });
    $('#3').click(function () {
        if (checkInputValue()) {
            $('.tab').hide();
            showWhatSelected();
            currentTab = 2;
            showTab(2);
        }
    });
    $('#4').click(function () {
        if (checkInputValue()) {
            $('.tab').hide();
            showWhatSelected();
            currentTab = 3;
            showTab(3);
        }
    });
    $("#prevBtn").click(function () {
        nextPrev(-1);
    });

    function showTab(n) {
        var x = $(".tab");
        x[n].style.display = "block";
        if (n === 0) {
            $("#prevBtn").css("display", "none");
        } else {
            $("#prevBtn").css("display", "inline");
        }
        if (n === 3) {
            $("#nextBtn").css("display", "none");
            $("#submit").css("display", "inline");
        } else {
            $("#nextBtn").css("display", "inline");
            $("#submit").css("display", "none");
        }
        if (n === (x.length - 1)) {
            $("#nextBtn").innerHTML = "Submit";
        } else {
            $("#nextBtn").innerHTML = "Nächste";
        }

        if (n === 3) {
            if ($('#result').height() > 890) {
                $("#prevBtn").css("display", "inline");
                $("#active").css("display", "block");
                $(".footer-btn").css("position", "inherit");
                $(".footer-btn").css("float", "left");
            }
            if ($('#checkactive').is(':checked')) {
                $("#submit").css("display", "inline");
            } else {
                $("#submit").css("display", "none");
            }

            if (sum < 49) {
                $("#sum-month").css("display", "none");
            } else {
                $("#sum-month").css("display", "contents");
            }
        }
        fixStepIndicator(n);
    }
    ;

    function nextPrev(n) {
        var x = $(".tab");
        x[currentTab].style.display = "none";
        currentTab = currentTab + n;

        showTab(currentTab);
        showWhatSelected();
    }

    var warenwirtschaft, amazon, dhl, dbd, onlineShop, blackpost, farfetch;

    function showWhatSelected() {
        warenwirtschaft = $('#contactform-warenwirtschaft').val();
        $('#warenwirtschaft').html(49 * warenwirtschaft + " €");

        amazon = $('#contactform-amazon').val();
        $('#amazon').html(amazon * 49 + " €");

        dhl = $('#contactform-dhl').val();
        $('#dhl').html(49 * dhl + " €");

        dbd = $('#contactform-dbd').val();
        $('#dbd').html(49 * dbd + " €");

        onlineShop = $('#contactform-onlineshop').val();
        $('#onlineShop').html(49 * onlineShop + " €");

        blackpost = $('#contactform-blackpost').val();
        $('#blackpost').html(49 * blackpost + " €");

        farfetch = $('#contactform-farfetch').val();
        $('#farfetch').html(49 * farfetch + " €");
        getsum();
    }

    function  getsum() {
        sum = ((warenwirtschaft !== 0) ? 49 * warenwirtschaft : 0) +
                ((amazon !== 0) ? 49 * amazon : 0) +
                ((dhl !== 0) ? 49 * dhl : 0) +
                ((dbd !== 0) ? 49 * dbd : 0) +
                ((onlineShop !== 0) ? 49 * onlineShop : 0) +
                ((farfetch !== 0) ? 49 * farfetch : 0) + sum1 + sum2 +
                ((blackpost !== 0) ? 49 * blackpost : 0);

        $('#sum').html(sum + " €");
    }

    function fixStepIndicator(n) {
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        x[n].className += " active";
    }

    $('#contactform-checkwarenwirtschaft').click(function () {
        if ($(this).is(':checked')) {
            var number = $('#contactform-warenwirtschaft').val();
            $('#contactform-warenwirtschaft').show();
            $('#tr-Warenwirtschaft').show();
            $('#contactform-warenwirtschaft').val(1);
            getsum();
            $('#warenwirtschaft').html(49 * number);
        } else {
            $('#contactform-warenwirtschaft').val(0);
            getsum();
            $('#contactform-warenwirtschaft').hide();
            $('#tr-Warenwirtschaft').hide();
        }
    });

    $('#contactform-checkamazon').click(function () {
        if ($(this).is(':checked')) {
            $('#contactform-amazon').show();
            $('#tr-amazon').show();
            $('#contactform-amazon').val(1);
        } else {
            $('#contactform-amazon').hide();
            $('#contactform-amazon').val(0);
            $('#tr-amazon').hide();
        }
    });

    $('#contactform-checkfarfetch').click(function () {
        if ($(this).is(':checked')) {
            $('#contactform-farfetch').show();
            $('#tr-farfetch').show();
            $('#contactform-farfetch').val(1);
        } else {
            $('#contactform-farfetch').hide();
            $('#contactform-farfetch').val(0);
            $('#tr-farfetch').hide();
        }
    });

    $('#contactform-checkonlineshop').click(function () {

        if ($(this).is(':checked')) {
            $('#contactform-onlineshop').show();
            $('#tr-onlineshop').show();
            $('#contactform-onlineshop').val(1);
        } else {
            $('#contactform-onlineshop').hide();
            $('#contactform-onlineshop').val(0);
            $('#tr-onlineshop').hide();
        }
    });

    $('#contactform-checkdhl').click(function () {
        if ($(this).is(':checked')) {
            $('#contactform-dhl').show();
            $('#tr-dhl').show();
            $('#contactform-dhl').val(1);
        } else {
            $('#contactform-dhl').hide();
            $('#contactform-dhl').val(0);
            $('#tr-dhl').hide();
        }
    });

    $('#contactform-checkdbd').click(function () {
        if ($(this).is(':checked')) {
            $('#contactform-dbd').show();
            $('#tr-dbd').show();
            $('#contactform-dbd').val(1);
        } else {
            $('#contactform-dbd').hide();
            $('#contactform-dbd').val(0);
            $('#tr-dbd').hide();
        }
    });

    $('#contactform-checkblackpost').click(function () {
        if ($(this).is(':checked')) {

            $('#tr-blackpost').show();
            $('#contactform-blackpost').val(1);
        } else {
            $('#contactform-blackpost').hide();
            $('#contactform-blackpost').val(0);
            $('#tr-blackpost').hide();
        }
    });

    $('#contactform-checkblackpost').click(function () {
        if ($(this).is(':checked')) {
            $('#contactform-blackpost').show();
            $('#tr-blackpost').show();
            $('#contactform-blackpost').val(1);
        } else {
            $('#contactform-blackpost').hide();
            $('#contactform-blackpost').val(0);
            $('#tr-blackpost').hide();
        }
    });

    $('#contactform-checkdatenanreicherung').click(function () {
        if ($(this).is(':checked')) {
            sum1 = (49);
            getsum();
            $('#tr-datenanreicherung').show();

        } else {
            sum1 = 0;
            getsum();
            $('#tr-datenanreicherung').hide();
            $('#tr-datenanreicherung').hide();
        }
    });

    $('#contactform-checkamazonproduktupload').click(function () {
        if ($(this).is(':checked')) {
            sum2 = (49);
            getsum();
            $('#tr-amazonproduktupload').show();
        } else {
            sum2 = 0;
            getsum();
            $('#tr-amazonproduktupload').hide();
        }
    });

    $('#checkactive').click(function () {
        if ($(this).is(':checked')) {
            $('#submit').show();
        } else {

            $('#submit').hide();
        }
    });
});
