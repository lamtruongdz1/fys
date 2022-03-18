<script type="text/javascript" src="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js"></script>
<script>
    $(function () {
        //Delete Confirmation
        $(document).on("click",".confirm",function(event) {
            event.preventDefault();
            let form_id = '';
            let link = '';
            if($(event.target).is('button')){
                form_id = '#form_'+ $(this).attr('id');
            }else if($(event.target).is('span')){
                form_id = '#form_'+ $(this).closest('button').attr('id');
            }else if($(event.target).is('svg')){
                form_id = '#form_'+ $(this).closest('button').attr('id');
            }
            else if($(event.target).is('i')){
                form_id = '#form_'+ $(this).attr('id');
            }else{
                link = $(this).attr('href');
            }
            console.log(form_id);
            console.log(link);
            swal({
                    title: "Bạn chắc chứ?",
                    text: "Dữ liệu bị xoá sẽ không thể phục hồi!",
                    type: "warning",
                    confirmButtonColor: '#DD6B55',
                    confirmButtonText: 'Yes!',
                    showCancelButton: true,
                    closeOnConfirm: false,
                    //closeOnCancel: false
                },
                function(){
                    swal("Đã xoá!", "Dữ liệu đã được xoá!", "thành công");
                    if (link){
                        window.location = link;
                    }
                    if (form_id){
                        $(form_id).submit();
                    }
                });
        });
    });
</script>
