$(document).ready(() => {

  $("#save").click((e) => {
    //prevent form from submitting early
    e.preventDefault();

    //load modal to give feedback that the form was submitted
    Swal.fire({
      title: 'Charge Saved',
      text: 'This charge has been successfully saved',
      icon: 'success',
      confirmButtonColor: '#1fa69b'
    }).then((result) => {

      //after the modal has been closed submit the form
      if (result.isConfirmed) {
        $("#charge-form").submit();
      }
    });
  });

});