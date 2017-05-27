var emailLink = document.getElementById('ic-email');
if (emailLink != null) {
  emailLink.href = 'mailto:thedadams@icloud.com';
  if (emailLink.innerHTML == "") {
    emailLink.innerHTML = 'thedadams@icloud.com';
  }
}

emailLink = document.getElementById('th-email');
if (emailLink != null) {
  emailLink.href = 'mailto:donnie@thedadams.com';
  if (emailLink.innerHTML == "") {
    emailLink.innerHTML = 'donnie@thedadams.com';
  }
}

emailLink = document.getElementById('pt-email');
if (emailLink != null) {
  emailLink.href = 'mailto:thedadams@protonmail.com';
  if (emailLink.innerHTML == "") {
    emailLink.innerHTML = 'thedadams@protonmail.com';
  }
}