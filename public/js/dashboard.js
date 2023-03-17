$('.show_confirm').click(function(event) {
    var form =  $(this).closest("form");
    var name = $(this).data("name");
    event.preventDefault();
    swal({
        title: `Are you sure you want to delete this record?`,
        text: "If you delete this, it will be gone forever.",
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

function openForm() {
    document.getElementById("opacityOpenForm").style.opacity = 0.3;
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
    document.getElementById("opacityOpenForm").style.opacity = 1;
}


// function opacityFadeOut() {
//     document.getElementById("wrapper").style.opacity = 0.3;
// }

// function opacityFadeIn() {
//     document.getElementById("wrapper").style.opacity = 1;
// }

// function bodyOpacityFade() {
//     let wrapper = document.getElementById("wrapper")
//     if (wrapper.style.opacity == 1){
//         document.getElementById("wrapper").style.opacity = 0.3;
//     } else {
//         document.getElementById("wrapper").style.opacity = 1;
//     }
// }
