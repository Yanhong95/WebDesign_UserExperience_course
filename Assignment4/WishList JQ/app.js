//running js after HTML loaded
$(document).ready(function(){



    $('#addTask').on('click',function(){
        //get the value of 'new-task' from customer inputted
        var task = $('#new-task').val();
        var oldTask =[];
        //var old  = $('.pull-right').next().text();
        //var oldTask = $('.list-group').eq(0).find('label').text();
        for(var i=0; i<$('.list-group').eq(0).find('label').length; i++){
            oldTask[i]= $('.list-group').eq(0).find('label').eq(i).text();
        }
        if(task=='') {
        alert("Empty content, Please re-fill");
        return;
        }
        for (var i =0; i < oldTask.length; i++) {
            console.log(oldTask.length);
        if(task == oldTask[i]){
        alert("This element already exists, Please re-fill");
        $('#new-task').val('');
        return;
        }
        }
        //insert the value of 'tast' to the first 'list-group'
        $('.list-group').eq(0).append('<li class="list-group-item"> <input type="checkbox" class="pull-right"> <label>'+task+'</lable></li>');
        $('#new-task').val('');
    })

    $('.list-group').on('click','input',function(){     
        //$('.pull-right').click(function(){
        //gain the value from next sibling of 'pull-right'
        var task = $(this).next().text();
        $(this).parent().remove();
        //add the content to the second 'list-group'
        $('.list-group').eq(1).append('<li class="list-group-item"><label>'+task+'</label><button class="delete btn btn-danger pull-right">Delete</button></li>')
    })


    $('.list-group').on('click','.delete',function(){
        $(this).parent().remove();
    })

})

