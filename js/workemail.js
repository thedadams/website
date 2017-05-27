var emailLink = document.getElementById('asu-email');
if (emailLink != null) {
  emailLink.href = 'mailto:dgadams4@asu.edu';
  if (emailLink.innerHTML == "") {
    emailLink.innerHTML = 'dgadams4@asu.edu';
  }
}
emailLink = document.getElementById('sm-email');
if (emailLink != null) {
  emailLink.href = 'mailto:donald.adams.jr@southmountaincc.edu';
  if (emailLink.innerHTML == "") {
    emailLink.innerHTML = 'donald.adams.jr@southmountaincc.edu';
  }
}
emailLink = document.getElementById('sc-email');
if (emailLink != null) {
  emailLink.href = 'mailto:donald.adams.jr@scottsdalecc.edu';
  if (emailLink.innerHTML == "") {
    emailLink.innerHTML = 'donald.adams.jr@scottsdalecc.edu';
  }
}