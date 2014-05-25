/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var list = document.getElementById('list'),
    add_link = document.createElement('a'),
    template = document.getElementById('elemento'),
    current = 1,
    max = 20;

document.body.appendChild(add_link);
document.onkeydown = keydown;  

function addTextbox() {
    if(current !== max){
        var new_field = template.cloneNode(true);
        current += 1;
        new_field.innerHTML = new_field.innerHTML.replace(/1/g, current);
        list.appendChild(new_field);
    }
    return false;
};
  
function keydown(event) {  
    var code; 
    var char;
    if (document.all) {  
        if (!event) {   
            code = window.event.keyCode;
            char = window.event.char;
        }  
    }  
    else if (event.which) {  
    code = event.which; 
        char = event.char;
    }  
    if (code === 9 && char === undefined) { 
        addTextbox();
    }  
}  