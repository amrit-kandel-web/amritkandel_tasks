// a simple function that triggers alert box 
function hello(){
    alert("Welcome to my website");
    }
    // a simple function to add 2 numbers 
    function add(){
        document.write(5+6);
    }
    //color variable will get the color user selects
    function changeColor(){
        let color = document.getElementById('background').value;
            document.body.style.backgroundColor = color;
    }
    
    // function to change the font color of your page
    
    function changeFcolor(){
        let fcolor = document.getElementById('fcolor').value;
        document.body.style.color = fcolor;
    }
    //on mouse over example
    function onm(){
        document.getElementById('mo').style.color = 'blue'; 
        document.getElementById('mo').style.fontStyle = 'italic';
        document.getElementById('mo').style.backgroundColor  = 'yellow';
        document.getElementById('mo').style.fontSize = '2em';
    }