var cSpeed = 1000;
// Simple Counter
var value = $('.s-counter1').text();
$('.s-counter1').countTo({
    from: 0,
    to: value,
    speed: cSpeed,
    formatter: function (value, options) {
        return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
    }
});

var value = $('.s-counter2').text();
$('.s-counter2').countTo({
    from: 0,
    to: value,
    speed: cSpeed,
    formatter: function (value, options) {
        return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
    }
});
var value = $('.s-counter3').text();
$('.s-counter3').countTo({
    from: 0,
    to: value,
    speed: cSpeed,
    formatter: function (value, options) {
        return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
    }
});
var value = $('.s-counter4').text();
$('.s-counter4').countTo({
    from: 0,
    to: value,
    speed: cSpeed,
    formatter: function (value, options) {
        return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
    }
});
var value = $('.s-counter5').text();
$('.s-counter5').countTo({
    from: 0,
    to: value,
    speed: cSpeed,
    formatter: function (value, options) {
        return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
    }
});

var value = $('.s-counter6').text();
$('.s-counter6').countTo({
    from: 0,
    to: value,
    speed: cSpeed,
    formatter: function (value, options) {
        return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
    }
});

var value = $('.s-counter7').text();
$('.s-counter7').countTo({
    from: 0,
    to: value,
    speed: cSpeed,
    formatter: function (value, options) {
        return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
    }
});

var value = $('.s-counter8').text();
$('.s-counter8').countTo({
    from: 0,
    to: value,
    speed: cSpeed,
    formatter: function (value, options) {
        return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
    }
});
