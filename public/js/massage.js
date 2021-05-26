let massage = document.querySelector('#massage');
if (massage) {
    Swal.fire(
        massage.getAttribute("data-massage"),
        '',
        'success'
    )
}
