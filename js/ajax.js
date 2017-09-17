window.onload = function () {
    $('.delete').click(function () {
        let el = this;
        let id = this.id;
        console.log(id);

        $.ajax({
            url: 'delete.php',
            type: 'POST',
            data: { id:id },
            success: function (response) {
                $(el).closest('tr').fadeOut(300, function(){
                    $(this).remove();
                });
            }
        });
    });
};