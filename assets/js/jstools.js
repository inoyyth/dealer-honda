
function formatCurrency(num) {
    num = Math.round(num);
    num = num.toString().replace(/\$|\,/g, '');
    if (isNaN(num))
        num = "0";
    sign = (num == (num = Math.abs(num)));
    num = Math.floor(num * 100 + 0.50000000001);
    cents = num % 100;
    num = Math.floor(num / 100).toString();
    if (cents < 10)
        cents = "0" + cents;
    for (var i = 0; i < Math.floor((num.length - (1 + i)) / 3); i++)
        num = num.substring(0, num.length - (4 * i + 3)) + '.' + num.substring(num.length - (4 * i + 3));
    return ((sign) ? '' : '-') + '' + num;// + '.' + cents;
}

function Comma(Num) { //function to add commas to textboxes
    //alert(Num);
    Num += '';
    Num = Num.replace(',', '');
    Num = Num.replace(',', '');
    Num = Num.replace(',', '');
    Num = Num.replace(',', '');
    Num = Num.replace(',', '');
    Num = Num.replace(',', '');
    x = Num.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1))
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    return x1 + x2;
}
