function closeAlert() {
    var alert = document.querySelector('.alert');
    alert.parentNode.removeChild(alert);
}


function destroy(id)
{
    if (window.confirm("Are you sure you want to delete this contact?"))
    {
        document.getElementById('delete-form-' + id).submit();
    }
}
