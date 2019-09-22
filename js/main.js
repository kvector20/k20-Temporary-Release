
$(document).ready(function()
{
    new WOW().init();
})

input = document.getElementsByTagName('input');
input[0].onchange = function()
{
    input[0].value = input[0].value.toLowerCase();
    if(input[0].value.search('http') !==-1 || input[0].value.search('https') !==-1)
    {
        input[0].value = 'http links not allowed';
    }
}