var names = ['Rishi Sarkar', 'Sparsh Kedia'];
var nameInputs = document.querySelectorAll('#name');
for(var i =  0; i < nameInputs.length; i++) {
    $(nameInputs[i]).autocomplete({source: names});
}
