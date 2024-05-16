$(document).ready(function() {
    // Sayfa ilk yüklendiğinde section-one'ı göster
    $('#section-one').show();
    $('#section-two').hide();
    $('#section-three').hide();

    $('.service-title:not(li *)').click(function() {
        var target = $(this).data('target');
        $(target).show().siblings('div').hide();
        $(this).addClass('active').siblings().removeClass('active');
    });

    $('.navbar ul li ul li a').click(function(e) {
        e.preventDefault();

        var target = $(this).data('target'); // Hedef divin id'sini al
        $(target).show().siblings('div').hide(); // Hedef divi göster, diğerlerini gizle

        $('.service-title[data-target="' + target + '"]:not(li *)').addClass('active').siblings().removeClass('active');
    });
});