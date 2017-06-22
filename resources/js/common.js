var increment = (function(){
    var counter = 1;
    return function(){return counter += 1;}
})();

function click(){
    document.getElementById("clickCount").innerHTML = increment();
}