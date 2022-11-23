function calc(){
    n1 = +$('#n1').val();
    n2 = +$('#n2').val();
    op = $('#op').val();
    res = eval(n1 + op + n2);
    /*switch (op){
        case '+':
            res = n1+n2;
            break;
        case '-':
            res = n1-n2;
            break;
        case '*':
            res = n1*n2;
            break;
        case '/':
            res = n1/n2;
            break;
    }*/
    $('#res').val(res);
}













