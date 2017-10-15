
var genericComponent = function(selector) {
    var cmpOne = selector;
    function logYellowBox() {
        var allYellowBoxes = document.querySelectorAll('#' + cmpOne + ' .yellow.box');
            for (let i=0; i < allYellowBoxes.length; i++) {
                allYellowBoxes[i].addEventListener('click', function() {
                   console.log('yellow box ' + i); 
                });
            }
    }
    
    return {
        logYellowBox: logYellowBox
    }
}


var cmpOne = genericComponent('cmp-one');
cmpOne.logYellowBox();

var cmpOne = genericComponent('cmp-two');
cmpOne.logYellowBox();