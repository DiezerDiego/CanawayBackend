const email_input = document.getElementById("email");
const name_input = document.getElementById("name");
const english_level_input = document.getElementById("english_level");
const form_wp=document.getElementById("form_wp");
const loading_msj=  document.getElementById("loading_msj");
const send_msj=  document.getElementById("send_msj");
const formData=new FormData();
function ValidateEmail() {
  let mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (email_input.value.match(mailformat) && email_input.value.trim()!="") {
    return true;
  } else {
    Swal.fire({
        position: 'top-end',
        icon: 'error',
        title: 'Invalid Email',
        showConfirmButton: false,
        timer: 1500
      })
    return false;
  }
}

function ValidateName() {
  if (isNaN(name_input.value) && name_input.value.trim()!="") {
    return true;
  } else {
    Swal.fire({
        position: 'top-end',
        icon: 'error',
        title: 'Invalid Name',
        showConfirmButton: false,
        timer: 1500
      })
    return false;
  }
}

function ValidateEnglishLevel() {
  if (isNaN(english_level_input.value) && english_level_input.value!=null) {
    return true;
  } else {
    Swal.fire({
        position: 'top-end',
        icon: 'error',
        title: 'Invalid English Level',
        showConfirmButton: false,
        timer: 1500
      })
    return false;
  }
}

form_wp.addEventListener("submit",(e)=>{
 
    e.preventDefault();
    if( this.ValidateName() && this.ValidateEmail() && this.ValidateEnglishLevel()){
 loading_msj.classList.replace("d-none","d-flex");
  send_msj.classList.replace("d-block","d-none");
      formData.append("name",name_input.value);
      formData.append("email",email_input.value);
      formData.append("english_level",english_level_input.value);
      if(location.pathname=="/canaway_academy/"){
        hostname=location.protocol+"//"+location.host+location.pathname+"controller/controller.php";
        }else{
          hostname=location.protocol+"//"+location.host+location.pathname+"canaway_academy/controller/controller.php";
        }
      fetch( hostname,{
        method: "POST",
        body: formData
      }).then((response)=>response.json()).
      then((data)=>{
        console.log(data)
        Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: 'Success',
          showConfirmButton: false,
          timer: 1500
        })
      }).catch((error)=>{
        Swal.fire({
          position: 'top-end',
          icon: 'error',
          title: 'Internal Error',
          showConfirmButton: false,
          timer: 1500
        })
      }).finally(()=>{
        loading_msj.classList.replace("d-flex","d-none");
        send_msj.classList.replace("d-none","d-block");
      })
    }
})