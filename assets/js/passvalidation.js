const fname = document.getElementById('name')
const email = document.getElementById('Email')
const phone = document.getElementById('phone')
const form = document.getElementById('addd')
const enrollnum = document.getElementById('enrollnum');
const date = document.getElementById('date')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
  let messages = []
  if (fname.value === '' || fname.value == null) {
    messages.push('Name is required')
  }
  if (email.value === '' || email.value == null ) {
    messages.push('email is required')
  }
 if (phone.value === '' || phone.value == null ) {
    messages.push('phone is required')
  }
  if (enrollnum.value === '' || enrollnum.value == null ) {
    messages.push('enroll number is required')
  }
  if (date.value === '' || date.value == null ) {
    messages.push('date is required')
  }
  if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = messages.join(', ')
  }
})

