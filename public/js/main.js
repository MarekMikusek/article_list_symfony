$(()=>{
    $(document).on('click', '.delete-article',function(){
        var id = $(this).data('id');
        if (confirm('Are you sure?')){
            console.log(`/article/delete/${id}`);
            fetch(`/article/delete/${id}`, {
                method: "DELETE"
            }).then(res=>window.location.reload());
        }
    });
})

