$(document).ready(function(){
    var count = 0;
    var input = $("#receba");
    console.log(input);

    var bt1 = $("#buttonAdd");
    var bt2 = $("#buttonMines");
    const bt100 = $("#Mais100");
    const bt200 = $("#Mais200");
    const bt300 = $("#Mais300");
    const bt400 = $("#Mais400");
  
    bt1.on("click", function() { 
        count++;
        input.val(count);
      })

    bt2.on("click", function() { 
        count--;

        if(count < 1) {
            count = 0;
        }

        input.val(count);
      })

      bt100.on("click", function() { 
        count += 100;
        input.val(count);
      })

      bt200.on("click", function() { 
        count += 200;
        input.val(count);
      })

      bt300.on("click", function() { 
        count += 300;
        input.val(count);
      })

      bt400.on("click", function() { 
        count += 400;
        input.val(count);
      })

  })
  
  


