/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var modal  = document.getElementById("loginModal");
var button = document.getElementById("modButton");
var close  = document.getElementById("modClose");

button.onclick = function(){
    modal.setAttribute("open", true);
};
close.onclick = function(){
    modal.removeAttribute("open");
};

