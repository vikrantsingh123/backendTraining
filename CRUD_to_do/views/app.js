document
  .getElementById("text_add")
  .addEventListener("keydown", function(event) {
    if (event.key == "Enter") {
      //console.log(document.getElementById("text_add").value);

      $.ajax({
        url: '/todos',
        type: 'post',
        dataType: 'json',
        contentType: 'application/json',
        success: function (data) {
            console.log(data);
            //createHtml(data);
        },
        data: JSON.stringify({
          "_id":'',
          // "caption":this.parentNode.children[2].innerHTML
          "caption":document.getElementById("text_add").value     
    })
    });
  }});

function createHtml(data){
  var rawTemplate=document.getElementById("search-result").innerHTML;
  var compiledTemplate=Handlebars.compile(rawTemplate);
  var ourGeneratedHTML=compiledTemplate(data);

  var container=document.getElementById("task-container");
  container.innerHTML=ourGeneratedHTML;
}

  const x = Array.prototype.slice.apply(
    document.querySelectorAll("li")
  );

  //console.log(x);
  for(var i=0;i<x.length;i++){
  //console.log(x[i]);
  x[i].onmouseover=function(){
      this.children[3].setAttribute("style","visibility:visible");
      //console.log(this.children[3]);
    }
    x[i].onmouseleave=function(){
      this.children[3].setAttribute("style","visibility:hidden");
      //console.log(this.children[3]);
    }
    var box=x[i].children[0];
    box.onclick = function() {
      var flag=false;
      if (this.checked){
        this.parentNode.setAttribute("style","font-size:1.2rem;font-family:Open Sans;font-weight:lighter;text-decoration:line-through;color:grey");
          //console.log(this.parentNode.children[2].innerHTML);  
          flag=true;
      }
      else if(!this.checked) {
        this.parentNode.setAttribute("style", "text-decoration:none");
        this.parentNode.setAttribute("style","font-size:1.2rem;font-family:Open Sans;font-weight:lighter");
        flag=false;
      }
        $.ajax({
          url: '/todos',
          type: 'post',
          dataType: 'json',
          contentType: 'application/json',
          success: function (data) {
              console.log("success joke");
          },
          
          data: JSON.stringify({
            "_id":this.parentNode.children[1].value,
            // "caption":this.parentNode.children[2].innerHTML
            "iscompleted":flag

          })
  });
    };

    x[i].ondblclick=function(){
      //li.selection.empty();
      this.children[2].contentEditable = true;
      
      this.children[2].addEventListener("keydown",function(event){
        if(event.key == "Enter") { 
          this.contentEditable=false;
          console.log(this.parentNode.children[2].innerHTML);
          var flag=false;
          if(this.parentNode.children[0].checked)flag=true;
          
          $.ajax({
            url: '/todos',
            type: 'post',
            dataType: 'json',
            contentType: 'application/json',
            success: function (data) {
                console.log("success joke");
            },
            data: JSON.stringify({
              "_id":this.parentNode.children[1].value,
              "caption":this.parentNode.children[2].innerHTML,
              "iscompleted":flag
            })
        });
          }
  });
}
}