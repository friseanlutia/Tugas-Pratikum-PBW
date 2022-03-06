function fibonacci() {

    const number = document.getElementById("deret").value;
    let a = 0,
        b = 1,
        nextTerm=b;

    document.write(number + ' suku pertama deret Fibonacci:');
    document.write("<br><br>");

    for (let i = 1; i <= number; i++) {
        document.write(a + "</b><br>");
        nextTerm = a + b;
        a = b;
        b = nextTerm;
    }
}