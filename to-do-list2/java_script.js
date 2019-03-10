function check(id) {
  var checkBox = document.getElementById(id);
  
  if (checkBox.checked == true){
    window.location.href = "checkbox_check.php?id="+id+"&state="+1;
  } else {
    window.location.href = "checkbox_check.php?id="+id+"&state="+0;
  }
}

