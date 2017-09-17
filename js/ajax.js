$(document).ready(function() {
    $('.delete').click(function () {
        let el = this;
        let elId = this.id;

        $.ajax({
            url: 'delete.php',
            type: 'POST',
            data: { id:elId },
            success: function (response) {
                $(el).closest('tr').fadeOut(300, function(){
                    $(this).remove();
                });
            }
        });
    });
});