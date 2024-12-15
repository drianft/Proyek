const form = document.getElementById('form')
const firstname_input = document.getElementById('firstname-input')
const email_input = document.getElementById('email-input')
const alamat_input = document.getElementById('alamat-input')
const password_input = document.getElementById('password-input')
const konfirmasi_password_input = document.getElementById('konfirmasi-password-input')
const error_message = document.getElementById('error-message')

form.addEventListener('submit', (e) => {
  let errors = []

  if(firstname_input){
     
    errors = getSignFormErrors(firstname_input.value, email_input.value, alamat_input.value, password_input.value, konfirmasi_password_input.value )
   }
   else{
    errors = getLoginFormErrors(email_input.value, password_input.value)
   }

   if(errors.length > 0){

    e.preventDefault()
    error_message.innerText = errors.join(". ")
   }
})

function getSignFormErrors(firstname, email, alamat, password, konfirmasipassword ){
    let errors = []

    if(firstname === '' || firstname == null ){
        errors.push('Nama harus di isi')
        firstname_input.parentElement.classList.add('incorrect')
    }
    if(email === ''|| email == null ){
        errors.push('email harus di isi')
        email_input.parentElement.classList.add('incorrect')
    }
    if(alamat === ''|| alamat == null ){
        errors.push('alamat harus di isi')
        alamat_input.parentElement.classList.add('incorrect')
    }
    if(password === ''|| password == null ){
        errors.push('password harus di isi')
        password_input.parentElement.classList.add('incorrect')
    }
    if(password.length < 8){
        errors.push('Password harus setidaknya 8 karakter')
        password_input.parentElement.classList.add('incorrect')
    }
    if(password !== konfirmasipassword ){
        errors.push('Konfirmasi password tidak sesuai ')
        konfirmasi_password_input.parentElement.classList.add('incorrect')
        konfirmasi_password_input.parentElement.classList.add('incorrect')
    }

    return errors;
}

function getLoginFormErrors (email, password){
    let errors = []

    if(email === ''|| email == null ){
        errors.push('email harus di isi')
        email_input.parentElement.classList.add('incorrect')
    }
    if(password === ''|| password == null ){
        errors.push('password harus di isi')
        password_input.parentElement.classList.add('incorrect')
    }

    return errors
}

const allInputs = [firstname_input, email_input, alamat_input, password_input, konfirmasi_password_input].filter(input => input != null)

allInputs.forEach(input => {
    input.addEventListener('input', () => {
        if(input.parentElement.classList.contains('incorrect')){
            input.parentElement.classList.remove('incorrect')
            error_message.innerText = ''
        }
    })
})