document
  .getElementById("text_add")
  .addEventListener("keydown", function(event) {
    if (event.key == "Enter") {

      // let text_node = document.createTextNode(
      //   document.getElementById("text_add").value
      // );
      let p=document.createElement("p");
      p.innerHTML=document.getElementById("text_add").value;
      p.setAttribute("style","word-wrap:break-word;display: inline-block;");
      
      let li = document.createElement("li");

      let button_node = document.createElement("button");
      button_node.innerHTML="<i style='color:#e7d3d5' class='fas fa-times'></i>";
      button_node.setAttribute("style","display:none");
      let checkbox = document.createElement("INPUT");
      
      checkbox.setAttribute("type", "checkbox");
      checkbox.setAttribute("class", "checkbox-round m-1");

      button_node.setAttribute(
        "class",
        "btn ml-auto"
      );
      button_node.onclick=function(){
        li.remove();
      }
      li.onmouseover=function(){
        console.log("Hi");
        button_node.setAttribute("style","display:visible");
      }
      li.onmouseleave=function(){
        button_node.setAttribute("style","display:none");
      }

      li.appendChild(checkbox);
      li.appendChild(p);
      li.appendChild(button_node);
      li.setAttribute("class", "round list-group-item d-flex");
      li.setAttribute("style","font-size:1.2rem;font-family:Open Sans;font-weight:lighter");
      

      li.ondblclick=function(){
        //li.selection.empty();
        p.contentEditable = true;
        p.addEventListener("keydown",function(event){
          if (event.key == "Enter") { 
            p.contentEditable=false;
        }
      });
    };

      checkbox.onclick = function() {
        if (checkbox.checked){
          li.setAttribute("style","font-size:1.2rem;font-family:Open Sans;font-weight:lighter;text-decoration:line-through;color:grey");
        }
        else {
          
          li.setAttribute("style", "text-decoration:none");
          li.setAttribute("style","font-size:1.2rem;font-family:Open Sans;font-weight:lighter");
      }
      };

      let ul = document.getElementById("list1");
      ul.appendChild(li);
    }
  });