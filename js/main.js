// E-mail Validation:
function mailchk() {
  var emailID = document.getElementById("mail").value;
  var regexp =
    /^[0-9 a-z A-Z]+(.|_)?[0-9 a-z A-Z]*\@(yahoo|gmail|co|in|rediffmail)\.(com|in)$/;

  if (emailID.match(regexp)) {
    return true;
  } else {
    alert("Please Enter Correct E-mail ID");
    document.getElementById("mail").value = "";
    document.getElementById("mail").focus();
    return false;
  }
}
