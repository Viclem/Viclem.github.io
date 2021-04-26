function modal_1_2_(array){
  length = array.length;
  str = "<div class=\"row\">"
  document.write(str)

  str = "<div class=\"col-md-12 col-sm-12 g-3 text-center\">\
    <img src=\"./images"+array[0]+"\" alt=\"\" class=\"img-fluid\">\
  </div>"
  document.write(str)

  str = "</div>"
  document.write(str)

  str = "<div class=\"row align-items-center\">\
              <div class=\"col-md-6 col-sm-12 g-3 text-center\">\
                 <img src=\"./images"+array[1]+"\" alt=\"\" class=\"img-fluid\">\
               </div>\
               <div class=\"col-md-6 col-sm-12 g-3 text-center\">\
                 <img src=\"./images"+array[2]+"\" alt=\"\" class=\"img-fluid\">\
               </div>\
             </div></div>";
  document.write(str);

  for (var i = 3; i < length; i=i+1){
    str = "<div class=\"col-md-12 col-sm-12 g-3 text-center\">\
      <img src=\"./images"+array[i]+"\" alt=\"\" class=\"img-fluid\">\
    </div>"
    document.write(str)
  }
}


function modal_1_(array){
  length = array.length;
  str = "<div class=\"row\">"
  document.write(str)
  for (var i = 0; i < length; i=i+1){
    str = "<div class=\"col-md-12 col-sm-12 g-3 text-center\">\
      <img src=\"./images"+array[i]+"\" alt=\"\" class=\"img-fluid\">\
    </div>"
    document.write(str)
  }
  str = "</div>"
  document.write(str)
}

function modal_2_(array){
  length = array.length;
  str = "<div class=\"row align-items-center\">\
              <div class=\"col-md-6 col-sm-12 g-3 text-center\">\
                 <img src=\"./images"+array[0]+"\" alt=\"\" class=\"img-fluid\">\
               </div>\
               <div class=\"col-md-6 col-sm-12 g-3 text-center\">\
                 <img src=\"./images"+array[1]+"\" alt=\"\" class=\"img-fluid\">\
               </div>\
             </div>";
  document.write(str);

  if (length > 2){
    str = "<div class=\"row\">"
    document.write(str)
  }
  for (var i = 2; i < length; i=i+1){
    str = "<div class=\"col-md-12 col-sm-12 g-3 text-center\">\
      <img src=\"./images"+array[i]+"\" alt=\"\" class=\"img-fluid\">\
    </div>"
    document.write(str)
  }
  if (length > 2){
    str = "</div>"
    document.write(str)
  }
}
/*
function modal_2_1_1_2_(array){
  length = array.length;
  str = "<div class=\"row align-items-center\">\
              <div class=\"col-md-6 col-sm-12 g-3 text-center\">\
                 <img src=\"./images"+array[0]+"\" alt=\"\" class=\"img-fluid\">\
               </div>\
               <div class=\"col-md-6 col-sm-12 g-3 text-center\">\
                 <img src=\"./images"+array[1]+"\" alt=\"\" class=\"img-fluid\">\
               </div>\
             </div>";
  document.write(str);

  if (length > 2){
    str = "<div class=\"row\">"
    document.write(str)
  }
  for (var i = 2; i < length; i=i+1){
    str = "<div class=\"col-md-12 col-sm-12 g-3 text-center\">\
      <img src=\"./images"+array[i]+"\" alt=\"\" class=\"img-fluid\">\
    </div>"
    document.write(str)
  }
  if (length > 2){
    str = "</div>"
    document.write(str)
  }
}*/
