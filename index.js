$(document).ready(function() {

  $("#save").click(function(e){
    e.preventDefault();
    Swal.fire({
      title: 'Charge Saved',
      text: 'This charge has been successfully saved',
      icon: 'success',
      confirmButtonColor: '#1fa69b'
    }).then((result) => {
      if (result.isConfirmed) {
        $("#charge-form").submit();
      }
    });
  });

});