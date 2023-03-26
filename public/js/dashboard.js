$('.show_confirm').click(function(event) {
    let form =  $(this).closest("form");
    let name = $(this).data("name");
    event.preventDefault();
    swal({
        title: `Voulez-vous vraiment supprimer cette entrée ?`,
        text: "Une fois supprimée, elle sera perdu à jamais !",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        form.submit();
      }
    });
});

function updatemenu() {
    if (document.getElementById('responsive-menu').checked == true) {
      document.getElementById('menu').style.borderBottomRightRadius = '0';
      document.getElementById('menu').style.borderBottomLeftRadius = '0';
    }else{
      document.getElementById('menu').style.borderRadius = '0px';
    }
  }
