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
    
    
    //crud
    function crud(){
        let fname=(document.form1.fname.value).trim();
        if (fname.length<5){
            alert("First Name must have atleast 5 character");
            return false;
        }
        function fnameVal(){
            let fname=(document.form1.fname.value).trim();
        if (fname.length<5){
            alert("First Name must have atleast 5 character");
            return false;
        }
        }
    }