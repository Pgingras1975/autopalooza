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
